<?php
namespace App;

class WithdrawRequest extends \Illuminate\Database\Eloquent\Model
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
	public $table = 'withdraw_requests';

	/**
     * fillable column name goes here
     *
     * @var array
     */
    public $fillable = [
        'user_id',
        'amount',
        'date',
        'withdraw_from',
        'withdraw_to',
        'bank_name',
        'account_no',
        'account_holder_name',
        'paypal_email',
        'status',
        'remarks'
    ];

	public static $balance_log_type = 'withdraw_request';

	public function user(){

		return $this->belongsTo(User::class, 'user_id');
	}

	public function userBalanceLog()
	{
		return $this->morphMany(UserBalanceLog::class, 'loggable', 'loggable_type', 'loggable_id', 'id');
	}
}