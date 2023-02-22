<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|unique:users,username',
            'name' => 'required',
            'description' => 'required|string|max:255',
            'forma_de_pago' => 'required|string|max:255',
            'total' => 'required|numeric|max:90',
            'descripcion' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'numeroSurcursal' => 'required|numeric|max:90',
            'fecha' => 'required|string|max:255',
            'hora' => 'required|string|max:255',


        ];
    }
}
