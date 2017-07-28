<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class message extends Model
{
    protected $table = 'mensajes';
    
    protected $fillable = ['usuario_id', 'titulo', 'contenido', 'destino'];
    
    public function user(){
        return $this->belongsTo(user::class, 'usuario_id');
    }
    
    public function dateUpdate(){
        Date::setLocale('es');
        return Date::parse($this->updated_at)->format('j \\d\\e F \\d\\e\\l Y \\a \\l\\a\\s h:i:s A');
    }
    
    public function destino(){
        if($this->destino == null){
            return "Para: Toda la comunidad";
        } else{
            $user = \App\student::find($this->destino)->user;
            return "Para: ".$user;
        }
    }
    
    public function usuario(){
        return "De: ".$this->user;
    }
    
    public function alumnoId(){
        $student = \App\student::find($this->destino)->id;
        return $student;
    }
    
    public function setTituloAttribute($value){
        $this->attributes['titulo'] = ucfirst($value);
    }
    
    public function setContenidoAttribute($value){
        $this->attributes['contenido'] = ucfirst($value);
    }
}
