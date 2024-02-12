<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Princewill" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="pivotcoins">
    <meta name="keyword" content="pivotcoins, Pivotcoins, PIVOTCOINS,PIVOTCOIN,coin,bitcoin,Bitcoin,Bitcoins,BITCOINS,BITCOIN,bitcoins,crypto,Crypto,cryptos,Crypytos,CRYPTO,CRYPTOS,cryptocurrency,Cryptocurrency,cryptocurrencies,Cryptocurrencies,CRYPTOCURRENCY,CRYPTOCURRENCIES">

    <meta name="Princewill" content="">
    <link rel="shortcut icon" type="image/ico" href="{{asset('img/generics/logo/fav_16.ico')}}"/>

    <title> @yield('title') | Pivotcoins </title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <link href="//db.onlinewebfonts.com/c/ab804af7699fabaf769911c77bb4d115?family=UniSansW01-Regular" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i&display=swap" rel="stylesheet">

    <!--cdn-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" integrity="sha256-gVCm5mRCmW9kVgsSjQ7/5TLtXqvfCoxhdsjE6O1QLm8=" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/bttn.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/cssanimation.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/accordion.css')}}">
    @yield('style')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <link rel="stylesheet" href="{{asset('css/vendor/responsive.css')}}">
    <style>
        .mobile-logo{display: none}
        /* .btcwdgt.btcwdgt-text-ticker.btcwdgt-s-price {
            min-width: 100% !important;
            box-shadow: none !important;
            margin: 0 !important;
            background-color: transparent !important;
            padding: 0 30px 0 0 !important;
        }
        .btcwdgt.btcwdgt-s-price .btcwdgt-body {
            padding: 0 !important;
            margin-top: .9em !important;
            height: 2em !important;
        }
        .btcwdgt.btcwdgt-s-price .btcwdgt-body strong.arrow.up {left: 50px !important;}
        .btcwdgt.btcwdgt-s-price .btcwdgt-body strong.arrow.down {left: 50px !important;}
        .btcwdgt-text-ticker .btcwdgt-body ul{margin: 0.8em 0 !important;display: block!important;width:100%!important}
        .btcwdgt.btcwdgt-s-price .btcwdgt-body ul li {
            line-height: normal !important;
            font-size: 18px !important;
            font-weight: 400 !important;
            text-align: center!important;
            font-family:UniSansW01-Regular !important;
        }
        .btcwdgt.btcwdgt-s-price .btcwdgt-body span, .btcwdgt.btcwdgt-text-ticker .btcwdgt-footer, .btcwdgt.btcwdgt-text-ticker .btcwdgt-edge {
            display: none !important;
        } */
    </style>
    <style>

        a.gflag.nturl img{display:none!important;}
        ul li.nav-item a.navlink{display:none;}
        ul li.nav-item select{background: transparent;color: #aaa;width: 50%;border:transparent;font-weight:300;font-family: 'Blinker', sans-serif!important;}
        ul li.nav-item select option{background: #0d1120;color: #aaa;width: 50%;border:transparent;font-weight:300;font-family: 'Blinker', sans-serif!important;}
    </style>
    {{-- <script>
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
    </script> --}}
</head>

<!--Start of Tawk.to Script---------------------------------------------------------------------->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d9bad766c1dde20ed057bee/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--------------------------------------------------------------------------->



<body>


{{-----------------------  header menu------------------------------------------------------------------}}
<section id="header">
    <!--============================ top bar =============================================-->
    <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="login-register d-flex">
                        <ul class="nav nav-pills nav-lang language">
                            <li class="nav-item">

                                <a href="" class="navlink">
                                      <span class="translate mr-auto ml-4">
                                                                <!-- GTranslate: https://gtranslate.io/ -->

                                          <!-- ----------------------------------------------------------------------------------------------------- -->
                                            <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;">
                                            <img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="English" /></a>
                                            <a href="#" onclick="doGTranslate('en|fr');return false;" title="French" class="gflag nturl" style="background-position:-200px -100px;">
                                            <img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="French" /></a>
                                            <a href="#" onclick="doGTranslate('en|de');return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;">
                                            <img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="German" /></a>
                                            <a href="#" onclick="doGTranslate('en|it');return false;" title="Italian" class="gflag nturl" style="background-position:-600px -100px;">
                                            <img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Italian" /></a>
                                            <a href="#" onclick="doGTranslate('en|pt');return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;">
                                            <img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Portuguese" /></a>
                                            <a href="#" onclick="doGTranslate('en|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-500px -200px;">
                                            <img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Russian" /></a>
                                            <a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;">
                                            <img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Spanish" /></a>

                                            <style type="text/css">

                                            /* a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
                                            a.gflag img {border:0;}
                                            a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);} */
                                            #goog-gt-tt {display:none !important;}
                                            .goog-te-banner-frame {display:none !important;}
                                            .goog-te-menu-value:hover {text-decoration:none !important;}
                                            body {top:0 !important;}
                                            #google_translate_element2 {display:none!important;}

                                            </style>

                                            <select onchange="doGTranslate(this);">
                                                <option value="en|en">English</option>
                                                <option value="en|zh-CN">Chinese (Simplified)</option>
                                                <option value="en|zh-TW">Chinese (Traditional)</option>
                                                <option value="en|fr">French</option>
                                                <option value="en|de">German</option>
                                                <option value="en|it">Italian</option>
                                                <option value="en|ja">Japanese</option>
                                                <option value="en|ko">Korean</option>
                                                <option value="en|es">Spanish</option>
                                                <option value="ru">Russian</option>
                                            </select>
                                            <div id="google_translate_element2"></div>
                                            <script type="text/javascript">
                                            function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
                                            </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


                                            <script type="text/javascript">
                                            /* <![CDATA[ */
                                            eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
                                            /* ]]> */
                                            </script>


                                      </span>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-pills justify-content-end nav-reg ml-auto sales">
                            {{-- <li class="nav-item">
                                <a  class="sale-top">24H VOLUME</a >
                                <a  class="sale-down">702.29 BTC</a >
                            </li> --}}
                            <li class="nav-item">
                                <a  class="sale-top">COVERAGE</a >
                                <a  class="sale-down">Over 15 Countries</a >
                            </li>
                            <li class="nav-item">
                                <a  class="sale-top">ACTIVE TRADERS</a >
                                <a  class="sale-down">5,567</a >
                            </li>
                            <li class="nav-item">
                                <a class="sale-top">PROCESSING OVER</a>
                                <a class="sale-down">$72 Million+</a>
                            </li>
                        </ul>

                        <ul class="nav nav-pills justify-content-end nav-reg ml-auto faq-reg-log">

                            <li class="nav-item">
                                {{-- BTC/USD  --}}
                                <div class="rate">
                                     <span class="btc">1 BTC</span> = <span class="btc-usd"><span class="price">10606.13</span></span> USD
                                </div> 
                                {{-- <div class="rate">BTC/USD: --}}
                                        {{-- <span class="btc">1 BTC</span> = <span class="btc-usd">
                                            <span id="btc_rate"></span>
                                       </span> --}}
                                {{-- </div> --}}
        
                            </li>
                            {{-- <li>
                                <div class="btcwdgt-price btcwdgt btcwdgt-s-price btcwdgt-text-ticker btcwdgt-clean" data-bw-theme="light" data-bw-cur="usd">
                                    <div class="btcwdgt-body">
                                        <ul><li> 12816.15</li></ul>
                                        <strong class="arrow up" style="left: 83px !important;"></strong>
                                        <span>BTC/USD</span>
                                    </div>
                                    <div class="btcwdgt-footer">
                                        <a href="https://www.bitcoin.com/widgets/?utm_source=coinxo.trade&amp;utm_medium=widget&amp;utm_campaign=Price%20Widget" class="embed" title="Embed this widget">&lt;/&gt;</a>
                                        <a href="https://www.bitcoin.com/?utm_source=coinxo.trade&amp;utm_medium=widget&amp;utm_campaign=Price%20Widget" class="logo" title="Powered by bitcoin.com"><span>bitcoin.com</span></a>
                                    </div>
                                    <div class="btcwdgt-edge">
                                    </div>
                                </div>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('faq')}}" id="faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('register')}}">Register</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--============================ nav bar =============================================-->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg nav-color ">
            <div class="container">
                <a class="navbar-brand" href="{{route('homepage')}}">
                    <img src="img/generics/logo/mainlogo.png"  class="" alt=""> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fa fa-th" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mynavlink {{(request()->is('/'))?'active':''}}">
                            <a class="nav-link mynavAnchor has-border navbar-border-animation" href="{{route('homepage')}}" id="homes">
                                Home
                            </a>
                        </li>
                        <li class="nav-item mynavlink {{(request()->is('/about'))?'active':''}}">
                            <a class="nav-link mynavAnchor has-border navbar-border-animation" href="{{route('about')}}" id="about">
                                About
                            </a>
                        </li>
                        <li class="nav-item mynavlink {{(request()->is('/investment-plans'))?'active':''}}">
                            <a class="nav-link mynavAnchor has-border navbar-border-animation" href="{{route('plans')}}" id="plans">
                                Investment Plans
                            </a>
                        </li>
                        <li class="nav-item mynavlink {{(request()->is('/referral'))?'active':''}}">
                                <a class="nav-link mynavAnchor has-border navbar-border-animation" href="{{route('referral')}}" id="referrals">
                                 Referral
                                </a>
                            </li>
                        <li class="nav-item mynavlink  {{(request()->is('/contact'))?'active':''}}">
                            <a class="nav-link mynavAnchor has-border navbar-border-animation" href="{{route('contact')}}" id="contact">Contact Us</a>
                        </li>
                        <li class="nav-item mynavlink mobile {{(request()->is('/faq'))?'active':''}}">
                            <a class="nav-link mynavAnchor has-border navbar-border-animation" href="{{route('faq')}}" id="faq">FAQ</a>
                        </li>
                         <li class="nav-item mynavlink mobile {{(request()->is('/login'))?'active':''}}">
                            <a class="nav-link mynavAnchor has-border navbar-border-animation" href="{{route('login')}}">Login</a>
                        </li>
                         <li class="nav-item mynavlink mobile {{(request()->is('/register'))?'active':''}}">
                            <a class="nav-link mynavAnchor has-border navbar-border-animation" href="{{route('register')}}">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section><!-- /#navbar -->
</section>




 @yield('content')





<section class="get-started sections-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head">
                    <h2>Get started today with Pivotcoins</h2>
                    <p>Join the 5,000+ investors and start making money now</p>
                </div>
                <div class="bbtn">
                    <a href="{{route('register')}}" class="btn rounded-0 bttn-fill bttn-md bttn-primary">get started</a>
                </div>

            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="footer-main">
        <div class="container ">
            <div class="row">
                     <div class="col-md-12 mobile-logo">
                      
                         <div class="company-logo main-footer main-footer4">
                            <picture>
                                {{-- <source srcset="img/generics/_LOGOS-small.png"  media="(max-width:400px)"> --}}
                                <img src="img/generics/logo/PivotcoinsThickthinReversed-large.png"  class="" alt="">
                            </picture>
                             <div class="footer-contact mobile mt-4">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span> +1 450-231-4914, <br>+1 434-223-4613</span>
                            {{-- <span> +1 434-223-4613</span> --}}
                            </div>
                            <div class="footer-contact mobile">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                <span>+1 929-201-6519</span>
                            </div>
                            <div class="footer-contact mobile">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span> support@pivotcoins.trade</span>
                            </div>
                            <div class="footer-contact mobile">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span> PO Box 1759 Hereford, <br>TX 79045 United States</span>
                            </div>
                           
                         </div>
                    </div>
                                                      
                <div class="col-md-3 col-sm-6 ">
                    <div class="main-footer main-footer2">
                        <h5>About</h5>
                        <nav class="nav flex-column">
                            <div class="abt">
                                <a class="nav-link active" href="{{route('about')}}">About Us</a>
                                <a class="nav-link" href="{{route('referral')}}">Referral</a>
                                <a class="nav-link" href="{{route('terms')}}">Terms of Use</a>

                            </div>
                        </nav>
                    </div><!-- /.main-footer -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="main-footer main-footer3">
                        <h5>Information</h5>
                        <nav class="nav flex-column">
                            <div class="abt">
                                <a class="nav-link active" href="{{route('register')}}">Get Started</a>
                                <a class="nav-link" href="{{route('faq')}}">FAQ</a>
                                <a class="nav-link" href="{{route('contact')}}">Support</a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="main-footer main-other">
                        <h5>Other Deposit Options</h5>
                        <nav class="nav pay">
                            <a class="nav-link active" href="#"><i class="fa fa fa-cc-visa" aria-hidden="true"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
                        </nav>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 desktop">
                    <div class="main-footer main-footer4">
                        {{-- <h5>Contact</h5> --}}
                         <div class="company-logo">
                            <picture>
                                {{-- <source srcset="img/generics/_LOGOS-small.png"  media="(max-width:400px)"> --}}
                                <img src="img/generics/logo/PivotcoinsThickthinReversed-large.png"  class="" alt="">
                            </picture>
                            <div style="clear: both"></div>
                        </div><!-- /.charity-logo -->
                        <div class="footer-contact">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span> +1 450-231-4914,</span>
                            <span> +1 434-223-4613</span>
                        </div>
                        <div class="footer-contact">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            <span>+1 929-201-6519</span>
                        </div>
                        <div class="footer-contact">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span> support@pivotcoins.trade</span>
                        </div>
                        <div class="footer-contact">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span> PO Box 1759 Hereford, TX 79045 United States</span>
                        </div>

                    </div><!-- /.main-footer -->
                </div>

            </div><!-- /.row -->
        </div>
    </div>

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
        <a href="#homes" id="back-to-top" class="btn btn-sm smooth-scrol btn-back-to-top">
            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
        </a>
    </div>
</footer>



<!--cdn-->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/main2.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/letteranimation.js')}}"> </script>
<script src="{{asset('js/accordion.min.js')}}"> </script>
@yield('script')
 {{--  <div class="rate">Bitcoin Price:
    <span class="btc">1 BTC</span> = <span class="btc-usd"><span class="price">10606.13</span></span> USD
</div>  --}}
<script>
    $(function(){
        getCurr();
        setInterval( getCurr,30000);
        function getCurr()
        {
            $.get( "https://api.cryptonator.com/api/ticker/btc-usd", function( response )
            {
                $('.btc-usd').find('.price').html(parseFloat(response.ticker.price).toFixed(2));
                //$('.btc-usd').find('.price').html(response.ticker.price);
                console.log(response.ticker.change.indexOf('-'));
                if((response.ticker.change.indexOf('-')+1))
                {
                    $('.btc-usd').find('.change').addClass('minus');
                }
    
                $('.btc-usd').find('.change').html(response.ticker.change);
            }, "json" );
        }
    });  
</script>
<script>
    $(function () {
        function getUrl(currency) {
            return "https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,BCH,LTC&tsyms=USD";
        }
        function updateRate() {
            $.get(getUrl("BTC"), function (data) {
                $("#btc_rate").text(data.BTC.USD);
                //$("#bitcoin_circle").text(data.USD);
            });
            $.get(getUrl("ETH"), function (data, status) {
                $("#eth_rate").text(data.ETH.USD);
            });
            $.get(getUrl("LTC"), function (data, status) {
                $("#ltc_rate").text(data.LTC.USD);
            });
            $.get(getUrl("BCH"), function (data, status) {
                $("#bch_rate").text(data.BCH.USD);
            });
                         var total_deposit =  '3.5906124999999998';
          /* total_deposit += parseFloat($("#eth_rate").text()) * parseFloat($("#ethereum_circle").text());
            total_deposit += parseFloat($("#ltc_rate").text()) * parseFloat($("#lite_circle").text());*/

            $("#deposits_circle").text(total_deposit);
          
        }
        updateRate();
       setInterval(updateRate, 1000);

    });
</script>

<script>
        // $(document).ready(function(){
        //  $('#btnRemoveFirstSub').click(function(){
        //    var myTextSub = $('.MyStringSub').text();
        //    var RemoveFirstCharSub = myTextSub.substring(1);
        //         $('.removedStringSub').html('<strong>The new string is: </strong>'+RemoveFirstCharSub);
        //    });
        // });
        // ---------------------------------------------------------------------------------------
        // $(document).ready(function(){
        //     $('#btnRemoveFirstSub').click(function(){
        //     var myTextSub = $('.current-prices-info .ethereum-price-widget div div div span').text();
        //     myTextSub.substring(1);
        //         // $('.removedStringSub').html('<strong>The new string is: </strong>'+RemoveFirstCharSub);
        //     });
        // });
            
</script>

</body>
</html>




