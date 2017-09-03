<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProyectoaevaluarRequest extends Request
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
            'proy_hr' => 'required|min:8',
            'entidad_id' => 'required',
            'unidad_id' => 'required',
            'proy_sigla' => 'required|min:3',
            'departamento_id' => 'required',
            'provincia_id' => 'required',
            'municipio_id' => 'required',
            'proy_responsable' => 'required',
            'proy_monto' => 'required',
            'proy_tiempo' => 'required'
        ];
    }
}
