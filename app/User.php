<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use File;
use Storage;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = [
        'us_carnet', 'us_expedido', 'us_nombre', 'us_paterno', 'us_materno', 'us_nacimiento', 'us_genero', 'us_telefono', 'us_celular', 'email', 'us_profesion', 'us_cargo', 'us_foto', 'us_tipo', 'us_cuenta', 'password', 'us_estado', 'us_obs', 'created_at', 'updated_at', ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function entidades()
    {
        return $this->hasMany('App\Entidad');
    }

    public function unidades()
    {
        return $this->hasMany('App\Eunidad');
    }

    public function departamentos()
    {
        return $this->hasMany('App\Departamento');
    }

    public function provincias()
    {
        return $this->hasMany('App\Provincia');
    }

    public function municipios()
    {
        return $this->hasMany('App\Municipio');
    }

    public function proyAEvaluar()
    {
        return $this->hasMany('App\Proyectoaevaluar');
    }

    public function setusFotoAttribute($archivo)
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
            $this->attributes['us_foto'] = 'storage/usuarios/'.$nuevoNombre;
            $storage = Storage::disk('usuarios')->put($nuevoNombre,\File::get($archivo));
        }
    }
}
