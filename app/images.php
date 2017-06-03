<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    //
    protected $table = 'imagenes';
    protected $fillable = ['usuario_id','imagen','titulo'];

    public function user()
    {
    	return $usuario = \App\user::find($this->usuario_id); 
    }
}
