<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>स्वस्थ नारी</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    स्वस्थ नारी हामी सबैको जिम्मेवारी
                </a>
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            {{-- <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>Get Started</a></li> --}}
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            {{-- <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>Get Started</a></li> --}}
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            {{-- <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="{{ route('homepage') }}"><i class="fa fa-angle-double-right"></i>Get Started</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="https://www.facebook.com/sonika.baniya.55"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/soneeka_baniya"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/soneeka_baniya/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>	
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p><u><a href="">Swastha Naari</a></u> is a changemaking project hosted by Women Lead Nepal. On the late memory of Sujata Baskota, very enthusiastic and active memeber of Women Lead.</p>
                        <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.swasthanaari.com" target="_blank">Swastha Naari</a></p>
                    </div>
                </div>	
            </div>
        </section>
</body>
</html>
