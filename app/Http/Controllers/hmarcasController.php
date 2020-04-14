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
  
    public function delete(){
        $user = \Auth::user();
        $provedor = Proveedore::find($proveedor_id);
    
        if(!is_null($user) ){
         $provedor->delete();
        }
        return redirect()->route('inventarioP')->with(array('message'=>'El provedor ha sido eliminado'));
    }
    public function edit(){
        $user = \Auth::user();
        $provedor = Proveedore::findOrFail($proveedor_id);
        if(!is_null($user) ){
            return view('Proveedores.EditarP',array('provedor' => $provedor));
           }else{
            return redirect()->route('home');
           }
    }
    public function update(){
        $user = \Auth::user();
        $provedor = Proveedore::findOrFail($proveedor_id);
        $provedor->nombre= $request->input('nombre');
        $provedor->direccion= $request->input('direccion');
        $provedor->telefono= $request->input('telefono');
        $provedor->user_id=$user->id;
        $provedor->update();
        return redirect()->route('inventarioP')->with(array('message'=>'El provedor se ha actualizado correctamente'));
        }
    }
}