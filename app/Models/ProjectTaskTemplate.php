<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectTaskTemplate
 */
class ProjectTaskTemplate extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'project_id',
        'parent_id',
        'assigned_user_id',
        'name',
        'rate',
        'hours',
        'notes',
        'is_viewable',
        'milestone_id',
        'order',
        'is_flat_rate',
        'projected_hours',
        'status_id'
    ];

    protected $guarded = [];

        
}