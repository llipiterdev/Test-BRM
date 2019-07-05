@extends('layouts.master')

@section('content')
<div class="container">

  <p>3. formulario con un botón de visualización:</p>
  <p><span style="color:black; color:green;" class="glyphicon glyphicon-ok" aria-hidden="true"></span> Mostrar los
    contenidos del inventario</p>
  <p><span style="color:black; color:red;" class="glyphicon glyphicon-remove" aria-hidden="true"></span> Generar factura
  </p>

  <p><span style="color:black; color:red;" class="glyphicon glyphicon-remove" aria-hidden="true"></span> Botón que puede
    cancelar y que los productos vuelvan al inventario.</p>
  <p><span style="color:black; color:green;" class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> En vez de
    crear un boton que cancele la compra, cuando se quiera eliminar un producto ya sea porque se agotó o se borró por
    error, se puede recuperar el ultimo registro. El sistema arrojará una alerta. </p>



</div>
<div class="jumbotron">
  @if (Session::has('mensaje'))
       <div class="alert alert-warning" role="alert"> Se ha eliminado un elemento del inventario, si desea deshacer el cambio
    <a style="color:black;" href="{{ route('restaurar', [Session::get('mensaje')]) }}">Click aqui</a> </div>
     @endif

   @if (Session::has('restored'))
       <div class="alert alert-success" role="alert"> Registro restaurado</div>
     @endif
  <h3>Formulario cliente</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <td>ID</td>
        <td><b>Nombre producto</b></td>
        <td><b>Unidades disponibles</b></td>
        <td><b>precio unitario ($)</b></td>
        <td colspan="2"></td>
      </tr>
    </thead>
    <tbody>
      @foreach($productos as $producto)
      <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->cantidad}}</td>
        <td>{{$producto->precio}}</td>
        <td>
          <form action="{{ route('eliminar', $producto->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection