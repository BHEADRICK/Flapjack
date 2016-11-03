<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tax
 */
class Tax extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'name',
        'value',
        'reg',
        'is_compound'
    ];

    protected $guarded = [];

        
}