<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'business_area_id',
        'type',
        'social_reason',
        'tradename',
        'nif',
        'user_id',
        'status_id',
    ];

    /**
    * Se obtienen los proveedores de la compañía.
    */
    public function providers()
    {
        return $this->hasMany('App\ProviderClient', 'company_client_id', 'id');
    }

    /**
    * Se obtienen los clientes de la Compañía.
    */
    public function clients()
    {
        return $this->hasMany('App\ProviderClient', 'company_provider_id', 'id');
    }

    /**
    * Se obtienen las Cuentas Contables de la Compañía.
    */
    public function accounts()
    {
        return $this->belongsToMany('App\Account');
    }

    /**
    * Se obtienen todas las Direcciones de la Compañía.
    */
    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    /**
    * Se obtienen todos las Cuentas Bancarias de la Compañía.
    */
    public function banks()
    {
        return $this->belongsToMany('App\Bank');
    }

    /**
    * Se obtiene el Certificado asociado a la Compañía.
    */
    public function certificate()
    {
        return $this->hasOne('App\Certificate');
    }

    /**
    * Se obtiene los Users que tiene la Compañía.
    */
    public function users()
    {
        return $this->hasMany('App\Company');
    }

    /**
    * Se obtienen todos los Teléfonos que tiene la Compañía.
    */
    public function phones()
    {
        return $this->hasMany('App\Phone');
    }

    /**
    * Se obtiene el Área de Negocios a la que pertenece la Compañía.
    */
    public function businessArea()
    {
        return $this->belongsTo('App\BusinessArea');
    }

    /**
    * Se obtienen todos las Cuentas Bancarias de la Compañía.
    */
    public function services()
    {
        return $this->belongsToMany('App\Service');
    }

    /**
    * Se obtiene los Socios que tiene la Compañía.
    */
    public function partners()
    {
        return $this->hasMany('App\Partner');
    }

    /**
    * Se obtiene el Usuario que creó esta Compañía.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
