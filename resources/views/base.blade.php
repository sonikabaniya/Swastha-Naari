<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Swastha Naari</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}" />

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('homepage') }}">स्वस्थ नारी हामी सबैको जिम्मेवारी </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <div style="width:85%"></div>
        <a class="btn btn-outline-primary" href="{{  url('/login')   }}" role="button">Login / Register</a>
        </div>
        </nav>
        @yield('headContent')

</head>
<body>
        @yield('content')
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