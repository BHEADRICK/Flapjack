<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientsMetum
 */
class ClientsMetum extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'client_id',
        'label',
        'slug',
        'value'
    ];

    protected $guarded = [];

        
}