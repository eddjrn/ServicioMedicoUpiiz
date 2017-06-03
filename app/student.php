<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
use Carbon\Carbon;

class student extends Model
{
    protected $table = 'alumno';
    
    protected $fillable = ['usuario_id', 'carrera_id', 'municipio_id', 'estado_id', 'noSeguro', 'sexo', 'telefono', 'calle', 'numExt', 'numInt', 'colonia', 'cp', 'localidad', 'curp', 'nacimiento', 'provedorSeguro', 'noClinica', 'tutor', 'estatus_id'];
    //protected $guarded = ['usuario_id'];
    
    protected $dates = [
        'created_at', // Add if you're using timestamps on the model
        'updated_at', // Add if you're using timestamps on the model
        'nacimiento'
    ];
    
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
    
    public function clinica(){
        if($this->noClinica == 1){
            return 'Clínica #1';
        } else if($this->noClinica == 2){
             return 'Clínica #2';
        } if($this->noClinica == 3){
             return 'Clínica #3';
        }
    }
    
    public function proveedor(){
        if($this->provedorSeguro == 1){
            return 'IPN';
        } else if($this->provedorSeguro == 2){
            return 'Padres';
        } if($this->provedorSeguro == 3){
            return 'Otro';
        }
    }
    
    public function setNacimientoAttribute($value){
        $this->attributes['nacimiento']=Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
    }
    
    public function getNacimientoAttribute($value){
        return Carbon::parse($value)->format('d-m-Y');
    }
    
    public function formatedNacimiento(){
        Date::setLocale('es');
        return Date::parse($this->nacimiento)->format('j \\d\\e F \\d\\e\\l Y');
    }
    
    public function age(){
        return Carbon::parse($this->nacimiento)->diffInYears(Carbon::now()).' años';
    }
    
}
