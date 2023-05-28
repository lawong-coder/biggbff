<?php
use App\MembershipPlan;
use App\User;

class bank_transfer {
	public $title = 'Bank Transfer';
	public $icon = 'assets/images/withdrawal_payment/bank-transfer.png';
	public $website = '';

	function __construct($api){ $this->api = $api; }

	public function doPayment($plan_id){
		$plan = MembershipPlan::find($plan_id);
		$user = User::auth('user');

		$activate_user_data = $this->api->session->userdata('activate_user_data');
		if(empty($user) && !empty($activate_user_data) && isset($activate_user_data['user']))
		{
			$user = $activate_user_data['user'];
		}

		if(! empty($user))
		{
			$membership = $plan->buy($user,$status_id=0, $comment = 'Wait till admin respond',$payment_method='Bank Transfer');

			if($membership){

				$success_url = site_url('usercontrol/membership_purchase_details/'. $membership->id);
				if(!empty($activate_user_data) && isset($activate_user_data['user']))
				{
					$success_url = site_url('/login');
					$user->uuid = NULL;
					// $user->assigned_plan = NULL;
					$user->reg_approved = 1;
	        		$user->save();
					
					$this->api->session->set_flashdata('success', 'Thank You for Your Purchase, Your Account is now Activated.');

					$this->api->session->unset_userdata('activate_user_data');
					// $success_url = $user->activateUserAndClearSession();
				}
				else
				{
					$this->api->session->set_flashdata('success', 'Thank You for Your Purchase, Your Order is now Completed.');
				}

				redirect($success_url);
			}
		}
	}
}