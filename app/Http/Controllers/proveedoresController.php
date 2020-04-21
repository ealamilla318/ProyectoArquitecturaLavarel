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
   
    public function delete($proveedor_id){
        $user = \Auth::user();
        $provedor = Proveedore::find($proveedor_id);
    
        if(!is_null($user) ){
         $provedor->delete();
        }
        return redirect()->route('TablaP')->with(array('message'=>'El provedor ha sido eliminado'));
    }
    public function edit($proveedor_id){
        $user = \Auth::user();
        $proveedores = Proveedore::findOrFail($proveedor_id);
        if(!is_null($user) ){
            return view('Proveedores.EditarP',array('proveedores' => $proveedores));
           }else{
            return redirect()->route('home');
           }
    }
    public function update($proveedor_id,Request $request){
        $user = \Auth::user();
    $provedor = Proveedore::findOrFail($proveedor_id);
    $provedor->nombre= $request->input('nombre');
    $provedor->direccion= $request->input('direccion');
    $provedor->telefono= $request->input('telefono');
    $provedor->user_id=$user->id;
    $provedor->update();
    return redirect()->route('TablaP')->with(array('message'=>'El provedor se ha actualizado correctamente'));
    }
}
