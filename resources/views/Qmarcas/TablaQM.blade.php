@extends('layouts.MasterLayout')

@section('title', 'Marcas Quimicos')
@section('content')
<main class="page">
        <section class="clean-block slider">
        <div class="container">
            <form role="search" action="{{url('buscarQm')}}">
            <div class="form group">
                <input type="text" class="form-control" placeholder="Busqueda por nombre" name="search">

            </div>
        <div class="container">
            <a href="{{('insertarQm')}}" type="button" class="btn btn-outline-secondary" style="margin-bottom: 10px; width: 150px; position: relative; left: 85%;">Insertar</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>Tipo</th>
                            <th>Caja</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                            </tr>
                        </thead>
                        @foreach($qmarca as $qmarcas)
                        <tbody>
                            <tr>
                            <td>{{$qmarcas->id}}</td>
                            <td>{{$qmarcas->nombre}}</td>
                            <td>{{$qmarcas->direccion}}</td>
                            <td>{{ \FormatTime::LongTimeFilter($qmarcas->created_at) }}</td>
                            <td><a href="{{url('/editarQm/'.$qmarcas->id)}}" type="button" class="btn btn-outline-dark">Editar </a><a href="{{url('/deleteQm/'.$qmarcas->id)}}" type="button" class="btn btn-outline-dark" style="margin-left: 8px;">Eliminar </a></td>
                            </tr>
                            
                        
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection