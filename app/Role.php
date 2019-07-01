<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'name',
        'proiz',
        'yst',
        'mod',
        'user_id',
    ];

    public function proizv(){
        return $this -> belongsTo('App\Proizvoditeli');
    }

    public function modeli(){
        return $this -> belongsTo('App\Modeli');
    }

    public function user(){
        return $this -> belongsToMany('App\User');
    }

    public function ystroistva(){
        return $this -> belongsTo('App\Ystroistva');
    }
}
