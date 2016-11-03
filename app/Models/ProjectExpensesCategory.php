<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectExpensesCategory
 */
class ProjectExpensesCategory extends Model
{


    public $timestamps = true;

    protected $fillable = [
        'parent_id',
        'name',
        'description',
        'notes',
        'deleted',
        'status'
    ];

    protected $guarded = [];

        
}