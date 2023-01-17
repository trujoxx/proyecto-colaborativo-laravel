<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarRequest extends FormRequest
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
            'email' => 'required | email',
            'password' => 'required',
            'curso' => 'required',
            'materia' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este Campo es obligatorio',
            'email' => 'Debes introducir un formato email valido'
        ];
    }
}
