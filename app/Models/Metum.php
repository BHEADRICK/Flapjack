<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Metum
 */
class Metum extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'company',
        'phone',
        'custom_background',
        'last_visited_version'
    ];

    protected $guarded = [];

        
}