@extends('layouts.app')

@section('title', 'Insertar')
@section('content')
<form action="{{route('guardar')}}" method="post" enctype="multipart/form-data" class="col-lg-7">
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
    <input type="text" class="form-control" id="tipo" name="tipo" value="{old('tipo')}" />
</div>
<div class="form-group">
    <label for="caja"></label>
    <input type="text" class="form-control" id="caja" name="caja" value="{old('caja')}"/>
</div>
<div class="form-group">
    <label for="calidad"></label>
    <input type="text" class="form-control" id="calidad" name="calidad" value="{old('calidad')}"/>
</div>
<button type="submit" class="btn btn-sucess">Insertar</button>
</form>
@endsection