<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    public function projects(){
        return $this->hasMany('App\Models\Project');
    }

    public function invoices(){
        return $this->hasMany('App\Models\Invoice');
    }

    public function getDisplayNameAttribute(){
      return  sprintf('%s %s - %s', $this->first_name, $this->last_name, $this->company);
    }

    public function getPaidAttribute(){

    }

    public function getUnpaidAttribute(){

    }



    public function getActiveProjectsAttribute(){
       return  $this->projects->where('completed',0)->where('is_archived', 0);
    }

    public function getArchivedProjectsAttribute(){
      return  $this->projects->where('completed',0)->where('is_archived', 1);
    }

}
