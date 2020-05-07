<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
    * Se obtienen todas las Comapñías que tienen un Servicio.
    */
    public function companies()
    {
        return $this->belongsToMany('App\Company');
    }

    /**
    * Se obtiene el Usuario que creó este Servicio.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
