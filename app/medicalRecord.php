<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicalRecord extends Model
{
    //
   	 protected $table = 'historiaMedica';

     protected $fillable = ['usuario_id', 'alergias', 'fumar', 'alcohol', 'transfusiones', 'cirugias','fracturas','presionAlta','diabetes','artritis','asma','cancer','epilepsias','enfCorazon','sobrePeso','enfTiroides','bipolaridad','esquizofrenia','depresion'];

     public function user(){
        return $this->belongsTo(user::class, 'usuario_id');
    }

    public function AntecedentTypes(){
        $types = ['1' => 'padres', '2' => 'abuelos', '3' => 'tios', '4' => 'hermanos', '5' => 'hijos'];
        return $types;
    }

}
