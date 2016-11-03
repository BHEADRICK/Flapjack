<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvoiceRowsTax
 */
class InvoiceRowsTax extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'tax_id',
        'invoice_row_id'
    ];

    protected $guarded = [];

        
}