@extends('layouts.MasterLayout')
@section('title', 'InventarioJitomates')
@section('content')

<main class="page">
        <section class="clean-block slider">
           
        <div class="container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>tipo</th>
                            <th>caja</th>
                            <th>calidad</th>
                            </tr>
                        </thead>
                        @foreach($crudes as $crude)
                        <tbody>
                       
                            <tr>
                            <td>{{$crude->id}}</td>
                            <td>{{$crude->tipo}}</td>
                            <td>{{$crude->caja}}</td>
                            <td>{{$crude->calidad}}</td>
                            <button type="submit" class="btn btn-sucess">Eliminar</button>
                            <button type="submit" class="btn btn-sucess">Editar</button>
                            </tr>
                            
                        
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection
