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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/react', function () {
    return view('react');
});
Route::get('/ejemplo', function () {
    return view('ejemplo');
});
Route::get('/pruebas', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/maxim', function () {
    return view('maxim');
});
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


Route::get('/crude/{crude_id}',array(
    'as'=> 'detalleJitomate',
    'uses'=> 'CRUD@getJitomate'
));
