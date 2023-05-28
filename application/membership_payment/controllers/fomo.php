<?php
	use App\MembershipPlan;
	use App\User;
	use App\MembershipUser;

	class fomo {
		public $title = 'Fomo Pay';
		public $icon = 'assets/images/withdrawal_payment/bank-transfer.png';
		public $website = '';
		
		function __construct($api){
			$this->api = $api;
			$this->endpoint = 'https://ipg.fomopay.net/api';
		}
		
		public function onInstall() {}
		public function onUnInstall() {}
		public function doPayment($plan_id) {
			$ci =& get_instance();
			$setting      = $this->api->Product_model->getSettings('membershippayment_fomo');
			$setting_site = $this->api->Product_model->getSettings('site');

			$plan = MembershipPlan::find($plan_id);

			$user = User::auth('user');

			$cancel_url = site_url('membership/buy_membership/'.$plan_id.'/fomo');

			$activate_user_data = $ci->session->userdata('activate_user_data');
			if(empty($user) && !empty($activate_user_data) && isset($activate_user_data['user']))
			{
				$user = $activate_user_data['user'];
				$cancel_url = $activate_user_data['back_url'];
			}
			else {
				$user_plan_purchase_data = $ci->session->userdata('user_franchise_plan_purchase');
				$cancel_url = isset($user_plan_purchase_data['back_url']) ? $user_plan_purchase_data['back_url'] : $cancel_url;
			}

			if(!empty($user))
			{
				$token = $this->authorizationToken($setting);
				$this->createHostedOrder($token, $plan, $user, $cancel_url);
				// pred($setting, $token);
				/*$membership = $plan->buy($user,$status_id=0, $comment = 'Wait till admin respond',$payment_method='Fomo Pay');
				if($membership){
					redirect('usercontrol/membership_purchase_details/'. $membership->id);
				}*/
			}
			else
			{
				show_404();
			}
		}

		public function authorizationToken($setting_data) {
			$mid = $setting_data['mid'];
			$psk = $setting_data['psk'];
			$token = base64_encode($mid.':'.$psk);

			return $token;
		}

		public function createHostedOrder($token, $plan, $user, $cancel_url)
		{
			/*$activate_user_data = $this->api->session->userdata('activate_user_data');
			$cancel_url = site_url('membership/buy_membership/'.$plan->id.'/fomo');

			$user = User::auth('user');
			if(empty($user) && !empty($activate_user_data) && isset($activate_user_data['user']))
			{
				$user = $activate_user_data['user'];
				$cancel_url = $activate_user_data['back_url'];
			}*/

			// Authorization: "Basic " . $token
			$data = [];

			$headers = [
				'Content-Type: application/json',
                /*'User-Agent: Fomo/PHP/' . $this->sdkVersion,*/
                'Authorization: Basic ' . $token
			];

			// $amount = c_format(($plan->special ? $plan->special : $plan->price),false);
			$amount = ($plan->special ? $plan->special : $plan->price);
			// $amount = $amount * 100;

			$data = [
				"mode" => "HOSTED",
				"orderNo" => strval($plan->id . '_' . $user->id . '_' . time()),
				"subject" => strval($plan->name),
				"description" => strval($plan->description),
				"amount" => strval($amount),
				"currencyCode" => strval($this->api->session->userdata['userCurrency']),
				"notifyUrl" => site_url('membership_callback/fomo/notify/' . $user->id . '/' . $plan->id),
				"returnUrl" => site_url('membership_callback/fomo/fomo_return/'. $user->id . '/' . $plan->id),
				"backUrl" => $cancel_url,
				/*"backUrl" => site_url('membership_callback/fomo/fomo_cancel/' . $plan->id),*/
				/*"sourceOfFunds" => ["CARD"],*/
				/*'transactionOptions' => ''*/
			];

			/*$data = [
				"mode" => "HOSTED",
				"orderNo" => "1",
				"subject" => "Basic",
				"description" => "This plan is for elite entry level where you can get started with lowest capital.",
				"amount" => "0.10",
				"currencyCode" => "SGD",
				"notifyUrl" => "http://jackstore.co/membership_callback/fomo/notify/",
				"returnUrl" => "http://jackstore.co/usercontrol/membership_purchase_details/",
				"backUrl" => "http://jackstore.co/membership_callback/fomo/fomo_cancel/",
				"sourceOfFunds" => ["CARD"]
			];*/
			// pred($data);
			$response = $this->makeRequest('/orders', 'PUT', $data, $headers);
			// pred($data, $response);
			if(isset($response['error']) && isset($response['response']) && ($response['error'] == false))
			{
				$api_res = $response['response'];

				if(isset($api_res['url']))
				{
					redirect($api_res['url']);
					die();
				}
			}

			if(isset($response['message']))
			{
				$this->api->session->set_flashdata('error', $response['message']);
			}
			
			// pred($token, $headers, $data, $response);
			redirect($cancel_url);
		}

		public function fomo_cancel($plan_id){
			$activate_user_data = $this->api->session->userdata('activate_user_data');
			$cancel_url = site_url('membership/buy_membership/'.$plan_id.'/fomo');

			if(!empty($activate_user_data) && isset($activate_user_data['back_url']))
			{
				$cancel_url = $activate_user_data['back_url'];
			}

			redirect($cancel_url);
		}

		public function notify($user_id, $plan_id){
			$body = file_get_contents("php://input");
			$json_obj = json_decode($body, true);

			log_message('error', 'Fomo notify json_obj:' . print_r($json_obj, TRUE));
			log_message('error', 'Fomo notify body:' . print_r($body, TRUE));

			$post_data = (isset($_POST) && !empty($_POST)) ? $_POST : [];
			$get_data = (isset($_GET) && !empty($_GET)) ? $_GET : [];

			log_message('error', 'Fomo notify post_data:' . print_r($post_data, TRUE));
			log_message('error', 'Fomo notify get_data:' . print_r($get_data, TRUE));

			// pred($json_obj, $body, $post_data, $get_data);

			// $body = {"orderId":"100500120211013175038840","orderNo":"1_11_1634100702","transactionId":"100510220211013175236348"};

			/*$json_obj = [
				'orderId' => '100500120211013175038840',
			    'orderNo' => '1_11_1634100702',
			    'transactionId' => '100510220211013175236348'
			];

			$body = json_encode($json_obj, JSON_FORCE_OBJECT);*/

			/*$json_obj = [
				'orderId' => '100500220211023432819313',
			    'orderNo' => '1_61_1634990480',
			    'transactionId' => '100510220211023433296074'
			];*/

			$body = json_encode($json_obj, JSON_FORCE_OBJECT);

			$json = array();
			
			try{
				$headers = getallheaders();
				// $headers = [
				//     'Host' => 'jackstore.co',
				//     'Content-Type' => 'application/json',
				//     'x-fomopay-authorization' => 'FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=e623a5cd756df51f098d84486be21d51,Timestamp=1634100756,Signature=1cabf3ec6de8d72d7a7ab143ed5004ff0882d3ff22176b705f3b78f93b66b1bc',
				//     'User-Agent' => 'FOMOPay/2.0',
				//     'Accept' => '*/*',
				//     'Content-Length' => '109',
				//     'Connection' => 'close'
				// ];

				// $headers = [
				//     'Host' => 'jackstore.co',
				//     'Content-Type' => 'application/json',
				//     'x-fomopay-authorization' => 'FOMOPAY1-HMAC-SHA256 Version=1.1,Credential=122000000000163,Nonce=cf2b2bb32da3f63a0989ffdcd496496f,Timestamp=1634990561,Signature=30ff3524ea158459ea8ce3d8fcf369248040c95797c9e3b468e11dcc4c8a248f',
				//     'User-Agent' => 'FOMOPay/2.0',
				//     'Accept' => '*/*',
				//     'Content-Length' => '109',
				//     'Connection' => 'close'
				// ];

				log_message('error', 'Fomo headers:' . print_r($headers, TRUE));

				$isValidResponse = $this->validateWebhook($headers, $body);

				log_message('error', 'Fomo isValidResponse:' . $isValidResponse);
				// pred($isValidResponse);
				
				if($isValidResponse && isset($json_obj['orderNo']) && !empty($json_obj['orderNo']))
				{
					log_message('error', 'Fomo webhook valid response');

					header("HTTP/1.1 200 OK");
					
					$setting = $this->api->Product_model->getSettings('membershippayment_fomo');

					$this->api->load->model("Product_model");
					// $plan_info = MembershipPlan::find($plan_id);

					$orderNoResponse = explode('_', $json_obj['orderNo']);
					$plan_id = $orderNoResponse[0];
					$user_id = $orderNoResponse[1];

					$user = User::auth('user');

					$cancel_url = site_url('membership/buy_membership/'.$plan_id.'/fomo');

					$activate_user_data = $this->api->session->userdata('activate_user_data');
					$user_plan_purchase_data = $this->api->session->userdata('user_franchise_plan_purchase');
					
					if(empty($user) && !empty($activate_user_data) && isset($activate_user_data['user']))
					{
						$user = $activate_user_data['user'];
						$cancel_url = $activate_user_data['back_url'];
					}
					else if(!empty($user_plan_purchase_data) && isset($user_plan_purchase_data['back_url'])) {
						$cancel_url = isset($user_plan_purchase_data['back_url']) ? $user_plan_purchase_data['back_url'] : $cancel_url;
					}
					if(empty($user))
					{
						$user = User::find($user_id);
					}

					log_message('error', 'Fomo json_obj: ' . print_r($json_obj, TRUE));
					log_message('error', 'Fomo user: ' . print_r($user, TRUE));

					if(!empty($user) && isset($json_obj['orderNo']) && !empty($json_obj['orderNo']))
					{
						log_message('error', 'Valid Fomo Response:' . $json_obj['orderId']);

						$order_api_url = '/orders/' . $json_obj['orderId'];

						$token = $this->authorizationToken($setting);

						$basic_headers = [
							'Content-Type: application/json',
			                /*'User-Agent: Fomo/PHP/' . $this->sdkVersion,*/
			                'Authorization: Basic ' . $token
						];

						$order_response = $this->makeRequest($order_api_url, 'GET', null, $basic_headers);
						// pred($order_response,$user->toArray());

						log_message('error', 'Fomo order response:' . print_r($order_response, TRUE));

						if(isset($order_response['error']) && isset($order_response['response']) && ($order_response['error'] == false))
						{
							$api_res = $order_response['response'];

							log_message('error', 'Fomo order_response success:' . print_r($api_res, TRUE));

							// if(isset($api_res['status']) && ($api_res['status'] == 'SUCCESS'))
							$membership_exists = MembershipUser::where('user_id', $user->id)->where('plan_id', $plan->id)->where('status_id', 1)->orderByDesc('id')->first();
							log_message('error', 'membership_exists' . print_r($membership_exists, TRUE));

							if(isset($membership_exists) && !empty($membership_exists))
							{
								log_message('error', 'Fomo membership already exists');
								
					 			$json['success'] = $cancel_url;
							}
							else
							{
								log_message('error', 'Fomo new membership:');

								if(isset($api_res['status']) && ($api_res['status'] != 'CREATED'))
								{
									$payment_status = $api_res['status'];
									log_message('error', 'payment_status' . print_r($payment_status, TRUE));

									switch($payment_status) {
										case 'CREATED' : $order_status_id = $setting['pending_status_id']; break;
										case 'FAIL'    : $order_status_id = $setting['canceled_status_id']; break;
										case 'ERROR'   : $order_status_id = $setting['canceled_status_id']; break;
										case 'SUCCESS' : $order_status_id = $setting['success_status_id']; break;
										case 'REFUND'  : $order_status_id = $setting['canceled_status_id']; break;
										case 'CLOSED'  : $order_status_id = $setting['denied_status_id']; break;
										default        : $order_status_id = 0;
									}

									$this->api->load->model('user_model', 'user');

									$response = explode('_', $json_obj['orderNo']);

									$plan_id = $response[0];
									$user_id = $response[1];

									$plan = MembershipPlan::find($plan_id);
									$user = User::find($user_id);
									
									$comment = "Tran ID {$json_obj['orderId']} Fomo Status {$json_obj['orderNo']}";
									$payment_details = array(
										'orderId' => $json_obj['orderId'],
										'transaction_id' => $json_obj['transactionId'],
										'payment_status' => $payment_status,
									);

									// echo "notify"; pred($json_obj, $headers, $body, $isValidResponse, $order_api_url, $cancel_url, $order_response, $response, $comment, $payment_details, $plan->toArray(), $success_url);
									$membership = $plan->buy($user, $order_status_id, $comment, 'Fomo', 1, $payment_details);

									log_message('error', 'Fomo membership:' . print_r($membership, TRUE));
									log_message('error', 'Fomo activate_user_data:' . print_r($activate_user_data, TRUE));

									if($api_res['status'] == 'SUCCESS')
									{
										log_message('error', 'payment_status SUCCESS' . print_r($api_res['status'], TRUE));

										$success_url = site_url('usercontrol/membership_purchase_details/'. $membership->id);
										if(!empty($activate_user_data) && isset($activate_user_data['user']))
										{
											$success_url = $this->api->user->activateUserAndClearSession($user);
											$this->api->session->set_flashdata('success', 'Thank You for Your Purchase, Your Account is now Activated.');
										}
										else if(isset($user_franchise_plan_success_url) && !empty($user_franchise_plan_success_url))
										{
											$success_url = $user_franchise_plan_success_url;
											$this->api->session->unset_userdata('user_franchise_plan_purchase');
											$this->api->session->set_flashdata('success', 'Thank You for Your Purchase, Your Order is now Completed.');
										}
										else
										{
											$success_url = $this->api->user->activateUserAndClearSession($user);
											$this->api->session->set_flashdata('success', 'Thank You for Your Purchase, Your Order is now Completed.');
										}

							 			$json['success'] = $success_url;
									}
									else if(in_array($api_res['status'], ['FAIL','ERROR']))
									{
										log_message('error', 'payment_status FAIL' . print_r($api_res['status'], TRUE));

										$this->api->session->set_flashdata('error', 'Oops! Your payment failed! You may try again and contact admin if the issue persists!');
										$json['success'] = $cancel_url;
									}
								}
								else
								{
									log_message('error', 'Fomo CREATED status Response');
									
						 			$json['success'] = $cancel_url;
								}
							}
						}
						else
						{
							log_message('error', 'Fomo order details error Response');

							$this->api->session->set_flashdata('error', $order_response['message']);
				 			$json['success'] = $cancel_url;
						}
					}
				    else
					{
						log_message('error', 'Invalid Fomo Response');

						$this->api->session->set_flashdata('error', 'Invalid Fomo Response');
			 			$json['success'] = $cancel_url;
					}
				}
				else
				{
					log_message('error', 'Fomo webhook not valid response');

					$this->api->session->set_flashdata('error', 'Invalid Fomo Response');
		 			$json['success'] = $cancel_url;
				}
			}
			catch (\Exception $e) {
				log_message('error', 'Fomo Exception error: ' . print_r($e->getMessage(), TRUE));

				$json = array('error' => $e->getMessage());
			}

			log_message('error', 'Fomo notify final response: ' . print_r($json, TRUE));
			echo json_encode($json);
			return;
		}

		public function APICallSuccessful($status) {
			if(strtoupper($status) != 'SUCCESS' && strtoupper($status) != 'CREATED')
			{
				return false;
			}	
			else
			{
				return true;
			}
		}

		public function fomo_return($user_id, $plan_id){

			log_message('error', 'Fomo fomo_return called user_id:' . $user_id);

			if($user_id && $plan_id)
			{
				$ci =& get_instance();
				$this->api->load->model('PagebuilderModel');

				$data['user_id'] = $user_id;
				$data['plan_id'] = $plan_id;

				log_message('error', 'Fomo fomo_return view called plan_id:' . $plan_id);

				$this->api->load->view('usercontrol/activate_user/fomo_return', $data);
			}
			else
			{
				log_message('error', 'Fomo fomo_return 404:');

				show_404();
			}

			return;
		}

		public function check_fomopay_status($user_id, $plan_id){
			$json = array();
			
			log_message('error', 'Fomo check_fomopay_status called user_id :' . $user_id);

			if($user_id && $plan_id)
			{
				$ci =& get_instance();

				$is_notified = 0;
				$cancel_url = site_url('membership/buy_membership/'.$plan_id.'/fomo');
				
				try {

					$user = User::find($user_id);

					$activate_user_data = $this->api->session->userdata('activate_user_data');
					$user_plan_purchase_data = $this->api->session->userdata('user_franchise_plan_purchase');

					if(empty($user) && !empty($activate_user_data) && isset($activate_user_data['user']))
					{
						$user = $activate_user_data['user'];
						$cancel_url = $activate_user_data['back_url'];
					}
					else if(!empty($user_plan_purchase_data) && isset($user_plan_purchase_data['back_url']))
					{
						$cancel_url = isset($user_plan_purchase_data['back_url']) ? $user_plan_purchase_data['back_url'] : $cancel_url;
						$user_franchise_plan_success_url = isset($user_plan_purchase_data['success_url']) ? $user_plan_purchase_data['success_url'] : '';
					}

					if(empty($user))
					{
						$user = User::find($user_id);
					}

					log_message('error', 'Fomo check_fomopay_status cancel_url :' . $cancel_url);

					$json['success'] = $cancel_url;

					if(!empty($user))
					{
						log_message('error', 'Fomo check_fomopay_status user :' . print_r($user, TRUE));
						
						$membership = MembershipUser::where('user_id', $user_id)->where('plan_id', $plan_id)->orderByDesc('id')->first();

						if(!empty($membership))
						{
							log_message('error', 'Fomo check_fomopay_status membership :' . print_r($membership, TRUE));

							$is_notified = 1;

							if($membership->status_id == 1)
							{
								if($user->reg_approved != 1)
								{
									$user->uuid = NULL;
									$user->reg_approved = 1;
									$user->save();
								}

								// $success_url = site_url('usercontrol/membership_purchase_details/'. $membership->id);
								// $success_url = base_url('usercontrol/dashboard');
								$success_url = base_url('login');
								$success_msg = 'Thank You for Your Purchase! You may login to Member Portal now!';

								if(isset($user_franchise_plan_success_url) && !empty($user_franchise_plan_success_url))
								{
									$success_url = $user_franchise_plan_success_url;
									$success_msg = 'Thank You for your purchase! You can enjoy more benefits from new franchise package!';
								}

								$this->api->session->set_flashdata('success', $success_msg);
								$json['success'] = $success_url;

								log_message('error', 'Fomo check_fomopay_status membership success :' . $json['success']);

							}
							else
							{
								$this->api->session->set_flashdata('error', 'Oops! You payment failed! You may try again and contact admin if the issue persists!');

								$json['success'] = $cancel_url;

								log_message('error', 'Fomo check_fomopay_status membership error :' . $json['success']);
							}
						}
					}
				}
				catch (\Exception $e) {

					log_message('error', 'Fomo check_fomopay_status Exception error :' . $e->getMessage());

					$this->api->session->set_flashdata('error', 'Fomo exception error: ' . $e->getMessage());
			 		$json['success'] = $cancel_url;
				}

				$json['is_notified'] = $is_notified;
			}

			// $json = ['is_notified' => 1, 'success' => $cancel_url];
			// $json = ['is_notified' => 1, 'success' => base_url('usercontrol/dashboard')];

			echo json_encode($json);

			log_message('error', 'Fomo check_fomopay_status response :' . print_r($json, TRUE));

			return $json;

		}

		/**
	     * Validate an incoming webhook
	     *
	     * @param \Illuminate\Http\Request $request
	     * @return Boolean
	     */
	    public function validateWebhook($headers, $body)
	    {
	    	$is_valid = true;

	    	// $json_body = json_decode($body, true);
	    	log_message('error', 'Fomo validateWebhook body:' . print_r($body, TRUE));
	    	log_message('error', 'Fomo validateWebhook json_body:' . print_r(json_decode($body, true), TRUE));

	    	if(isset($headers['x-fomopay-authorization']))
			{
				$json_body = json_decode($body, true);

				if (empty($json_body)) {
					log_message('error', 'Fomo validateWebhook empty body:');
					$is_valid = false;

		            return false;
		        }

		        $x_fomopay_authorization = explode('FOMOPAY1-HMAC-SHA256 ', $headers['x-fomopay-authorization']);
		        $x_fomopay_authorization = explode(',', $x_fomopay_authorization[1]);

		        log_message('error', 'Fomo validateWebhook x_fomopay_authorization:' . print_r($x_fomopay_authorization, TRUE));

		        if(!empty($x_fomopay_authorization))
			    {
			    	$temp = [];
			    	foreach ($x_fomopay_authorization as $key => $value) {
			    		$res = explode('=', $value);
			    		$temp[$res[0]] = $res[1];
			    	}

			    	$x_fomopay_authorization = $temp;

			    	log_message('error', 'Fomo validateWebhook x_fomopay_authorization inside:' . print_r($x_fomopay_authorization, TRUE));
			    }

			    if(isset($x_fomopay_authorization['Version']) && isset($x_fomopay_authorization['Credential']) && isset($x_fomopay_authorization['Nonce']) && isset($x_fomopay_authorization['Timestamp']) && isset($x_fomopay_authorization['Signature']))
			    {
			    	log_message('error', 'Fomo validateWebhook valid header inside:' . print_r($x_fomopay_authorization, TRUE));

			    	if($x_fomopay_authorization['Version'] != 1.1)
			    	{
			    		log_message('error', 'Fomo validateWebhook inValid Version:');

			    		$is_valid = false;

			    		return false;
			    	}

			    	$setting = $this->api->Product_model->getSettings('membershippayment_fomo');

			    	if($x_fomopay_authorization['Credential'] != $setting['mid'])
			    	{
			    		log_message('error', 'Fomo validateWebhook inValid Credential:');

			    		$is_valid = false;

			    		return false;
			    	}

			    	if((strlen($x_fomopay_authorization['Nonce']) < 16) && (strlen($x_fomopay_authorization['Nonce']) > 64))
			    	{
			    		log_message('error', 'Fomo validateWebhook inValid Nonce:');

			    		$is_valid = false;

			    		return false;
			    	}

			    	if(($x_fomopay_authorization['Timestamp'] < strtotime( '-300 second' )) && ($x_fomopay_authorization['Timestamp'] > strtotime( '+300 second' )))
			    	{
			    		log_message('error', 'Fomo validateWebhook inValid Timestamp:');

			    		$is_valid = false;

			    		return false;
			    	}

			    	if($is_valid)
			    	{
			    		$message = $body . $x_fomopay_authorization['Timestamp'] . $x_fomopay_authorization['Nonce'];
			    		log_message('error', 'Fomo validateWebhook Valid message:' . print_r($message, TRUE));

			    		$signature = hash_hmac('sha256', $message, $setting['psk']);

			    		if($signature != $x_fomopay_authorization['Signature'])
			    		{
			    			log_message('error', 'Fomo validateWebhook InValid signature:');

			    			$is_valid = false;

			    			return false;
			    		}
			    	}
			    }
			    else
			    {
			    	log_message('error', 'Fomo validateWebhook not valid header inside:');

			    	return false;
			    }
			}
			else
		    {
		    	log_message('error', 'Fomo validateWebhook x-fomopay-authorization header not set:');
		    	return false;
		    }

	        return true;
	    }

		/**
	     * Make authorized request to Fomo API
	     *
	     * @param $path string API path
	     * @param $method string HTTP Method
	     * @param mixed $data Object to send, object is JSON serialized before it is sent
	     * @param array $headers List of headers to be added to request
	     *
	     * @return mixed Data received from API response
	     * @throws \RuntimeException
	     */
	    private function makeRequest($path, $method, $data = null, $headers = array())
	    {
	    	// require_once(APPPATH . 'core/Fomo/Exception/ApiException.php');
	    	try {

		        $curl = curl_init($this->endpoint . $path);
		        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
		        curl_setopt($curl, CURLOPT_HEADER, true);
		        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
		        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
		        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		        // curl_setopt($curl, CURLOPT_VERBOSE, TRUE);
		        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

		        if ($data || in_array($method, array( "POST", "PATCH" ))) {
		            // convert from obj to array
		            $json  = json_encode($data);
		            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
		        }

		        // Make the REST call, returning the result
		        $response = curl_exec($curl);

		        if (curl_errno($curl)) {
		            throw new \Fomo\Exception\ApiException(sprintf('Fomo API curl error: %s (%d)', curl_error($curl), curl_errno($curl)));
		        }

		        $responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
		        $header = substr($response, 0, $header_size);
		        $httpResponse = substr($response, $header_size);

		        // pred($data, $httpResponse, @json_decode($httpResponse), $responseCode);
		        if ($httpResponse === '' || ($responseCode !== 200 && $responseCode !== 201)) {

		        	$response = @json_decode($httpResponse, true);

		        	if(isset($response['message']) && !empty($response['message']))
		        	{
		        		return ['error' => true, 'message' => $response['message']];
		        	}
		        	else
		        	{
		        		return ['error' => true, 'message' => 'Fomo API curl error: Invalid response message received from the API, HTTP status code ' . $responseCode];
		        	}
		            /*throw new \Fomo\Exception\ApiException(
		                sprintf(
		                    'Fomo API curl error: Invalid response message received from the API (%s %s%s), HTTP status code %s',
		                    $method,
		                    $this->endpoint,
		                    $path,
		                    $responseCode
		                )
		            );*/
		        }

		        $response = @json_decode($httpResponse, true);

		        if ($response === null && json_last_error() !== JSON_ERROR_NONE) {
		        	return ['error' => true, 'message' => 'Fomo API curl error: JSON decoding of remote response failed.\n Error code: ' . json_last_error() . ' \n HTTP status code: %s\n' . $httpResponse];

		            /*throw new \Fomo\Exception\ApiException(
		                sprintf(
		                    'Fomo API curl error: JSON decoding of remote response failed.\n' .
		                    'Error code: %d\n' .
		                    'HTTP status code: %s\n',
		                    json_last_error(),
		                    $httpResponse
		                )
		            );*/
		        }

		        // var_dump($http_response_header);
		        // var_dump($response);
		        return ['error' => false, 'response' => $response];
	    	}
	    	catch(\Exception $e) {
	    		return ['error' => true, 'message' => $e->getMessage()];
	    	}
	    }

	    /*if (!function_exists('getallheaders')) 
		{ 
		    function getallheaders() 
		    { 
		       $headers = array (); 
		       foreach ($_SERVER as $name => $value) 
		       { 
		           if (substr($name, 0, 5) == 'HTTP_') 
		           { 
		               $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value; 
		           } 
		       } 
		       return $headers; 
		    } 
		}*/
	}