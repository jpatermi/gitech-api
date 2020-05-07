<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    /**
    * Se obtiene la Compañía a la que pertenece el Certificado.
    */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
    * Se obtiene el Usuario que creó este Certificado.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
