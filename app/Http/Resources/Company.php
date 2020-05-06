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
            'id'            => $this->id,
            'social_reason' => $this->social_reason,
            'tradename'     => $this->tradename,
            'status_id'     => $this->status_id,
            'created_at'    => $this->created_at->format('d-m-Y'),
            'updated_at'    => $this->updated_at->format('d-m-Y'),
        ];
    }
}
