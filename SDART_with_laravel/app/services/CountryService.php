<?php


namespace App\services;

use App\Country;
class CountryService
{
    public function getAllCountry(){
        return Country::all();
    }
}
