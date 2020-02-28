<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeArt extends Model
{
    protected $table='typeart';

    public function art(){
        return $this->hasMany('App\Art');
    }
}
