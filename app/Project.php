<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function tasks(){
        return $this->hasMany('App\ProjectTask');
    }

    public function client(){
        return $this->belongsTo('App\Client');
    }
}
