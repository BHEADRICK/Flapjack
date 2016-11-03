<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectMilestone
 */
class ProjectMilestone extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'project_id',
        'assigned_user_id',
        'color',
        'target_date',
        'is_viewable',
        'order'
    ];

    protected $guarded = [];

        
}