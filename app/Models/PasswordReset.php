<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PasswordReset
 */
class PasswordReset extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'email',
        'token'
    ];

    protected $guarded = [];

        
}