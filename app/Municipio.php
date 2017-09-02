<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';
    protected $fillable = ['provincia_id','mun_nombre','mun_estado','user_registra','user_actualiza','created_at','updated_at'];

    public function provincia()
    {
        return $this->belongsTo('App\Provincia', 'provincia_id', 'id');
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
