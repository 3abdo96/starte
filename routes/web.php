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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('auth/login', 'HomeController@logout');

Route::get('/', function(){
    return "home";
});

// Route::group(["namespace"=>"User"],function(){
//     Route::get("/","FirstController@getIndex");
// });

