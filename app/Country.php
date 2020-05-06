<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
    * Se obtienen todas las Ciudades de un Pais.
    */
    public function cities()
    {
        return $this->hasMany('App\City');
    }
}
