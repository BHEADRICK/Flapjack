<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectUpdate
 */
class ProjectUpdate extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'project_id',
        'name',
        'created'
    ];

    protected $guarded = [];

        
}