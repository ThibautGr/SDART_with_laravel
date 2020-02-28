<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/job/', function () {
    return view('page.job');
});
Route::get('/userInscription/','UserInscription@getFromInscriptionUser');
Route::post('/userInscription/','UserInscription@sandUser');


Route::get('/typeart/' , 'TypeArtController@TypeArtList');
Route::get('/userInscription/','UserInscription@GetAllTypeArtACountryWSerivce');
Route::get('/typeart/{id}' , 'TypeArtController@TypeArtList');

//service auth
Route::middleware('auth')->group(function () {
    Route::get('/', function ()    {
        // Réservé aux utilisateurs authentifiés
    });
    Route::get('comptes', function () {
        // Réservé aux utilisateurs authentifiés
    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','AccueilController@GetAllTypeArtACountryWSerivce');
<<<<<<< HEAD

<<<<<<< HEAD
//service auth
Route::middleware('auth')->group(function () {
    Route::get('/', function ()    {
        // Réservé aux utilisateurs authentifiés
    });
    Route::get('comptes', function () {
        // Réservé aux utilisateurs authentifiés
    });
});

Auth::routes();
=======
//Route::get('/esapaceUserCo/{$id}','userController@getUserByIdWService');
Route::get('displaySpaceUser','userController@displaySpaceUser');
>>>>>>> master
=======

//Route::get('/esapaceUserCo/{$id}','userController@getUserByIdWService');
Route::get('displaySpaceUser','userController@displaySpaceUser');
>>>>>>> master

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','AccueilController@GetAllTypeArtACountryWSerivce');
