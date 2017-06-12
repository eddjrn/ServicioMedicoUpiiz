<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $table = 'estatus';
    
    protected $fillable = ['nombre'];
    
    public $timestamps = false;
    
    public function students(){
        return $this->hasMany(student::class, 'estatus_id');
    }
}
