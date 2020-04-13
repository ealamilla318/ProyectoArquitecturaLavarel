<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Qmarca;
use Hamcrest\Core\IsNull;

class qmarcasController extends Controller
{
    //
    public function insert(){
        return view('Qmarcas.InsertarQM');
    }
    public function save(Request $request ){
    $validatedData =$this->validate($request,[
            'nombre'=> 'required',
            'telefono'=>'required',
            'direccion'=>'required'
        ]);
    $qmarca = new Qmarca();
    $user =\Auth::User();
    $qmarca->nombre= $request->input('nombre');
    $qmarca->direccion= $request->input('telefono');
    $qmarca->telefono= $request->input('direccion');
    $qmarca->user_id=$user->id;
    $qmarca->save();
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
