<?php

namespace App;

class MonthlyPlanHostTransaction extends \Illuminate\Database\Eloquent\Model
{
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = true;

	/**
     * The table associated with the model.
     *
     * @var string
     */
	public $table = 'monthly_plan_host_transactions';

    public static $balance_log_type = 'monthly_hosting_fees';

	/**
     * fillable column name goes here
     *
     * @var array
     */
    public $fillable = [
        'membership_user_id',
        'user_id',
        'date',
        'amount',
        'status'
    ];

    public function membership_user(){
        return $this->belongsTo(MembershipUser::class, 'membership_user_id');
    }

    public function userBalanceLog()
    {
        return $this->morphMany(UserBalanceLog::class, 'loggable', 'loggable_type', 'loggable_id', 'id');
    }
}