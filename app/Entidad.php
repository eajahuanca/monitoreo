<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = 'entidades';
    protected $fillable = ['ent_nombre','ent_sigla','ent_estado','ent_obs','user_registra','user_actualiza','created_at','updated_at'];

    public function userRegistra()
    {
        return $this->belongsTo('App\User', 'user_registra', 'id');
    }

    public function userActualiza()
    {
        return $this->belongsTo('App\User', 'user_actualiza', 'id');
    }

    public function eunidad()
    {
        return $this->hasMany('App\Eunidad');
    }

    public function proyectoaevaluar()
    {
        return $this->hasMany('App\Proyectoaevaluar'); 
    }
}
