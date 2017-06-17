<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class images extends Model
{
    //
    protected $table = 'imagenes';
    protected $fillable = ['usuario_id','imagen','titulo'];


     public function user()
    {
    	return $this ->belongsTo(user::class,'usuario_id'); 
    }
     public function FechaActualizacion()
    {
        Date::setLocale('es');
        return Date::parse($this->updated_at)->format('j \\d\\e F \\d\\e\\l Y');
    }
}
