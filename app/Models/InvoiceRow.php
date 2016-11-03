<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvoiceRow
 */
class InvoiceRow extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'unique_id',
        'name',
        'description',
        'qty',
        'tax_id',
        'rate',
        'total',
        'sort',
        'type',
        'item_type_table',
        'item_type_id',
        'discount',
        'discount_is_percentage'
    ];

    protected $guarded = [];

        
}