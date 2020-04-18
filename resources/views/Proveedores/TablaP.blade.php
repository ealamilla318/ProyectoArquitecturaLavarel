@extends('layouts.MasterLayout')

@section('title', 'Proveedores')
@section('content')
<main class="page">
        <section class="clean-block slider">
        <div class="container">
            <a href="{{route('insertarP')}}" type="button" class="btn btn-outline-secondary" style="margin-bottom: 10px; width: 150px; position: relative; left: 85%;">Insertar</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            </tr>
                        </thead>
                        @foreach($proveedore as $proveedores)
                        <tbody>
                            <tr>
                            <td>{{$proveedores->id}}</td>
                            <td>{{$proveedores->nombre}}</td>
                            <td>{{$proveedores->direccion}}</td>
                            <td>{{$proveedores->telefono}}</td>
                            <td><a href="{{url('/editarP/'.$proveedores->id)}}" type="button" class="btn btn-outline-dark">Editar </a><a href="{{url('/deleteP/'.$proveedores->id)}}" type="button" class="btn btn-outline-dark" style="margin-left: 8px;">Eliminar </a></td>
                            </tr>
                            
                        
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </main>

@endsection