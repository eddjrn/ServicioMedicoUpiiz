<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinic extends Model
{
    protected $table = 'clinica';
    
    protected $fillable = ['numero', 'tipo', 'municipio_id'];
    
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
}
