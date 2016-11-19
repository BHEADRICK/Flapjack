<?php

namespace App\Models;

use Hashids\Hashids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoice
 */
class Invoice extends Model
{

    public function save(array $options=[])
    {
        // code before save
        $hashids = new Hashids();

        $this->unique_id = $hashids->encode(time());

        parent::save($options);
        //code after save
    }

    public $timestamps = true;

    protected $fillable = [
        'unique_id',
        'client_id',
        'amount',
        'due_date',
        'invoice_number',
        'notes',
        'description',
        'txn_id',
        'payment_gross',
        'item_name',
        'payment_hash',
        'payment_status',
        'payment_type',
        'payment_date',
        'payer_status',
        'type',
        'date_entered',
        'is_paid',
        'is_recurring',
        'frequency',
        'auto_send',
        'recur_id',
        'currency_id',
        'exchange_rate',
        'proposal_id',
        'send_x_days_before',
        'has_sent_notification',
        'last_sent',
        'next_recur_date',
        'last_viewed',
        'is_viewable',
        'owner_id',
        'project_id',
        'status',
        'last_status_change',
        'is_archived',
        'auto_charge'
    ];

    protected $guarded = [];

    public function client(){
    return $this->belongsTo('App\Models\Client');
}
public function project(){
    return $this->belongsTo('App\Models\Project');
}

public function partial_payments(){
    return $this->hasmany('app\Models\PartialPayment');
}
public function getDateEnteredAttribute($value){
    if(is_numeric($value)){
        return date('Y-m-d', $value);
    }else{
        return $value;
    }

}
public function getStatusAttribute($status){
if(empty($status)){
    if($this->is_paid){
        return 'Paid';
    }else{
        if(time()>$this->due_date){
            return 'Overdue';
        }else{
            return 'Awaiting Payment';
        }
    }


}
}

        
}