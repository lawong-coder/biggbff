<?php

namespace App;

class MembershipUser extends \Illuminate\Database\Eloquent\Model

{

	public $table = 'membership_user';

	public $timestamps = false;

	/**
     * fillable column name goes here
     *
     * @var array
     */
    public $fillable = [
        'plan_id',
        'user_id',
        'total_day',
        'expire_at',
        'started_at',
        'status_id',
        'is_active',
        'is_lifetime',
        'payment_method',
        'payment_details',
        'total',
        'bonus_commission',
        'expire_mail_sent',
        'next_transaction'
    ];

	public static $balance_log_type = 'referral_commission';

	public static function boot() {
		parent::boot();

		static::saved(function($model) {
			if ($model->isDirty('status_id'))
			{
				if(($model->status_id == 1) && ($model->total > 0) && isset($model->user->refid) && !empty($model->user->refid) && (! in_array($model->user->refid, [0, 1])))
				{
					//  && ($model->user->plan_id != 0) && ($model->user->reg_approved == 1)
					// $is_active = MembershipUser::where(['status_id' => 1, "user_id" => $model->user_id])->count();

					//  && (isset($model->user->reffered_by->reg_approved)) && ($model->user->reffered_by->reg_approved == 1)

					$is_active = MembershipUser::where(['status_id' => 1, "user_id" => $model->user->refid])->count();

					if($is_active)
					{
						static::handleReferralCommission($model);
					}
				}
			}

		});
	}

	public static function handleReferralCommission($model)
	{
		$ci =& get_instance();

		$commonSetting = array('referlevel_1','referlevel_2','referlevel_3','referlevel_4','referlevel_5','referlevel_6','referlevel_7','referlevel_8','referlevel_9','referlevel_10','referlevel');

		foreach ($commonSetting as $key => $value) {
			$setting[$value] = $ci->Product_model->getSettings($value);
		}

		$max_level = isset($setting['referlevel']['levels']) ? (int)$setting['referlevel']['levels'] : 0;
		$sale_type = isset($setting['referlevel']['sale_type']) ? $setting['referlevel']['sale_type'] : 'percentage';

		if($max_level > 0)
		{
			$level = $ci->Product_model->getMyLevel($model->user_id);

			if(!empty($level))
			{
				for ($i=1; $i <= $max_level ; $i++) {

					$key = 'level'.$i;
					$user_referlevel = 'referlevel_'.$i;

					if(isset($level[$key]) && !empty($level[$key]) && isset($setting[$user_referlevel]) && isset($setting[$user_referlevel]['sale_commition']) && !empty($setting[$user_referlevel]['sale_commition']))
					{
						$temp_user_id = $level[$key];
						$commission = $setting[$user_referlevel]['sale_commition'];

						$plan_price = $model->total;
						$plan = MembershipPlan::find($model->plan_id);
						$receiver_user = User::find($temp_user_id);

						if(!empty($receiver_user) && ($receiver_user->reg_approved == 1))
						{
							if(isset($plan) && !empty($plan))
							{
								$discount = $plan->getPlanPrice($temp_user_id, $plan);
								
								if(isset($discount['is_discount']) && $discount['is_discount'] && isset($discount['price'])) {
									$plan_price = $discount['price'];
								}
							}

							$to_add = 0;
			       			if($sale_type == 'percentage')
			       				$to_add = (($plan_price * $commission) / 100);
			       			else
			       				$to_add = $commission;

			       			$is_added = EWallet::add_ewallet($temp_user_id, $to_add);

			       			if($is_added)
			       			{
			       				$model->userBalanceLog()->create([
		                            'sender_id' => $model->user_id,
		                            'receiver_id' => $temp_user_id,
		                            'amount' => $to_add,
		                            'date' => date('Y-m-d H:i:s'),
		                            'commision' => $commission,
		                            'commision_type' => $sale_type,
		                            'type' => self::$balance_log_type,
		                            'status' => 1
		                        ]);
			       			}
						}
					}
					else
					{
						break;
					}
				}
			}
		}
	}

	public function userBalanceLog()
	{
		return $this->morphMany(UserBalanceLog::class, 'loggable', 'loggable_type', 'loggable_id', 'id');
	}

	public function isExpire(){

		if ($this->is_lifetime) {

			return false;

		}



		if($this->status_id != 1){

			return 2;

		}



		$curdate= strtotime(date("Y-m-d H:i:s"));

		$mydate= strtotime($this->expire_at);



		return $curdate > $mydate;

	}



	public function plan(){

		return $this->hasOne(MembershipPlan::class, 'id','plan_id');

	}



	public function bonusData(){

		return Wallet::where("type",'welcome_bonus')->where('reference_id',$this->id)->first();

	}



	public function user(){

		return $this->hasOne(User::class, 'id','user_id');

	}



	public function status_history(){

		return MembershipHistory::where("buy_id", $this->id)->get();

	}



	public function getActiveTextAttribute(){

		if ($this->is_active) {

			return "<span class='badge badge-success'>Active</span>";

		} else {

			return "<span class='badge badge-warning'>Inactive</span>";

		}

	}



	public function getExpireTextAttribute()

    {

    	if($this->expire_at != ''){

    		return dateFormat($this->expire_at,'d/m/Y');

    	}



    	if($this->is_lifetime){

        	return 'Never';

    	}



        return '';

    }



	public function getStatusTextAttribute(){
		$remain = $this->remainDay();
		if($remain == 'plan is expired'){
			return '<span class="badge badge-danger">Expire</span>';
		}

		if (isset(MembershipPlan::$status_list[$this->status_id])) {
			return '<span class="badge '. MembershipPlan::$status_color[$this->status_id] .'">'.MembershipPlan::$status_list[$this->status_id].'</span>';
		} else {
			return "Unknown";
		}
	}

	public function strToTimeRemains() {
		$isExpired = $this->isExpire();
		if ((int)$this->is_lifetime == 1 || $isExpired == 2) {
			return 0;
		}
		$started_at = strtotime(date('Y-m-d H:i:s'));
		$expire_at = strtotime($this->expire_at);
		$datediff = $expire_at - $started_at;
		return $datediff;
	}

	public function remainDay(){
		$isExpired = $this->isExpire();

		if ((int)$this->is_lifetime == 1 || $isExpired == 2) {
			return 'Not Available';
		}

		$started_at = strtotime(date('Y-m-d H:i:s'));
		$expire_at = strtotime($this->expire_at);
		$datediff = $expire_at - $started_at;

		if($datediff <= 0) {
			return 'Plan Is Expired';
		}

		$days = floor($datediff / (24*60*60));
		$hours = floor(($datediff - ($days*24*60*60)) / (60*60));
		$minutes = floor(($datediff - ($days*24*60*60)-($hours*60*60)) / 60);

		$reaminsTimeString = "";
		$reaminsTimeString .= ($days > 0) ? $days.' Days ' : "";
		$reaminsTimeString .= ($hours > 0) ? $hours.' Hours ' : "";
		$reaminsTimeString .= ($minutes > 0) ? $minutes.' Minutes Remains' : " 1 Minutes Remains";

		return $reaminsTimeString;
	}

	public function getCompletionRank()
    {
    	$plan = MembershipPlan::find($this->plan_id);
    	$belt_size = isset($plan->belt_size) ? $plan->belt_size : 0;

    	// $user_count = MembershipUser::where("plan_id", $this->plan_id)->where("status_id", 1)->where("user_id", '!=', $this->user_id)->whereRaw('created_at > "' . $this->created_at .'"')->count();

    	// Logic 1
    	/*$user_count = ($user_count >= 9) ? 100 : ($user_count + 1) * 10;*/

    	// Logic 2
    	/*$progress = 0;

    	if($belt_size > 0)
    	{
    		$progress = ((($user_count + 1) / $belt_size) * 100);
    	}*/

    	// Logic 3
    	/*$progress = 0;

    	if($belt_size > 0)
    	{
    		$position = $user_count + 1;
    		$progress = (($position / (($position * $belt_size) + $belt_size)) * 100);

    		// pred($position, $progress, round($progress, 2));
    	}

        return round($progress, 2);*/

        // Logic 4
        
        $total_users = MembershipUser::where('plan_id', $this->plan_id)->where('status_id', 1)->orderBy('created_at')->get()->unique('user_id')->count();

        $user_count = MembershipUser::where("plan_id", $this->plan_id)->where("status_id", 1)->where("user_id", '!=', $this->user_id)->whereRaw('created_at > "' . $this->created_at .'"')->get()->unique('user_id')->count();
        $position = $user_count + 1;

        if($total_users > $belt_size)
        {
        	$plans_to_add = [
        		'1' => 9,
        		'2' => 9,
        		'3' => 9,
        		'4' => 15
        	];

        	$to_add = isset($plans_to_add[$this->plan_id]) ? (int)$plans_to_add[$this->plan_id] : 2;

        	$temp = $total_users - $position;
        	$belt_size = $belt_size + ($temp * $to_add);
        }
        // pred($belt_size, $total_users, $position);
    	// $belt_size = round($belt_size);

        $progress = ($position / $belt_size) * 100;

        return round($progress, 2);
    }

    public function getPercentageRankAttribute()
    {
    	return $this->getCompletionRank();
    }
}