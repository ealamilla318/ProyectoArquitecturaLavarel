<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Proveedore;
use Hamcrest\Core\IsNull;

class proveedoresController extends Controller
{
    //
    public function insert(){
        return view('Proveedores.InsertarP');
    }
    public function save(Request $request ){
    $validatedData =$this->validate($request,[
            'nombre'=> 'required',
            'telefono'=>'required',
            'direccion'=>'required'
        ]);
    $proveedores = new Proveedore();
    $user =\Auth::User();
    $proveedores->nombre= $request->input('nombre');
    $proveedores->direccion= $request->input('telefono');
    $proveedores->telefono= $request->input('direccion');
    $proveedores->user_id=$user->id;
    $proveedores->save();
    return redirect()->route('TablaP')->with(array('message'=>'El Provedor ha sido registrado'));
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
