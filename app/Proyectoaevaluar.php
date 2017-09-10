<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use File;
use Storage;

class Proyectoaevaluar extends Model
{
    protected $table = 'proyectos_aevaluar';
    protected $fillable = ['proy_codigo','proy_hr','entidad_id','unidad_id','proy_sigla','departamento_id','provincia_id','municipio_id[]','proy_responsable','proy_monto','proy_tiempo','proy_obs','proy_archivo','user_registra','user_actualiza','created_at','updated_at'];

    public function entidad()
    {
        return $this->belongsTo('App\Entidad', 'entidad_id', 'id');
    }

    public function eunidad()
    {
        return $this->belongsTo('App\Eunidad', 'unidad_id', 'id');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'departamento_id', 'id');
    }

    public function provincia()
    {
        return $this->belongsTo('App\Provincia', 'provincia_id', 'id');
    }

    public function municipio()
    {
        return $this->belongsTo('App\Municipio', 'municipio_id', 'id');
    }

    public function responsable()
    {
        return $this->belongsTo('App\User', 'proy_responsable', 'id');
    }

    public function userRegistra()
    {
        return $this->belongsTo('App\User', 'user_registra', 'id');
    }

    public function userActualiza()
    {
        return $this->belongsTo('App\User', 'user_actualiza', 'id');
    }

    public function setproyArchivoAttribute($archivo)
    {
        if($archivo)
        {
            $nuevoNombre = Carbon::now()->year.
                            Carbon::now()->month.
                            Carbon::now()->day.'-'.
                            Carbon::now()->hour.
                            Carbon::now()->minute.
                            Carbon::now()->second.'.'.
                            $archivo->getClientOriginalExtension();
            $this->attributes['proy_archivo'] = 'storage/proyectoaevaluar/'.$nuevoNombre;
            $storage = Storage::disk('proyectoaevaluar')->put($nuevoNombre,\File::get($archivo));
        }
    }
}