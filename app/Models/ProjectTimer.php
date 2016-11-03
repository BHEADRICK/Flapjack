<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectTimer
 */
class ProjectTimer extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'start_timestamp',
        'last_modified_timestamp',
        'current_seconds',
        'task_id',
        'user_id',
        'pauses_json',
        'is_paused',
        'is_over'
    ];

    protected $guarded = [];

        
}