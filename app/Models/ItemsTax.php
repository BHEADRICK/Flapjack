<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemsTax
 */
class ItemsTax extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'tax_id',
        'item_id'
    ];

    protected $guarded = [];

        
}