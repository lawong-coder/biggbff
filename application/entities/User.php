<?php
namespace App;
class User extends \Illuminate\Database\Eloquent\Model
{
	public $timestamps = false;

	public static function auth($type = 'user'){
		$CI =& get_instance();
		$user = false;

		$userdetails = $CI->session->userdata($type);
		if (isset($userdetails['id'])) {
			$user = self::find((int)$userdetails['id']);
		}

		return $user;
	}

	public function plan(){
		return MembershipUser::find($this->plan_id);
	}

	public function reffered_by(){

		return $this->belongsTo(User::class, 'refid');
	}

	public function eWallet(){

		return $this->hasOne(EWallet::class, 'user_id', 'id');
	}

	public function country(){
		return $this->belongsTo(Country::class, 'Country');
	}

	public function default_plan(){
		return $this->belongsTo(MembershipPlan::class, 'assigned_plan');
	}


	public function purchased_membership_plans(){
		return $this->hasMany(MembershipUser::class, 'user_id');
	}

	/**
     * Create default settings for user
     *
     * @param  [object] user
     * @return array
     */
    public static function createDefaultSettings($user_id)
    {
        // Create e-wallet
        EWallet::firstOrCreate([
            'user_id' => $user_id
        ],[
            'user_id' => $user_id
        ]);
    }
}