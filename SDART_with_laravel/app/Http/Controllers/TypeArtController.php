<?php

namespace App\Http\Controllers;

use App\Art;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Typeart;
use App\services\TypeArtService;
class TypeArtController extends Controller
{
    public function TypeArtList($id)
    {
        //$typeart = DB::select('select id, name from typeart order by id');
        $typeart = Typeart::All();
        // return view('page.typeartglobal', ['typeart' => $typeart]);
  
         //$artgraph = DB::select('select id, title, description, linkImg from art where id_typeart=?',[$n]);
        $allTypeArt = Art::find($id);
         //return view('page.artgraphiqueglobal', ['artgraph' => $artgraph]);
 
         return view('page.typeartglobal',compact('allTypeArt','typeart'));
 
    }
  
}
