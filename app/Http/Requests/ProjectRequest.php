<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'address' => 'required',
            'build_type' => 'required',
            'location' => 'required',
            'rooms' => 'required',
            'baths' => 'required',
            'typologies' => 'required',
            'google_map' => 'required',
            'build_status' => 'required',
        ];
    }
}
