@extends('layouts.MasterLayout')

@section('title', 'Editar Empaque')
@section('content')

<main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Editar marcas de herramientas</h2>
                    
                </div>
<form action="{{route('updateE',['empaques_id'=>$empaques->id])}}" method="post" enctype="multipart/form-data">
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
    <input type="text" class="form-control" id="capacidad" name="capacidad" value="{{$empaques->capacidad}}" />
</div>
<div class="form-group">
    <label for="caja"></label>
    <input type="text" class="form-control" id="material" name="material" value="{{$empaques->material}}"/>
</div><p>Cantidad</p>
    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{$empaques->cantidad}}"/>
</div>

<button type="submit" class="btn btn-sucess">Insertar</button>
                </form>
            </div>
        </section>
    </main>
@endsection