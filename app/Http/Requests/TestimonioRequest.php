<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonioRequest extends FormRequest
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
            'avatar' => 'sometimes|required|file|max:100',
            'aparment_name' => 'required',
            'stars' => 'required|max:5',
            'gender' => 'required',
            'testimony' => 'required'
        ];
    }
}
