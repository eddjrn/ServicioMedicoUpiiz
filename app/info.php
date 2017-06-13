<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class info extends Model
{
    //
    protected $table = 'informacion';
    protected $fillable = ['usuario_id','titulo','contenido'];

    public function user()
    {
    	return $informacion = \App\user::find($this->usuario_id); 
    }

    public function FechaCreacion()
    {
    	Date::setLocale('es');
        return Date::parse($this->created_at)->format('j \\d\\e F \\d\\e\\l Y');
    }
}
