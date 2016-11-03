<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusinessIdentity
 */
class BusinessIdentity extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'site_name',
        'admin_name',
        'mailing_address',
        'notify_email',
        'logo_filename',
        'billing_email',
        'brand_name',
        'show_name_along_with_logo',
        'billing_email_from',
        'notify_email_from',
        'logo_width',
        'logo_height'
    ];

    protected $guarded = [];

        
}