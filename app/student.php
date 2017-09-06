<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
use Carbon\Carbon;

class student extends Model
{
    use Eloquence;

    protected $table = 'alumno';

    protected $fillable = [
    	'usuario_id',
    	'carrera_id',
    	'municipio_id',
    	'estado_id',
    	'sexo',
    	'documentacion',
    	'observaciones',
    	'turno',
    	'telefono',
    	'calle',
    	'numExterior',
    	'numInterior',
    	'colonia',
    	'codigoPostal',
    	'localidad',
    	'curp',
    	'fechaNacimiento',
    	'tutor',
    	'telefonoTutor',
    	'celularTutor',
    	'parentescoTutor',
    	'estatus_id',
    	'pregunta',
    	'respuesta',
    ];
    //protected $guarded = ['usuario_id'];

    protected $dates = [
        'created_at', // Add if you're using timestamps on the model
        'updated_at', // Add if you're using timestamps on the model
        'fechaNacimiento'
    ];

    protected $searchableColumns = [
        'curp' => 20,
        'localidad' => 20,
        'fechaNacimiento' => 10,
        'tutor' => 10,
        'calle' => 5,
        'colonia' => 5,
        'codigoPostal' => 5,
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

    public function getSexoAttribute($value){
        return config('global.sexos')[$value];
    }
    public function sexo(){
        return $this->getOriginal('sexo');
    }

    public function getDocumentacionAttribute($value){
        return $value;
    }
    public function documentacion(){
        return config('global.documentacion')[$this->documentacion];
    }

    public function getTurnoAttribute($value){
        return config('global.turnos')[$value];
    }
    public function turno(){
        return $this->getOriginal('turno');
    }

    public function getParentescoTutorAttribute($value){
        return config('global.familiar')[$value];
    }
    public function parentescoTutor(){
        return $this->getOriginal('parentescoTutor');
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

    public function setCalleAttribute($value){
        $this->attributes['calle'] = ucwords($value);
    }

    public function setNumExteriorAttribute($value){
        if($value == 'No tiene'){
            $this->attributes['numExterior'] = null;
        } else{
            $this->attributes['numExterior'] = strtoupper($value);
        }
    }
    public function getNumExteriorAttribute($value){
        if($value == null){
            return 'No tiene';
        } else{
            return $value;
        }
    }

    public function setNumInteriorAttribute($value){
        if($value == 'No tiene'){
            $this->attributes['numInterior'] = null;
        } else{
            $this->attributes['numInterior'] = strtoupper($value);
        }
    }
    public function getNumInteriorAttribute($value){
        if($value == null){
            return 'No tiene';
        } else{
            return $value;
        }
    }

    public function setColoniaAttribute($value){
        $this->attributes['colonia'] = ucwords($value);
    }

    public function setLocalidadAttribute($value){
        $word = strtolower($value);
        $this->attributes['localidad'] = ucwords($word);
    }

    public function setCurpAttribute($value){
        $this->attributes['curp'] = strtoupper($value);
    }

    public function setTutorAttribute($value){
        $word = strtolower($value);
        $this->attributes['tutor'] = ucwords($word);
    }

    public function setTelefonoAttribute($value){
      if($value == "No tiene teléfono"){
        $this->attributes['telefono'] = null;
      } else{
        $this->attributes['telefono'] = $value;
      }
    }
    public function getTelefonoAttribute($value){
      if($value == null){
        return "No tiene teléfono";
      } else{
        return $value;
      }
    }

    public function setTelefonoTutorAttribute($value){
      if($value == "No tiene teléfono"){
        $this->attributes['telefonoTutor'] = null;
      } else{
        $this->attributes['telefonoTutor'] = $value;
      }
    }
    public function getTelefonoTutorAttribute($value){
      if($value == null){
        return "No tiene teléfono";
      } else{
        return $value;
      }
    }

    public function setCelularTutorAttribute($value){
      if($value == "No tiene teléfono"){
        $this->attributes['celularTutor'] = null;
      } else{
        $this->attributes['celularTutor'] = $value;
      }
    }
    public function getCelularTutorAttribute($value){
      if($value == null){
        return "No tiene teléfono";
      } else{
        return $value;
      }
    }
}
