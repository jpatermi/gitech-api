<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    /**
    * Se obtienen todas las Direcciones que tiene una Provincia.
    */
    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    /**
    * Se obtiene la Ciudad a la que pertenece la Provincia.
    */
    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
