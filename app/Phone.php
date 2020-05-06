<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    /**
    * Se obtiene el Usuario al que pertenece el Teléfono.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
