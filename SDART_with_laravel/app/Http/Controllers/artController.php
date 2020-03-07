<?php

namespace App\Http\Controllers;

use App\services\artService;
use App\services\TypeArtService;

class artController extends Controller
{
        public function getArtById($id, TypeArtService $typeArtService,artService $artService){
            $typeart = $typeArtService->getAllTypeArt();
            $art  = $artService->getArtById($id);
            return view('page.pageOfArt',compact('typeart','art'));
        }
}
