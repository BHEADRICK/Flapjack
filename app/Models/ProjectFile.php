<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectFile
 */
class ProjectFile extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'comment_id',
        'created',
        'orig_filename',
        'real_filename'
    ];

    protected $guarded = [];

        
}