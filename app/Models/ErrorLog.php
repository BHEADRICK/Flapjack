<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ErrorLog
 */
class ErrorLog extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'subject',
        'occurrences',
        'first_occurrence',
        'latest_occurrence',
        'contents',
        'is_reported',
        'notification_email',
        'is_reportable',
        'error_id',
        'url'
    ];

    protected $guarded = [];

        
}