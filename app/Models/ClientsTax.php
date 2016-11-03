<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientsTax
 */
class ClientsTax extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'client_id',
        'tax_id',
        'tax_registration_id'
    ];

    protected $guarded = [];

        
}