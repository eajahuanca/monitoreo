<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\ProvinciaRequest;
use App\Http\Requests;
use App\Departamento;
use App\Provincia;
use Carbon\Carbon;
use Session;

class ProvinciaController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $provincia = Provincia::orderBy('created_at','DESC')->get();
        return view('admin.provincia.index')->with('provincia', $provincia);
    }

    public function getProvincias(Request $request)
    {
        if($request->ajax())
        {
            $rpta = Provincia::select('id','prov_nombre')->where('prov_estado',1)->where('departamento_id','=', $request->departamentoID)->orderBy('prov_nombre','ASC')->get();
            return response()->json($rpta);
        }
    }

    public function create()
    {
        $departamento = Departamento::where('dep_estado','=',1)->orderBy('dep_nombre','ASC')->lists('dep_nombre','id');
        return view('admin.provincia.create')->with('departamento', $departamento);
    }

    public function store(ProvinciaRequest $request)
    {
        $title = '';
        $msg = '';
        $estado = false;
        try
        {
            $provincia = new Provincia($request->all());
            $provincia->user_registra = Auth::user()->id;
            $provincia->user_actualiza = Auth::user()->id;
            $provincia->save();
            $title = 'Registro de Provincia';
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
        return redirect()->route('provincia.index');
    }

    public function edit($id)
    {
        $departamento = Departamento::where('dep_estado','=',1)->orderBy('dep_nombre','ASC')->lists('dep_nombre','id');
        $provincia = Provincia::find($id);
        return view('admin.provincia.edit')
                ->with('provincia', $provincia)
                ->with('departamento', $departamento);
    }

    public function update(ProvinciaRequest $request, $id)
    {
        $estado = false;
        $title = '';
        $msg = '';
        try
        {
            $provincia = Provincia::find($id);
            $provincia->fill($request->all());
            $provincia->user_actualiza = Auth::user()->id;
            $provincia->update();
            $estado = true;
            $title = 'Actualización de Provincia';
            $msg = 'Se realizo la actualización de manera satisfactoria.';
        }
        catch(\Exception $ex)
        {
            $title = 'Error en Actualización';
            $msg = 'No se puede actualizar la Provincia.';
        }
        Session::put('estado', $estado);
        Session::put('title', $title);
        Session::put('msg', $msg);
        return redirect()->route('provincia.index');
    }
}
