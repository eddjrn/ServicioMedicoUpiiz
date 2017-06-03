<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    //
    protected $table = 'informacion';
    protected $fillable = ['usuario_id','titulo','contenido'];

    public function user()
    {
    	return $usuario = \App\user::find($this->usuario_id); 
    }
}
