<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientsCreditAlteration
 */
class ClientsCreditAlteration extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'client_id',
        'amount'
    ];

    protected $guarded = [];

        
}