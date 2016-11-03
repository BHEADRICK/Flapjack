<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectTime
 */
class ProjectTime extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'project_id',
        'task_id',
        'user_id',
        'start_time',
        'end_time',
        'minutes',
        'date',
        'note',
        'invoice_item_id',
        'date_updated'
    ];

    protected $guarded = [];

        
}