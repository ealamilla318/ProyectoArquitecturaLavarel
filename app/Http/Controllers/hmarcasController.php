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
        return view('Hmarcas.InsertarHm');
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
    return redirect()->route('TablaHm')->with(array('message'=>'La marca  ha sido registrada'));
    }
  
    public function delete($hmarca_id){
        $user = \Auth::user();
        $provedor = Hmarca::find($hmarca_id);
    
        if(!is_null($user) ){
         $provedor->delete();
        }
        return redirect()->route('inventarioHm')->with(array('message'=>'El provedor ha sido eliminado'));
    }
    public function edit($hmarca_id_hmarcas){
        $user = \Auth::user();
        $hmarcas = Hmarca::whereColumn('hmarca_id_hmarcas', 'hmarcas.id_hmarcas');
        if(!is_null($user) ){
            return view('Hmarcas.EditarHm',array('hmarcas' => $hmarcas));
           }else{
            return redirect()->route('home');
           }
    }
    public function update($hmarca_id,Request $request){
        $user = \Auth::user();
        $provedor = Hmarca::findOrFail($hmarca_id);
        $provedor->nombre= $request->input('nombre');
        $provedor->direccion= $request->input('direccion');
        $provedor->telefono= $request->input('telefono');
        $provedor->user_id=$user->id;
        $provedor->update();
        return redirect()->route('inventarioHm')->with(array('message'=>'El provedor se ha actualizado correctamente'));
        }
    }
