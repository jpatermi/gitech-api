<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderClient extends Model
{
    /**
    * Get the user that owns the clients.
    */
    public function client()
    {
        return $this->belongsTo('App\Company', 'company_client_id');
    }

    /**
    * Get the user that owns the provider.
    */
    public function provider()
    {
        return $this->belongsTo('App\Company', 'company_provider_id');
    }
}
