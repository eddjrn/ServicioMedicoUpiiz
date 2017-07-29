<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinic extends Model
{
    protected $table = 'clinica';
    
    protected $fillable = ['numero', 'tipo', 'municipio_id', 'mapa'];
    
    public function place(){
        return $this->belongsTo(place::class, 'municipio_id');
    }
    
    public function medicalData(){
        return $this->hasMany(medicalData::class, 'clinica_id');
    }
    
    public function __toString(){
        return $this->tipo.' No.'.$this->numero.' - '.$this->place->nombre;
    }
    
    public function name(){
        return 'Clínica '.$this->numero;
    }
    
    public function setMapaAttribute($value){
        if($value == 'No tiene mapa'){
            $this->attributes['mapa'] = null;
        } else{
            $this->attributes['mapa'] = $value;
        }
    }
    public function getMapaAttribute($value){
        if($value == null){
            return 'Mapa no disponible';
        } else{
            return $value;
        }
    }
}
