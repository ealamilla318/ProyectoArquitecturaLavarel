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
Route::get('/deleteE/{empaques_id}', array(
    'as'=>'deleteE',
    'middleware'=>'auth',
    'uses' => 'empaquesController@delete'
));
Route::get('/editarE/{empaques_id}', array(
    'as'=>'editarE',
    'middleware'=>'auth',
    'uses' => 'empaquesController@edit'
));
Route::post('/updateE/{empaques_id}',array(
    'as'=>'updateE',
    'middleware'=>'auth',
    'uses' => 'empaquesController@update'
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
Route::get('/deleteHm/{hmarcas_id}', array(
    'as'=>'deleteHm',
    'middleware'=>'auth',
    'uses' => 'HmarcasController@delete'
));
Route::get('/editarHm/{hmarcas_id}', array(
    'as'=>'editarHm',
    'middleware'=>'auth',
    'uses' => 'HmarcasController@edit'
));
Route::post('/updateHm/{hmarcas_id}',array(
    'as'=>'updateHm',
    'middleware'=>'auth',
    'uses' => 'HmarcasController@update'
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

Route::get('/deleteQm/{qmarcas_id}', array(
    'as'=>'deleteQm',
    'middleware'=>'auth',
    'uses' => 'QmarcasController@delete'
));
Route::get('/editarQm/{qmarcas_id}', array(
    'as'=>'editarQm',
    'middleware'=>'auth',
    'uses' => 'QmarcasController@edit'
));
Route::post('/updateQm/{qmarcas_id}',array(
    'as'=>'updateQm',
    'middleware'=>'auth',
    'uses' => 'QmarcasController@update'
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

Route::get('/deleteP/{proveedores_id}', array(
    'as'=>'deleteP',
    'middleware'=>'auth',
    'uses' => 'ProveedoresController@delete'
));
Route::get('/editarP/{proveedores_id}', array(
    'as'=>'editarP',
    'middleware'=>'auth',
    'uses' => 'ProveedoresController@edit'
));
Route::post('/updateP/{proveedores_id}',array(
    'as'=>'updateP',
    'middleware'=>'auth',
    'uses' => 'ProveedoresController@update'
));
//crud herramientas
Route::get('/insertarQ',array(
    'as'=>'insertarPQ',
    'middleware'=>'auth',
    'uses' => 'quimicosController@insert'
));
Route::post('/guardarQ',array(
    'as'=>'guardarQ',
    'middleware'=>'auth',
    'uses' => 'quimicosController@save'
));
Route::get('/TablaQ', array(
    'as'=>'TablaQ',
    'uses' => 'HomeController@inventarioQ'
));

Route::get('/deleteQ/{quimicos_id}', array(
    'as'=>'deleteQ',
    'middleware'=>'auth',
    'uses' => 'quimicosController@delete'
));
Route::get('/editarQ/{quimicos_id}', array(
    'as'=>'editarQ',
    'middleware'=>'auth',
    'uses' => 'quimicosController@edit'
));
Route::post('/updateQ/{quimicos_id}',array(
    'as'=>'updateQ',
    'middleware'=>'auth',
    'uses' => 'quimicosController@update'
));
//crud quimicos
Route::get('/insertarH',array(
    'as'=>'insertarH',
    'middleware'=>'auth',
    'uses' => 'herramientasController@insert'
));
Route::post('/guardarH',array(
    'as'=>'guardarH',
    'middleware'=>'auth',
    'uses' => 'herramientasController@save'
));
Route::get('/TablaH', array(
    'as'=>'TablaH',
    'uses' => 'HomeController@inventarioH'
));

Route::get('/deleteH/{herramientas_id}', array(
    'as'=>'deleteH',
    'middleware'=>'auth',
    'uses' => 'herramientasController@delete'
));
Route::get('/editarH/{herramientas_id}', array(
    'as'=>'editarH',
    'middleware'=>'auth',
    'uses' => 'herramientasController@edit'
));
Route::post('/updateH/{herramientas_id}',array(
    'as'=>'updateH',
    'middleware'=>'auth',
    'uses' => 'herramientasController@update'
));