<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name',
        'email',
        'password',
        'last_name',
        'first_name',
        'middle_name',
        'city',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function proizv(){
        return $this -> belongsToMany('App\Proizvoditeli');
    }

    public function modeli(){
        return $this -> belongsToMany('App\Modeli');
    }

    public function roles(){
        return $this -> belongsToMany('App\Role');
    }

    public function ystroistva(){
        return $this -> belongsToMany('App\Ystroistva');
    }
}
