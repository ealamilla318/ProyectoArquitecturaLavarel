<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Empaque;
use Hamcrest\Core\IsNull;

class empaquesController extends Controller
{
    //
public function insert(){
return view('Empaques.InsertarE');
}
public function save(Request $request){
    $validatedData =$this->validate($request,[
        'material'=> 'required',
        'capacidad'=>'required'
    ]);
    $empaques = new Empaque();
    $user =\Auth::User();
    $empaques->material= $request->input('material');
    $empaques->capacidad= $request->input('capacidad');
    $empaques->user_id=$user->id;
    $empaques->save();

    return redirect()->route('TablaE')->with(array('message'=>'El empaque ha sido registrado'));
}
public function delete($hmarca_id){
    $user = \Auth::user();
    $provedor = Empaque::find($hmarca_id);

    if(!is_null($user) ){
     $provedor->delete();
    }
    return redirect()->route('TablaE')->with(array('message'=>'El provedor ha sido eliminado'));
}
public function edit($hmarca_id){
    $user = \Auth::user();
    $hmarcas = Empaque::findOrFail($hmarca_id);
    if(!is_null($user) ){
        return view('Hmarcas.EditarHm',array('hmarcas' => $hmarcas));
       }else{
        return redirect()->route('home');
       }
}
public function update($hmarca_id,Request $request){
    $user = \Auth::user();
    $provedor = Empaque::findOrFail($hmarca_id);
    $provedor->nombre= $request->input('nombre');
    $provedor->direccion= $request->input('direccion');
    $provedor->telefono= $request->input('telefono');
    $provedor->user_id=$user->id;
    $provedor->update();
    return redirect()->route('TablaHm')->with(array('message'=>'El provedor se ha actualizado correctamente'));
    }
}
