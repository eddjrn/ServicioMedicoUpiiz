<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicalRecord extends Model
{
    //Respuestas con si y no son las de antecedentes personales fumar, tomar alcohol, para texto transfusiones, cirugias, fracturas
    
    //Respuestas con tipos de familiares son antecedentes de la familia como presion alta, diabetes, artritis, asma, cancer, enfCorazon, sobrepeso, epilepsias, enfTiroides, bipolaridad, esquizofrenia, depresion 
    protected $table = 'historiaMedica';

    protected $fillable = [
    	'usuario_id',
    	'alergias',
    	'fumar',
    	'numFumar',
    	'edadFumar',
    	'alcohol',
    	'numAlcohol',
    	'transfusiones',
    	'edadTransfusiones',
    	'cirugias',
    	'fracturas',
    	'presionAlta',
    	'diabetes',
    	'artritis',
    	'asma',
    	'cancer',
    	'epilepsias',
    	'enfCorazon',
    	'sobrePeso',
    	'enfTiroides',
    	'bipolaridad',
    	'esquizofrenia',
    	'depresion',
    ];

    public function user(){
        return $this->belongsTo(user::class, 'usuario_id');
    }
    
    public function getAlergiasAttribute($value){
        if($value == null){
            return "Ninguna alergia";
        } else{
            return $value;
        }
    }
    public function setAlergiasAttribute($value){
        if($value == "Ninguna alergia"){
            $this->attributes['alergias'] = null;
        } else{
            $this->attributes['alergias'] = $value;
        }
    }
    
    public function getFumarAttribute($value){
        if($value == false){
            return "No fuma";
        } else{
            return "Si fuma";
        }
    }
    public function fumar(){
        return $this->getOriginal('fumar');
    }
    
    public function getNumFumarAttribute($value){
        if($this->fumar() == 1){
            return $value." veces por mes";
        }
        return " ";
    }
    public function numFumar(){
        return $this->getOriginal('numFumar');
    }
    
    public function getEdadFumarAttribute($value){
        if($this->fumar() == 1){
            return "Desde los ".$value." años";
        }
        return " ";
    }
    public function edadFumar(){
        return $this->getOriginal('edadFumar');
    }

    public function getAlcoholAttribute($value){
        if($value == false){
            return "No toma alcohol";
        } else{
            return "Si toma alcohol";
        }
    }
    public function alcohol(){
        return $this->getOriginal('alcohol');
    }
    
    public function getNumAlcoholAttribute($value){
        if($this->alcohol() == 1){
            return $value." veces por mes";
        }
        return " ";
    }
    public function numAlcohol(){
        return $this->getOriginal('numAlcohol');
    }
    
    public function getTransfusionesAttribute($value){
        if($value == false){
            return "No se ha realizado transfusiones";
        } else{
            return "Se ha realizado transfusiones";
        }
    }
    public function transfusiones(){
        return $this->getOriginal('transfusiones');
    }
    
    public function getEdadTransfusionesAttribute($value){
        if($this->transfusiones() == 1){
            return "Desde los ".$value." años";
        }
        return " ";
    }
    public function edadTransfusiones(){
        return $this->getOriginal('edadTransfusiones');
    }
    
    public function getCirugiasAttribute($value){
        if($value == null){
            return "Ninguna cirugía";
        } else{
            return $value;
        }
    }
    public function setCirugiasAttribute($value){
        if($value == "Ninguna cirugía"){
            $this->attributes['cirugias'] = null;
        } else{
            $this->attributes['cirugias'] = $value;
        }
    }
    
    public function getFracturasAttribute($value){
        if($value == null){
            return "Ninguna fractura";
        } else{
            return $value;
        }
    }
    public function setFracturasAttribute($value){
        if($value == "Ninguna fractura"){
            $this->attributes['fracturas'] = null;
        } else{
            $this->attributes['fracturas'] = $value;
        }
    }
    
    public function getPresionAltaAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setPresionAltaAttribute($value){
        if($value != null){
            $this->attributes['presionAlta'] = (int) implode('', $value);
        } else{
            $this->attributes['presionAlta'] = null;
        }
    }
    
    public function getDiabetesAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setDiabetesAttribute($value){
        if($value != null){
            $this->attributes['diabetes'] = (int) implode('', $value);
        } else{
            $this->attributes['diabetes'] = null;
        }
    }
    
    public function getArtritisAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setArtritisAttribute($value){
        if($value != null){
            $this->attributes['artritis'] = (int) implode('', $value);
        } else{
            $this->attributes['artritis'] = null;
        }
    }
    
    public function getAsmaAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setAsmaAttribute($value){
        if($value != null){
            $this->attributes['asma'] = (int) implode('', $value);
        } else{
            $this->attributes['asma'] = null;
        }
    }
    
    public function getCancerAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setCancerAttribute($value){
        if($value != null){
            $this->attributes['cancer'] = (int) implode('', $value);
        } else{
            $this->attributes['cancer'] = null;
        }
    }
    
    public function getEpilepsiasAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setEpilepsiasAttribute($value){
        if($value != null){
            $this->attributes['epilepsias'] = (int) implode('', $value);
        } else{
            $this->attributes['epilepsias'] = null;
        }
    }
    
    public function getEnfCorazonAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setEnfCorazonAttribute($value){
        if($value != null){
            $this->attributes['enfCorazon'] = (int) implode('', $value);
        } else{
            $this->attributes['enfCorazon'] = null;
        }
    }
    
    public function getSobrePesoAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setSobrePesoAttribute($value){
        if($value != null){
            $this->attributes['sobrePeso'] = (int) implode('', $value);
        } else{
            $this->attributes['sobrePeso'] = null;
        }
    }
    
    public function getEnfTiroidesAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setEnfTiroidesAttribute($value){
        if($value != null){
            $this->attributes['enfTiroides'] = (int) implode('', $value);
        } else{
            $this->attributes['enfTiroides'] = null;
        }
    }
    
    public function getBipolaridadAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setBipolaridadAttribute($value){
        if($value != null){
            $this->attributes['bipolaridad'] = (int) implode('', $value);
        } else{
            $this->attributes['bipolaridad'] = null;
        }
    }
    
    public function getEsquizofreniaAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setEsquizofreniaAttribute($value){
        if($value != null){
            $this->attributes['esquizofrenia'] = (int) implode('', $value);
        } else{
            $this->attributes['esquizofrenia'] = null;
        }
    }
    
    public function getDepresionAttribute($value){
        return array_map('intval', str_split($value));
    }
    public function setDepresionAttribute($value){
        if($value != null){
            $this->attributes['depresion'] = (int) implode('', $value);
        } else{
            $this->attributes['depresion'] = null;
        }
    }
}
