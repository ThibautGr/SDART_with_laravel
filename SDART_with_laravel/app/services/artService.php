<?php


namespace App\services;
use App\Art;

class artService
{

    public function getArtById($id){
        return Art::find($id);
    }

    public function getTenLastArt(){

       $artOne = Art::where('typeart_id', 1)
           ->orderBy('created_at', 'desc')
           ->take(10);
        $artTwo = Art::where('typeart_id', 2)
            ->orderBy('created_at', 'desc')
            ->take(10);
    return   $artThree = Art::where('typeart_id', 3)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->union($artOne)
            ->union($artTwo)
            ->get();
    }

    public function getArtByIdart($id){
        return Art::where('typeart_id', $id)
            ->orderBy('created_at', 'desc')
           ->get();
    }
  /*  public function getUserByIdArt($id){
        return  $user = Art::find($id)->user;
    }*/
}
