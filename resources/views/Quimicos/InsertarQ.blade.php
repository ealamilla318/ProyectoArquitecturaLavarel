@extends('layouts.MasterLayout')

@section('title', 'Insertar Quimico')
@section('content')
<form action="{{route('guardarHm')}}" method="post" enctype="multipart/form-data" class="col-lg-7">
{!! csrf_field()!!}
@if($errors->any())
<div class="alert alert-danger">
    <ul>
       @foreach($errors->all() as $errors) 
       <li>{{$errors}}</li>
       @endforeach
    </ul>
</div>
@endif
<div class="form-group">
<p>Inserte el nombre de la marca</p>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}"/>
</div>
<div class="form-group">
<div class="form-group">
<p>Direccion</p>
    <input type="text" class="form-control" id="direccion" name="direccion" value="{{old('direccion')}}"/>
</div>
<div class="form-group">
<p>Numero de contacto</p>
    <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}"/>
</div>
<button type="submit" class="btn btn-sucess">Insertar</button>

@endsection