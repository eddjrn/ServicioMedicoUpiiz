<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    protected $table = 'municipio';
    
    public function students(){
        return $this->hasMany(student::class, 'municipio_id');
    }
    
    public function clinics(){
        return $this->hasMany(clinic::class, 'municipio_id');
    }
}
