<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Princewill" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="wilsco">
    <meta name="keyword" content="wilsco.nl,wilsco,WILSCO,Wilsco.nl,Wilsco,oil tanks,oil tankers,storages,tankers,oil storage">

    <meta name="Princewill" content="">
    <link rel="shortcut icon" type="image/png" href="img/generics/fav.png"/>

    <title>@yield('title') | Deeperlife </title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Blinker|Comfortaa|Grenze|Maven+Pro|Nunito+Sans|Quicksand|Rajdhani|Righteous|Ubuntu|Yanone+Kaffeesatz&display=swap" rel="stylesheet">



    <!--cdn-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" integrity="sha256-gVCm5mRCmW9kVgsSjQ7/5TLtXqvfCoxhdsjE6O1QLm8=" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/demo-files/demo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bttn.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssanimation.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/page/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('scss/style.css')}}">
    {{--<link rel="stylesheet" type="text/css" href="css/style.css">--}}

    <script>
        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    </script>

</head>
<body>
<div class="site-wrapper">
    <section id="all-navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <a class="navbar-brand" href="#">
                    <picture>
                        {{--<img src="{{asset('img/generics/_LOGOS-small.png')}}"  media="(max-width:400px)">--}}
                        <img src="{{asset('img/generics/logo-light.png')}}" class="" alt="">
                        {{--<source srcset="img/generics/_LOGOS-small.png"  media="(max-width:400px)">--}}
                        {{--<img src="img/generics/logo-light.png"  class="" alt="">--}}
                    </picture>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-th" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item mynavlink {{(request()->is('/'))?'active':''}}">
                            <a class="nav-link mynavAnchor has-border navbar-border-animation " href="{{route('homepage')}}" id="homes">
                                Home
                            </a>
                        </li>


                        <!-- About Dropdown -->
                        <li class="nav-item mynavlink dropdown {{(request()->is('about'))?'active':''}}">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                About
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item mynavAnchor {{(request()->is('about'))?'active':''}}" href="{{route('about')}}">About</a>
                                <a class="dropdown-item mynavAnchor {{(request()->is('leadership'))?'active':''}}" href="{{route('leadership')}}">Leadership</a>
                                <a class="dropdown-item mynavAnchor {{(request()->is('what-we-believe'))?'active':''}}" href="{{route('what-we-believe')}}">What We Believe</a>
                            </div>
                        </li>
                        <li class="nav-item mynavlink dropdown  {{(request()->is('/ministries/'))?'active':''}}">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Ministries
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item mynavAnchor  {{(request()->is('children'))?'active':''}}" href="{{route('children')}}">Children Ministry</a>
                                <a class="dropdown-item mynavAnchor" href="{{route('youth')}}">Youth Ministry</a>
                                <a class="dropdown-item mynavAnchor" href="{{route('women')}}">Women Ministry</a>
                                <a class="dropdown-item mynavAnchor" href="{{route('men')}}">Men Ministry</a>
                            </div>
                        </li>

                        <li class="nav-item mynavlink {{(request()->is('our-sermons'))?'active':''}}">
                            <a class="nav-link mynavAnchor has-border"  href="{{route('sermons')}}">Sermons</a>
                        </li>
                        <li class="nav-item mynavlink {{(request()->is('our-events'))?'active':''}}">
                            <a class="nav-link mynavAnchor has-border" href="{{route('our-event')}}">Events </a>
                        </li>
                        <li class="nav-item mynavlink {{(request()->is('contact'))?'active':''}}">
                            <a class="nav-link mynavAnchor has-border" href="{{route('contact')}}">Contact Us</a>
                        </li>

                    </ul>

                    <div class="">
                        <a href="" class="btn give">GIVE</a>
                    </div>

                </div>
            </div>
        </nav>
    </section>
    <!--========================= content =============================================-->

    @yield('content')


<!--=========================footer =============================================-->

    <footer id="footer">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="main-footer main-footer1">
                        <div class="charity-logo">
                            <a href="index.php" class="logo-anchor" >
                                <img src= "{{asset('img/generics/logo-dark.png')}}" class="img-fluid"  alt="">
                            </a>
                            <div style="clear: both"></div>
                        </div><!-- /.charity-logo -->
                        <div class="nav justify-content-center">
                            <a href="https://web.facebook.com/Oseituah-Simeon-Egheosesele-351564388934768/?ref=vcp2p" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com/channel/UCPbE3_rWZysahIq1UXmvjXA?view_as=subscriber" class="nav-link youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="#" class="nav-link instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" class="nav-link linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div><!-- /.main-footer -->
                </div><!-- /.col-md-3 col-sm-6 -->
                <div class="col-md-6 col-sm-6">
                    <div class="main-footer main-footer4">
                        <h5>Contact</h5>
                        <p><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>    +1-919-412-3237</p>
                        <p><span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>  contactus@greensborochurch.org</p>
                        <p><span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>4925-1131 West Market Street Greensboro, NC. 27407</p>
                    </div><!-- /.main-footer -->
                </div><!-- /.col-md-3 col-sm-6 -->

            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="copyright-color">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="copyright">
                            Copyright © 2019 Deeperlife Bible Church, Greensboro. All Rights Reserved.
                        </div><!-- /.copyright -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
                <a href="#homes" id="back-to-top" class="btn btn-sm smooth-scrol btn-back-to-top">
                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                </a>

            </div><!-- /.container container-fluid -->
        </div><!-- /.copyright-color -->
    </footer>

</div>

<!--cdn-->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>


<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/main2.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/letteranimation.js')}}"></script>
<script src="{{asset('js/particles.min.js')}}"></script>
<script>
    new WOW().init();
</script>


</body>
</html>
