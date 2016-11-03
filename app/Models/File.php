<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class File
 */
class File extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'invoice_unique_id',
        'orig_filename',
        'real_filename',
        'download_count'
    ];

    protected $guarded = [];

        
}