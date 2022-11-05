@extends('layouts.plantilla')

@section('content')

<br>
<h2 class="text-center">Editar Datos</h2>
<form action="{{route('editamedicamento', $medicamentos->id)}}" method="POST" class="row g-3">
    @csrf

    <div class="col-md-6">
    <label class="form-label">Nombre</label>
    <input name="nombre" type="text" value="{{$medicamentos->nombre}}" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="form-label">Casa de Distribucion</label>
    <input name="casa" type="text" value="{{$medicamentos->casa}}" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="form-label">Gramos</label>
    <input name="gramos" type="text" value="{{$medicamentos->gramos}}" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="form-label">Fecha de Caduciad</label>
    <input name="fecha" type="date" value="{{$medicamentos->fecha}}" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Guardar Cambios</button>

@endsection