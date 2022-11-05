@extends('layouts.plantilla')

@section('content')
<div class="container-sm">
<br>
<h2 class="text-center">MEDICAMENTOS REGISTRADOS</h2>
<br>
<table class="table table-hover table-light">
  <thead>
    <tr>
      <th scope="col">NOMBRE</th>
      <th scope="col">CASA DE DISTRIBUCION</th>
      <th scope="col">GRAMOS</th>
      <th scope="col">FECHA CADUCIDAD</th>
      <th scope="col">ACCION</th>
    </tr>
  </thead>

  <tbody>
    @foreach($medicamentos as $medicamento)

    <tr>
        <td>{{$medicamento->nombre}}</td>
        <td>{{$medicamento->casa}}</td>
        <td>{{$medicamento->gramos}}</td>
        <td>{{$medicamento->fecha}}</td>
        <td>
        <a href="{{route('eliminarmedicamento', $medicamento->id)}}" class="btn btn-danger">Eliminar</a>
        </td>
        <td>
        <a href="{{route('muestramedicamento', $medicamento->id)}}" class="btn btn-warning">Editar</a>
        </td>
    </tr>

   @endforeach
  </tbody>
</table>
</div>
@endsection