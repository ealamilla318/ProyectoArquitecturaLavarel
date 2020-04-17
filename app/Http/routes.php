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
Route::get('/calando', function () {
    return view('Herramientas.InsertarH');
});
Route::get('/admin', function () {
    return view('IndexAdmin');
});
Route::get('/admin', array(
    'as'=>'admin',
    'middleware'=>'auth',
    'uses' => 'HomeController@AdminIndex'
));

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

//CRUD empaque
Route::get('/insertarE',array(
    'as'=>'insertarE',
    'middleware'=>'auth',
    'uses' => 'empaquesController@insert'
));
Route::post('/guardarE',array(
    'as'=>'guardarE',
    'middleware'=>'auth',
    'uses' => 'empaquesController@save'
));
Route::get('/TablaE', array(
    'as'=>'TablaE',
    'uses' => 'HomeController@inventarioE'
));

//CRUD Hmarca
Route::get('/insertarHm',array(
    'as'=>'insertarHm',
    'middleware'=>'auth',
    'uses' => 'hmarcasController@insert'
));
Route::post('/guardarHm',array(
    'as'=>'guardarHm',
    'middleware'=>'auth',
    'uses' => 'hmarcasController@save'
));
Route::get('/TablaHm', array(
    'as'=>'TablaHm',
    'uses' => 'HomeController@inventarioHm'
));
//CRUD Qmarca
Route::get('/insertarQm',array(
    'as'=>'insertarQm',
    'middleware'=>'auth',
    'uses' => 'qmarcasController@insert'
));
Route::post('/guardarQm',array(
    'as'=>'guardarQm',
    'middleware'=>'auth',
    'uses' => 'qmarcasController@save'
));
Route::get('/TablaQm', array(
    'as'=>'TablaQm',
    'uses' => 'HomeController@inventarioQm'
));
//CRUD Proveedores
Route::get('/insertarP',array(
    'as'=>'insertarP',
    'middleware'=>'auth',
    'uses' => 'proveedoresController@insert'
));
Route::post('/guardarP',array(
    'as'=>'guardarP',
    'middleware'=>'auth',
    'uses' => 'proveedoresController@save'
));
Route::get('/TablaP', array(
    'as'=>'TablaP',
    'uses' => 'HomeController@inventarioP'
));