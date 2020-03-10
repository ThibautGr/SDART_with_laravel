<?php

namespace App\Http\Controllers;

use App\services\artService;
use App\services\TypeArtService;
use App\User;
use Illuminate\Support\Facades\DB;

class artController extends Controller
{
        public function getArtById($id, TypeArtService $typeArtService,artService $artService){
            $typeart = $typeArtService->getAllTypeArt();
            $art  = $artService->getArtById($id);
            return view('page.pageOfArt',compact('typeart','art'));
        }

        public function getUserfromArt($id, TypeArtService $typeArtService){
            $typeart = $typeArtService->getAllTypeArt();
            $artsUser = User::find($id)->art;
            return view('page.esapaceUserCo',compact('typeart','artsUser'));

        }
        public function getOtherUserfromArt($id, TypeArtService $typeArtService){
            $typeart = $typeArtService->getAllTypeArt();
            $artsUser = User::find($id)->art;
            $userofArt =  User::find($id);
            /*$artsUser = DB::table('art')
                ->join('users','art.user_id','=','users.id')
                ->where('user_id',$id)
                ->get();
            /*
             *   $getArtAuserByidTypeArt = DB::table('users')
            ->join('art','users.id','=','art.user_id')
            ->join('typeart','art.typeart_id','=','typeart.id')
            ->select('users.*','art.*')
            ->where('typeart.id', $id)
            ->get();
                 SELECT *
                FROM `art`
                JOIN users on art.user_id = users.id
                WHERE `user_id` = 1
            */
            return view('page.artOfOtherByID',compact('typeart','userofArt','artsUser'));
        }
}
