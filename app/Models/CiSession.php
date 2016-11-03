<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CiSession
 */
class CiSession extends Model
{


    protected $primaryKey = 'session_id';

	public $timestamps = false;

    protected $fillable = [
        'ip_address',
        'user_agent',
        'last_activity',
        'user_data'
    ];

    protected $guarded = [];

        
}