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
        return true; // Se cambia a true para que activar la validacion
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'social_reason'     => ['required'],
            'tradename'         => ['required'],
            'business_area_id'  => ['required'],
            'nif'               => ['required'],

        ];
    }
}
