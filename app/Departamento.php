<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $fillable = ['dep_nombre','dep_estado','created_at','updated_at'];

    public function provincia()
    {
        return $this->hasMany('App\Provincia');
    }

    public function proyectoaevaluar()
    {
        return $this->hasMany('App\Proyectoaevaluar');
    }
}
