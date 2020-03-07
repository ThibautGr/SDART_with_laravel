<?php

namespace App\Http\Controllers;
use App\services\CountryService;
use App\services\TypeArtService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\ValidationException;
class UserInscription extends Controller
{
    public function GetAllTypeArtACountryWSerivce(TypeArtService $typeArtService,CountryService $countryService){
        $typeart = $typeArtService->getAllTypeArt();
        $allCountry = $countryService->getAllCountry();
        return view('page/userInscription', compact('allCountry', 'typeart'));
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
            'typeart_id'=>'required',
            'levelAdminUser'=>'required',
            'email'=>'required|string|email|max:255|unique:users',
            'entreprise'=>'min:2|max:50|alpha_dash|nullable',
            'country_id'=>'required'
        ];

        $request->validate($rules);


        if($request->hasfile('inconLink')){
            $inconLink = time().'.'.$request->inconLink->extension();
            $request->inconLink->move(public_path('/img/imgIconeUser'), $inconLink);
            $createUser = new User;
            $createUser->firstName = $request->firstName;
            $createUser->lastName = $request->lastName;
            $createUser->pseudo=$request->pseudo;
            $createUser->inconLink=$inconLink;
            $createUser->password=Hash::make($request['password']);
            $createUser->description=$request->description;
            $createUser->typeart_id=$request->typeart_id;
            $createUser->levelAdminUser=$request->levelAdminUser;
            $createUser->email=$request->email;
            $createUser->entreprise=$request->entreprise;
            $createUser->country_id=$request->country_id;
            $createUser->save();
        }

        return view("page.contactCreated");

    }



}
