<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 */
class Comment extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'client_id',
        'user_id',
        'user_name',
        'created',
        'item_type',
        'item_id',
        'comment',
        'is_private'
    ];

    protected $guarded = [];

        
}