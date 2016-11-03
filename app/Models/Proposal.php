<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proposal
 */
class Proposal extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'unique_id',
        'created',
        'last_sent',
        'last_status_change',
        'last_viewed',
        'invoice_id',
        'project_id',
        'client_id',
        'title',
        'status',
        'proposal_number',
        'client_company',
        'client_address',
        'client_name',
        'is_viewable',
        'owner_id',
        'is_archived'
    ];

    protected $guarded = [];

        
}