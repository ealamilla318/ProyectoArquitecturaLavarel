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
            'id_qmarcas'=>'required',
            'cantidad'=>'required'
        ]);
        $quimicos = new Quimico();
        $user =\Auth::User();
        $quimicos->nombre= $request->input('nombre');
        $quimicos->pesoempaque= $request->input('pesoempaque');
        $quimicos->id_provedores= $request->input('id_provedores');
        $quimicos->fechacaducidad= $request->input('fechacaducidad');
        $quimicos->cantidad= $request->input('cantidad');
        $quimicos->id_qmarcas= $request->input('id_qmarcas');
        $quimicos->user_id=$user->id;
        $quimicos->save();
    
        return redirect()->route('TablaQ')->with(array('message'=>'El quimico ha sido registrado'));
    }
    public function delete($quimicos_id){
        $user = \Auth::user();
        $provedor = Quimico::find($quimicos_id);
    
        if(!is_null($user) ){
         $provedor->delete();
        }
        return redirect()->route('TablaQ')->with(array('message'=>'El registro del quimico ha sido eliminado'));
    }
    public function edit($quimicos_id ){
        $user = \Auth::user();
        $quimicos = Quimico::findOrFail($quimicos_id);
        if(!is_null($user) ){
            return view('Quimicos.EditarQ',array('quimicos' => $quimicos));
           }else{
            return redirect()->route('home');
           }
    }
    public function update($quimicos_id,Request $request){
        $user = \Auth::user();
        $quimicos = Quimico::findOrFail($quimicos_id);
        $quimicos->nombre= $request->input('nombre');
        $quimicos->pesoempaque= $request->input('pesoempaque');
        $quimicos->id_provedores= $request->input('id_provedores');
        $quimicos->fechacaducidad= $request->input('fechacaducidad');
        $quimicos->cantidad= $request->input('cantidad');
        $quimicos->id_qmarcas= $request->input('id_qmarcas');
        $quimicos->user_id=$user->id;
        $quimicos->update();
        return redirect()->route('TablaQ')->with(array('message'=>'El quimico se ha actualizado correctamente'));
        }
        
        public function search($search=null ){
            if(is_null($search)){
                $search= \Request::get('search');
            }
            $result = Quimico::where('nombre','LIKE','%'.$search.'%')->paginate(5);
            return view('Quimicos.TablaQ',array('quimico'=>$result,'search'=>$search));
        }
}
