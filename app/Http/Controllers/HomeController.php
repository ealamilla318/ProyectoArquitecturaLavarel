<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Crude;
use App\Empaque;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crudes = Crude::paginate(5);
        return view('home',array(
            'crudes'=>$crudes

        ));
    }
    public function inventario(){
        $crudes = Crude::paginate(5);
        return view('TablaEjemplo',array(
            'crudes'=>$crudes

        ));
    }
    public function AdminIndex(){
        return view('IndexAdmin');
    }

    public function inventarioE(){
        $empaque = Empaque::paginate(5);
        return view('Empaques.TablaE',array('empaque'=>$empaque));
    }
    public function inventarioQm(){
        $qmarca = Empaque::paginate(5);
        return view('Qmarcas.TablaQM',array('qmarca'=>$qmarca));
    }
    public function inventarioHm(){
        $hmarca = Empaque::paginate(5);
        return view('Hmarcas.TablaHM',array('hmarca'=>$hmarca));
    }
    public function inventarioP(){
        $proveedore = Empaque::paginate(5);
        return view('Proveedores.TablaP',array('empaque'=>$proveedore));
    }
}
