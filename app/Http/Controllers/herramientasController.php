<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Herramienta;
use Hamcrest\Core\IsNull;

class herramientasController extends Controller
{
    //
    public function insert(){
    return view('Herramientas.InsertarH');
    }
    public function save(Request $request){
        $validatedData =$this->validate($request,[
            'id_provedor'=> 'required',
            'nombre'=>'required',
            'tipo'=>'required',
            'id_hmarcas'=>'required'
        ]);
        $herramientas = new Herramienta();
        $user =\Auth::User();
        $herramientas->id_provedores= $request->input('id_provedores');
        $herramientas->nombre= $request->input('nombre');
        $herramientas->tipo= $request->input('tipo');
        $herramientas->id_hmarcas= $request->input('id_hmarcas');
        $herramientas->user_id=$user->id;
        $herramientas->save();
    
        return redirect()->route('TablaH')->with(array('message'=>'La herramienta ha sido registrado'));
    }
    public function getHerramienta(){
    
    }
    public function delete(){
    
    }
    public function edit(){
    
    }
    public function update(){
        
    }
}
