<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ActionLog
 */
class ActionLog extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'timestamp',
        'user_id',
        'action',
        'message',
        'item_id'
    ];

    protected $guarded = [];

        
}