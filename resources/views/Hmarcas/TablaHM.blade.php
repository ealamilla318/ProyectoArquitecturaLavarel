@extends('layouts.MasterLayout')

@section('title', 'Editar Quimico')
@section('content')
<main class="page">
        <section class="clean-block slider">
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
                            </tr>
                        </thead>
                        @foreach($hmarca as $hmarcas)
                        <tbody>
                            <tr>
                            <td>{{$hmarcas->id}}</td>
                            <td>{{$hmarcas->nombre}}</td>
                            <td>{{$hmarcas->direccion}}</td>
                            <td>{{$hmarcas->telefono}}</td>
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