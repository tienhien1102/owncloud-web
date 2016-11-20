<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@index');
//Route::get('/addNewGroup','HomeController@getaddNewGroup');
Route::get('/loginAccount','HomeController@login');
Route::get('/logout','HomeController@logoutAccount');
Route::get('/sharingin','HomeController@shareWithYou');
Route::get('/sharefile','HomeController@shareFileToUser');
Route::get('/registerAccount','HomeController@createAccount');
Route::get('/personal','HomeController@personalGetinfo');
Route::get('/setpassAccount','HomeController@setPassword');
Route::get('/openfilecloud', 'HomeController@openFileRead');
Route::get('/downloadfilecloud', 'HomeController@downloadFileRead');
Route::get('/shareother','HomeController@shareWithOther');
Route::get('/testShow','HomeController@getTestShow');
Route::get('/uploadfile','HomeController@getUploadfile');



//Route::get('/singin', function () {
//    return view('login');
//});



