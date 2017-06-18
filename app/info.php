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
    	return $this ->belongsTo(user::class,'usuario_id'); 
    }

    public function FechaCreacion()
    {
    	Date::setLocale('es');
        return Date::parse($this->created_at)->format('j \\d\\e F \\d\\e\\l Y');
    }
    public function FechaActualizacion()
    {
        Date::setLocale('es');
        return Date::parse($this->updated_at)->format('j \\d\\e F \\d\\e\\l Y');
    }
    public function Mes()
    {
        Date::setLocale('es');
        return Date::parse($this->created_at)->format('F \\ j');
    }
    public function dia()
    {
            Date::setLocale('es');
        return Date::parse($this->created_at)->format('l');
    }
    public function hora()
    {
            Date::setLocale('es');
        return Date::parse($this->created_at)->format('h:i A');
    }


}
