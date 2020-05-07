<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city_id',
        'company_id',
        'description',
        'number',
        'portal',
        'floor',
        'zip',
        'user_id',
        'status',
    ];

    /**
    * Se obtiene la Compañía a la que pertenece la Direccion.
    */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
    * Se obtiene la Ciudad a la que pertenece la Dirección.
    */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    /**
    * Se obtiene el Usuario que creó esta Dirección.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
