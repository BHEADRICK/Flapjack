<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 */
class Currency extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'name',
        'code',
        'rate',
        'format'
    ];

    protected $guarded = [];

        
}