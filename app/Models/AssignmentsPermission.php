<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AssignmentsPermission
 */
class AssignmentsPermission extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'client_id',
        'item_type',
        'item_id',
        'can_all',
        'can_create',
        'can_read',
        'can_update',
        'can_delete',
        'can_generate_from_project',
        'can_send'
    ];

    protected $guarded = [];

        
}