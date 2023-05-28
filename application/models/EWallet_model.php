<?php

class EWallet_model extends MY_Model {
	public $request_status = array(
		'0' => 'Pending',
		'1' => 'Complete',
		'2' => 'Proccessing',
		'3' => 'Cancel',
		'4' => 'Decline',
	);
	public $status = array(
		'0' => 'ON HOLD',
		'1' => 'IN WALLET',
		'2' => 'REQUEST SENT',
		'3' => 'ACCEPT',
		'4' => 'DECLINE',
	);

	public function CronMonthlyHostingTransaction(){	     

	    $today = date('Y-m-d');
	    $month_after = date('Y-m-d', strtotime('+1 month'));

	    $results = App\MembershipUser::where(['status_id' => 1, 'expire_at' => NULL])->whereDate('next_transaction', $today)->get();

	    if(count($results) > 0)
	    {
	    	foreach ($results as $key => $result) {

	    		if(isset($result->plan->hosting_cost) && ($result->plan->hosting_cost > 0))
	    		{
	    			$transaction = App\MonthlyPlanHostTransaction::create([
						'membership_user_id' => $result->id,
						'user_id' => $result->user_id,
						'date' => date('Y-m-d H:i:s'),
						'amount' => $result->plan->hosting_cost,
						'status' => 1
					]);
	    			if($transaction)
	       			{
	    				$is_removed = App\EWallet::remove_ewallet($transaction->user_id, $transaction->amount);

	       				$transaction->userBalanceLog()->create([
                            'sender_id' => $transaction->user_id,
                            'receiver_id' => NULL,
                            'amount' => $transaction->amount,
                            'date' => date('Y-m-d H:i:s'),
                            'commision' => NULL,
                            'commision_type' => NULL,
                            'type' => App\MonthlyPlanHostTransaction::$balance_log_type,
                            'status' => 1
                        ]);
	       			}
	    		}
	    	}

	    	App\MembershipUser::where(['status_id' => 1, 'expire_at' => NULL])->whereDate('next_transaction', $today)->update(['next_transaction' => $month_after]);

	    	return true;
	    }

		return false;
	}
}
?>