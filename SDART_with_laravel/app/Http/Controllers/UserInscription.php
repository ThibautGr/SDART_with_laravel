<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\ValidationException;
class UserInscription extends Controller
{
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
            'id_typeart'=>'required',
            'levelAdminUser'=>'required',
            'mail'=>'required|string|email|max:255|unique:users',
            'entreprise'=>'bail|required|between:2 - :150|alpha_dash,nullable',
            'id_country'=>'required'
        ];

        $request->validate($rules);

        $request = app('request');
        if($request->hasfile('inconLink')){
            $inconLink = $request->file('inconLink');
            $filename = time() . '.' . $inconLink->getClientOriginalExtension();
            Image::make($inconLink)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename) );
        }
        //firstName 	lastName 	pseudo 	inconLink 	password 	description
        // id_typeart 	levelAdminUser 	mail 	entreprise 	id_country
       /* return User::create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'pseudo'=> $request['pseudo'],
            'inconLink' => $filename,
            'password'=>$request['password'],
            'description'=>$request['description'],
            'id_typeart'=>$request['id_typeart'],
            'levelAdminUser'=>$request['levelAdminUser'],
            'mail'=>$request['mail'],
            'entreprise'=>$request['entreprise'],
            'id_country'=>$request['id_country']
        ]);*/
        $createUser = new User;
        $createUser->firstName = $request->firstName;
        $createUser->lastName = $request->lastName;
        $createUser->pseudo=$request->pseudo;
        $createUser->inconLink=$request->$filename;
        $createUser->password=$request->password;
        $createUser->description=$request->description;
        $createUser->id_typeart=$request->id_typeart;
        $createUser->levelAdminUser=$request->levelAdminUser;
        $createUser->entreprise=$request->entreprise;
        $createUser->id_country=$request->id_country;
        $createUser->save();
        return view("page/contactCreated");

    }
}
