<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de notas</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/welcome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/fontastik/styles.css')}}">
</head>
<body>
    <div class="container-fluid bg-info banner">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="{{asset('/images/logo2.png')}}" height="40"> Registro de notas</a>
            <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav ml-auto"> 
            <li class="nav-item active text-center cita">
            <a class="nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item text-center cita"><a class="nav-link" href="#"> Contactos</a></li>
            <div class="dropdown-divider"></div>
            <li class="nav-item text-center">
            <a class="btn m-lg-2 btn-light btn-block bg-warning" href="{{ route('login') }}"><strong>Iniciar Sesión</strong></a></li>
                </ul>
              </div>
            </nav>
        </div>
        </div>

        @yield('content')
        <div class="container-fluid bg-dark footer">
            <br>
            <div class="row">
            <div class="col-lg-8">
                <h4 class="text-white">Páginas relacionadas</h4>
            <nav class="nav justify-content-center">
              <a class="nav-link" href="#">Sistema estudiantil</a>
              <a class="nav-link" href="#">Acerca de nosotros</a>
              <a class="nav-link" href="#">Politica de privacidad</a>
              <a class="nav-link" href="#">Accesibilidad</a>
            </nav>
            </div>
            <div class="col-lg-4">
                <h4 class="text-white">Redes Sociales</h4>
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="icon icon-twitter1 nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="icon icon-facebook2 nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="icon icon-youtube1 nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="icon icon-instagram nav-link" href="#"></a>
              </li>
            </ul>
            </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                <ul class="nav justify-content-center">
                  <li class="nav-item">
                    <div class="nav-link disabled">Copyright © 2018-2019 keydayp@gmail.com. Todos los Derechos Reservados.</div>
                  </li>
                </ul>
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="{{asset('/jquery/jquery-3.3.1.slim.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/popper/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>
