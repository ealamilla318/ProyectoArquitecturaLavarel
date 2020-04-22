@extends('layouts.MasterLayout')

@section('title', 'Tabla Herramientas')
@section('content')
<main class="page">
        <section class="clean-block slider">
        <div class="container">
            <form role="search" action="{{url('buscarQm')}}">
            <div class="form group">
                <input type="text" class="form-control" placeholder="Busqueda por nombre" name="search">

            </div>
        <div class="container">
            <a href="{{('insertarH')}}" type="button" class="btn btn-outline-secondary" style="margin-bottom: 10px; width: 150px; position: relative; left: 85%;">Insertar</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Ultima actualizacion</th>
                            </tr>
                        </thead>
                        @foreach($herramienta as $herramienta)
                        <tbody>
                            <tr>
                            <td>{{$herramienta->id}}</td>
                            <td>{{$herramienta->nombre}}</td>
                            <td>{{$herramienta->estado}}</td>
                            <td>{{ \FormatTime::LongTimeFilter($herramienta->updated_at) }}</td>
                            <td><a href="{{url('/editarH/'.$herramienta->id)}}" type="button" class="btn btn-outline-dark">Editar </a><a href="{{url('/deleteH/'.$herramienta->id)}}" type="button" class="btn btn-outline-dark" style="margin-left: 8px;">Eliminar </a></td>
                            </tr>
                            
                        
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </main>

@endsection