<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 */
class Permission extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'group_id',
        'module',
        'roles'
    ];

    protected $guarded = [];

        
}