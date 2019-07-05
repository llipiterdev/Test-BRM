@extends('layouts.master')

@section('content')
<div class="jumbotron">
    <h3>Formulario proveedor</h3>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{route('guardar_producto')}}" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del producto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ej. producto">
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad (unidades)</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="ej. 500">
            </div>
            <div class="form-group">
                <label for="fecha_vencimiento">Fecha de vencimiento</label>
                <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento">
            </div>
            <div class="form-group">
                <label for="precio">Precio unit ($)</label>
                <input type="number" class="form-control" id="precio" name="precio">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
    </div>

</div>
<div class="container">

    <p><span style="color:black; color:green;" class="glyphicon glyphicon-ok" aria-hidden="true"></span> 1. Formulario
        donde el
        proveedor entrega los productos: el proveedor selecciona el producto e ingresa la cantidad que habrá
        en el inventario
        , la fecha de vencimiento y el precio. Cuando el proveedor ingresa la información, la información se
        ingresa en el inventario.</p>


</div>
@endsection