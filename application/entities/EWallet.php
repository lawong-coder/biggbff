<?php

namespace App;

class EWallet extends \Illuminate\Database\Eloquent\Model
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
	public $table = 'e_wallet';

	/**
     * fillable column name goes here
     *
     * @var array
     */
    public $fillable = [
        'user_id',
        'balance'
    ];

    /**
     * Increment ewallet values of user.
     */
	public static function add_ewallet($user_id, $total)
	{
		$userEWallet = EWallet::firstOrNew(['user_id' => $user_id]);

		if($userEWallet)
		{
			$userEWallet->balance = $userEWallet->balance + $total;

			if($userEWallet->save())
	        {
	            return true;
	        }
		}

	    return false;
	}

	/**
     * Decrement ewallet values of user.
     */
    public static function remove_ewallet($user_id, $total)
    {
        $usersEWallet = EWallet::where('user_id', $user_id)->first();

        if($usersEWallet)
        {
            $usersEWallet->balance = ($usersEWallet->balance - $total);

            if($usersEWallet->save())
            {
                return true;
            }
        }

        return false;
    }
}