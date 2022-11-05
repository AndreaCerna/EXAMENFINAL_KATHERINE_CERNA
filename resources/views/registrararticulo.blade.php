@extends('layouts.plantilla')

@section('content')

<br>
<h2 class="text-center">Registrar Articulo</h2>
<form action="{{route('guardararticulo')}}" method="POST" class="row g-3">
    @csrf

    <div class="col-md-6">
    <label class="fw-bold form-label">Nombre</label>
    <input name="nombre" type="text" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="fw-bold form-label">Cantidad Disponible</label>
    <input name="cantidad" type="text" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="fw-bold form-label">Precio</label>
    <input name="precio" type="text" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="fw-bold form-label">Fabricado Por</label>
    <input name="fabricado" type="date" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Guardar Datos</button>
</form>
@endsection