@extends('layouts.MasterLayout')

@section('title', 'Tabla Empaques')
@section('content')
<main class="page">
        <section class="clean-block slider">
        <div class="container">
            <a href="{{route('insertarE')}}" type="button" class="btn btn-outline-secondary" style="margin-bottom: 10px; width: 150px; position: relative; left: 85%;">Insertar</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>Material</th>
                            <th>Capacidad (Kg)</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                            </tr>
                        </thead>
                        @foreach($empaque as $empaques)
                        <tbody>
                            <tr>
                            <td>{{$empaques->id}}</td>
                            <td>{{$empaques->material}}</td>
                            <td>{{$empaques->capacidad}}</td>
<<<<<<< HEAD
                            <td>{{ \FormatTime::LongTimeFilter($empaques->created_at) }}</td>
                            <td><a href="{{url('/editare/'.$empaques->id)}}" type="button" class="btn btn-outline-dark">Editar </a><a href="{{url('/deleteE/'.$empaques->id)}}" type="button" class="btn btn-outline-dark" style="margin-left: 8px;">Eliminar </a></td>
=======
                            
                            <td><a href="{{url('/editarE/'.$empaques->id)}}" type="button" class="btn btn-outline-dark">Editar </a><a href="{{url('/deleteE/'.$empaques->id)}}" type="button" class="btn btn-outline-dark" style="margin-left: 8px;">Eliminar </a></td>
>>>>>>> 91cedf85df4255c0495712fffc7bef0d4eed36af
                            </tr>
                            
                        
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </main>

@endsection