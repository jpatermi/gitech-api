<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    /**
    * Se obtiene el User al que pertenece el Banco.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
