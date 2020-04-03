@extends('layouts.MasterLayout')
@section('title', 'EditarJitomates')
@section('content')
<main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Editar Jitomates</h2>
                    
                </div>
<form action="{{route('update',['crude_id'=>$crude->id])}}" method="post" enctype="multipart/form-data">
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
    <input type="text" class="form-control" id="tipo" name="tipo" value="{{$crude->tipo}}" />
</div>
<div class="form-group">
    <label for="caja"></label>
    <input type="text" class="form-control" id="caja" name="caja" value="{{$crude->caja}}"/>
</div>
<div class="form-group">
    <label for="calidad"></label>
    <input type="text" class="form-control" id="calidad" name="calidad" value="{{$crude->calidad}}"/>
</div>
<button type="submit" class="btn btn-sucess">Insertar</button>
                </form>
            </div>
        </section>
    </main>
@endsection