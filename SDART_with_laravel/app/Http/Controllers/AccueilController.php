<?php

namespace App\Http\Controllers;

use App\services\artService;
use App\services\CountryService;
use App\services\TypeArtService;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function GetAllTypeArtACountryWSerivce(TypeArtService $typeArtService,CountryService $countryService){
        $typeart = $typeArtService->getAllTypeArt();
        $allCountry = $countryService->getAllCountry();
        return view('page/accueil', compact('allCountry', 'typeart'));
    }
    public function getlastTenArt(artService $artService,TypeArtService $typeArtService){
        $lastTenArtOfAllArt = $artService->getTenLastArt();
        $typeart = $typeArtService->getAllTypeArt();
        return view('page/accueil', compact('lastTenArtOfAllArt', 'typeart'));
    }

}
