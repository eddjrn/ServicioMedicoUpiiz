<?php

namespace App;

use Illuminate\Auth\Authenticatable;

use Sofa\Eloquence\Eloquence;

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
    use Eloquence;
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
    protected $fillable = [
    	'nombre',
    	'apellidoPaterno',
    	'apellidoMaterno',
    	'email',
    	'facebook',
    	'identificacion',
    	'tipo',
    	'password',
    	'foto',
        'origen',
    	'completado',
    ];
    //protected $guarded = ['tipo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];

    protected $searchableColumns = [
        'nombre' => 20,
        'email' => 10,
        'identificacion' => 10,
        'apellidoPaterno' => 5,
        'apellidoMaterno' => 2,
    ];

    public function student(){
        return $this->hasOne(student::class, 'usuario_id');
    }

    public function medicalData(){
        return $this->hasOne(medicalData::class, 'usuario_id');
    }

    public function medicalRecord(){
        return $this->hasOne(medicalRecord::class, 'usuario_id');
    }

    public function info(){
        return $this->hasMany(info::class, 'usuario_id');
    }

     public function images(){
        return $this->hasMany(images::class, 'usuario_id');
    }

    public function video(){
        return $this->hasMany(video::class, 'usuario_id');
    }

    public function messages(){
        return $this->hasMany(message::class, 'usuario_id');
    }

    public function __toString(){
        return $this->nombre.' '.$this->apellidoPaterno.' '.$this->apellidoMaterno;
    }

    public function getTipoAttribute($value){
        return config('global.tipos')[$value];
    }
    public function tipo(){
        return $this->getOriginal('tipo');
    }

    public function setIdentificacionAttribute($value){
        $word = strtoupper($value);
        $this->attributes['identificacion'] = $word;
    }

    public function setNombreAttribute($value){
        $word = strtolower($value);
        $this->attributes['nombre'] = ucwords($word);
    }

    public function setApellidoPaternoAttribute($value){
        $word = strtolower($value);
        $this->attributes['apellidoPaterno'] = ucfirst($word);
    }

    public function setApellidoMaternoAttribute($value){
        $word = strtolower($value);
        $this->attributes['apellidoMaterno'] = ucfirst($word);
    }

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }

    public function getCompletadoAttribute($value){
    	if($value){
    		return "Perfìl completo";
    	} else{
    		return "Perfìl incompleto";
    	}
    }
    public function completado(){
    	return $this->getOriginal('completado');
    }

    public function getFotoAttribute($value){
    	if($value == null){
    		return asset("/Template/img/avatar.svg");
    	} else{
            return "data:image/jpeg;base64,".base64_encode($value);
    	}
    }

    public function generation(){
        if($this->tipo() == 2){
            $int = 2014670079;
            return substr($int, 0, 4);
        } else{
            return "No es alumno";
        }
    }

    public function getOrigenAttribute($value){
        return config('globalInfo.nombreUpiiz2');
    }
}
