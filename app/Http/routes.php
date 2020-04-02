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
//Rutas Redirecciones
Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('IndexAdmin');
});
//Rutas Funciones



Route::get('/insertar',array(
    'as'=>'insertar',
    'middleware'=>'auth',
    'uses' => 'CRUD@insertar'
));
Route::post('/guardar',array(
    'as'=>'guardar',
    'middleware'=>'auth',
    'uses' => 'CRUD@guardar'
));
Route::post('','UserController@register');
Route::auth();
Route::get('/home', array(
    'as'=>'home',
    'uses' => 'HomeController@index'
));
Route::get('/inventario', array(
    'as'=>'inventario',
    'uses' => 'HomeController@inventario'
));
Route::get('/crude/{crude_id}',array(
    'as'=> 'detalleJitomate',
    'uses'=> 'CRUD@getJitomate'
));
