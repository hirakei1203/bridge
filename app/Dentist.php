<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dentist extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function patient(){
        return $this->belongsToMany('App\Dentist');
    }
}
