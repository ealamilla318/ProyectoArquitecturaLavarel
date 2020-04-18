@extends('layouts.MasterLayout')

@section('title', 'Editar Provedor')
@section('content')

<main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Editar Proveedor</h2>
                    
                </div>
<form action="{{route('updateP',['proveedores_id'=>$proveedores->id])}}" method="post" enctype="multipart/form-data">
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
    <label for="tipo"></label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$proveedores->nombre}}" />
</div>
<div class="form-group">
    <label for="caja"></label>
    <input type="text" class="form-control" id="direccion" name="direccion" value="{{$proveedores->direccion}}"/>
</div>
<div class="form-group">
    <label for="calidad"></label>
    <input type="text" class="form-control" id="telefono" name="telefono" value="{{$proveedores->telefono}}"/>
</div>
<button type="submit" class="btn btn-sucess">Insertar</button>
                </form>
            </div>
        </section>
    </main>
@endsection