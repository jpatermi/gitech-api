<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    /**
    * Se obtienen todos los Usuarios de un Cargo.
    */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
