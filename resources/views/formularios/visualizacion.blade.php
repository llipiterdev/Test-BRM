@extends('layouts.master')

@section('content')
<div class="jumbotron">
    @if (Session::has('mensaje'))
         <div class="alert alert-warning" role="alert"> cantidad en el inventario actualizada, si desea deshacer el cambio <a style="color:black;" href="{{ route('restaurar', [Session::get('mensaje')]) }}">Click aqui</a> </div>
       @endif

     @if (Session::has('restored'))
     <div class="alert alert-success" role="alert"> Contacto restaurado</div>
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