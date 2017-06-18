<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class medicalData extends Model
{
    use Eloquence;
    
    protected $table = 'datosMedicos';
    
    protected $fillable = ['usuario_id', 'numSeguro', 'proveedorSeguro', 'clinica_id', 'institucionSeguro_id', 'tipoSangre'];
    
    protected $searchableColumns = [
        'numSeguro' => 20,
    ];
    
    public function user(){
        return $this->belongsTo(user::class, 'usuario_id');
    }
    
    public function clinic(){
        return $this->belongsTo(clinic::class, 'clinica_id');
    }
    
    public function institution(){
        return $this->belongsTo(medicalInstitute::class, 'institucionSeguro_id');
    }
    
    public function provider(){
        if($this->proveedorSeguro == 1){
            return 'UPIIZ-IPN';
        } elseif($this->proveedorSeguro == 2){
            return 'Padres';
        } if($this->proveedorSeguro == 3){
            return 'Trabajo';
        }
    }
    
    public function providerTypes(){
        $types = ['1' => 'UPIIZ-IPN', '2' => 'Padres', '3' => 'Trabajo'];
        return $types;
    }
    
    public function bloodType(){
        if($this->tipoSangre == 1){
            return 'A+';
        } elseif($this->tipoSangre == 2){
            return 'A-';
        } elseif($this->tipoSangre == 3){
            return 'B+';
        } elseif($this->tipoSangre == 4){
            return 'B-';
        } elseif($this->tipoSangre == 5){
            return 'O+';
        } elseif($this->tipoSangre == 6){
            return 'O-';
        } elseif($this->tipoSangre == 7){
            return 'AB+';
        } elseif($this->tipoSangre == 8){
            return 'AB-';
        }
    }
    
    public function bloodTypes(){
        $types = ['1' => 'A+', '2' => 'A-', '3' => 'B+', '4' => 'B-', '5' => 'O+', '6' => 'O-', '7' => 'AB+', '8' => 'AB-'];
        return $types;
    }
}
