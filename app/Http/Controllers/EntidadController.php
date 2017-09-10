<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\EntidadRequest;
use App\Http\Requests;
use App\Entidad;
use Carbon\Carbon;
use Session;

class EntidadController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $entidad = Entidad::orderBy('created_at','DESC')->get();
        return view('admin.entidad.index')->with('entidad', $entidad);
    }

    public function getEntidades(Request $request)
    {
        if($request->ajax())
        {
            $rpta = Entidad::where('ent_estado',1)->select('id','ent_nombre')->get();
            return response()->json($rpta);
        }
    }

    public function create()
    {
        return view('admin.entidad.create');
    }

    public function store(EntidadRequest $request)
    {
        $title = "";
        $msg = "";
        $estado = "";
        try
        {
            $entidad = new Entidad($request->all());
            $entidad->user_registra = Auth::user()->id;
            $entidad->user_actualiza = Auth::user()->id;
            $entidad->save();
            $title = 'Registro de Entidad';
            $msg = 'Se realizo el registro de manera satisfactoria';
            $estado = "1";
        }
        catch(\Exception $ex)
        {
            $estado = "2";
            $title = 'Error en Registro';
            $msg = 'Msg: '.$ex->getMessage();
        }
        Session::put('estado', $estado);
        Session::put('title', $title);
        Session::put('msg', $msg);
        return redirect()->route('entidad.index');
    }

    public function edit($id)
    {
        $entidad = Entidad::find($id);
        return view('admin.entidad.edit')->with('entidad', $entidad);
    }

    public function update(EntidadRequest $request, $id)
    {
        $estado = "";
        $title = "";
        $msg = "";
        try
        {
            $entidad = Entidad::find($id);
            $entidad->fill($request->all());
            $entidad->user_actualiza = Auth::user()->id;
            $entidad->update();
            $estado = "1";
            $title = 'Actualización de Entidad';
            $msg = 'Se realizo la actualización de manera satisfactoria.';
        }
        catch(\Exception $ex)
        {
            $estado = "2";
            $title = 'Error en Actualización';
            $msg = 'Msg: '.$ex->getMessage();
        }
        Session::put('estado', $estado);
        Session::put('title', $title);
        Session::put('msg', $msg);
        return redirect()->route('entidad.index');
    }
}
