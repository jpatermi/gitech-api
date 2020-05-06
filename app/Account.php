<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
    * Se obtienen los Users de la Cuenta Contable.
    */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
