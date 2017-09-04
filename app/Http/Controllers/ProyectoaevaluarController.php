<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Requests\ProyectoaevaluarRequest;
use App\Entidad;
use App\Eunidad;
use App\Departamento;
use App\Provincia;
use App\Municipio;
use App\User;
use App\Proyectoaevaluar;
use Carbon\Carbon;
use DB;

class ProyectoaevaluarController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $responsable = User::select(DB::raw('CONCAT(us_paterno," ",us_materno," ",us_nombre) as responsable'), 'id')->where('us_estado', 1)->orderBy('responsable','ASC')->lists('responsable','id');
        $proyecto = Proyectoaevaluar::orderBy('created_at','DESC')->get();
        return view('admin.proyectoaevaluar.index')
                ->with('proyecto', $proyecto)
                ->with('responsable', $responsable);
    }

    public function create()
    {
        //
    }

    public function store(ProyectoaevaluarRequest $request)
    {
        if($request->ajax())
        {
            try
            {
                $proyecto = new Proyectoaevaluar($request->all());
                $proyecto->user_registra = Auth::user()->id;
                $proyecto->user_actualiza = Auth::user()->id;
                $proyecto->save();
                flash('Los Datos del Proyecto a Evaluar, fueron registrados de manera satisfactoria', 'success');
            }
            catch(\Exception $ex)
            {
                flash('Ocurrió un problema al intentar guardar el proyecto en el sistema, error: '.$ex->getMessage(), 'danger');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
