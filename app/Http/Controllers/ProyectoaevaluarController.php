<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Entidad;
use App\Eunidad;
use App\Departamento;
use App\Provincia;
use App\Municipio;
use App\User;
use App\Proyectoaevaluar;
use Carbon\Carbon;

class ProyectoaevaluarController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $responsable = User::where('us_estado', 1)->orderBy('us_paterno','ASC')->lists('us_paterno','id');
        $proyecto = Proyectoaevaluar::orderBy('created_at','DESC')->get();
        $entidad = Entidad::where('ent_estado',1)->orderBy('ent_nombre', 'ASC')->lists('ent_nombre','id');
        $departamento = Departamento::where('dep_estado',1)->orderBy('dep_nombre','ASC')->lists('dep_nombre','id');
        return view('admin.proyectoaevaluar.index')
                ->with('proyecto', $proyecto)
                ->with('departamento', $departamento)
                ->with('entidad', $entidad)
                ->with('responsable', $responsable);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
