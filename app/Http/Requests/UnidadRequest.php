<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UnidadRequest extends Request
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
            'entidad_id' => 'required',
            'uni_nombre' => 'required|min:7'
        ];
    }

    public function messages()
    {
        return [
            'entidad_id.required' => 'El Campo Entidad es requerido',
            'uni_nombre.required' => 'El Campo Nombre de la Unidad Proponente es requerido',
            'uni_nombre.min' => 'El Campo Nombre de la Unidad Proponente debe contener como minimo 7 caracteres'
        ];
    }
}
