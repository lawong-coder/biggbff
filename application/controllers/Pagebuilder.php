<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);

class Pagebuilder extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('user_model', 'user');
		$this->load->model('Product_model');
		$this->load->model('Report_model');
		$this->load->model('PagebuilderModel');
		___construct(1);
	}
	public function userdetails(){ return $this->session->userdata('administrator'); }
	public function userlogins(){ return $this->session->userdata('user'); }
	private function get_theme_list(){
		return $this->PagebuilderModel->getAlltheme();
	}

	public function register(){
		$json = array();

		$post = $this->input->post(null,true);
		// pred($post);
		$post['user_type'] = 'user';

 		$login_data = $this->session->userdata("login_data");
 		if($login_data && isset($login_data['refid'])){
 			$post['refid'] = $login_data['refid'];
 		}

		$refid = isset($post['refid']) ? $post['refid'] : '';
		$post['affiliate_id'] = !empty($refid) ? base64_decode($refid) : 0;

		$isUser = false;
		if($this->userlogins()){
			$userdata = $this->userlogins();
			$isUser = $this->user->get_user_by_id($userdata['id']);
		}
		if($isUser){
			$json['redirect'] = base_url('usercontrol/dashboard');
		} else {
			$post = $this->input->post(null,true);
			$this->load->library('form_validation');
			$this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
			$this->form_validation->set_rules('username', 'Username', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
			$this->form_validation->set_rules('terms', 'Terms and Condition', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|trim', array('required' => '%s is required'));
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim', array('required' => '%s is required'));
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]', array('required' => '%s is required'));

			$json['errors'] = array();

			$register_form = $this->PagebuilderModel->getSettings('registration_builder');
			if($register_form){
				$customField = json_decode($register_form['registration_builder'],1);
				
				foreach ($customField as $_key => $_value) {
					$field_name = 'custom_'. $_value['name'];

					if($_value['required'] == 'true'){
						if(!isset($post[$field_name]) || $post[$field_name] == ''){
							$json['errors'][$field_name] = $_value['label'] ." is required.!";
						}
					}

					if(!isset($json['errors'][$field_name]) && (int)$_value['maxlength'] > 0){
						if(strlen( $post[$field_name] ) > (int)$_value['maxlength']){
							$json['errors'][$field_name] = $_value['label'] ." Maximum length is ". (int)$_value['maxlength'];
						}
					}

					if(!isset($json['errors'][$field_name]) && (int)$_value['minlength'] > 0){
						if(strlen( $post[$field_name] ) > (int)$_value['minlength']){
							$json['errors'][$field_name] = $_value['label'] ." Minimum length is ". (int)$_value['minlength'];
						}
					}

					if(!isset($json['errors'][$field_name]) && $_value['mobile_validation']  == 'true'){
						
						/*if(!preg_match('/^[0-9]{10}+$/', $post[$field_name])){
							$json['errors'][$field_name] = $_value['label'] ." Invalid mobile number ";
						}*/
					}
				}
			}

			if ($this->form_validation->run() == FALSE) {
				$json['errors'] = array_merge($this->form_validation->error_array(), $json['errors']);
			}

			$googlerecaptcha = $this->PagebuilderModel->getSettings('googlerecaptcha');
			if (isset($googlerecaptcha['affiliate_register']) && $googlerecaptcha['affiliate_register']) {
				if($post['g-recaptcha-response'] == ''){
					$json['errors']['captch_response'] = 'Invalid Recaptcha';
				}
			}

			if( count($json['errors']) == 0 ){
				if (isset($googlerecaptcha['affiliate_register']) && $googlerecaptcha['affiliate_register']) {
					$post = http_build_query(
					 	array (
					 		'response' => $this->input->post('g-recaptcha-response',true),
					 		'secret' => $googlerecaptcha['secretkey'],
					 		'remoteip' => $_SERVER['REMOTE_ADDR']
					 	)
					);
					$opts = array('http' => 
						array (
							'method' => 'POST',
							'header' => 'application/x-www-form-urlencoded',
							'content' => $post
						)
					);
					$context = stream_context_create($opts);
					$serverResponse = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
					if (!$serverResponse) {
						$json['errors']['captch_response'] = 'Failed to validate Recaptcha';
					}
					$result = json_decode($serverResponse);

					if (!$result->success) {
						$json['errors']['captch_response'] = 'Invalid Recaptcha';
					}
				}
			}

			if( count($json['errors']) == 0){
				$checkEmail = $this->db->query("SELECT id FROM users WHERE email like ". $this->db->escape($this->input->post('email',true)) ." ")->num_rows();
				if($checkEmail > 0){ $json['errors']['email'] = "Email Already Exist"; }
				$checkUsername = $this->db->query("SELECT id FROM users WHERE username like ". $this->db->escape($this->input->post('username',true)) ." ")->num_rows();
				if($checkUsername > 0){ $json['errors']['username'] = "Username Already Exist"; }

				/*if(!isset($post['terms'])){
					$json['warning'] = __('user.accept_our_affiliate_policy');
				}*/

				if(count($json['errors']) == 0){	
					$user_type = 'user';
					$geo = $this->ip_info();
					

					$refid = !empty($refid) ? base64_decode($refid) : 0;
					$commition_setting = $this->Product_model->getSettings('referlevel');

					$disabled_for = json_decode( (isset($commition_setting['disabled_for']) ? $commition_setting['disabled_for'] : '[]'),1); 
					if((int)$commition_setting['status'] == 0){ $refid  = 0; }
					else if((int)$commition_setting['status'] == 2 && in_array($refid, $disabled_for)){ $refid = 0; }

					$custom_fields = array();
                    foreach ($this->input->post(null,true) as $key => $value) {
                    	if(!in_array($key, array('affiliate_id','terms','cpassword','firstname','lastname','email','username','password'))){
                    		$custom_fields[$key] = $value;
                    	}
                    }

                    $membership = $this->Product_model->getSettings('membership');

                    $plan_id = -1;
                    if($membership['status']){
                    	$plan_id = 0;
                    }

                    $is_approval_needed = $this->Product_model->getSettings('store', 'registration_approval');

                    $registration_approval = (isset($is_approval_needed['registration_approval']) && $is_approval_needed['registration_approval'] == 0) ? 1 : 0;

					$data = $this->user->insert(array(
						'firstname'                 => $this->input->post('firstname',true),
						'lastname'                  => $this->input->post('lastname',true),
						'email'                     => $this->input->post('email',true),
						'username'                  => $this->input->post('username',true),
						'password'                  => sha1($this->input->post('password',true)),
						'refid'                     => (isset($post['refid']) && !empty($post['refid'])) ? (int)$post['refid'] : 1,
						'plan_id'                   => (int)$plan_id,
						'type'                      => $user_type,
						'Country'                   => $this->input->post('country_id',true),
						'City'                      => (string)$geo['city'],
						'phone'                     => $geo['city'],
						'twaddress'                 => '',
						'address1'                  => '',
						'address2'                  => '',
						'ucity'                     => $geo['city'],
						'ucountry'                  => $this->input->post('country_id',true),
						'state'                     => $geo['state'],
						'uzip'                      => '',
						'avatar'                    => '',
						'online'                    => '0',
						'unique_url'                => '',
						'bitly_unique_url'          => '',
						'created_at'                => date("Y-m-d H:i:s"),
						'updated_at'                => date("Y-m-d H:i:s"),
						'google_id'                 => '',
						'facebook_id'               => '',
						'twitter_id'                => '',
						'umode'                     => '',
						'PhoneNumber'               => '',
						'Addressone'                => '',
						'Addresstwo'                => '',
						'StateProvince'             => '',
						'Zip'                       => '',
						'f_link'                    => '',
						't_link'                    => '',
						'l_link'                    => '',
						'product_commission'        => '0',
						'affiliate_commission'      => '0',
						'product_commission_paid'   => '0',
						'affiliate_commission_paid' => '0',
						'product_total_click'       => '0',
						'product_total_sale'        => '0',
						'affiliate_total_click'     => '0',
						'sale_commission'           => '0',
						'sale_commission_paid'      => '0',
						'status'                    => '1',
						'reg_approved'				=> $registration_approval,
						'value'                     => json_encode($custom_fields),
						'assigned_plan'				=> isset($post['membership_plan']) ? $post['membership_plan'] : NULL,
						'billing_address'			=> $this->input->post('billing_address', true),
						'refnumber'					=> $this->input->post('refnumber', true),
						'coupon_code'				=> $this->input->post('coupon_code', true),
						'membership_no' 			=> generateUserMembershipNumber(),
						'nric_no'					=> $this->input->post('nric_no', true)
					));

					if($membership['status'] && $registration_approval == 1){
                    	/*if((float)$membership['welcomebonus'] > 0){
                    		$this->Wallet_model->addTransaction(array(
								'status'       => 1,
								'user_id'      => (int)$data,
								'amount'       => (float)$membership['welcomebonus'],
								'comment'      => 'Welcome Bonus',
								'type'         => 'welcome_bonus',
								'reference_id' => 0,
								'group_id'     => '',
								'is_vendor'    => 0,
							));
                    	}*/

                    	if($membership['default_plan_id'] > 0){
                    		$plan = App\MembershipPlan::find($membership['default_plan_id']);
                    		if($plan){
								$user = App\User::find($data);
	                    		$plan->buy($user,1, 'Default plan started','Default');
                    		}
                    	}
                    }

					/*$this->db->insert("paypal_accounts", array(
                        'paypal_email' => $this->input->post('paypal_email',true),
                        'user_id' => $data,
                    ));*/
					$post['refid'] = !empty($refid) ? base64_decode($refid) : 0;
					if(!empty($data) && $user_type == 'user'){

						App\User::createDefaultSettings($data);

						$notificationData = array(
							'notification_url'          => '/userslist/'.$data,
							'notification_type'         =>  'user',
							'notification_title'        =>  __('user.new_user_registration'),
							'notification_viewfor'      =>  'admin',
							'notification_actionID'     =>  $data,
							'notification_description'  =>  $this->input->post('firstname',true).' '.$this->input->post('lastname',true).' register as a  on affiliate Program on '.date('Y-m-d H:i:s'),
							'notification_is_read'      =>  '0',
							'notification_created_date' =>  date('Y-m-d H:i:s'),
							'notification_ipaddress'    =>  $_SERVER['REMOTE_ADDR']
						);
						$this->insertnotification($notificationData);
						if ($post['affiliate_id'] > 0) {
							$notificationData = array(
								'notification_url'          => '/managereferenceusers',
								'notification_type'         =>  'user',
								'notification_title'        =>  __('user.new_user_registration_under_your'),
								'notification_viewfor'      =>  'user',
								'notification_view_user_id' =>  $post['affiliate_id'],
								'notification_actionID'     =>  $data,
								'notification_description'  =>  $this->input->post('firstname',true).' '.$this->input->post('lastname',true).' has been register under you on '.date('Y-m-d H:i:s'),
								'notification_is_read'      =>  '0',
								'notification_created_date' =>  date('Y-m-d H:i:s'),
								'notification_ipaddress'    =>  $_SERVER['REMOTE_ADDR']
							);
							$this->insertnotification($notificationData);
						}
						$json['success']  =  "You've Successfully registered";
	                    $user_details_array=$this->user->login($this->input->post('username',true));

	                    $post['user_type'] = 'user';
	                    $this->user->update_user_login($user_details_array['id']);
	                    
	                    $this->load->model('Mail_model');

	                    $is_payment_needed = 0;
						if($registration_approval == 0) {
							// $this->Mail_model->send_registration_request_mail($post);

							if(isset($post['membership_plan']) && !empty($post['membership_plan']))
                			{
                				$user = App\User::find($user_details_array['id']);

                				$uuid = md5($user->email . $user->created_at);

                				$user->uuid = $uuid;
                				$user->save();

                    			// Send mail
								$email = $this->input->post('email',true);

								$link = base_url('activateusercontrol/' . $uuid);
								
								$mail_data = [];
								/*$mail_data['subject'] = __('admin.login_credentials');
								$mail_data['message'] = sprintf(__('admin.registered_mail_template'), $this->input->post('username',true), $post['password'], $link);*/

								$mail_data['firstname'] = $user->firstname;
								$mail_data['lastname'] = $user->lastname;
								$mail_data['payment_link'] = $link;

								// $this->Mail_model->affiliate_mail($email, $mail_data);
								$this->Mail_model->send_bff_member_register_mail($user, $link);

								$is_payment_needed = 1;
								$json['redirect'] = $link;
                			}
						} else {
							$this->Mail_model->send_register_mail($post,__('user.welcome_to_new_user_registration'));
						}

						if(! $is_payment_needed) {
		                    if ($user_type == 'user') {
		                    	$this->session->set_userdata(array('user'=>$user_details_array));
		                    	$json['redirect'] = base_url('usercontrol/dashboard');
		                    } else {
		                    	$this->session->set_userdata(array('client'=>$user_details_array));
		                    	$json['redirect'] = base_url('clientcontrol/dashboard');
		                    }
						}
					}
				}
			}
		}
		echo json_encode($json);
	}
	public function insertnotification($postData = null){
		if(!empty($postData)){
			$data['custom'] = $this->Product_model->create_data('notification', $postData);
		}
	}
	public function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
	    $output = NULL;
	    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
	        $ip = $_SERVER["REMOTE_ADDR"];
	        if ($deep_detect) {
	            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
	                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
	                $ip = $_SERVER['HTTP_CLIENT_IP'];
	        }
	    }
	    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
	    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
	    $continents = array(
	        "AF" => "Africa",
	        "AN" => "Antarctica",
	        "AS" => "Asia",
	        "EU" => "Europe",
	        "OC" => "Australia (Oceania)",
	        "NA" => "North America",
	        "SA" => "South America"
	    );
	    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
	        
	        $curl = curl_init("http://www.geoplugin.net/json.gp?ip=" . $ip);
	        $request = '';
	        curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
	        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	        curl_setopt($curl, CURLOPT_HEADER, false);
	        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	        
	        $ipdat = json_decode(curl_exec($curl));
	        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
	            switch ($purpose) {
	                case "location":
		                $id = 0;
	                    $code = @$ipdat->geoplugin_countryCode;
	                    $data = $this->db->query("SELECT id FROM countries WHERE sortname LIKE '{$code}' ")->row();
	                    if($data){
	                    	$id = $data->id;
	                    }
	                    $output = array(
							"city"           => @$ipdat->geoplugin_city,
							"state"          => @$ipdat->geoplugin_regionName,
							"country"        => @$ipdat->geoplugin_countryName,
							"country_code"   => @$ipdat->geoplugin_countryCode,
							"continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
							"continent_code" => @$ipdat->geoplugin_continentCode,
							"id"             => $id
	                    );
	                    break;
	                case "address":
	                    $address = array($ipdat->geoplugin_countryName);
	                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
	                        $address[] = $ipdat->geoplugin_regionName;
	                    if (@strlen($ipdat->geoplugin_city) >= 1)
	                        $address[] = $ipdat->geoplugin_city;
	                    $output = implode(", ", array_reverse($address));
	                    break;
	                case "city":
	                    $output = @$ipdat->geoplugin_city;
	                    break;
	                case "state":
	                    $output = @$ipdat->geoplugin_regionName;
	                    break;
	                case "region":
	                    $output = @$ipdat->geoplugin_regionName;
	                    break;
	                case "country":
	                    //$output = @$ipdat->geoplugin_countryName;
	                    $output = 0;
	                    $code = @$ipdat->geoplugin_countryCode;
	                    $data = $this->db->query("SELECT id FROM countries WHERE sortname LIKE '{$code}' ")->row();
	                    if($data){
	                    	$output = $data->id;
	                    }
	                    break;
	                case "countrycode":
	                    $output = @$ipdat->geoplugin_countryCode;
	                    break;
	            }
	        }
	    }
	   
	    return $output;
	}
}