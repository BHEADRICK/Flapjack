<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plugin
 */
class Plugin extends Model
{


    protected $primaryKey = 'slug';

	public $timestamps = false;

    protected $fillable = [
        'value',
        'version'
    ];

    protected $guarded = [];

        
}