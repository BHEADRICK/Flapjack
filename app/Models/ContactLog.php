<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactLog
 */
class ContactLog extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'client_id',
        'user_id',
        'method',
        'contact',
        'subject',
        'content',
        'sent_date',
        'duration'
    ];

    protected $guarded = [];

        
}