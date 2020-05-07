<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
    * Se obtienen las Compañías de la Cuenta Contable.
    */
    public function companies()
    {
        return $this->belongsToMany('App\Company');
    }

    /**
    * Se obtiene el Usuario que creó esta Cuenta.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
