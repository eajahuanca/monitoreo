<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\MunicipioRequest;
use App\Http\Requests;
use App\Provincia;
use App\Municipio;
use Carbon\Carbon;
use Session;

class MunicipioController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $$municipio = $municipio::orderBy('created_at','DESC')->get();
        return view('admin.$municipio.index')->with('$municipio', $$municipio);
    }

    public function getMunicipios(Request $request)
    {
        if($request->ajax())
        {
            $rpta = $municipio::select('id','mun_nombre')->where('mun_estado',1)->where('provincia_id','=', $request->provinciaID)->orderBy('mun_nombre','ASC')->get();
            return response()->json($rpta);
        }
    }

    public function create()
    {
        $provincia = Provincia::where('prov_estado','=',1)->orderBy('prov_nombre','ASC')->lists('prov_nombre','id');
        return view('admin.unidad.create')->with('provincia', $provincia);
    }

    public function store(MunicipioRequest $request)
    {
        $title = '';
        $msg = '';
        $estado = false;
        try
        {
            $municipio = new Municipio($request->all());
            $municipio->user_registra = Auth::user()->id;
            $municipio->user_actualiza = Auth::user()->id;
            $municipio->save();
            $title = 'Registro de Municipio';
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
        return redirect()->route('municipio.index');
    }

    public function edit($id)
    {
        $provincia = Provincia::where('prov_estado','=',1)->orderBy('prov_nombre','ASC')->lists('prov_nombre','id');
        $municipio = Municipio::find($id);
        return view('admin.municipio.edit')
                ->with('municipio', $municipio)
                ->with('provincia', $provincia);
    }

    public function update(MunicipioRequest $request, $id)
    {
        $estado = false;
        $title = '';
        $msg = '';
        try
        {
            $municipio = Municipio::find($id);
            $municipio->fill($request->all());
            $municipio->user_actualiza = Auth::user()->id;
            $municipio->update();
            $estado = true;
            $title = 'Actualización de Municipio';
            $msg = 'Se realizo la actualización de manera satisfactoria.';
        }
        catch(\Exception $ex)
        {
            $title = 'Error en Actualización';
            $msg = 'No se puede actualizar el Municipio.';
        }
        Session::put('estado', $estado);
        Session::put('title', $title);
        Session::put('msg', $msg);
        return redirect()->route('municipio.index');
    }
}
