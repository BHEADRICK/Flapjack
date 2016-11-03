<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 */
class Setting extends Model
{


    protected $primaryKey = 'slug';

	public $timestamps = false;

    protected $fillable = [
        'value'
    ];

    protected $guarded = [];

        
}