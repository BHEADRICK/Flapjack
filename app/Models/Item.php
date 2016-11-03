<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 */
class Item extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'qty',
        'rate',
        'tax_id',
        'type'
    ];

    protected $guarded = [];

        
}