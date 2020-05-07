<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
    * Se obtienen todas las Provincias de un Pais.
    */
    public function provinces()
    {
        return $this->hasMany('App\Province');
    }

    /**
    * Se obtiene el Usuario que creó este País.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
