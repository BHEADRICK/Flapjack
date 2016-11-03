<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientTicketSupportRateMatrix
 */
class ClientTicketSupportRateMatrix extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'client_id',
        'priority_id',
        'rate',
        'tax_id'
    ];

    protected $guarded = [];

        
}