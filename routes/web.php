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
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('nosotros', function(){

return view('layouts/nosotros');
	

});

Route::get('contactenos', function(){

return view('layouts/contactenos');
	

});
Route::get('veterinarias', function(){

	    

	    /*Mapper::location('Veterinaria Monterrey, San Pedro, Provincia de San José, Costa Rica')->map(
        	[

			'zoom' => 16,
			'draggable'=> false,
			'marker'=> true,
			'click' => true,
			'animation' => 'DROP',
			'eventAfterLoad'=>
			'circleListener(maps[0].shapes[0].circle_0);'
			]

        	);*/
        
		return view('layouts/veterinarias');


	
});


Route::get('adopcion/{id}','AdopcionController@adopcion');



Route::get('catalogo',
[
'uses'=>'AnimalController@getIndex',
'as'=>'Animal'
]);




Route::get('/home', 'HomeController@index');

Route::get('/redirect','socialcontroller@redirect');

Route::get('/callback','socialcontroller@callback');

Route::get('/contactenos', 'MailController@getContactenos');

Route::post('/contactenos', 'MailController@postContactenos');

Route::get('/adopcion', 'MailAdopcion@getAdopcion');

Route::post('/adopcion', 'MailAdopcion@postAdopcion');

//Route::get('map', 'MapController@maps');

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');