<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketHistory
 */
class TicketHistory extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'ticket_id',
        'user_id',
        'status_id',
        'user_name',
        'created'
    ];

    protected $guarded = [];

        
}