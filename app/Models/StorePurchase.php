<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StorePurchase
 */
class StorePurchase extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'plugin_unique_id',
        'plugin_title',
        'plugin_type_id',
        'filepath',
        'current_version',
        'latest_version',
        'changelog_since_current_version',
        'date_added'
    ];

    protected $guarded = [];

        
}