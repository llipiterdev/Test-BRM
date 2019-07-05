@extends('layouts.master')

@section('content')
<div class="jumbotron">
    <h3>Formulario cliente</h3>
    <table class="table table-striped">
            <thead>
                <tr>
                  <td>ID</td>
                  <td><b> Nombre producto</b></td>
                  <td><b>Cantidad (disponibles)</b></td>
                  <td><b>Precio unitario ($)</b></td>
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
                    @if ($producto->cantidad > 0)
                    <td><a href="{{ route('comprar_producto',$producto->id)}}" class="btn btn-success">Comprar</a></td>
                    @else
                    <td><button class="btn btn-danger" type="button" disabled>Agotado</button></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
          </table>
</div>
@endsection