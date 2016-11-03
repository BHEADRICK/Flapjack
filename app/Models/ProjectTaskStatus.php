<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectTaskStatus
 */
class ProjectTaskStatus extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'title',
        'background_color',
        'font_color',
        'text_shadow',
        'box_shadow'
    ];

    protected $guarded = [];

        
}