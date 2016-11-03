<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmailTemplate
 */
class EmailTemplate extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'type',
        'name',
        'subject',
        'content',
        'days',
        'created'
    ];

    protected $guarded = [];

        
}