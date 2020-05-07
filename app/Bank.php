<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    /**
    * Se obtienen todas las Comapñías que tienen una Cuenta Bancaria.
    */
    public function companies()
    {
        return $this->belongsToMany('App\Company')->withPivot('bank_account', 'user_id');
    }

    /**
    * Se obtiene el Usuario que creó este Banco.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
