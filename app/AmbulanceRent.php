<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmbulanceRent extends Model
{
    protected $guarded = [];

    public function ambulance(){
        return $this->hasOne('App\AmbulanceService', 'id', 'ambulance_id');
    }

    public function user(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
