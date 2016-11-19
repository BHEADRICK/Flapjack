<?php

namespace App\Models;

use Hashids\Hashids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PartialPayment
 */
class PartialPayment extends Model
{

    public function save(array $options = []){

        $hashids = new Hashids();

        $this->unique_id = $hashids->encode(time());
        parent::save();
    }

    public $timestamps = true;

    protected $fillable = [
        'unique_invoice_id',
        'amount',
        'gateway_surcharge',
        'is_percentage',
        'due_date',
        'notes',
        'txn_id',
        'payment_gross',
        'item_name',
        'is_paid',
        'payment_date',
        'payment_type',
        'payer_status',
        'payment_status',
        'unique_id',
        'payment_method',
        'key',
        'improved',
        'transaction_fee'
    ];

    protected $guarded = [];

        
}