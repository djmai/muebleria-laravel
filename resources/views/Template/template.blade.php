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
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <link rel="shorcut icon" href="/imagenes/photo/Favicon.png">
    <title>@yield('title')</title>
</head>
<body>
<div class="containerNavCarousel" ><!--containerNavCarousel-->
  <!--navbar-->
  <nav class="navbar navbar-expand-lg" style="background-color:#212529">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('main')}}"><strong>INDUSTRIAS TRUJILLO</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            @if(session('user'))
              <a class="nav-link">{{session('user')}}</a>
            @else
              <a class="nav-link" href="{{route('login')}}">Login</a>
            @endif
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#location">Ubícanos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Contactanos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#Nosotros">Nosotros</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="https://api.whatsapp.com/send?phone=51992258052&text=Informacion"><img src="/imagenes/photo/whatsapp.png" alt="..." width="45" height="35">whatsapp</a></li>
            </ul>
          </li>
          @if(session('user'))
            <li>
            <a class="nav-link" href="{{route('close.session')}}" >Cerrar Session</a>
            </li>
          @endif
          <li class="nav-item">
            <a id="title" class="nav-link disabled">@yield('title')</a>
          </li>
        </ul>
        <div class="conteinerSearch" >
          <div class="formSearch" >
            <form id="form"method="POST" action="{{route('ajax')}}" class="d-flex" role="search">
            @csrf
              <input autocomplete="off" id="input" class="form-control me-2" type="search" placeholder="Buscar" name="search" aria-label="Search">
            </form>
            <div class="windowsSearch" >
              <table class="tableSearch" id="result">
              </table>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!--end navbar-->
  <!--carousel-->
  <div class="containerPortada" >
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/imagenes/photo/PORTADA1.png" class="d-block w-100" alt="..." width="100%" height="700px">
        </div>
        <div class="carousel-item">
          <img src="/imagenes/photo/PORTADA2.png" class="d-block w-100" alt="..."  width="100%" height="700px">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!--end carousel-->
</div><!--end containerNavCarousel-->
    @yield('conteiner')
<!--Location-->
<div id="location" class="conteinerMaps">
  <h3><button class="btn btn-primary" >Ubícanos</button></h3>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1949.82979432525!2d-76.93380496657436!3d-12.2035503222712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b944e5fba4d3%3A0x4da15df4c5041840!2sAv.%20Solidaridad%2C%20Villa%20EL%20Salvador%2015816!5e0!3m2!1ses-419!2spe!4v1658770949049!5m2!1ses-419!2spe" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--end Location-->
<!--Nosotros-->
<div id="Nosotros" class="conteinerWe">
  <table class="table table-dark table-borderless " >
    <tr>
        <th>Productos</th>
        <th>Servicios</th>
        <th>Contactanos</th>
      </tr>
    <tr>
      <td>Roperos</td>
      <td>Reparacion</td>
      <td>Industrias Trujillo</td>
    </tr>
    <tr>
      <td>Closets</td>
      <td>Movilidad</td>
      <td>Villa el Salvador</td>
    </tr>
    <tr>
      <td>Camarotes</td>
      <td>Diseño</td>
      <td><a class="dropdown-item" href="https://api.whatsapp.com/send?phone=51992258052&text=Informacion"><img src="/imagenes/photo/whatsapp.png" alt="..." width="45" height="35">+51 992258052<a></td>
    </tr>
    <tr>
      <td>Comodas</td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
<!--end Nosotros-->
</body>
</html>