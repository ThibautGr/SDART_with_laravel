<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeArt;
use App\services\TypeArtService;
class TypeArtController extends Controller
{
    public function GetAllTypeArtWService(TypeArtService $typeArtService){
        $allTypeArt = $typeArtService->getAllTypeArt();
        return view('page/userInscription',['allTypeArt'=>$allTypeArt]);
    }
}
