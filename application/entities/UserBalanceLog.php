<?php

namespace App;

class UserBalanceLog extends \Illuminate\Database\Eloquent\Model
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
	public $table = 'user_balance_logs';

	/**
     * fillable column name goes here
     *
     * @var array
     */
    public $fillable = [
        'sender_id',
        'receiver_id',
        'loggable_type',
        'loggable_id',
        'amount',
        'date',
        'commision',
        'commision_type',
        'type',
        'status',
        'operation',
        'is_locked'
    ];

    /**
     * Set the log to morph.
     *
     */
    public function loggable()
    {
        return $this->morphTo();
    }

    public function sender(){
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver(){
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public static function getTransferTypeText($balance_log, $user)
    {
        $text = '';
        $amount = '';

        if(!empty($balance_log) && !empty($user))
        {
            switch ($balance_log->type) {
                case 'referral_commission':
                    if($balance_log->receiver_id == $user->id)
                    {
                        $text = 'Commission';
                        $amount = '<p class="amount mb-0 text-received"><img class="img-responsive" src="' . base_url('assets/images/received_icon.png') . '" /><span>'. c_format($balance_log->amount) . '</span></p>';
                    }
                    break;

                case 'transfer_request':
                    if($balance_log->sender_id == $user->id)
                    {
                        $text = 'Transferred';
                        $amount = '<p class="amount mb-0 text-transferred"><img class="img-responsive" src="' . base_url('assets/images/transferred_icon.png') . '" />'. c_format($balance_log->amount) . '</span></p>';
                    }
                    else
                    {
                        $text = 'Received';
                        $amount = '<p class="amount mb-0 text-received"><img class="img-responsive" src="' . base_url('assets/images/received_icon.png') . '" /><span>'. c_format($balance_log->amount) . '</span></p>';
                    }
                    break;
                
                case 'withdraw_request':
                    $text = 'Withdrawn';
                    $amount = '<p class="amount mb-0 text-transferred"><img class="img-responsive" src="' . base_url('assets/images/transferred_icon.png') . '" /><span>'. c_format($balance_log->amount) . '</span></p>';
                    break;

                case 'admin_transaction':
                    $text = 'Received';
                    $amount = '<p class="amount mb-0 text-received"><img class="img-responsive" src="' . base_url('assets/images/received_icon.png') . '" /><span>'. c_format($balance_log->amount) . '</span></p>';
                    break;

                case 'monthly_hosting_fees':
                    $text = 'Monthly Fees';
                    $amount = '<p class="amount mb-0 text-transferred"><img class="img-responsive" src="' . base_url('assets/images/transferred_icon.png') . '" /><span>'. c_format($balance_log->amount) . '</span></p>';
                    break;

                default:
                    break;
            }
        }

        $result = [
            'text' => $text,
            'amount' => $amount
        ];

        return $result;
    }

    public static function getReferralCommissionTypeText($sender_id, $receiver_id)
    {
        $sender = User::find($sender_id);

        return (isset($sender->refid) && ($sender->refid == $receiver_id)) ? 'Direct' : 'My Team';
    }

    public static function getTransferDetails($balance_log, $user)
    {
        $result = [
            'text' => '',
            'amount' => '',
            'details' => []
        ];  

        if(!empty($balance_log) && !empty($user))
        {
            switch ($balance_log->type) {
                case 'referral_commission':
                    $result['text'] = 'Commission';

                    if(isset($balance_log->loggable) && !empty($balance_log->loggable))
                    {
                        $result['details'] = [
                            'Date' => date('d-m-Y | H:i A', strtotime($balance_log->created_at)),
                            'Amount' => c_format($balance_log->amount),
                            'Referral' => UserBalanceLog::getReferralCommissionTypeText($balance_log->sender_id, $balance_log->receiver_id),
                            'New Member' => ($balance_log->sender) ? $balance_log->sender->firstname . ' ' . $balance_log->sender->lastname : '',
                            'Plan' => isset($balance_log->loggable->plan->name) ? $balance_log->loggable->plan->name : '',
                            'Paid' => isset($balance_log->loggable->total) ? c_format($balance_log->loggable->total) : ''
                        ];
                    }

                    break;

                case 'transfer_request':
                    if($balance_log->sender_id == $user->id)
                    {
                        $result['text'] = 'Transferred';

                        $result['details'] = [
                            'Date' => date('d-m-Y | H:i A', strtotime($balance_log->created_at)),
                            'Amount' => c_format($balance_log->amount),
                            'To' => ($balance_log->receiver) ? $balance_log->receiver->firstname . ' ' . $balance_log->receiver->lastname : '',
                            'Email' => ($balance_log->receiver) ? $balance_log->receiver->email : ''
                        ];
                    }
                    else
                    {
                        $result['text'] = 'Received';
                        $result['details'] = [
                            'Date' => date('d-m-Y | H:i A', strtotime($balance_log->created_at)),
                            'Amount' => c_format($balance_log->amount),
                            'From' => ($balance_log->sender) ? $balance_log->sender->firstname . ' ' . $balance_log->sender->lastname : '',
                            'Email' => ($balance_log->sender) ? $balance_log->sender->email : ''
                        ];
                    }
                    break;
                
                case 'withdraw_request':
                    $result['text'] = 'Withdrawn';

                    if(isset($balance_log->loggable) && !empty($balance_log->loggable))
                    {
                        $result['details'] = [
                            'Date' => date('d-m-Y | H:i A', strtotime($balance_log->created_at)),
                            'Amount' => c_format($balance_log->amount),
                            'Bank Name' => isset($balance_log->loggable->bank_name) ? $balance_log->loggable->bank_name : '',
                            'Bank Account' => isset($balance_log->loggable->account_no) ? $balance_log->loggable->account_no : '',
                            'Account Holder Name' => isset($balance_log->loggable->account_holder_name) ? $balance_log->loggable->account_holder_name : '',
                            'Status' => isset($balance_log->loggable->status) ? new_withdrwal_status($balance_log->loggable->status) : '',
                            'Remark' => isset($balance_log->loggable->remarks) ? $balance_log->loggable->remarks : ''
                        ];
                    }

                    break;

                case 'admin_transaction':
                    $result['text'] = 'Received';

                    $result['details'] = [
                        'Date' => date('d-m-Y | H:i A', strtotime($balance_log->created_at)),
                        'Amount' => c_format($balance_log->amount),
                        'From' => 'BFF Admin',
                        'Email' => ''
                    ];
                    break;

                case 'monthly_hosting_fees':
                    $result['text'] = 'Monthly Fees';

                    $result['details'] = [
                        'Date' => date('d-m-Y | H:i A', strtotime($balance_log->created_at)),
                        'Amount' => c_format($balance_log->amount)
                    ];
                    break;

                default:
                    break;
            }
        }

        /*$result = [
            'text' => $text,
            'amount' => $amount
        ];*/

        return $result;
    }
}