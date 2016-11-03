<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectExpensesSupplier
 */
class ProjectExpensesSupplier extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'notes',
        'deleted',
        'status'
    ];

    protected $guarded = [];

        
}