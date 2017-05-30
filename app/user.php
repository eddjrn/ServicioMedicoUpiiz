<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class user extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellidoPa', 'apellidoMa', 'email', 'boleta', 'tipo', 'password'];
    //protected $guarded = ['tipo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
    
    
    public function student(){
        return $this->hasOne(student::class, 'usuario_id');
    }
    
    public function __toString(){
        return $this->nombre.' '.$this->apellidoPa.' '.$this->apellidoMa;
    }
    
    public function type(){
        if($this->tipo == 1){
            return 'Administrador';
        }
        
        if($this->tipo == 2){
            return 'Alumno';
        }
    }
    
//     public function getAuthPassword() {
//         return $this->password;
//     }
    
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }
}