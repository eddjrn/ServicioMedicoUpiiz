<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class medicalData extends Model
{
    use Eloquence;

    protected $table = 'datosMedicos';

    protected $fillable = [
    	'usuario_id',
    	'numSeguro',
    	'clinica_id',
    	'proveedorSeguro',
    	'seguroVida',
    	'institucionSeguro_id',
    	'tipoSangre',
    ];

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

    public function setNumSeguroAttribute($value){
      if($value == "No tiene número de seguro"){
        $this->attributes['numSeguro'] = null;
      } else{
        $this->attributes['numSeguro'] = $value;
      }
    }
    public function getNumSeguroAttribute($value){
      if($value == null){
        return "No tiene número de seguro";
      } else{
        return $value;
      }
    }

    public function getProveedorSeguroAttribute($value){
        return config('global.proveedores')[$value];
    }
    public function proveedorSeguro(){
        return $this->getOriginal('proveedorSeguro');
    }

    public function getSeguroVidaAttribute($value){
        return $value;
    }
    public function seguroVida(){
        return config('global.SeguroVida')[$this->seguroVida];
    }

    public function getTipoSangreAttribute($value){
        return config('global.tiposSangre')[$value];
    }
    public function tipoSangre(){
        return $this->getOriginal('tipoSangre');
    }

    public function bloodTypes(){
        $types = ['1' => 'A+', '2' => 'A-', '3' => 'B+', '4' => 'B-', '5' => 'O+', '6' => 'O-', '7' => 'AB+', '8' => 'AB-'];
        return $types;
    }
}
