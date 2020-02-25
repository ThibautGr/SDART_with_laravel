<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\ValidationException;
class UserInscription extends Controller
{
    public function getFromInscriptionUser(){
        return view('page/userInscription');
    }

    public function sandUser(Request $request){
//firstName 	lastName 	pseudo 	inconLink 	password 	description
// id_typeart 	levelAdminUser 	mail 	entreprise 	id_country
        $this->validate($request,[
            'firstName'=>'bail|required|between:2 - :50|alpha_dash',
            'lastName'=>'bail|required|between:2 - :50|alpha_dash',
            'pseudo'=>'bail|required|between:2 - :50|alpha_dash|unique:pseudo',
            'avatar' => 'dimensions:min_width=100,min_height=200'

        ]);

    }
}
