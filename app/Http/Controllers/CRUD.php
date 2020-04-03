<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Crude;
use Hamcrest\Core\IsNull;

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

    return redirect()->route('inventario')->with(array('message'=>'El producto se ha insertado correctamente'));
}
public function getJitomate($crude_id){
    $crude = Crude::find($crude_id);
    return view ('jitomates.detalles',array(
        'crude'=> $crude
    ));
    
}
public function delete($crude_id){
    $user = \Auth::user();
    $crude = Crude::find($crude_id);

    if(!is_null($user) ){
     $crude->delete();
    }
    return redirect()->route('inventario')->with(array('message'=>'El producto se ha borrado correctamente'));


}
public function edit($crude_id){
$user = \Auth::user();
$crude = Crude::findOrFail($crude_id);
if(!is_null($user) ){
    return view('jitomates.edit',array('crude' => $crude));
   }else{
    return redirect()->route('home');
   }

}
public function update($crude_id,Request $request)
{
$user = \Auth::user();
$crude = Crude::findOrFail($crude_id);
$crude->tipo= $request->input('tipo');
    $crude->caja= $request->input('caja');
    $crude->calidad= $request->input('calidad');
    $crude->user_id=$user->id;
    $crude->update();
    return redirect()->route('inventario')->with(array('message'=>'El producto se ha actualizado correctamente'));
}
}
