<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Princewill" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="pivotcoins">
    <meta name="keyword" content="pivotcoins, Pivotcoins, PIVOTCOINS,PIVOTCOIN,coin,bitcoin,Bitcoin,Bitcoins,BITCOINS,BITCOIN,bitcoins,crypto,Crypto,cryptos,Crypytos,CRYPTO,CRYPTOS,cryptocurrency,Cryptocurrency,cryptocurrencies,Cryptocurrencies,CRYPTOCURRENCY,CRYPTOCURRENCIES">

    <meta name="Princewill" content="">
    <link rel="shortcut icon" type="image/ico" href="img/generics/logo/fav_16.ico"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Pivotcoins') }}</title> -->
           <title>@yield('title') | Pivotcoins</title>

             <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
  
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i&display=swap" rel="stylesheet">


	<!--cdn-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" integrity="sha256-gVCm5mRCmW9kVgsSjQ7/5TLtXqvfCoxhdsjE6O1QLm8=" crossorigin="anonymous" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

  

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('font/vendor/demo-files/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/bttn.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/cssanimation.min.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
         <link rel="stylesheet" href="{{asset('css/vendor/responsive.css')}}">
    @yield('style')

</head>
<body>
<!-- header----------------------------------------- -->
<section id="sign-reg">
        <section id="sign-header">
            <div id="app">
                <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> -->
                <nav class="navbar navbar-expand-lg nav-color">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <!-- {{ config('app.name', 'Laravel') }} -->
                            <picture>
                                    <source srcset="img/generics/logo/PivotcoinsThickThinReversed-small.png"  media="(max-width:400px)">
                                    <img src="{{asset('img/generics/logo/PivotcoinsThickThinReversed-large.png')}}"  class="" alt="">
                            </picture>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <!-- <span class="navbar-toggler-icon"></span> -->
                            <i class="fa fa-th" aria-hidden="true"></i>
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
                                        <a class="nav-link" href="{{ route('homepage') }}">{{ __('Home') }}</a>
                                    </li>
                                    <!-- @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif -->
                                    @if(request()->is('login')) 
                                        <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @elseif(request()->is('register')) 
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a>
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

            </div>
        </section>
</section>  
<!-- -----content-------------------------------------- -->
<!-- <main class="py-4"> -->
    @yield('content')
<!-- </main> -->

<!-- ------footer------------------------------------- -->

<footer id="footer-sign-in">
    <div class="copyright-color">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="copyright">
                        Copyright © 2019 Pivotcoins. All Rights Reserved.
                    </div><!-- /.copyright -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container container-fluid -->
    </div>
 </footer>

 <!-- </section>#sign-reg  at sign-in-header -->

<!--cdn-->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>


<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/main2.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/letteranimation.js') }}"> </script>
<script src="{{ asset('js/particles.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>

</script>
<script>
new WOW().init();
</script>


</body>
</html>
