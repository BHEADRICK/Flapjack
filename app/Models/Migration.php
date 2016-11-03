<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Migration
 */
class Migration extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'migration',
        'batch'
    ];

    protected $guarded = [];

        
}