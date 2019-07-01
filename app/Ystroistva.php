<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ystroistva extends Model
{
    //
    protected $fillable = [
        'name',
        'proiz_id',
        'user_id',
    ];
    public function proizv(){
        return $this -> belongsTo('App\Proizvoditeli');
    }

    public function modeli(){
        return $this -> belongsTo('App\Modeli');
    }

    public function roles(){
        return $this -> belongsTo('App\Role');
    }

    public function user(){
        return $this -> belongsToMany('App\User');
    }
}


