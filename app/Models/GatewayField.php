<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GatewayField
 */
class GatewayField extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'gateway',
        'field',
        'value',
        'type'
    ];

    protected $guarded = [];

        
}