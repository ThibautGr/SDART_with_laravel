<?php

namespace App\Http\Controllers;

use App\services\artService;
use App\services\UserService;
use App\services\TypeArtService;
use App\Typeart;
use Illuminate\Support\Facades\DB;

class TypeArtController extends Controller
{
    public function TypeArtList($id,artService $artService,UserService $userService,TypeArtService $TypeArtService)
    {
        //$typeart = DB::select('select id, name from typeart order by id');
        $typeart = Typeart::All();
        // return view('page.typeartglobal', ['typeart' => $typeart]);
        $TypeArtTitle = $TypeArtService->typeArtBid($id);

         //$artgraph = DB::select('select id, title, description, linkImg from art where id_typeart=?',[$n]);
        //$allArtbyID = Art::find($id);
         //return view('page.artgraphiqueglobal', ['artgraph' => $artgraph]);
        // $getArtByidTypeArt = $artService->getArtByIdart($id);
        // $getUserByIdArt = $artService->getUserByIdArt($id);
        $getArtAuserByidTypeArt = DB::table('users')
            ->join('art','users.id','=','art.user_id')
            ->join('typeart','art.typeart_id','=','typeart.id')
            ->select('users.*','art.*')
            ->where('typeart.id', $id)
            ->get();


         return view('page.typeartglobal',compact('getArtAuserByidTypeArt','typeart','TypeArtTitle'));

    }

}
