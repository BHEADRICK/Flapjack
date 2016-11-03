<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketPost
 */
class TicketPost extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'ticket_id',
        'user_id',
        'user_name',
        'message',
        'orig_filename',
        'real_filename',
        'created'
    ];

    protected $guarded = [];

        
}