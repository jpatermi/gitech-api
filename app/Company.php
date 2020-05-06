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
        'social_reason',
        'tradename',
        'business_area_id',
        'nif',
        'status',
    ];


    /**
    * Se obtienen todos los Users que tiene una Compañía.
    */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
