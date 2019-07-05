@extends('layouts.master')

@section('content')
<div class="jumbotron">
    <h3>Formulario cliente</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ route('actualizar_inventario', $producto->id) }}">
        <div class="form-group">
            @csrf
            @method('PATCH')
            <label>Nombre del producto: {{$producto->nombre}} </label>
            <br>
            <label>precio unitario ($): {{$producto->precio}} </label>
            <br>
            <label>Unidades disponibles: {{$producto->cantidad}} </label>
            <input type="hidden" name="precio" id="precio" value="{{$producto->precio}}" />
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad :</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" autocomplete="off" />

        </div>
        <div class="form-group">
            <label> Precio total : $</label>
            <label id="total"></label>
        </div>

        <button type="submit" class="btn btn-success">Comprar</button>
        <a href="{{ url('cliente')}}" class="btn btn-primary">Regresar</a>
    </form>


</div>
<div class="container">

    <p><span style="color:black;color:green;"  class="glyphicon glyphicon-ok" aria-hidden="true"></span> 2. formulario donde el
        cliente compra el producto: el cliente selecciona el producto e ingresa la cantidad. El programa muestra el
        precio total y elimina el producto del inventario.
    </p>
    <p><span style="color:black;color:green;" class="glyphicon glyphicon-star" aria-hidden="true"></span> - Para evitar que el
        cliente sea quien elimine el producto cuando se agote, se agrega una opción de agotado en la lista </p>


</div>
@endsection