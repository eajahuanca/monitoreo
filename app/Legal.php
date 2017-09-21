<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use File;
use Storage;

class Legal extends Model
{
    protected $table = 'legales';
    protected $fillable = ['proy_nombre','legal_entidad','legal_fmonto','legal_cmonto','legal_tmonto','legal_estado','legal_archivo','user_registra','user_actualiza','created_at','updated_at','solicitud_id'];
    
    public function userRegistra()
    {
        return $this->belongsTo('App\User', 'user_registra', 'id');
    }

    public function userActualiza()
    {
        return $this->belongsTo('App\User', 'user_actualiza', 'id');
    }

    public function setlegalArchivoAttribute($archivo)
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
            $this->attributes['legal_archivo'] = 'storage/legal/'.$nuevoNombre;
            $storage = Storage::disk('legal')->put($nuevoNombre,\File::get($archivo));
        }
    }
}
