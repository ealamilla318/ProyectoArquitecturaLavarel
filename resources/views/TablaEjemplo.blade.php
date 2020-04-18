@extends('layouts.MasterLayout')
@section('title', 'InventarioJitomates')
@section('content')

<main class="page">
        <section class="clean-block slider">
        <div class="container">
            <a href="{{route('insertar')}}" type="button" class="btn btn-outline-secondary" style="margin-bottom: 10px; width: 150px; position: relative; left: 85%;">Insertar</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>Tipo</th>
                            <th>Caja</th>
                            <th>Fecha   </th>
                            <th>Accion</th>
                            </tr>
                        </thead>
                        @foreach($crudes as $crude)
                        <tbody>
                            <tr>
                            <td>{{$crude->id}}</td>
                            <td>{{$crude->tipo}}</td>
                            <td>{{$crude->caja}}</td>
                            <td>{{ \FormatTime::LongTimeFilter($crude->created_at) }}</td>
                            <td><a href="{{url('/editar/'.$crude->id)}}" type="button" class="btn btn-outline-dark">Editar </a><a href="{{url('/delete/'.$crude->id)}}" type="button" class="btn btn-outline-dark" style="margin-left: 8px;">Eliminar </a></td>
                            </tr>
                            
                        
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection
