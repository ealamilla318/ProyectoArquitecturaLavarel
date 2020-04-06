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
public function getEmpaque(){

}
public function delete(){

}
public function edit(){

}
public function update(){
    
}
}
