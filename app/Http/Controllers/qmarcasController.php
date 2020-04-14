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
   
    public function delete($qmarca_id){
        $user = \Auth::user();
        $provedor = Qmarca::find($qmarca_id);
    
        if(!is_null($user) ){
         $provedor->delete();
        }
        return redirect()->route('inventarioP')->with(array('message'=>'El provedor ha sido eliminado'));
    }
    public function edit($qmarca_id){
        $user = \Auth::user();
        $provedor = Qmarca::findOrFail($qmarca_id);
        if(!is_null($user) ){
            return view('Proveedores.EditarP',array('provedor' => $provedor));
           }else{
            return redirect()->route('home');
           }
    }
    public function update($qmarca_id,Request $request){
        $user = \Auth::user();
        $provedor = Qmarca::findOrFail($qmarca_id);
        $provedor->nombre= $request->input('nombre');
        $provedor->direccion= $request->input('direccion');
        $provedor->telefono= $request->input('telefono');
        $provedor->user_id=$user->id;
        $provedor->update();
        return redirect()->route('inventarioP')->with(array('message'=>'El provedor se ha actualizado correctamente'));
        }
    }
}
