@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<table >
  <tr>
    <th>id</th>
    <th>tipo</th>
    <th>caja</th>
    <th>calidad</th>
  </tr>
  @foreach($crudes as $crude)
  <h2 class="crude-title"><a href="{{route('detalleJitomate',['crude_id'=>$crude->id])}}">{{$crude->calidad}}</a></h2>
  <tr>
    <td>{{$crude->id}}</td>
    <td>{{$crude->tipo}}</td>
    <td>{{$crude->caja}}</td>
    <td>{{$crude->calidad}}</td>
    <button type="submit" class="btn btn-sucess">Eliminar</button>
    <button type="submit" class="btn btn-sucess">Editar</button>
  </tr>
  @endforeach
  
  
</table>
</div>
@endsection
