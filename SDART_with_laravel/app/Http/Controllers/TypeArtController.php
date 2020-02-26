<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\TypeArt;
use App\services\TypeArtService;
class TypeArtController extends Controller
{
    public function TypeArtList()
    {
        $typeart = DB::select('select id, name from typeart order by id');

        return view('page.typeartglobal', ['typeart' => $typeart]);
    }

    public function show($id){
        $typeart = DB::table('typeart')->where('id',$id)->first();
        return view('page.typartglobal', ['typeart' => $typeart]);
    }
}
