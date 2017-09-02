<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eunidad extends Model
{
    protected $table = 'entidad_unidades';
    protected $fillable = ['entidad_id','uni_nombre','uni_estado','uni_obs','user_registra','user_actualiza','created_at','updated_at'];

    public function entidad()
    {
        return $this->belongsTo('App\Entidad', 'entidad_id', 'id');
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