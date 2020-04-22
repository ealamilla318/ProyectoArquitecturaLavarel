@extends('layouts.MasterLayout')

@section('title', 'Insertar Herramienta')
@section('content')
<form action="{{route('guardarH')}}" method="post" enctype="multipart/form-data" class="col-lg-7">
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
<p>Tipo</p>
    <input type="text" class="form-control" id="tipo" name="tipo" value="{{old('tipo')}}"/>
</div>
<div class="form-group">
<p>Estado</p>
<select class="form-control" id="estado" name="estado">
    <option value="en uso">en uso</option>
    <option value="en bodega" selected>en bodega</option>
</select>
</div>
<div class="form-group">
<p>Proveedor</p>
<select class="form-control" id="id_provedor" name="id_provedor">
    <option value="1">Truper</option>
    <option value="2">Ferreteria Perez</option>
    <option value="3" selected>Carbon</option>
</select>
</div>
<div class="form-group">
<p>Marca</p>
<select class="form-control" id="id_hmarcas" name="id_hmarcas">
    <option value="1">Trupper</option>
    <option value="2">Steren</option>
    <option value="3" selected>30 KG</option>
</select>
</div>
<button type="submit" class="btn btn-sucess">Insertar</button>
</form>


@endsection