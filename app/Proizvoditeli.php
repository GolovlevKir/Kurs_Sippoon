<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proizvoditeli extends Model
{
    //
    protected $fillable = [
            'name'
    ];

    public function user(){
        return $this -> belongsToMany('App\User');
    }

    public function modeli(){
        return $this -> belongsTo('App\Modeli');
    }

    public function roles(){
        return $this -> belongsTo('App\Role');
    }

    public function ystroistva(){
        return $this -> hasMany('App\Ystroistva');
    }
}
