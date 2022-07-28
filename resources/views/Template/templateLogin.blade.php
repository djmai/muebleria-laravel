<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @yield('style')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="shorcut icon" href="/imagenes/photo/Favicon.png">
    <title>@yield('title')</title>
</head>
<body>
    <div class="conteinerLogin" >
        <div><a href="{{route('main')}}" ><button class="btn btn-primary" >Volver a la tienda</button></a></div>
        @yield('conteiner')
    </div>
</body>
</html>