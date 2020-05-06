<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    /**
    * Se obtiene el Usuario al que pertenece el Certificado.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
