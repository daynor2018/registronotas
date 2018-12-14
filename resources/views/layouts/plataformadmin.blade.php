<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home Administrador</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/bootadmin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/bootadmin/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/bootadmin/css/bootadmin.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/docente.css')}}">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
        <a class="navbar-brand" href="{{route('home')}}">Notas</a>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->email }} </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar Sesión') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="d-flex">
        <div class="sidebar sidebar-dark bg-dark">
        <ul class="list-unstyled">
            <li><a href="{{route('listadocentes')}}"><i class="fa fa-fw fa-pallet"></i>Docentes</a></li>
            <li><a href="{{route('listaestudiantes')}}"><i class="fa fa-fw fa-paper-plane"></i>Estudiantes</a></li>
            <li>
            <a href="#menuclase" data-toggle="collapse">
            <i class="fa fa-fw fa-lightbulb"></i> Clases
            </a>
                <ul id="menuclase" class="list-unstyled collapse">
                    <li><a href="{{route('listaclases')}}">Inhabilitados</a></li>
                    <li><a href="#">Habilitados</a></li>
                </ul>
            </li>
            <li><a href="{{route('listaestudiantes')}}"><i class="fa fa-fw fa-bolt"></i>Horarios</a></li>
            <li>
            <a href="#sm_expand_1" data-toggle="collapse">
                <i class="fa fa-fw fa-link"></i> Expandable Menu Item
            </a>
                <ul id="sm_expand_1" class="list-unstyled collapse">
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                </ul>
            </li>
        </ul>
        </div>

        <div class="content p-4 fondocontenido">
        @yield('contenido')
        </div>
    </div>
    <div class="container-fluid footer">
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

    <script type="text/javascript" src="{{asset('/bootadmin/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bootadmin/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bootadmin/js/bootadmin.min.js')}}"></script>
</body>
</html>