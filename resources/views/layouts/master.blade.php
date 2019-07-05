<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Utilizacion de CDN Bootstrap 3 -->
<link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/mystyle.css")}}" type="text/css">
    <title> Test BRM</title>
</head>

<body>
    <nav class="navbar navbar-static-top" style="background-color: rgba(25,40,65,1);">
        <div class="container">
            <div class="navbar-header">
                <a href="{{url('/')}}"> <span class="navbar-brand">Test BRM</span></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                <li><a href="{{url('proveedor')}}">Formulario Proveedor</a></li>
                <li><a href="{{url('cliente')}}">Formulario Cliente</a></li>
                    <li><a href="{{url('visualizacion')}}">Formulario Visualización</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    @yield("content")
</div>

</body>

<script src={{ asset("js/jquery-3.4.1.min.js")}}></script>
<script src="{{ asset("bootstrap/js/bootstrap.min.js")}}"
    integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
    crossorigin="anonymous"></script>
<script src="{{ asset("js/myjs.js")}}"></script>


</html>