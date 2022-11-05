@extends('layouts.plantilla')

@section('content')
<div class="container-sm">
<br>
<h2 class="text-center">ARTICULOS REGISTRADOS</h2>
<br>
<table class="table table-hover table-light">
  <thead>
    <tr>
      <th scope="col">NOMBRE</th>
      <th scope="col">CANTIDAD DISPONIBLE</th>
      <th scope="col">PRECIO</th>
      <th scope="col">FABRICADO POR</th>
      <th scope="col">ACCION</th>
    </tr>
  </thead>

  <tbody>
    @foreach($articulos as $articulo)

    <tr>
        <td>{{$articulo->nombre}}</td>
        <td>{{$articulo->cantidad}}</td>
        <td>{{$articulo->precio}}</td>
        <td>{{$articulo->fabricado}}</td>
        <td>
        <a href="{{route('eliminararticulo', $articulo->id)}}" class="btn btn-danger">Eliminar</a>
        </td>
        <td>
        <a href="{{route('muestraarticulo', $articulo->id)}}" class="btn btn-warning">Editar</a>
        </td>
    </tr>

   @endforeach
  </tbody>
</table>
</div>
@endsection