@extends('layouts.plantilla')

@section('content')

<br>
<h2 class="text-center">Registrar Medicina</h2>
<form action="{{route('guardarmedicamento')}}" method="POST" class="row g-3">
    @csrf

    <div class="col-md-6">
    <label class="fw-bold form-label">Nombre</label>
    <input name="nombre" type="text" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="fw-bold form-label">Casa de Distribucion</label>
    <input name="casa" type="text" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="fw-bold form-label">Gramos</label>
    <input name="gramos" type="text" class="form-control">
    </div>

    <div class="col-md-6">
    <label class="fw-bold form-label">Fecha de Caducidad</label>
    <input name="fecha" type="date" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Guardar Datos</button>
</form>
@endsection