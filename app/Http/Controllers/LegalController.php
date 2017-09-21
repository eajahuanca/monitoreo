<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\LegalRequest;
use App\Http\Requests;
use App\Proyectoaevaluar;
use App\Entidad;
use App\Legal;
use Carbon\Carbon;
use Session;

class LegalController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $proyecto = Legal::orderBy('created_at','DESC')->get();
        return view('admin.blegal.index')->with('proyecto', $proyecto);
    }

    public function create()
    {
        $proyecto = Proyectoaevaluar::where('proy_estado','=',1)->orderBy('proy_nombre','ASC')->lists('proy_nombre','proy_nombre');
        return view('admin.blegal.create')->with('proyecto', $proyecto);
    }

    public function store(LegalRequest $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
