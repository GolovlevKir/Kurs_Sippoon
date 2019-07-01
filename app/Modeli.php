<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modeli extends Model
{
    //
    protected $fillable = [
        'name',
        'user_id',
        'ystr_id',
    ];

    public function proizv(){
        return $this -> belongsTo('App\Proizvoditeli');
    }

    public function user(){
        return $this -> belongsToMany('App\User');
    }

    public function roles(){
        return $this -> belongsTo('App\Role');
    }

    public function ystroistva(){
        return $this -> belongsTo('App\Ystroistva');
    }
}
