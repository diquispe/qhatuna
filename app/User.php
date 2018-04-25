<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'level', 'username', 'nombre', 'apellidos', 'avatar', 'edad', 'sexo', 'direccion', 'distrito', 'provincia', 'departamento', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tiene() {

    }

    public function eventos() {
        return $this->hasMany(Evento::class)->orderBy('created_at', 'desc');
    }

    public function invitaciones(){
        // el usuario tiene invitaciones
    }


}
