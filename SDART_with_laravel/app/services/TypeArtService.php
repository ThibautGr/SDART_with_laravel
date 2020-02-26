<?php

namespace App\services;
use App\Typeart;
class TypeArtService
{
    public function getAllTypeArt(){
        return Typeart::all();
    }
}
