<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    //
    protected $table = 'videos';
    protected $fillable = ['usuario_id','titulo','link'];

    public function user()
    {
    	return $usuario = \App\user::find($this->usuario_id); 
    }
}
