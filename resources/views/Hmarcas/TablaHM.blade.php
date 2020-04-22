@extends('layouts.MasterLayout')

@section('title', 'Marcas Herramientas')
@section('content')
<main class="page">
        <section class="clean-block slider">
        <div class="container">
            <form role="search" action="{{url('buscarHm')}}">
            <div class="form group">
                <input type="text" class="form-control" placeholder="Busqueda por nombre de la marca" name="search">

            </div>
        <div class="container">
            <a href="{{route('insertarHm')}}" type="button" class="btn btn-outline-secondary" style="margin-bottom: 10px; width: 150px; position: relative; left: 85%;">Insertar</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                            </tr>
                        </thead>
                        @foreach($hmarca as $hmarcas)
                        <tbody>
                            <tr>
                            <td>{{$hmarcas->id}}</td>
                            <td>{{$hmarcas->nombre}}</td>
                            <td>{{$hmarcas->direccion}}</td>
                            <td>{{$hmarcas->telefono}}</td>
                            <td>{{ \FormatTime::LongTimeFilter($hmarcas->created_at) }}</td>
                            <td><a href="{{url('/editarHm/'.$hmarcas->id)}}" type="button" class="btn btn-outline-dark">Editar </a><a href="{{url('/deleteHm/'.$hmarcas->id)}}" type="button" class="btn btn-outline-dark" style="margin-left: 8px;">Eliminar </a></td>
                            </tr>
                            
                        
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </main>

@endsection