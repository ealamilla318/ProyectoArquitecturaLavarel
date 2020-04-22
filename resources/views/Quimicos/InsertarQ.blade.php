@extends('layouts.MasterLayout')

@section('title', 'Insertar Quimico')
@section('content')
<form action="{{route('guardarQ')}}" method="post" enctype="multipart/form-data" class="col-lg-7">
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
<p>Nombre del producto</p>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}"/>
</div>
<div class="form-group">
<div class="form-group">
<p>Peso del empaque</p>
    <input type="text" class="form-control" id="pesoempaque" name="pesoempaque" value="{{old('pesoempaque')}}"/>
</div>
<div class="form-group">
<p>Cantidad</p>
    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{old('cantidad')}}"/>
</div>
<div class="form-group">
<p>Marca</p>
<select class="form-control" id="id_qmarcas" name="id_qmarcas">
    <option value="1">Sigma</option>
    <option value="2">Magnusen</option>
    <option value="3" selected>Quimicos el argonauta</option>
</select>
</div>
<div class="form-group">
<p>Proveedor</p>
<select class="form-control" id="id_provedores" name="id_provedores">
    <option value="1">Comercializadora Gonzales</option>
    <option value="2">Kawamon</option>
    <option value="3" selected>F1</option>
</select>
</div>
<div class="form-group">
<p>Fecha de caducidad</p>
<input type="text" class="form-control" id="fechacaducidad" name="fechacaducidad" value="{{old('fechacaducidad')}}"/>
</div>
<button type="submit" class="btn btn-sucess">Insertar</button>

@endsection