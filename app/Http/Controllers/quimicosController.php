<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Quimico;
use Hamcrest\Core\IsNull;

class quimicosController extends Controller
{
    //
    public function insert(){
return view('Quimicos.InsertarQ');
    }
    public function save(Request $request ){
        $validatedData =$this->validate($request,[
            'nombre'=> 'required',
            'pesoempaque'=>'required',
            'id_provedores'=>'required',
            'fechacaducidad'=>'required',
            'id_qmarcas'=>'required'
        ]);
        $quimicos = new Quimico();
        $user =\Auth::User();
        $quimicos->nombre= $request->input('nombre');
        $quimicos->pesoempaque= $request->input('pesoempaque');
        $quimicos->tipo= $request->input('tipo');
        $quimicos->id_provedores= $request->input('id_provedores');
        $quimicos->fechacaducidad= $request->input('fechacaducidad');
        $quimicos->id_qmarcas= $request->input('id_qmarcas');
        $quimicos->user_id=$user->id;
        $quimicos->save();
    
        return redirect()->route('TablaQ')->with(array('message'=>'El quimico ha sido registrado'));
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
