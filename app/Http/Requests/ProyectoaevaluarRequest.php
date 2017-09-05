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
        $regex = "/^[0-9]+(\.[0-9]{1,2})?$/";//"/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/";
        return [
            'proy_hr' => 'required|min:8',
            'entidad_id' => 'required',
            'unidad_id' => 'required',
            'proy_sigla' => 'required|min:3',
            'departamento_id' => 'required',
            'provincia_id' => 'required',
            'municipio_id' => 'required',
            'proy_responsable' => 'required',
            'proy_monto' => ['required','regex:/^[0-9]+(\.[0-9]{1,2})?$/'],
            'proy_tiempo' => ['required','regex:/^[1-9]+/']
        ];
    }

    public function messages()
    {
        return [
            'proy_hr.required' => 'El Campo Hoja de ruta es requerido',
            'proy_hr.min' => 'El Campo Hoja de ruta debe contener como minimo 8 caracteres',
            'entidad_id.required' => 'El Campo Entidad es requerido',
            'unidad_id.required' => 'El Campo Unidad es requerido',
            'proy_sigla.required' => 'El Campo Sigla es requerido',
            'proy_sigla.min' => 'El Campo Sigla debe contener como minimo 3 caracteres',
            'departamento_id.required' => 'El Campo Departamento es requerido',
            'provincia_id.required' => 'El Campo Provincia es requerido',
            'municipio_id.required' => 'El Campo Municipio es requerido',
            'proy_monto.required' => 'El Campo Monto es requerido',
            'proy_monto.regex' => 'El Campo Monto es numerico y positivo. Ej. 20.35',
            'proy_tiempo.required' => 'El Campo Tiempo es requerido',
            'proy_tiempo.regex' => 'El Campo Tiempo debe ser positivo'            
        ];
    }
}
