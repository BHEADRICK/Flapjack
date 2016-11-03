<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 */
class Ticket extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'client_id',
        'assigned_user_id',
        'status_id',
        'priority_id',
        'subject',
        'resolved',
        'created',
        'owner_id',
        'is_billable',
        'is_paid',
        'invoice_id',
        'is_archived'
    ];

    protected $guarded = [];

        
}