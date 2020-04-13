<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Hmarca;
use Hamcrest\Core\IsNull;

class hmarcasController extends Controller
{
    //
    public function insert(){
        return view('Hmarcas.InsertarHM');
    }
    public function save(Request $request ){
    $validatedData =$this->validate($request,[
            'nombre'=> 'required',
            'telefono'=>'required',
            'direccion'=>'required'
        ]);
    $hmarca = new Hmarca();
    $user =\Auth::User();
    $hmarca->nombre= $request->input('nombre');
    $hmarca->direccion= $request->input('telefono');
    $hmarca->telefono= $request->input('direccion');
    $hmarca->user_id=$user->id;
    $hmarca->save();
    return redirect()->route('TablaHM')->with(array('message'=>'La marca  ha sido registrada'));
    }
    public function getQuimico(){
    
    }
    public function delete(){
    
    }
    public function edit(){
    
    }
    public function update(){
        
    }
}