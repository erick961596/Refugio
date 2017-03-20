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

Route::get('/', function () {
    return view('welcome');
});


Route::get('nosotros', function(){

return view('layouts/nosotros');
	

});

Route::get('contactenos', function(){

return view('layouts/contactenos');
	

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/redirect','socialcontroller@redirect');

Route::get('/callback','socialcontroller@callback');