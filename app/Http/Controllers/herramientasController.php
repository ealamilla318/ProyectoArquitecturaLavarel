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
            'id_hmarcas'=>'required',
            'estado'=>'required'
        ]);
        $herramientas = new Herramienta();
        $user =\Auth::User();
        $herramientas->id_provedores= $request->input('id_provedores');
        $herramientas->nombre= $request->input('nombre');
        $herramientas->tipo= $request->input('tipo');
        $herramientas->estado= $request->input('estado');
        $herramientas->id_hmarcas= $request->input('id_hmarcas');
        $herramientas->user_id=$user->id;
        $herramientas->save();
    
        return redirect()->route('TablaH')->with(array('message'=>'La herramienta ha sido registrado'));
    }
    public function delete($herramientas_id){
        $user = \Auth::user();
        $provedor = Herramienta::find($herramientas_id);
    
        if(!is_null($user) ){
         $provedor->delete();
        }
        return redirect()->route('TablaH')->with(array('message'=>'La herramienta se ha retirado ha sido eliminado'));
    }
    public function edit($herramientas_id){

        $user = \Auth::user();
        $herramientas = Herramienta::findOrFail($herramientas_id);
        if(!is_null($user) ){
            return view('Herramientas.EditarH',array('herramientas' => $herramientas ));
           }else{
            return redirect()->route('home');
           }
    }
    public function update($hmarca_id,Request $request){
        $user = \Auth::user();
        $herramientas = Herramienta::findOrFail($hmarca_id);
        $herramientas->id_provedores= $request->input('id_provedores');
        $herramientas->nombre= $request->input('nombre');
        $herramientas->tipo= $request->input('tipo');
        $herramientas->estado= $request->input('estado');
        $herramientas->id_hmarcas= $request->input('id_hmarcas');
        $herramientas->user_id=$user->id;
        $herramientas->update();
        return redirect()->route('TablaH')->with(array('message'=>'La herramienta  se ha actualizado correctamente'));
        }
        public function search($search=null ){
            if(is_null($search)){
                $search= \Request::get('search');
            }
            $result = Herramienta::where('nombre','LIKE','%'.$search.'%')->paginate(5);
            return view('Herramientas.TablaH',array('herramienta'=>$result,'search'=>$search));
        }
}
