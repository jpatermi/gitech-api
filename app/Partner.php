<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    /**
    * Se obtiene la Compañía a la que pertenece el Socio.
    */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
    * Se obtiene el Usuario que creó este Socio.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
