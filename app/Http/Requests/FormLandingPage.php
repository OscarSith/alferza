<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormLandingPage extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'proyecto' => 'required|numeric',
            'nombre_completo' => 'required',
            'correo' => 'required|email',
            'celular' => 'required|numeric|digits_between:7,15',
            'mensaje' => 'required',
        ];
    }
}
