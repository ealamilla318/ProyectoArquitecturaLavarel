@extends('layouts.MasterLayout')

@section('title', 'Quimicos')
@section('content')
<main class="page">
        <section class="clean-block slider">
        <div class="container">
            <form role="search" action="{{url('buscarQm')}}">
            <div class="form group">
                <input type="text" class="form-control" placeholder="Busqueda por nombre" name="search">

            </div>
        <div class="container">
            <a href="{{('insertarQ')}}" type="button" class="btn btn-outline-secondary" style="margin-bottom: 10px; width: 150px; position: relative; left: 85%;">Insertar</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>cantidad</th>
                            <th>Fecha de compra</th>
                            <th>Fecha de caducidad</th>
                            </tr>
                        </thead>
                        @foreach($quimico as $quimico)
                        <tbody>
                            <tr>
                            <td>{{$quimico->id}}</td>
                            <td>{{$quimico->nombre}}</td>
                            <td>{{$quimico->cantidad}}</td>
                            <td>{{ \FormatTime::LongTimeFilter($quimico->created_at) }}</td>
                            <td>{{$quimico->fechacaducidad}}</td>
                            <td><a href="{{url('/editarQ/'.$quimico->id)}}" type="button" class="btn btn-outline-dark">Editar </a><a href="{{url('/deleteQ/'.$quimico->id)}}" type="button" class="btn btn-outline-dark" style="margin-left: 8px;">Eliminar </a></td>
                            </tr>
                            
                        
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </main>


@endsection