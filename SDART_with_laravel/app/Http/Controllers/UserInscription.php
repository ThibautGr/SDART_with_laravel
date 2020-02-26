<?php

namespace App\Http\Controllers;
use App\services\CountryService;
use App\services\TypeArtService;
use Illuminate\Http\Request;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\ValidationException;
class UserInscription extends Controller
{
    public function GetAllTypeArtACountryWSerivce(TypeArtService $typeArtService,CountryService $countryService){
        $allTypeArt = $typeArtService->getAllTypeArt();
        $allCountry = $countryService->getAllCountry();
        return view('page/userInscription', compact('allCountry', 'allTypeArt'));
    }

    public function getFromInscriptionUser(){
        return view('page/userInscription');
    }

    public function sandUser(Request $request){
        $rules = [
            'firstName'=>'bail|required|min:2|max:50|alpha_dash',
            'lastName'=>'bail|required|min:2|max:50|alpha_dash',
            'pseudo'=>'bail|required|min:2|max:50|alpha_dash|unique:users',
            'inconLink'=>'bail|image|required|dimensions:min_width=100,min_height=200',
            'password'=>'required|string|min:6|confirmed',
            'description'=>'required|string|min:20|max:500',
            'id_typeart'=>'required',
            'levelAdminUser'=>'required',
            'mail'=>'required|string|email|max:255|unique:users',
            'entreprise'=>'min:2|max:50|alpha_dash|nullable',
            'id_country'=>'required'
        ];

        $request->validate($rules);


        if($request->hasfile('inconLink')){
            $inconLink = time().'.'.$request->inconLink->extension();
            $request->inconLink->move(resource_path('/img/imgIconeUser'), $inconLink);
            $createUser = new User;
            $createUser->firstName = $request->firstName;
            $createUser->lastName = $request->lastName;
            $createUser->pseudo=$request->pseudo;
            $createUser->inconLink=$inconLink;
            $createUser->password=$request->password;
            $createUser->description=$request->description;
            $createUser->id_typeart=$request->id_typeart;
            $createUser->levelAdminUser=$request->levelAdminUser;
            $createUser->mail=$request->mail;
            $createUser->entreprise=$request->entreprise;
            $createUser->id_country=$request->id_country;
            $createUser->save();
        }

        return view("page.contactCreated");

    }



}
