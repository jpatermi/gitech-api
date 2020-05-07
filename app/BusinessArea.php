<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessArea extends Model
{
    /**
    * Se obtienen todos las Compañías de un Área de Negocios.
    */
    public function companies()
    {
        return $this->hasMany('App\Company');
    }

    /**
    * Se obtiene el Grupo de Areas a la que pertenece el Área de Negocios.
    */
    public function areaGroup()
    {
        return $this->belongsTo('App\AreaGroup');
    }

    /**
    * Se obtiene el Usuario que creó esta Área de Negocios.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
