@extends('layouts.plantilla')

@section('content')

<br>
<h2 class="text-center">Editar Datos</h2>
<form action="{{route('editaarticulo', $articulos->id)}}" method="POST" class="row g-3">
    @csrf

    <div class="col-md-6">
    <label class="form-label">Nombre</label>
    <input name="nombre" type="text" value="{{$articulos->nombre}}" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="form-label">Casa Disponible</label>
    <input name="cantidad" type="text" value="{{$articulos->cantidad}}" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="form-label">Precio</label>
    <input name="precio" type="text" value="{{$articulos->precio}}" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="form-label">Fabricado Por</label>
    <input name="fabricado" type="date" value="{{$articulos->fabricado}}" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Guardar Cambios</button>

@endsection