<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EntidadRequest extends Request
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
            'ent_nombre' => 'required|min:10',
            'ent_sigla' => 'required|min:2'
        ];
    }

    public function messages()
    {
        return [
            'ent_nombre.required' => 'El Campo Nombre de la Entidad es requerido',
            'ent_nombre.min' => 'El Campo Nombre de la Entidad debe contener como minimo 10 caracteres',
            'ent_sigla.required' => 'El Campo Sigla de la Entidad es requerido',
            'ent_sigla.min' => 'El Campo Sigla de la Entidad debe contener como minimo 2 caracteres'
        ];
    }
}
