<!DOCTYPE html>
<html dir="ltr" lang="br">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo','Sistema Jogo')</title>

    <title>Game</title>
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->

{{--    <link rel = "stylesheet" href="Estiloinicial.css">--}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<div id="app">
    <div class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
    {{--    <a class="navbar-brand" href='/'><strong>Home</strong></a>--}}
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('Home', 'Home') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    {{--    <div class="container-fluid">--}}
            <a id="item" href ='#' class="navbar-brand"></a>
            <button class="navbar-toggler" type="button" data-toggle = "collapse" data-target="#Menu">
                <spam class="navbar-toggler-icon"></spam>
            </button>

            <div class="collapse navbar-collapse" id="Menu">

                <ul class="navbar-nav">
                    <div class="col-2">
                        <li class="nav-item">
                            <a href ='/news' class="nav-link">News</a>
                        </li>
                    </div>
                    <div class="col-2">
                        <li class="nav-item">
                            <a href ='/herois' class="nav-link">Herois</a>
                        </li>
                    </div>

                    <div class="col-2">
                        <li class="nav-item">
                            <a href ='/items' class="nav-link">Itens</a>
                        </li>
                    </div>

                    <div class="col-2">
                        <li class="nav-item">
                            <a href ='/herouser' class="nav-link">LojaHero</a>
                        </li>
                    </div>

                    <div class="col-2">
                        <li class="nav-item">
                            <a href ='/itemuser' class="nav-link">LojaItem</a>
                        </li>
                    </div>
                    <div class="col-4">
                        <li class="nav-item">
                            <a href ='/perfil' class="nav-link">Perfil</a>
                        </li>
                    </div>
                </ul>
                {{--                <li class="nav-item">--}}
    {{--                    <a href ='/home' class="nav-link">Login</a>--}}
    {{--                </li>--}}
            </div>
                        <div class="container">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">

                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>


                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
         </div>
    </div>
</nav>
@if(Session:: has('mensagem'))

    <p><strong>{{ Session:: get('mensagem') }}</strong>
@endif


@yield("conteudo")

</body>



</html>

