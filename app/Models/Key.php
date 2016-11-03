<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Key
 */
class Key extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'key',
        'level',
        'note',
        'date_created',
        'is_private_key',
        'ip_addresses'
    ];

    protected $guarded = [];

        
}