<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeArt;
class TypeArtController extends Controller
{
    public function GetAllTypeArt(){
        $alltypeArt = TypeArt::find;
        $alltypeArt->save();
    }
}
