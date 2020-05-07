<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    /**
    * Se obtienen todas las Ciudades que tiene una Provincia.
    */
    public function cities()
    {
        return $this->hasMany('App\City');
    }

    /**
    * Se obtiene el País al que pertenece la Provincia.
    */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    /**
    * Se obtiene el Usuario que creó esta Provincia.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
