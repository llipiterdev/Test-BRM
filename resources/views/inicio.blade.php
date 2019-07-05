@extends('layouts.master')

@section('content')
<div class="jumbotron">
        <h2>Bienvenido.</h2>
        <p>En la parte superior encontrará 3 enlaces que lo llevaran a los diferentes formularios que se han solicitado para la prueba.</p>
        <p>- En el enlace Formulario proveedor se solicita la información para agregar un producto en la base de datos. </p>
        <p>- En el enlace Formulario cliente se muestra una lista completa de los productos que existen en el inventario,
                el cliente podra observar en ese listado informacion de interes sobre el producto.
                Donde tambien se le muestra qué producto está disponible y agotado. 
        </p>
        <p>- En el enlace Formulario visualización se ilustran todos los productos en el inventario, con la diferencia 
                que existe una opción que permite eliminar los productos que se deseen escoger, asegurando que el cliente no vea
                productos agotados.

        </p>

</div>
@endsection