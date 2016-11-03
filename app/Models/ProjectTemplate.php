<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectTemplate
 */
class ProjectTemplate extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'client_id',
        'name',
        'description',
        'rate',
        'currency_id',
        'exchange_rate',
        'is_viewable',
        'is_flat_rate',
        'projected_hours'
    ];

    protected $guarded = [];

        
}