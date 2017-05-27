<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrer extends Model
{
    protected $table = 'carrera';
    
    public function students(){
        return $this->hasMany(student::class, 'carrera_id');
    }
}
