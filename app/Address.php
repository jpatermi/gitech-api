<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
    * Se obtiene el User al que pertenece la Direccion.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
    * Se obtiene la Provincia a la que pertenece la Dirección.
    */
    public function province()
    {
        return $this->belongsTo('App\Province');
    }
}
