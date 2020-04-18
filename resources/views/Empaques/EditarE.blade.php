@extends('layouts.MasterLayout')

@section('title', 'Editar Empaque')
@section('content')

<main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Editar marcas de herramientas</h2>
                    
                </div>
<form action="{{route('updateHm',['hmarcas_id'=>$hmarcas->id])}}" method="post" enctype="multipart/form-data">
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
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$hmarcas->nombre}}" />
</div>
<div class="form-group">
    <label for="caja"></label>
    <input type="text" class="form-control" id="direccion" name="direccion" value="{{$hmarcas->direccion}}"/>
</div>
<div class="form-group">
    <label for="calidad"></label>
    <input type="text" class="form-control" id="telefono" name="telefono" value="{{$hmarcas->telefono}}"/>
</div>
<button type="submit" class="btn btn-sucess">Insertar</button>
                </form>
            </div>
        </section>
    </main>
@endsection