<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Crude;

class CRUD extends Controller
{
    //
public function insertar(){
    return view('Jitomates.Jitomates');
}
public function guardar(Request $request){
    $validatedData =$this->validate($request,[
        'tipo'=> 'required',
        'caja'=>'required',
        'calidad'=>'required'


    ]);
    $jitomates = new Crude();
    $user =\Auth::User();
    $jitomates->tipo= $request->input('tipo');
    $jitomates->caja= $request->input('caja');
    $jitomates->calidad= $request->input('calidad');
    $jitomates->user_id=$user->id;
    $jitomates->save();

    return redirect()->route('home')->with(array('message'=>'El producto se ha insertado correctamente'));
}
public function getJitomate($crude_id){
    $crude = Crude::find($crude_id);
    return view ('jitomates.detalles',array(
        'crude'=> $crude
    ));
    
}
}
