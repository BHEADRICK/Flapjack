<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketPriority
 */
class TicketPriority extends Model
{


    public $timestamps = false;

    protected $fillable = [
        'title',
        'background_color',
        'font_color',
        'text_shadow',
        'box_shadow',
        'default_rate'
    ];

    protected $guarded = [];

        
}