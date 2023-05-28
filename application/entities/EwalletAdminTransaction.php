<?php
namespace App;

class EwalletAdminTransaction extends \Illuminate\Database\Eloquent\Model
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
	public $table = 'ewallet_admin_transaction';

	/**
     * fillable column name goes here
     *
     * @var array
     */
    public $fillable = [
        'admin_id',
        'user_id',
        'amount',
        'comment',
        'status'
    ];

	public static $balance_log_type = 'admin_transaction';

	public function user(){

		return $this->belongsTo(User::class, 'user_id');
	}

	public function userBalanceLog()
	{
		return $this->morphMany(UserBalanceLog::class, 'loggable', 'loggable_type', 'loggable_id', 'id');
	}
}