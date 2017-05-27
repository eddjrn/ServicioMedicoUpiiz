<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    protected $table = 'estado';
    
    public function students(){
        return $this->hasMany(student::class, 'estado_id');
    }
}
