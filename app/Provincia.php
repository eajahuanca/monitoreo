<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';
    protected $fillable = ['departamento_id','prov_nombre','prov_estado','user_registra','user_actualiza','created_at','updated_at'];

    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'departamento_id', 'id');
    }

    public function municipio()
    {
        return $this->hasMany('App\Municipio');
    }

    public function userRegistra()
    {
        return $this->belongsTo('App\User', 'user_registra', 'id');
    }

    public function userActualiza()
    {
        return $this->belongsTo('App\User', 'user_actualiza', 'id');
    }
    
    public function proyectoaevaluar()
    {
        return $this->hasMany('App\Proyectoaevaluar');
    }
}
