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

Route::get('/','PageController@home');
Route::get('/home','PageController@home');
Route::get('/about','PageController@about');
Route::get('/bride','PageController@bride');
Route::get('/contact','PageController@contact');
Route::get('/groom','PageController@groom');
Route::get('/service','PageController@service');
Route::get('/login','PageController@login');

Route::get('/admindashboard','AdminController@admindashboard');
Route::get('/admincreateprofile','AdminController@admincreateprofile');
Route::get('/adminviewprofile','AdminController@adminviewprofile');

Route::POST('/adminprofileSave','AdminController@registerSave');
Route::POST('/adminprofileUpdate','AdminController@Update');
Route::get('/admineditprofile/{id}','AdminController@Edit');
Route::get('/adminviewprofile','AdminController@viewprofile');
Route::get('/adminsettings','AdminController@adminsettings');

Route::POST('/adminfilter','FilterController@adminfilter');

Route::get('/customerdashboard','PageController@customerdashboard');

Route::POST('/registerSave','ProfileController@registerSave');
Route::POST('/registerUpdate','ProfileController@Update');

Route::get('/settings','ProfileController@settings');


Route::group(['prefix' => 'admin'],function(){

	Route::get('/service','ServiceController@index');
    Route::get('/editService/{id}','ServiceController@editService');
    Route::get('/deleteService/{id}','ServiceController@deleteService');
    Route::post('/addService','ServiceController@addService');
    Route::post('/updateService','ServiceController@updateService');

    Route::get('/report','reportController@index');
    Route::post('/report','reportController@report');
    
});




Route::POST('/settings','ProfileController@changepass');

Route::POST('/userlogin','UserLoginController@login');
Route::POST('/homelogin','UserLoginController@homelogin');

Route::get ( '/logout', 'UserLoginController@logout' );

Route::get('/customerprofile/{id}','ProfileController@Edit');
Route::get('/viewprofile/{id}','ProfileController@viewprofile');

Route::get('/yourplan','ProfileController@yourplan');

Route::get('/viewedprofile','ProfileController@viewedprofile');

Route::get('/free-register','ProfileController@index');

Route::get('/filter','FilterController@index');

Route::POST('/search','FilterController@filter');


Route::get('/createRequest/{id}','InstaController@createRequest');
Route::get('/redirect/{id}','InstaController@redirect');

// Route::get('/password/reset','PageController@forgetpass');




Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
