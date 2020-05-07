<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
    * Se obtienen todas las Direcciones de una Ciudad.
    */
    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    /**
    * Se obtiene el Usuario que creó esta Ciudad.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
