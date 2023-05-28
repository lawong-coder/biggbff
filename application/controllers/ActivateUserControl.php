<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);

use App\MembershipPlan;

class ActivateUserControl extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('User_model');
		$this->load->model('theme');
		$this->load->model('PagebuilderModel');
		$this->load->library('session');

		___construct(1);

		$this->login_settings = $this->Product_model->getSettings('login');
	}

	public function index($uuid){

		$is_valid = 0;
		if($uuid && $this->Product_model->isMembershipAccess())
		{
			$data['title'] = 'Affiliate Activation';
			// $code = 'stripe_payment';
			$code = 'fomo';

			$front_template = $this->login_settings['front_template'];

			$lang = $_SESSION['userLang'];
			$data['selected_language'] = $this->db->query("SELECT * FROM language WHERE status=1 AND id=". (int)$lang)->row_array();

			// $user = $this->db->query("SELECT * FROM users WHERE uuid='". $uuid."'")->row_array();
			$user = App\User::where('uuid', $uuid)->first();
			if(!empty($user) && isset($user->assigned_plan) && !empty($user->assigned_plan))
			{
				$pmethod = MembershipPlan::getDetails($code);
				$plan = MembershipPlan::find($user->assigned_plan);
				$data['plan'] = $plan;
				// $data['methods'] = MembershipPlan::getPaymentMethods();
				$data['uuid'] = $uuid;
				$pmethod['plan'] = $plan;
				$pmethod['user_activate_page'] = 1;

				if ($pmethod && $plan) {
					$data['notcheckmember']=1;
					$data['pmethod'] = $pmethod;
					$data['confirm'] = MembershipPlan::getConfirm($code,$pmethod);
					$is_valid = 1;

					$back_url = base_url('activateusercontrol/')  . $uuid;

					$this->session->set_userdata('activate_user_data', [
						'uuid' => $uuid,
						'back_url' => $back_url,
						'user' => $user,
						'plan' => $plan
					]);

					$is_valid = 1;

					$this->PagebuilderModel->web_activate_view('usercontrol/activate_user/index',$data);
				}
			}
		}
		
		if(! $is_valid)
		{
			show_404();
		}
	}

	public function buy_membership($uuid, $code){

		$is_valid = 0;

		if($this->Product_model->isMembershipAccess()){

			// $user = $this->db->query("SELECT * FROM users WHERE uuid='". $uuid."'")->row_array();
			$user = App\User::where('uuid', $uuid)->first();

			if(!empty($user) && isset($user->assigned_plan) && !empty($user->assigned_plan))
			{
				$pmethod = MembershipPlan::getDetails($code);
				$plan = MembershipPlan::find($user->assigned_plan);
				$pmethod['plan'] = $plan;
				if ($pmethod && $plan) {
					$data = ['notcheckmember'=>1];
					$data['pmethod'] = $pmethod;
					$data['confirm'] = MembershipPlan::getConfirm($code,$pmethod);
					$data['plan'] = $plan;
					$is_valid = 1;

					$back_url = base_url('activateusercontrol/')  . $uuid . "/buy_membership/" . $code;

					// $_SESSION['activate_user_data'] = $temp_data;
					$this->session->set_userdata('activate_user_data', [
						'uuid' => $uuid,
						'back_url' => $back_url,
						'user' => $user,
						'plan' => $plan
					]);

					$this->PagebuilderModel->web_activate_view('usercontrol/activate_user/buy_plan',$data);
				}
			}

		}

		if(! $is_valid)
		{
			show_404();
		}
	}

	public function fomo_payment($uuid){

		$is_valid = 0;
		if($uuid && $this->Product_model->isMembershipAccess())
		{
			$data['title'] = 'Affiliate Activation';
			$code = 'fomo';

			$front_template = $this->login_settings['front_template'];

			$lang = $_SESSION['userLang'];
			$data['selected_language'] = $this->db->query("SELECT * FROM language WHERE status=1 AND id=". (int)$lang)->row_array();

			// $user = $this->db->query("SELECT * FROM users WHERE uuid='". $uuid."'")->row_array();
			$user = App\User::where('uuid', $uuid)->first();
			if(!empty($user) && isset($user->assigned_plan) && !empty($user->assigned_plan))
			{
				$pmethod = MembershipPlan::getDetails($code);
				$plan = MembershipPlan::find($user->assigned_plan);
				$data['plan'] = $plan;
				// $data['methods'] = MembershipPlan::getPaymentMethods();
				$data['uuid'] = $uuid;
				$pmethod['plan'] = $plan;
				$pmethod['user_activate_page'] = 1;

				if ($pmethod && $plan) {
					$data['notcheckmember']=1;
					$data['pmethod'] = $pmethod;
					$data['confirm'] = MembershipPlan::getConfirm($code,$pmethod);
					$is_valid = 1;

					$back_url = base_url('activateusercontrol/fomo_payment/')  . $uuid;

					$this->session->set_userdata('activate_user_data', [
						'uuid' => $uuid,
						'back_url' => $back_url,
						'user' => $user,
						'plan' => $plan
					]);

					$is_valid = 1;

					$this->PagebuilderModel->web_activate_view('usercontrol/activate_user/index',$data);
				}
			}
		}
		
		if(! $is_valid)
		{
			show_404();
		}
	}
}