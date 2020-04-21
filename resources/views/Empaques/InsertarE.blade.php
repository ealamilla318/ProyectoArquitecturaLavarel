@extends('layouts.MasterLayout')

@section('title', 'Insertar Herramienta')
@section('content')
<form action="{{route('guardarE')}}" method="post" enctype="multipart/form-data" class="col-lg-7">
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
<p>Seleccione el material</p>
<select class="form-control" id="material" name="material">
    <option value="Madera">Madera</option>
    <option value="Carton">Carton</option>
    <option value="Plastico" selected>Plastico</option>
  </select>
</div>
<div class="form-group">
<p>Seleccione la capacidad</p>
<select class="form-control" id="capacidad" name="capacidad">
    <option value="14">14 KG</option>
    <option value="20">20 KG</option>
    <option value="30" selected>30 KG</option>
</select>
</div>
<div class="form-group">
<p>Cantidad</p>
    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{old('cantidad')}}"/>
</div>
<button type="submit" class="btn btn-sucess">Insertar</button>
</form>

@endsection