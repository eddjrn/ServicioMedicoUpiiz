<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicalInstitute extends Model
{
    protected $table = 'institucionSeguro';
    
    protected $fillable = ['nombre'];
    
    public $timestamps = false;
    
    public function medicalData(){
        return $this->hasMany(medicalData::class, 'institucionSeguro_id');
    }
}
