<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Note
 */
class Note extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'client_id',
        'note',
        'submitted'
    ];

    protected $guarded = [];

        
}