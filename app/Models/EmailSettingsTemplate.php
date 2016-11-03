<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmailSettingsTemplate
 */
class EmailSettingsTemplate extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'identifier',
        'subject',
        'message',
        'type',
        'template',
        'date_added',
        'date_updated'
    ];

    protected $guarded = [];

        
}