@extends('layouts.MasterLayout')
@section('title', 'Home')
@section('content')
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Menu Administrador</h2>
                <p class="text-center">Administrador : {{ Auth::user()->name }}</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-map-marker icon"></i>
                        <h3 class="name">Inventario Herramientas</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-clock-o icon"></i>
                        <h3 class="name">Inventario Quimicos</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name"> <a href="{{ url('/TablaE') }}">Inventario Empaques</a></h3>
                    
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name"> <a href="{{ url('/TablaHm') }}">Marcas de Herramientas</a></h3>
                    
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name"> <a href="{{ url('/TablaQm') }}">Marcas de Quimicos</a></h3>
                    
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name"> <a href="{{ url('/TablaP') }}">Proveedores</a></h3>
                    
                    </div>
                </div>
            
            </div>
        </div>
    </div>
  @endsection