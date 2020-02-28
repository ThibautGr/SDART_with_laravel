<?php

namespace App\Http\Controllers;

use App\services\TypeArtService;
use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
   /* public function getUserByIdWService($id,TypeArtService $typeArtService){

        $user = User::find($id);
        $typeArt = $typeArtService->getAllTypeArt();
             return view('page.esapaceUserCo',compact('user','typeArt'));
    }*/

    public function displaySpaceUser(TypeArtService $typeArtService){
        $typeart = $typeArtService->getAllTypeArt();
        return view('page.esapaceUserCo',compact('typeart'));
    }
}
