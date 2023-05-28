<?php
use App\MembershipPlan;
use App\User;

class stripe_payment {
	public $title = 'Stripe';
	public $icon = 'application/membership_payment/logo/stripe_payment.png';
	public $website = 'https://stripe.com/';

	function __construct($api){
		$this->api = $api;
		// $this->api->load->library('session');
	}

	public function onInstall() {}

	public function onUnInstall() {}

	public function doPayment($plan_id){
		$ci =& get_instance();
		$setting_data = $this->api->Product_model->getSettings('membershippayment_stripe_payment');
		$user = User::auth('user');

		$cancel_url = site_url('membership/buy_membership/'.$plan_id.'/stripe_payment');

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
			if((int)$setting_data['environment'] == 1) {
				$stripe_public_key = $setting_data['live_public_key'];
				$test_mode = false;
			} else {
				$stripe_public_key = $setting_data['test_public_key'];
				$test_mode = true;
			}

			$country_code = $ci->db->query("SELECT sortname FROM countries WHERE id = '".(int)$user->ucountry."'")->row();

			$billing_details['billing_details']['name'] = $user->firstname . ' ' . $user->lastname;
			$billing_details['billing_details']['email'] = $user->email;
			$billing_details['billing_details']['address']['line1'] = "4720  Pride Avenue";
			$billing_details['billing_details']['address']['line2'] = $user->address2;
			$billing_details['billing_details']['address']['city'] = "COLORADO CITY";
			$billing_details['billing_details']['address']['state'] = "TX";
			$billing_details['billing_details']['address']['postal_code'] = "79512";
			if(!empty($country_code)){
				$billing_details['billing_details']['address']['country'] = $country_code->sortname;
			}

			// $cancel_url = site_url('membership/buy_membership/'.$plan_id.'/stripe_payment');
			$action = site_url('membership_callback/stripe_payment/callback/' . $plan_id);
			$view = APPPATH.'membership_payment/confirm_view/stripe_payment_card.php';
			require $view;
		}
		else
		{
			show_404();
		}
	}

	public function callback($plan_id){
		$ci =& get_instance();
		$plan = MembershipPlan::find($plan_id);
		$user = User::auth('user');

		$activate_user_data = $ci->session->userdata('activate_user_data');
		$this->api->load->model('user_model', 'user');

		$cancel_url = site_url('membership/buy_membership/'.$plan_id.'/stripe_payment');

		if(empty($user) && !empty($activate_user_data) && isset($activate_user_data['user']))
		{
			$user = $activate_user_data['user'];
			$cancel_url = $activate_user_data['back_url'];
		}
		else
		{
			$user_plan_purchase_data = $ci->session->userdata('user_franchise_plan_purchase');

			$cancel_url = isset($user_plan_purchase_data['back_url']) ? $user_plan_purchase_data['back_url'] : $cancel_url;
			$user_franchise_plan_success_url = isset($user_plan_purchase_data['success_url']) ? $user_plan_purchase_data['success_url'] : '';
		}

		$setting      = $this->api->Product_model->getSettings('membershippayment_stripe_payment');
		$setting_site = $this->api->Product_model->getSettings('site');
		$json = array();
		try{
			$json_str = file_get_contents('php://input');
			$json_obj = json_decode($json_str);
			//$setting_site = $this->api->getSettings('site');
		
			$this->initStripe($setting);

			// Create the PaymentIntent
			if (isset($json_obj->payment_method_id)) {
				/*$amount = c_format(($plan->special ? $plan->special : $plan->price),false);*/
				$discount = $plan->getPlanPrice($user->id, $plan);
				$amount = c_format($discount['price'],false);
				// pred($setting,$amount);
				$amount = $amount * 100;

				// Create the PaymentIntent
				$intent = \Stripe\PaymentIntent::create(array(
					'payment_method'      => $json_obj->payment_method_id,
					'amount'              => $amount,
					'currency'            => strtolower($this->api->session->userdata['userCurrency']),
					'confirmation_method' => 'manual',
					'confirm'             => true,
					'description'         => "Charge for Order #".$plan_id,
					'metadata'            => array(
						'order_id'	=> $plan_id,
						'email'		=> $user->email
					),
				));
			}

			if (isset($json_obj->payment_intent_id)) {
				$intent = \Stripe\PaymentIntent::retrieve(
					 $json_obj->payment_intent_id
				);
				$intent->confirm();
			}

			if(!empty($intent)) {
				if (($intent->status == 'requires_action' || $intent->status == 'requires_source_action') &&
				$intent->next_action->type == 'use_stripe_sdk') {
					$json = array(
						'requires_action' => true,
						'payment_intent_client_secret' => $intent->client_secret
					);
				} else if ($intent->status == 'succeeded') {
					$comment = "Tran ID {$intent->id} Stripe Status {$intent->status}";
					$payment_details = array(
						'transaction_id' => $intent->id,
						'payment_status' => $intent->status,
					);
					$membership = $plan->buy($user, $setting['order_success_status'], $comment, 'Stripe', 1, $payment_details);

					$success_url = site_url('usercontrol/membership_purchase_details/'. $membership->id);
					if(!empty($activate_user_data) && isset($activate_user_data['user']))
					{
						/*$success_url = site_url('/login');
						$user->uuid = NULL;
						// $user->assigned_plan = NULL;
						$user->reg_approved = 1;
                		$user->save();*/
						

						// $this->api->session->unset_userdata('activate_user_data');
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
						$this->api->session->set_flashdata('success', 'Thank You for Your Purchase, Your Order is now Completed.');
					}

			 		$json['success'] = $success_url;
				} else {
					$this->api->session->set_flashdata('error', 'Invalid PaymentIntent Status ('.$intent->status.')');
			 		$json['success'] = $cancel_url;
				}
			}
		} catch (\Stripe\Error\Base $e) {
			$json = array('error' => $e->getMessage());
		} catch (\Exception $e) {
			$json = array('error' => $e->getMessage());
		}

		echo json_encode($json);
		return;
	}

	private function initStripe($setting_data) {
		require_once(APPPATH . 'core/stripe/stripe.php');

		if((int)$setting_data['environment'] == 1) {
			$stripe_secret_key = $setting_data['live_secret_key'];
		} else {
			$stripe_secret_key = $setting_data['test_secret_key'];
		}

		if($stripe_secret_key != '' && $stripe_secret_key != null) {
			\Stripe\Stripe::setApiKey($stripe_secret_key);
			return true;
		}

		throw new Exception("Unable to load stripe libraries.");
	}
}