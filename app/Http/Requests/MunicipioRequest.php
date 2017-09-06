<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MunicipioRequest extends Request
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
            'provincia_id' => 'required',
            'mun_nombre' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'provincia_id.required' => 'El Campo Provincia es requerido',
            'mun_nombre.required' => 'El Campo Nombre de Municipio es requerido',
            'mun_nombre.min' => 'El Campo Nombre de Municipio debe contener como minimo 5 caracteres'
        ]
    }
}
