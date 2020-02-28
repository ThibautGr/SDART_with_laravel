<?php

namespace App\Http\Controllers;

use App\services\TypeArtService;
use App\User;
use DemeterChain\A;
use Illuminate\Http\Request;
use App\Art;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
   /* public function getUserByIdWService($id,TypeArtService $typeArtService){

        $user = User::find($id);
        $typeArt = $typeArtService->getAllTypeArt();
             return view('page.esapaceUserCo',compact('user','typeArt'));
    }*/

    public function displaySpaceUser(TypeArtService $typeArtService,$id){
        $artsUser = User::find($id)->art;
        $typeart = $typeArtService->getAllTypeArt();
        return view('page.esapaceUserCo',compact('typeart','artsUser'));
    }

    public function registreArt(Request $request,TypeArtService $typeArtService){
        $typeart = $typeArtService->getAllTypeArt();
        $rules = [
            'title'=>'bail|required|min:2|max:50|alpha_dash',
            'description'=>'bail|required|min:2|max:2000|alpha_dash',
            'linkImg'=>'bail|image|required|dimensions:min_width=100,min_height=200',
        ];
        $request->validate($rules);
        if($request->hasfile('linkImg'))
        {
            $linkImg = time().'.'.$request->linkImg->extension();
            $request->linkImg->move(public_path('/img/allArt'), $linkImg);
            $createArt = new Art;
            $createArt -> title = $request->title;
            $createArt->description=$request->description;
            $createArt->linkImg=$linkImg;
            $createArt->user_id = $request->user_id;
            $createArt->id_typeart=$request->id_typeart;
            $createArt->save();
        }
        return view('page.esapaceUserCo',compact('typeart'));
    }

    /*    function getCommentsFromContact($id){
        $commentContacts = \App\Contact::find($id)->conmments;
        return view('getCommentsFromContact',['commentContacts'=>$commentContacts]);
    }
    */
    function getArtfromUser($id){
        $artsUser = User::find($id)->art;

        return view('page.getArtByUser',compact('artsUser'));
    }


}
