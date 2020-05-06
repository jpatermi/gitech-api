<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
    * Se obtienen todas las Provincias de una Ciudad.
    */
    public function provinces()
    {
        return $this->hasMany('App\Province');
    }
}
