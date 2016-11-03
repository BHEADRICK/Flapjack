<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProposalSection
 */
class ProposalSection extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'proposal_id',
        'title',
        'subtitle',
        'contents',
        'key',
        'parent_id',
        'page_key',
        'section_type'
    ];

    protected $guarded = [];

        
}