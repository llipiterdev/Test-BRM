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
                    <input type="hidden" name="precio" id="precio" value="{{$producto->precio}}"/>
                </div>
                
                <div class="form-group">
                    <label for="cantidad">Cantidad :</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" autocomplete="off"/>

                </div>
                <div class="form-group">
                    <label> Precio total : $</label>
                    <label id="total"></label>
                </div>
        
                <button type="submit" class="btn btn-success">Comprar</button>
            <a href="{{ url('cliente')}}" class="btn btn-primary">Regresar</a>
            </form>
</div>
@endsection

