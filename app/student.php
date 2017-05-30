<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'alumno';
    
    protected $fillable = ['carrera_id', 'municipio_id', 'estado_id', 'noSeguro', 'sexo', 'telefono', 'calle', 'numExt', 'numInt', 'colonia', 'cp', 'localidad', 'estatus_id'];
    protected $guarded = ['usuario_id'];
    
    public function user(){
        return $this->belongsTo(user::class, 'usuario_id');
    }
    
    public function carrer(){
        return $this->belongsTo(carrer::class, 'carrera_id');
    }
    
    public function place(){
        return $this->belongsTo(place::class, 'municipio_id');
    }
    
    public function state(){
        return $this->belongsTo(state::class, 'estado_id');
    }
    
    public function status(){
        return $this->belongsTo(status::class, 'estatus_id');
    }
    
    public function sex(){
        if($this->sexo == 1){
            return 'Masculino';
        }
        
        if($this->sexo == 2){
            return 'Femenino';
        }
    }
}
