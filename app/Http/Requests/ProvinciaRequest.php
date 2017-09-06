<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProvinciaRequest extends Request
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
            'departamento_id' => 'required',
            'prov_nombre' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'departamento_id.required' => 'En Campo departamento es requerido',
            'prov_nombre.required' => 'El Campo Nombre de la Provincia es requerido',
            'prov_nombre.min' => 'El Campo Nombre de la Provincia debe contener como minimo 5 caracteres'
        ];
    }
}
