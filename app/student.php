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
    
    protected $fillable = ['usuario_id', 'carrera_id', 'municipio_id', 'estado_id', 'sexo', 'documentacion', 'observaciones', 'turno', 'telefono', 'calle', 'numExterior', 'numInterior', 'colonia', 'codigoPostal', 'localidad', 'curp', 'fechaNacimiento', 'tutor', 'telefonoTutor', 'celularTutor', 'parentescoTutor', 'estatus_id','pregunta','respuesta'];
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
    
    public function sex(){
        return 'xxxxxxxxxxxx';
    }
    
    public function getSexoAttribute($value){
        return config('global.sexos')[$value];
    }
    public function sexo(){
        return $this->getOriginal('sexo');
    }
    
    public function sexTypes(){
        $types = ['1' => 'Masculino', '2' => 'Femenino'];
        return $types;
    }
    
    public function documentation(){
        return 'xxxxxxxxxxxxxxxxx';
    }
    
    public function getDocumentacionAttribute($value){
        return $value;
    }
    public function documentacion(){
        return config('global.documentacion')[$this->documentacion];
    }
    
    public function documentationTypes(){
        $types = ['1' => 'Completa', '2' => 'Incompleta'];
        return $types;
    }
    
    public function turn(){
        return 'xxxxxxxxxxxxxx';
    }////////////buscar metodoas
    
    public function getTurnoAttribute($value){
        return config('global.turnos')[$value];
    }
    public function turno(){
        return $this->getOriginal('turno');
    }
    
    
    public function turnTypes(){
        $types = ['1' => 'Matutino', '2' => 'Vespertino'];
        return $types;
    }
    
    public function tutorRelationship(){
        return 'xxxxxxxxxxxxxxxx';
    }
    
    public function getParentescoTutorAttribute($value){
        return config('global.familiar')[$value];
    }
    public function parentescoTutor(){
        return $this->getOriginal('parentescoTutor');
    }
    
    public function tutorRelationshipTypes(){
        $types = ['1' => 'Padre', '2' => 'Hermano', '3' => 'Tio', '4' => 'Tutor legal'];
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
    
    public function setCalleAttribute($value){
        $this->attributes['calle'] = ucwords($value);
    }
    
    public function setNumExteriorAttribute($value){
        if($value == 'No tiene'){
            $this->attributes['numExterior'] = null;
        } else{
            $this->attributes['numExterior'] = $value;
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
            $this->attributes['numInterior'] = $value;
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
        $this->attributes['localidad'] = ucwords($value);
    }
    
    public function setCurpAttribute($value){
        $this->attributes['curp'] = strtoupper($value);
    }
    
    public function setTutorAttribute($value){
        $this->attributes['tutor'] = ucwords($value);
    }
    
}
