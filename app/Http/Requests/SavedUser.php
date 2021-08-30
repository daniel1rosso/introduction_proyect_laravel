<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavedUser extends FormRequest
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
            'email' => 'required',
            'password' => 'required|string|min:8',
            'rol_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "El nombre es requerido para el registro",
            'email.required' => "El Email es requerido para el registro",
            'password.required' => "El password es requerido para el registro",
            'rol_id.required' => "El rol es requerido para el registro"
        ];
    }
}
