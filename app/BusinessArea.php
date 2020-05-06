<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessArea extends Model
{
    /**
    * Se obtienen todos los Usuarios de un Área de Negocios.
    */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
