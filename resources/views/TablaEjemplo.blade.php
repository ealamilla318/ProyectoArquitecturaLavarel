@extends('layouts.MasterLayout')
@section('title', 'InventarioJitomates')
@section('content')

<main class="page">
        <section class="clean-block slider">
        <div class="container">
        <a href="{{route('insertar')}}" type="button" class="btn btn-sucess" >Insertar</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>tipo</th>
                            <th>caja</th>
                            <th>Fecha de Creacion</th>
                            </tr>
                        </thead>
                        @foreach($crudes as $crude)
                        <tbody>
                       
                            <tr>
                            <td>{{$crude->id}}</td>
                            <td>{{$crude->tipo}}</td>
                            <td>{{$crude->caja}}</td>
                            <td>{{ \FormatTime::LongTimeFilter($crude->created_at) }}</td>
                            
                            <a href="{{url('/editar/'.$crude->id)}}" type="button" class="btn btn-sucess" >Editar </a>
                            <a href="{{url('/delete/'.$crude->id)}}" type="button" class="btn btn-sucess" >Eliminar </a>
                            </tr>
                            
                        
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection
