<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\UnidadRequest;
use App\Http\Requests;
use App\Eunidad;
use App\Entidad;
use Carbon\Carbon;
use Session;

class EunidadController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $unidad = Eunidad::orderBy('created_at','DESC')->get();
        return view('admin.unidad.index')->with('unidad', $unidad);
    }
    
    public function getUnidades(Request $request)
    {
        if($request->ajax())
        {
            $rpta = Eunidad::leftJoin("entidades","entidad_unidades.entidad_id","=","entidades.id")->where('uni_estado',1)->where('entidad_id','=', $request->entidadID)->select('entidad_unidades.id','entidad_unidades.uni_nombre','entidades.ent_sigla')->get();
            return response()->json($rpta);
        }
    }

    public function create()
    {
        $entidad = Entidad::where('ent_estado','=',1)->orderBy('ent_nombre','ASC')->lists('ent_nombre','id');
        return view('admin.unidad.create')->with('entidad', $entidad);
    }

    public function store(UnidadRequest $request)
    {
        $title = '';
        $msg = '';
        $estado = false;
        try
        {
            $unidad = new Eunidad($request->all());
            $unidad->user_registra = Auth::user()->id;
            $unidad->user_actualiza = Auth::user()->id;
            $unidad->save();
            $title = 'Registro de Unidad';
            $msg = 'Se realizo el registro de manera satisfactoria';
            $estado = true;
        }
        catch(\Exception $ex)
        {
            $title = 'Error en Registro';
            $msg = 'No se puede realizar el registro';
        }
        Session::put('estado', $estado);
        Session::put('title', $title);
        Session::put('msg', $msg);
        return redirect()->route('unidad.index');
    }

    public function edit($id)
    {
        $entidad = Entidad::where('ent_estado','=',1)->orderBy('ent_nombre','ASC')->lists('ent_nombre','id');
        $unidad = Eunidad::find($id);
        return view('admin.unidad.edit')
                ->with('unidad', $unidad)
                ->with('entidad', $entidad);
    }

    public function update(UnidadRequest $request, $id)
    {
        $estado = false;
        $title = '';
        $msg = '';
        try
        {
            $unidad = Eunidad::find($id);
            $unidad->fill($request->all());
            $unidad->user_actualiza = Auth::user()->id;
            $unidad->update();
            $estado = true;
            $title = 'Actualización de Unidad';
            $msg = 'Se realizo la actualización de manera satisfactoria.';
        }
        catch(\Exception $ex)
        {
            $title = 'Error en Actualización';
            $msg = 'No se puede actualizar la Unidad.';
        }
        Session::put('estado', $estado);
        Session::put('title', $title);
        Session::put('msg', $msg);
        return redirect()->route('unidad.index');
    }
}
