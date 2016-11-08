<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 */
class Notification extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'context',
        'context_id',
        'message',
        'seen',
        'created',
        'action',
        'user_id',
        'client_id'
    ];

    protected $guarded = [];


    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function invoice(){
        return $this->belongsTo('App\Models\Invoice');
    }
}