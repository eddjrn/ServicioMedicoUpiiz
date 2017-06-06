<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
use Carbon\Carbon;

class student extends Model
{
    protected $table = 'alumno';
    
    protected $fillable = ['usuario_id', 'carrera_id', 'municipio_id', 'estado_id', 'sexo', 'documentacion', 'turno', 'telefono', 'calle', 'numExterior', 'numInterior', 'colonia', 'codigoPostal', 'localidad', 'curp', 'fechaNacimiento', 'tutor', 'telefonoTutor', 'celularTutor', 'parentescoTutor', 'estatus_id'];
    //protected $guarded = ['usuario_id'];
    
    protected $dates = [
        'created_at', // Add if you're using timestamps on the model
        'updated_at', // Add if you're using timestamps on the model
        'fechaNacimiento'
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
        } elseif($this->sexo == 2){
            return 'Femenino';
        }
    }
    
    public function sexTypes(){
        $types = ['1' => 'Masculino', '2' => 'Femenino'];
        return $types;
    }
    
    public function documentation(){
        if($this->documentacion == 1){
            return 'Completa';
        } elseif($this->documentacion == 2){
            return 'Incompleta';
        }
    }
    
    public function documentationTypes(){
        $types = ['1' => 'Completa', '2' => 'Incompleta'];
        return $types;
    }
    
    public function turn(){
        if($this->turno == 1){
            return 'Matutino';
        } elseif($this->turno == 2){
            return 'Vespertino';
        }
    }
    
    public function turnTypes(){
        $types = ['1' => 'Matutino', '2' => 'Vespertino'];
        return $types;
    }
    
    public function tutorRelationship(){
        if($this->parentescoTutor == 1){
            return 'Padre';
        } elseif($this->parentescoTutor == 2){
            return 'Hermano';
        }
    }
    
    public function tutorRelationshipTypes(){
        $types = ['1' => 'Padre', '2' => 'Hermano'];
        return $types;
    }
    
    public function setFechaNacimientoAttribute($value){
        $this->attributes['fechaNacimiento']=Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
    }
    
    public function getFechaNacimientoAttribute($value){
        return Carbon::parse($value)->format('d-m-Y');
    }
    
    public function formatedNacimiento(){
        Date::setLocale('es');
        return Date::parse($this->fechaNacimiento)->format('j \\d\\e F \\d\\e\\l Y');
    }
    
    public function age(){
        return Carbon::parse($this->fechaNacimiento)->diffInYears(Carbon::now()).' años';
    }
    
}
