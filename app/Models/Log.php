<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Log
 */
class Log extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'uri',
        'method',
        'params',
        'api_key',
        'ip_address',
        'time',
        'authorized',
        'rtime'
    ];

    protected $guarded = [];

        
}