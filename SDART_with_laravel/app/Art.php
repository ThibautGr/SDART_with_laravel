<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    protected $table='art';

    public function typeart(){
        return $this->belongsTo('App\Typeart');
    }

    public function user(){
        return $this->hasOne('App\User');
    }
}
