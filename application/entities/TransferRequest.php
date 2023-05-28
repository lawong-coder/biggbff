<?php
namespace App;

class TransferRequest extends \Illuminate\Database\Eloquent\Model
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
	public $table = 'transfer_requests';

	/**
     * fillable column name goes here
     *
     * @var array
     */
    public $fillable = [
        'user_id',
        'receiver_id',
        'transfer_from',
        'amount',
        'mobile_no',
        'status'
    ];

	public static $balance_log_type = 'transfer_request';

	public function user(){

		return $this->belongsTo(User::class, 'user_id');
	}

	public function receiver(){

		return $this->belongsTo(User::class, 'receiver_id');
	}

	public function userBalanceLog()
	{
		return $this->morphMany(UserBalanceLog::class, 'loggable', 'loggable_type', 'loggable_id', 'id');
	}
}