<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
    * Se obtienen los proveedores del user.
    */
    public function providers()
    {
        return $this->hasMany('App\ProviderClient', 'user_client_id', 'id');
    }

    /**
    * Se obtienen los clientes del user.
    */
    public function clients()
    {
        return $this->hasMany('App\ProviderClient', 'user_provider_id', 'id');
    }

    /**
    * Se obtienen las Cuentas Contables del User.
    */
    public function accounts()
    {
        return $this->belongsToMany('App\Account');
    }

    /**
    * Se obtienen todas las Direcciones que tiene el User.
    */
    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    /**
    * Se obtienen todos los Bancos que tiene el User.
    */
    public function banks()
    {
        return $this->hasMany('App\Bank');
    }

    /**
    * Se obtiene el Certificado asociado al User.
    */
    public function certificate()
    {
        return $this->hasOne('App\Certificate');
    }

    /**
    * Se obtiene la Compañía a la que pertenece User.
    */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
    * Se obtienen todos los Teléfonos que tiene el User.
    */
    public function phones()
    {
        return $this->hasMany('App\Phone');
    }

    /**
    * Se obtiene el Área de Negocios a la que pertenece el User.
    */
    public function businessArea()
    {
        return $this->belongsTo('App\BusinessArea');
    }

    /**
    * Se obtiene el Cargo al que pertenece el User.
    */
    public function position()
    {
        return $this->belongsTo('App\Position');
    }
}
