<?php
namespace App;
class MembershipPlan extends \Illuminate\Database\Eloquent\Model
{
	public $table = 'membership_plans';
	public $timestamps = false;

	public static $status_list = array(
        '0'  =>  'Pending',
        '1'  =>  'Active',
        '2'  =>  'Total not match',
        '3'  =>  'Denied',
        '4'  =>  'Expired',
        '5'  =>  'Failed',
        '7'  =>  'Processed',
        '8'  =>  'Refunded',
    );

    public static $status_color = array(
        '0'  =>  'badge-warning',
        '1'  =>  'badge-success',
        '2'  =>  'badge-danger',
        '3'  =>  'badge-danger',
        '4'  =>  'badge-warning',
        '5'  =>  'badge-danger',
        '7'  =>  'badge-info',
        '8'  =>  'badge-primary',
    );

    public function inqueue_users(){

		// return $this->hasMany(MembershipUser::class, 'plan_id','id');

		return $this->hasManyThrough(User::class, MembershipUser::class, 'plan_id', 'id','id', 'user_id');

	}

	public function membership_users(){

		return $this->hasMany(MembershipUser::class, 'plan_id','id');
	}

    public static function senBuyMail($buy_id,$ci)
    {
    	$ci->load->model('Mail_model');
		$ci->Mail_model->send_subscription_buy($buy_id);
    }

    public function getPlanPrice($user_id, $plan)
    {
    	$price = ($plan->special ? $plan->special : $plan->price);

    	$to_send = [
    		'is_discount' => 0,
    		'price' => $price
    	];

    	/*$direct_ref_users = User::whereHas('purchased_membership_plans', function($q) use ($plan) {
    		$q->where('plan_id', '>=', $plan->id);
    	})->where(['type' => 'user', 'refid' => $user_id])->count();*/

    	$plan_id = $plan->id - 1;
    	$plan_id = ($plan_id >= 0) ? $plan_id : 0;

    	$direct_ref_users = User::whereHas('purchased_membership_plans', function($q) use ($plan_id) {
    		$q->where('plan_id', '>=', $plan_id);
    	})->where(['type' => 'user', 'refid' => $user_id])->count();
 	 	
 	 	$user = User::auth();

    	$user_membership = MembershipUser::where('user_id', $user->id)->where('status_id', 1)->groupBy('plan_id')->orderBy('plan_id', 'ASC')->where('plan_id', $plan_id)->first();
    	$completion_rank = (!empty($user_membership)) ? $user_membership->getCompletionRank() : 0;

    	if(($direct_ref_users >= 3) && ($completion_rank >= 100))
    	{
    		$percentage = ($direct_ref_users >= 5) ? 50 : 20;

    		$price = $price - (($price * $percentage) / 100);

    		$to_send['is_discount'] = 1;
    		$to_send['price'] = $price;
    	}

    	return $to_send;
    }

    public function sendBeltExitedMail($membership_user, $inqueue_users)
    {
    	if(isset($membership_user->plan))
    	{
    		$plan = $membership_user->plan;

    		$exited_users = MembershipUser::select('id', 'user_id', 'plan_id', 'created_at')->where('plan_id', $plan->id)->where('status_id', 1)->get()->unique('user_id')->where('percentage_rank', '>=', 100)->pluck('user_id')->toArray();
    		log_message('error', 'sendBeltExitedMail exited_users:' . print_r($exited_users, TRUE));

    		$to_send = [];
    		if(!empty($inqueue_users) && !empty($exited_users))
    		{
    			$to_send = array_intersect($inqueue_users, $exited_users);
    		}
    		/*else if(empty($inqueue_users) && !empty($exited_users))
    		{
    			$to_send = $exited_users;
    		}*/

    		log_message('error', 'sendBeltExitedMail to_send:' . print_r($to_send, TRUE));

    		if(!empty($to_send))
    		{
    			$users = User::select('firstname', 'lastname', 'email')->whereIn('id', $to_send)->get();
    			log_message('error', 'sendBeltExitedMail users:' . print_r($users, TRUE));

    			if(count($users) > 0)
    			{
    				$ci =& get_instance();
    				$ci->load->model('Mail_model');

		 			$ci->Mail_model->send_member_belt_exited_notification_mail($users, $plan);
    			}
    		}

    		/*$belt_size = isset($plan->belt_size) ? $plan->belt_size : 0;

    		// $user_count = MembershipUser::where("plan_id", $plan->id)->where("status_id", 1)->where("user_id", '!=', $membership_user->user_id)->whereRaw('created_at > "' . $membership_user->created_at .'"')->count();

    		$user_count = MembershipUser::where("plan_id", $plan->id)->where("status_id", 1)->where("user_id", '!=', $membership_user->user_id)->whereRaw('created_at < "' . $membership_user->created_at .'"')->count();

    		if(($user_count > 0) && ($user_count >= $belt_size)) {
    			$total = ($user_count - $belt_size) + 1;

	 			$membership_users = MembershipUser::where("plan_id", $plan->id)->where("status_id", 1)->where("user_id", '!=', $membership_user->user_id)->whereRaw('created_at < "' . $membership_user->created_at .'"')->orderBy('id')->get()->take($total);

    			if(count($membership_users) > 0)
    			{
    				$ci =& get_instance();
    				$ci->load->model('Mail_model');

		 			$ci->Mail_model->send_member_belt_exited_notification_mail($membership_users);
    			}
    		}*/
    	}
    }

	public function buy($user, $status_id, $comment = '', $payment_method = '', $notify = 1, $payment_details = array()){


		$membership_user = MembershipUser::firstOrNew(['user_id' => $user->id, 'plan_id' => $this->id]);

		$notify = ($membership_user->exists) ? 0 : $notify;

		// $membership_user = new MembershipUser();
		$membership_user->plan_id = $this->id;
		$membership_user->user_id = $user->id;
		$membership_user->total_day = $this->total_day;
		$membership_user->expire_at = $this->billing_period == 'lifetime_free' ? null : date("Y-m-d H:i:s",strtotime('+ '. $this->total_day .' days'));
		$membership_user->started_at = date("Y-m-d H:i:s");
		$membership_user->status_id = $status_id;
		$membership_user->is_lifetime = $this->billing_period == 'lifetime_free' ? 1 : 0;
		$membership_user->payment_method = $payment_method;
	
		$membership_user->payment_details = json_encode($payment_details);
	
		/*$membership_user->total = ($this->special ? $this->special : $this->price);*/
		$discount = $this->getPlanPrice($user->id, $this);
		$membership_user->total = $discount['price'];

		$membership_user->bonus_commission = (float)$this->bonus;
		$membership_user->created_at = date("Y-m-d H:i:s");
		$membership_user->next_transaction = date("Y-m-d",strtotime('+1 month'));

		MembershipUser::where('user_id', $user->id)->update(['is_active'=>0]);
		$membership_user->is_active = 1;
		
		$inqueue_users = MembershipUser::select('id', 'user_id', 'plan_id', 'created_at')->where('plan_id', $this->id)->where('status_id', 1)->get()->unique('user_id')->where('percentage_rank', '<', 100)->pluck('user_id')->toArray();
		log_message('error', 'sendBeltExitedMail inqueue_users:' . print_r($inqueue_users, TRUE));

		$membership_user->save();

		$user->plan_id = $membership_user->id;
		$user->save();

		$history = new MembershipHistory();
		$history->buy_id = $membership_user->id;
		$history->status_id = $status_id;
		$history->comment = $comment;
		$history->created_at = date("Y-m-d H:i:s");
		$history->save();

		if ($notify) {
			$cdate = date('Y-m-d H:i:s');
			$notification = new Notification();
			$notification->notification_url          = '/membership/membership_purchase_edit/'.$membership_user->id;
			$notification->notification_type         =  'membership_order';
			$notification->notification_title        =  'New Subscription Buy From '.$user->username;
			$notification->notification_viewfor      =  'admin';
			$notification->notification_actionID     =  $membership_user->id;
			$notification->notification_description  =  $user->firstname.' '.$user->lastname.' buy a new subscription at affiliate program on '.$cdate;
			$notification->notification_is_read      =  '0';
			$notification->notification_created_date =  $cdate;
			$notification->notification_ipaddress    =  $_SERVER['REMOTE_ADDR'];
			$notification->save();
		}

		if((float)$this->bonus > 0){
			$ci =& get_instance(); 
			$ci->Wallet_model->addTransaction(array(
				'status'       => 1,
				'user_id'      => (int)$membership_user->user_id,
				'amount'       => (float)$this->bonus,
				'comment'      => 'Welcome Bonus',
				'type'         => 'welcome_bonus',
				'reference_id' => $membership_user->id,
				'group_id'     => '',
				'is_vendor'    => 0,
			));
		}

		if ($notify) {
			$ci =& get_instance(); 
			MembershipPlan::senBuyMail($membership_user->id,$ci);
		}
		
		$belt_exited_status = $this->sendBeltExitedMail($membership_user, $inqueue_users);

		return $membership_user;
	}

	public function getBillingPeriodTextAttribute()
    {

    	if($this->billing_period == 'custom'){
    		if($this->custom_period == 7){
    			return 'Per Week';
    		}
    		else if($this->custom_period == 30){
    			return 'Per Month';
    		}
    		else {
				return 'Per '. $this->custom_period ." Days";
    		}
    	}
    	else if($this->billing_period == 'lifetime_free') {
    		return 'One Time';
    	}

        return 'Per '. ucfirst($this->billing_period);
    }

    public function getBillingPeriodPlainAttribute()
    {

    	if($this->billing_period == 'lifetime_free'){
    		return 'Lifetime';
    	}

        return ucfirst($this->billing_period);
    }

    public static function getPaymentMethods($filter = array()){
		$files = array();
		foreach (glob(APPPATH."/membership_payment/controllers/*.php") as $file) {
		  	$files[] = $file;
		}
		$methods = array_unique($files);
	

		$payment_methods = array();
		foreach ($methods as $key => $filename) {
			$code = basename($filename, ".php");
			$pdata = self::getDetails($code, $filter);
			if($pdata){
				$payment_methods[$code] = $pdata;
			}
		}

		return $payment_methods;
	}

	public static function getDetails($code, $extra = array()){
		$filename = APPPATH."/membership_payment/controllers/{$code}.php";
		if(is_file($filename)){
			$ci =& get_instance();

			require $filename;
			$obj = new $code($ci);

			$pdata = array();
			$pdata['title'] = $obj->title;
			$pdata['icon'] = "application/membership_payment/logo/{$code}.png";
			$pdata['website'] = $obj->website;
			$pdata['code']  = $code;

			$setting_data = $ci->Product_model->getSettings('membershippayment_'.$code);
			$pdata['status']  = 0;
			$pdata['is_install']  = 0;
			$pdata['setting_data']  = $setting_data;

			if (isset($extra['get_user_setting']) && $extra['get_user_setting']) {
				$pdata['user_setting'] = $ci->getUserSettings($code);
			}

			if (isset($setting_data['status']) && $setting_data['status']) {
				$pdata['status']  = 1;
			}

			if (isset($setting_data['is_install']) && $setting_data['is_install']) {
				$pdata['is_install']  = 1;
			}

			return $pdata;
		}

		return false;
	}

	public static function changeInstallUninstall($code){
		$path = APPPATH."/membership_payment/controllers/{$code}.php";
		if(is_file($path)){
			$ci =& get_instance();
			$setting_data = $ci->Product_model->getSettings('membershippayment_'.$code);
			$setting_data['is_install'] = (int)$setting_data['is_install'] == 1 ? 0 : 1;

			if($setting_data['is_install'] == 0){
				$setting_data = [
					'is_install' => 0,
				];
				$ci->Setting_model->clear('membershippayment_'.$code);
			}

			$ci->Setting_model->save('membershippayment_'.$code, $setting_data);

			require $path;
			$class = new $code($ci);

			$ci->session->set_flashdata('success', 'Payment Method '. ((int)$setting_data['is_install'] == 1 ? 'Installed' : 'Un-Installed') .' Successfully');

			if((int)$setting_data['is_install'] == 1 && method_exists($code,'onInstall')){
				$class->onInstall();
			}
			if((int)$setting_data['is_install'] == 0 && method_exists($code,'onUnInstall')){
				$class->onUnInstall();
			}
		}
	}

	public static function getEditPage($code){
		$filename = APPPATH."/membership_payment/controllers/{$code}.php";
		if(is_file($filename)){	

			$ci =& get_instance();

			$data['setting_data'] = $ci->Product_model->getSettings('membershippayment_'.$code);
			return [self::getAdminSettings($code,$data),$data];
		}

		return false;
	}

	private static function getAdminSettings($code,$data = array()){
		$data['status_list'] = self::$status_list;
		 
		$file = APPPATH."/membership_payment/admin_settings/{$code}.php";
	

		if(is_file($file)){
			ob_start();
			extract($data);
			include $file;
			$output = ob_get_contents();
			ob_clean();
	    	return $output;
		}
	}

	public static function getConfirm($code,$data = array()){
		$file = APPPATH."/membership_payment/confirm_view/{$code}.php";
		 
		if(is_file($file)){
			ob_start();
			extract($data);
			include $file;
			$output = ob_get_contents();
			ob_clean();
	    	return $output;
		}
	}

	private static function getUserSettings($code,$data = array()){
		$file = APPPATH."/membership_payment/user_settings/{$code}.php";
		if(is_file($file)){
			ob_start();
			extract($data);
			include $file;
			$output = ob_get_contents();
			ob_clean();
	    	return $output;
		}
	}
}