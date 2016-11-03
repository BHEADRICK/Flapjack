<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function tasks(){
        return $this->hasMany('App\Models\ProjectTask');
    }

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }
}
