<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class message extends Model
{
    protected $table = 'mensajes';
    
    protected $fillable = ['usuario_id', 'titulo', 'contenido', 'color'];
    
    public function user(){
        return $this->belongsTo(user::class, 'usuario_id');
    }
    
    public function dateUpdate(){
        Date::setLocale('es');
        return Date::parse($this->updated_at)->format('j \\d\\e F \\d\\e\\l Y \\a \\l\\a\\s h:i:s A');
    }
}
