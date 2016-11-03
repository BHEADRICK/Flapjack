<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Assignment
 */
class Assignment extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'item_id',
        'item_type',
        'can_read',
        'can_update',
        'can_delete',
        'can_generate_from_project',
        'can_send'
    ];

    protected $guarded = [];

        
}