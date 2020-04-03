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
Route::get('/inventario', array(
    'as'=>'inventario',
    'uses' => 'HomeController@inventario'
));
//Rutas Funciones

Route::post('','UserController@register');
Route::auth();
Route::get('/home', array(
    'as'=>'home',
    'uses' => 'HomeController@index'
));


//CRUD JITOMATE
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
Route::post('/update/{crude_id}',array(
    'as'=>'update',
    'middleware'=>'auth',
    'uses' => 'CRUD@update'
));
Route::get('/crude/{crude_id}',array(
    'as'=> 'detalleJitomate',
    'uses'=> 'CRUD@getJitomate'
));
Route::get('/delete/{crude_id}', array(
    'as'=>'delete',
    'middleware'=>'auth',
    'uses' => 'CRUD@delete'
));
Route::get('/editar/{crude_id}', array(
    'as'=>'editar',
    'middleware'=>'auth',
    'uses' => 'CRUD@edit'
));