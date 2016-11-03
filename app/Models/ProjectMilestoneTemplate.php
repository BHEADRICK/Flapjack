<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectMilestoneTemplate
 */
class ProjectMilestoneTemplate extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'project_id',
        'assigned_user_id',
        'color',
        'is_viewable',
        'order'
    ];

    protected $guarded = [];

        
}