<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'tema'], function(){
	Route::get('/{id}',[
		'uses' 	=> 'MPedagogicoController@tema',
		'as'	=>	'viewTema'
	]);
	Route::group(['prefix'=>'/temadetalle'], function(){
		//print("ruta del temadetalle");
		Route::get('/{id}',[
			'uses' 	=> 'MPedagogicoController@temadetalle',
			'as'	=>	'viewTemaDetalle'
		]);
	});

});


Route::group(['prefix'=>'temas/temadetalle'], function(){
	//print("ruta del temadetalle");
	Route::get('/{id}',[
		'uses' 	=> 'MPedagogicoController@temadetalle',
		'as'	=>	'viewTemaDetalle'
	]);
});
