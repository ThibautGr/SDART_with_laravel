<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    protected $table='art';
    protected $table='art';

    public function typeart(){
        return $this->belongsTo('App\Typeart');
    }

}
