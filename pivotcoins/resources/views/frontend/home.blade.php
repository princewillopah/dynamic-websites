@extends('layouts.frontend')

@section('title')
    Home
@endsection

@section('content')
    <!--==================  hero =======================================-->
    <section id="hero-price">
        <div class="container-fluid">
            <div class="mycourasel">
                <div id="myCarouselIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarouselIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarouselIndicators" data-slide-to="1"></li>
                        <li data-target="#myCarouselIndicators" data-slide-to="2"></li>
                        <li data-target="#myCarouselIndicators" data-slide-to="3"></li>
                        <li data-target="#myCarouselIndicators" data-slide-to="4"></li>
                        {{-- <li data-target="#myCarouselIndicators" data-slide-to="5"></li> --}}
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="img-container">
                                <img class="d-block w-100 " src="img/home/slide/1.jpg" alt="Storage / Handling / Shipping">
                            </div>
                            <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <div class="caption" id="caption1"> -->
                                        <div class="caption-inner">
                                            <h1 class="wow animated fadeInUp"   data-wow-duration=".9s">Building Your Way To Success And Ensure Your Future</h1>
                                            <p class=" wow animated fadeInUp"  data-wow-delay=".9s" data-wow-duration=".9s">Join Pivotcoins today and move your business to a newer level
                                            </p>
                                            <!-- <a href="sign-up.php" class="btn wow fadeInUp"  data-wow-delay=".2s" data-wow-duration=".3s">Join Now</a> -->
                                            <a href="{{route('register')}}" class="btn wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Join Now</a>
                                        </div>
                                        {{-- <a href="sign-up.php" class="btn wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Join Now</a> --}}
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="courasel-overlay"> </div> --}}
                        </div>

                        <div class="carousel-item">
                            <div class="img-container">
                                <img class="d-block w-100" src="img/home/slide/7.jpg" alt="Train Transpotation" >
                            </div>
                            <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="caption" id="caption2">
                                            <div class="caption-inner">
                                                <h1 class="pb-1 wow animated fadeInUp" id="caption-title2" data-wow-duration=".9s" >A platform that facilitates choice, simplicity and performance.</h1>
                                                <p class="animated wow fadeInUp" id="caption-para2" data-animation="fadeInRight" data-wow-delay=".9s" data-wow-duration=".9s">All these are backed by caring experts so that you stay focused on what you do best, win as an individual and succeed as a investor..
                                                </p>
                                                <a href="{{route('register')}}" class="btn wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Join Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="courasel-overlay"> </div> --}}
                        </div>

                        <div class="carousel-item">
                            <div class="img-container">
                                <img class="d-block w-100" src="img/home/slide/2a.jpg" alt="TANK STORAGE MINERALS" >
                            </div>
                            <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="caption" >
                                            <div class="caption-inner">
                                                <h1 class="pb-1 wow animated fadeInUp" id="caption-title4" data-animation="fadeInUp"  data-wow-duration=".9s" >Invest For What Really Matters</h1>
                                                <p class="animated wow fadeInUp" id="caption-para4" data-animation="fadeInUp" data-wow-delay=".9s" data-wow-duration=".9s">Whether you're new to investing or a seasoned pro, it's time to partner with a company that believes you could and should be getting more from your money.
                                                </p>
                                                <a href="{{route('register')}}" class="btn wow animated fadeInUp" data-wow-delay="1.8s" data-wow-duration=".9s">Join Now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="courasel-overlay"> </div> --}}
                        </div>

                        <div class="carousel-item ">
                            <div class="img-container">
                                <img class="d-block w-100" src="img/home/slide/4.jpg" alt="Road Transpotation" >
                            </div>
                            <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="caption " id="caption1">
                                            <div class="caption-inner">
                                                <h1 class="pb-1 wow animated fadeInUp" id="caption-title2" data-animation="fadeInLeft"  data-wow-duration=".9s" >A Smarter Way To Create Your Furtune</h1>
                                                <p class="animated wow fadeInUp" id="caption-para2" data-animation="fadeInRight" data-wow-delay=".9s" data-wow-duration=".9s">Relax while the Experts help you achieve the life style you want
                                                </p>
                                                <a href="{{route('register')}}" class="btn wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Join Now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="courasel-overlay"> </div> --}}
                        </div>

                        <div class="carousel-item">
                            <div class="img-container">
                                <img class="d-block w-100" src="img/home/slide/6.jpg" alt="TANK" >
                            </div>
                            <div class="carousel-caption carousel-caption-4 d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="caption" >
                                            <div class="caption-inner">
                                                <h1 class="pb-1 wow animated fadeInUp" id="caption-title4" data-animation="fadeInRight"  data-wow-duration=".9s">Our outstanding Trading Strategy Generate huge success with sustainable profits!</h1>
                                                <p class=" wow animated fadeInUp" id="caption-para4" data-animation="fadeInLeft" data-wow-delay=".9s" data-wow-duration=".9s">Pivotcoin is a fast growing firm with Investment Experts.
                                                   we offer you a Professional, Efficient and Reliable services with Secure and Reliable Investment Program.
                                                </p>
                                                <a href="{{route('register')}}" class="btn wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Join Now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="courasel-overlay"> </div> --}}
                        </div>


                    </div> <!--<carousel-inner-->
                    <a class="carousel-control-prev " href="#myCarouselIndicators" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next " href="#myCarouselIndicators" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div><!-- /.mycourasel -->
        </div>


    <div class="container current-prices">
        <div class="row">

            <div class="col-md-4 current-prices-info">
                <div class="current-btc-prices">
                    <p>BITCOIN PRICE(USD)</p>
                    <p  id="btc_rate"></p>
               </div>
            </div>
            <div class="col-md-4 current-prices-info">
                <div class="current-eth-prices">
                    <p>ETHEREUM PRICE(USD)</p>
                    <p  id="eth_rate"></p>
                </div>
            </div>

            <div class="col-md-4 current-prices-info">
                <div class="current-btc-prices">
                    <p>BITCASH PRICE(USD)</p>
                    <p  id="bch_rate"></p>
                </div>
            </div>
        </div>
    </div>

</section>
    <!-- ==================================================== -->
    <!-- CRYPTO INTRO -->
    <!-- ==================================================== -->
    <!-- <section class="crypto-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <div class="crypto-intro-img">
                    <img src="img/home/graph-dark-a.png" class="img-fluid" alt="">
                </div>
            </div>
                <div class="col-md-6">
                    <div class="crypto-intro-msg">
                        <h2>Cryptocurrencies</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur
                            distinctio nam possimus rem suscipit unde vel velit voluptas?
                            At, est facere fugiat ipsa nemo quibusdam quod rem rerum temporibus.
                        </p>
                        <a href="" class="btn bttn-stretch bttn-md bttn-primary">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ==================================================== -->
    <!-- ABOUT US -->
    <!-- ==================================================== -->
    <section id="home-about-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">


                    <video id='my-video' class='video-css' controls preload='auto' width='100%' height='100%'
                           poster='MY_VIDEO_POSTER.jpg' data-setup='{}' controls autoplay>
                        <source src='img/home/Pivotcoincommercial.mp4' type='video/mp4'>

                    </video>

              </div>
                <div class="col-md-6">
                    <div class="info">
                        <div class="info-head">
                            <h2>About Pivotcoins</h2>
                        </div>
                        <p>Pivotcoins, is a private investment company focused on companies in high growth areas
                            or high growth opportunities in mature industries. We provide investment-brokerage
                            and asset management services to private and corporate entities.
                        </p>
                        <p>Pivotcoins is committed to empowering individuals, institutions and
                            companies to trade and invest, with confidence, in an innovative and reliable environment;
                             supported by best-in-class personal service and uncompromising integrity.</p>
                        <a href="{{route('about')}}" class="btn bttn-stretch bttn-md bttn-primary">Read more</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- WHY US -->
    <!-- ==================================================== -->
    <section id="why-us" class="sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h2>Why potential investors Choose Pivotcoins</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/Shield2.png" alt="">
                        </div>
                        <h3>Uncompromising security</h3>
                        <p>With our deep understanding of customers' information and in compliance with PCI DSS standards,
                            we provide protective measures against DDoS attacks and full data encryption.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/law.png" alt="">
                        </div>
                        <h3>LEGAL COMPLIANCE</h3>
                        <p>Registration in UK, MSB status in FinCEN, essential licenses and strong relations with banks
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/percent1.png" alt="">
                        </div>
                        <h3>Competitive Commission</h3>
                        <p>Our investors are guaranteed of the consistent
                            3% to 5% returns of
                            their investments weekly. Of cause,
                            other incentives are included for higher volume investors
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/support.png" alt="">
                        </div>
                        <h3>24/7 support</h3>
                        <p>
                            Our main objectives is to meet your satisfaction,
                            anytime. We offer professional guidance
                            and assistance around the clock.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/world.png" alt="">
                        </div>
                        <h3>WORLD COVERAGE</h3>
                        <p>We provide services to about 90% of the world's countries, including 26 states in USA</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/Chart2.png" alt="">
                        </div>
                        <h3>PERFORMANCE</h3>
                        <p>Our expert team are highly experienced individuals from
                            the world's top finance, business and tech companies like
                            Morgan Stanly, Google and Amazon, put together to actualize the
                            dreams and financial stability of our investors.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- OUR PLANS -->
    <!-- ==================================================== -->
    <section id="our-plans" class="sections">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="our-plans-link">
                        <div class="our-link"> <img src="img/generics/icon/check.png" alt=""><p>Free Registration</p>  </div>
                        <div class="our-link"> <img src="img/generics/icon/check.png" alt=""><p>No Hidden Charges</p>  </div>
                        <div class="our-link"> <img src="img/generics/icon/check.png" alt=""><p>Attractive Returns</p>  </div>
                        <div class="our-link"> <img src="img/generics/icon/check.png" alt=""><p>No Expertise Needed</p>  </div>
                        <div class="our-link"> <img src="img/generics/icon/check.png" alt=""><p>No Risks - 100% Safe</p>  </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div id="ours">
                      <h2>Straightforward Investment. No surprises</h2>
                      <p>
                           Our investment plans offer a great opportunity to begin your own path towards actualizing your most ambitious desires and conquer new horizons.
                        </p>
                      <a href="{{route('plans')}}" class="btn plans-btn">Our Packages</a>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- STEPS -->
    <!-- ==================================================== -->
    <section class="steps sections-white" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h2>Three easy way to start</h2>

                    </div>
                </div>

                <div class="col-md-6">
                    <div id="steps">
                        <div id="sync2" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/generics/icon/sign-up.png" alt="">
                                <div class="topic">
                                    <h3>Sign Up</h3>
                                    <p>Sign up for your free pivotcoins account follow our easy process to set up
                                        your profile
                                    </p>
                                </div>
                                <i class="fa fa-angle-right"></i>
                            </div>
                            <div class="item">
                                <img src="img/generics/icon/choose.png" alt="">
                                <div class="topic">
                                    <h3>Choose a plan and make deposit</h3>
                                    <p>
                                        Choose your preferred plan and make your deposit. This can be done through methods like
                                        bank transfer, credit card to add money
                                        to your pivotcoins account
                                    </p>
                                </div>
                                <i class="fa fa-angle-right"></i>
                            </div>
                            <div class="item">
                                <img src="img/generics/icon/yields.png" alt="">
                                <div class="topic">
                                    <h3>Start Earnning Profits</h3>
                                    <p>All Withdrawals are made on weekly base. To make a
                                        withdrawal, you need to fill the withdrawal application
                                        form in your dashboard, indicating the amount you want to withdraw.
                                        Processing of your application will be followed right away.
                                    </p>
                                </div>
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="step-main">
                        <div id="sync1" class="owl-carousel owl-theme">
                            <div class="item">
                                <img class="img-fluid" src="img/home/signup/phone.png" alt="">
                            </div>
                            <div class="item">
                                    <img class="img-fluid" src="img/home/signup/PNG5.png" alt="">
                            </div>
                            <div class="item">
                                    <img class="img-fluid" src="img/home/signup/PNG3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- OUR TOOLS -->
    <!-- ==================================================== -->
    <section id="out-tools" class=" sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h2>Bitcoin Tools</h2>
                        <p>Make use of our bitcoin widgets to track your investment from time to time</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1 ">
                    {{-- <div class="bitcoin-calculator">
                        <script src="https://cdn.jsdelivr.net/gh/coinponent/coinponent@1.2.6/dist/coinponent.js"></script>
                        <coin-ponent dark-mode></coin-ponent>
                    </div> --}}
                   {{-- <div  style="width:474px; background-color: #fff;border:2px solid #888;text-align:center;padding:0px;margin:0px auto"><div style="margin:0px; padding: 3px 0px 2px 0px;text-align:center;background-color:#ccc;border:1px solid #888;width:472;"><a title="Bitcoin to American Dollar Converter" class="HS1label" style="text-weight:bold;text-decoration:none;color:#000000;" href="https://fx-rate.net/BTC/USD/"><b><img style="margin:0;padding:0;border:0;" src="https://fx-rate.net/images/countries/us.png" border=0 > &nbsp;Bitcoin to <img style="margin:0;padding:0;border:0;" src="https://fx-rate.net/images/countries/btc.png" border=0 > &nbsp;Dollar Converter</b></a></div><script type="text/javascript" src="https://fx-rate.net/converter.php?size=short&layout=horizontal&currency_pair=USD&currency=BTC"></script></div> --}}
                   {{-- <div style="margin: 0px; padding: 0px; border: 2px solid rgb(136, 136, 136); width: 100%; background-color: transparent;" align="center"><div style="width: 100%; border-bottom: 1px solid rgb(136, 136, 136); margin: 0px; padding: 0px; text-align: center; color: rgb(170, 170, 170); background-color: transparent;" align="center"><a class="HS2label" href="https://fx-rate.net/BTC/USD/" style="text-decoration: none; font-size: 12px; font-weight: bold; text-align: center; font-family: Arial; margin-bottom: 6px; color: rgb(170, 170, 170);"></a></div><script type="text/javascript" src="https://fx-rate.net/converter.php?layout=horizontal&amount=1&tcolor=aaaaaa&currency=BTC&currency_pair=USD&default_pair=BTC/USD"></script></div> --}}
                   <div class="btc-cal">
                    <script type="text/javascript">
                      crypt_calc_background_color = "#ffffff";crypt_calc_border_width = ;crypt_calc_font_family = "Verdana";crypt_calc_font_size = "large";</script>
                   <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
                  </div>

                </div>
                {{-- <div class="col-md-12">
                    <div class="enter-msg">
                        <p>Use "btc" for Bitcoin, "bch" for Bitcash and "eth" for Etherium</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- OUR RESOURCES -->
    <!-- ==================================================== -->
    <section class="our-market-resource sections">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="our-market-resource-main">
                        <h2>Bitcoin live chart</h2>
                        <p class="sub">The Bitcoin ecosystem at a glance</p>
                        <p>Why dont you grab this great opportunity to join.
                            invest in cryptocurrency CFDs. Ride the digital wave
                            of cryptocurrencies with Pivotcoins. Start investing in Bitcoin, Ethereum, Bitcash today.</p>
                        <div class="our-market-resource-main-tabulate">
                            <div class="icon-para">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>More than 80,000 businesses are already on the bandwagon; so why not yours?</p>
                            </div>
                            <div class="icon-para">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>The entire process of bitcoin transactions is peer to peer.</p>
                            </div>
                            <div class="icon-para">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>With bitcoins, there’s basically zero risks of inflation.</p>
                            </div>
                            <div class="icon-para">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>Enjoy a certain degree of financial anonymity that most credit cards fail to offer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="chart-img">
                        <div class="btcwdgt-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- OUR TEAM -->
    <!-- ==================================================== -->
    <section class="our-team sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h2>our team</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our-team-main">
                        <figure class="snip1295">
                            <img src="img/home/team/1.jpg" alt="sample38"/>
                            <div class="border one" style="">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div><a href=""></a>
                        </figure>
                        <div class="name">
                            <h3>Virgil D. Allen</h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our-team-main">
                        <figure class="snip1295">
                            <img src="img/home/team/2.jpg" alt="sample38"/>
                            <div class="border one" style="">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div><a href=""></a>
                        </figure>
                        <div class="name">
                            <h3>Yvette B. Anderson</h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our-team-main">
                        <figure class="snip1295">
                            <img src="img/home/team/3.jpg" alt="sample38"/>
                            <div class="border one" style="">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div><a href=""></a>
                        </figure>
                        <div class="name">
                            <h3>Linda M. Williams</h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our-team-main">
                        <figure class="snip1295">
                            <img src="img/home/team/4.jpg" alt="sample38"/>
                            <div class="border one" style="">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div><a href=""></a>
                        </figure>
                        <div class="name">
                            <h3>Hector D. Hughes</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- TESTIMONIALS -->
    <!-- ==================================================== -->
    <section class="testimonials sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h2>Here’s what our customers have to say</h2>
                        {{-- <img src="img/generics/icon/header-gray.png" alt=""><br> --}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="slide-msg">
                        <div class="testimonial-owl-carousel owl-carousel owl-theme">
                            <div class="item" >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial1.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>John H. Murphy</p>
                                            <span>USA</span>
                                        </div>
                                    </div>
                                    <h4>Pivotcoin provides a truly professional service
                                        and I don't
                                        hesitate to recommend them to anyone who wants
                                        to start investing in bitcoin.
                                    </h4>
                                </div>
                            </div>
                            <div class="item"  >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial2.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>James C. Gibson</p>
                                            <span>USA</span>
                                        </div>
                                    </div>
                                    <h4>from my observations, i cant wait to give the high volume investment soon.
                                        you re definitely packed with great team for the job</h4>
                                </div>
                            </div>

                            <div class="item"  >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial3.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>Viollette Rocheleau</p>
                                            <span>FRANCE</span>
                                        </div>
                                    </div>
                                    <h4>I can hold happinessand what these guys have done for me. thank you very much, pivotcoins teams. you are great</h4>
                                </div>
                            </div>

                            <div class="item"  >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial4.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>Elizabeth G. Reese</p>
                                            <span>USA</span>
                                        </div>
                                    </div>
                                    <h4> Wow! just sitting down doing nothing while money keeps rolling in?
                                        that's what i call crazy and cool.</h4>
                                </div>
                            </div>

                            <div class="item" >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial5.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>Max Holzman</p>
                                            <span>GERMANY</span>
                                        </div>
                                    </div>
                                    <h4>i have not had any reasons to regret since i started my investment with
                                        pivotcoins. you really dont need to much about bitcoin trading. with tese guys, you re covered.</h4>
                                </div>
                            </div>

                            <div class="item" >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial6.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>Kedar Waqqas Bishara</p>
                                            <span>TUNISIA</span>
                                        </div>
                                    </div>
                                    <h4>I believe Bitcoin is the future. I also know this is the greatest
                                        freedom technology developed in my lifetime, and I’m thrilled to see the
                                        progress and development in this space
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- SERVICES ICONS -->
    <!-- ==================================================== -->
    <section id="our-services-icons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <div class="head" >
                                <h2>What We Accept</h2>
                      </div>
                </div>
                <div class="col-sm-8 offset-sm-2">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="icoins">
                                <a href="">
                                    <img src="img/home/services/btc.png" class="img-fluid"  alt="Responsive image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icoins">
                                <a href="">
                                    <img src="img/home/services/bch.png" class="img-fluid"  alt="Responsive image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icoins">
                                <a href="">
                                    <img src="img/home/services/eth.png" class="img-fluid"  alt="Responsive image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="our-security">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                         <div class="head" >
                                    <h2>We are covered by the top industry protections </h2>
                          </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="security">
                                <div class="col-md-12">
                                        <div class="security-slide">
                                            <div class="security-owl-carousel owl-carousel owl-theme">
                                                <div class="item" >
                                                        <div class="name-pic">
                                                            <div class="pics">
                                                                <img src="img/home/security/1.png" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="item" >
                                                        <div class="name-pic">
                                                            <div class="pics">
                                                                <img src="img/home/security/2.png" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="item" >
                                                        <div class="name-pic">
                                                            <div class="pics">
                                                                <img src="img/home/security/3.png" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="item" >
                                                        <div class="name-pic">
                                                            <div class="pics">
                                                                <img src="img/home//security/4.png" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="item" >
                                                        <div class="name-pic">
                                                            <div class="pics">
                                                                <img src="img/home//security/5.png" alt="" class="img-fluid" >
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="item" >
                                                        <div class="name-pic">
                                                            <div class="pics">
                                                                <img src="img/home//security/6.png" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
{{--------------------------------------------------------------------------}}
@section('style')
    <link rel="stylesheet" href="{{asset('css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/owl.theme.default.min.css')}}">
    {{-- <link href="https://vjs.zencdn.net/7.6.5/video-js.css" rel="stylesheet"> --}}
<style >

#ours h2{font-size: 40px!important; line-height: 40px;color:#0d1120;font-weight: 300;letter-spacing: 3px;}
#ours p{line-height: 35px;color:rgba(#0d1120, .5)}
#ours .plans-btn{background: teal;color:#aaa; transition:all ease .9s;padding:15px; font-weight:700}
#ours .plans-btn:hover{background: rgba(teal, .5);color:#fff; transition:all ease .9s;}


</style>
    <style>

       .btc-cal .cryptonatorwidget{
        border-radius: 4px!important;
        padding: 50px!important;
        background: #0d1120!important;
        border: 2px solid #aaa!important;
        font-family: Arial;
        font-size: 100%;
        color: #aaa!important;
      } 
           .btc-cal .cryptonatorwidget table tbody tr td:first-chld{width:80%;}
      .btc-cal .cryptonatorwidget table tbody tr td:nth-child(2){width:20%}
      .btc-cal .cryptonatorwidget table tbody tr td input{height:40px!important;padding: 10px!important;margin-bottom: 10px!important;font-size: 25px;background: transparent!important;color: #aaa!important;border:2px solid teal;}
      .btc-cal .cryptonatorwidget table tbody tr td select{height:40px!important;padding: 10px!important;margin-bottom: 10px!important;font-size: 20px;background: teal!important;color:#0d1120!important;border:none;}
      .btc-cal .cryptonatorwidget table tbody tr td select option{width:100%!important}
      .btc-cal .cryptonatorwidget table tbody tr td{padding:0!important}
      
      .btc-cal .cryptonatorwidget div{display:none;}

      /* .btc-cal .cryptonatorwidget table tbody tr td input{margin-bottom:10px!important;}   */
      /* .btc-cal .cryptonatorwidget table tbody tr td select{color:red!important;} */
      </style>


@endsection
{{-----------------------------------------------------------------------}}
@section('script')
{{-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script src='https://vjs.zencdn.net/7.6.5/video.js'></script> --}}
    {{--<script src="{{asset('js/owl.carousel.min.js')}}"></script>--}}
    <script>
        var accordion = new Accordion('.accordion-container',{

            // hides all answers
            hideAll: false,

            // shows all answers
            showAll: false,

            // shows the first answer
            showFirst: false,

            // panel ID you want to show at first time
            panelId: null

        });
    </script>
    <script>
        new WOW().init();
    </script>
    <script>
        (function(b,i,t,C,O,I,N) {
            window.addEventListener('load',function() {
                if(b.getElementById(C))return;
                I=b.createElement(i),N=b.getElementsByTagName(i)[0];
                I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
            },false)
        })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
    </script>
    {{-- <script type="text/javascript"     src="https://ethereumprice.org/assets/js/widget/app.min.js">
    </script>
@endsection
{{--------------------------------------------------------}}
