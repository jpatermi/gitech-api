<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Company extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Se cambia a true para activar la validacion
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //dd($this->addresses);

        return [
            'business_area_id'  => ['required'],
            'type'              => ['required'],
            'social_reason'     => ['required'],
            'tradename'         => ['required'],
            'user_id'           => ['required'],
            'nif'               => ['required'],
            /* Address */
            'addresses.city_id'     => ['required'],
            'addresses.description' => ['required'],
            'addresses.number'      => ['required'],
            'addresses.portal'      => ['required'],
            'addresses.floor'       => ['required'],
            'addresses.zip'         => ['required'],
            /* Phones */
            'phones.type'   => ['required'],
            'phones.number' => ['required'],
        ];
    }
}
