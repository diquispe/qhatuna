<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Qhatuna Store</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark btn btn-primary btn-sm" href="/home">Inicio</a>
        <a class="p-2 text-dark btn btn-warning btn-sm" href="/crear-evento">Organizar Evento</a>
        <a class="p-2 text-dark" href="/mis-eventos">Mis Eventos</a>
        <a class="p-2 text-dark" href="/invitaciones">Invitaciones</a>
    </nav>
    @guest
        <a class="btn btn-outline-primar" href="/login">Iniciar Sesion</a>
        <a class="btn btn-outline-secondary" href="/register">Registrarse</a>
    @else

        <span class="p-2 text-dark"><b>Hola</b>  <i>{{ Auth::user()->nombre }}</i></span>
        <a class="btn btn-outline-primary" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">
            {{ csrf_field() }}
        </form>
    @endguest
</div>


<div class="container">
    @yield('content')
</div>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
