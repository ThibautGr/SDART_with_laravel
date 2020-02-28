<?php


namespace App\services;
use App\User;

class UserService
{
    public function getOneUser($id){
        return User::find($id);
    }
    public function getallUser(){
        return User::all();
    }
}
