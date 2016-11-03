<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectExpense
 */
class ProjectExpense extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'project_id',
        'payment_source_id',
        'invoice_id',
        'invoice_number',
        'due_date',
        'category_id',
        'supplier_id',
        'name',
        'description',
        'qty',
        'rate',
        'tax_id',
        'payment_details',
        'owner_id',
        'invoice_item_id',
        'receipt'
    ];

    protected $guarded = [];

        
}