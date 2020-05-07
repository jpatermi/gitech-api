<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Company extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'business_area_id'  => $this->business_area_id,
            'business_area'     => $this->businessArea->description,
            'social_reason'     => $this->social_reason,
            'tradename'         => $this->tradename,
            'nif'               => $this->nif,
            'status_id'         => $this->status_id,
            'created_at'        => $this->created_at->format('d-m-Y'),
            'updated_at'        => $this->updated_at->format('d-m-Y'),
            /* Address */
            'addresses'         => $this->addresses,
            /* Phones */
            'phones'            => $this->phones,
        ];
    }
}
