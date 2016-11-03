<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HiddenNotification
 */
class HiddenNotification extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'notification_id'
    ];

    protected $guarded = [];

        
}