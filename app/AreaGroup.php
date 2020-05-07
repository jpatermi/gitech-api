<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaGroup extends Model
{
    /**
    * Se obtienen todas las Áreas de Negocio que tiene un Grupo de Áreas.
    */
    public function businessAreas()
    {
        return $this->hasMany('App\BusinessArea');
    }

    /**
    * Se obtiene el Usuario que creó este Grupo de Área.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
