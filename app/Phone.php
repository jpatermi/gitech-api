<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'type',
        'number',
        'user_id',
    ];

    /**
    * Se obtiene la Compañía a la que pertenece el Teléfono.
    */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
    * Se obtiene el Usuario que creó este Teléfono.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
