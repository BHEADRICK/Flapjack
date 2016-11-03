<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketStatus
 */
class TicketStatus extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'title',
        'background_color',
        'font_color',
        'text_shadow',
        'box_shadow'
    ];

    protected $guarded = [];

        
}