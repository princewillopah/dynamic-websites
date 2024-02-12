@extends('layouts.template')

@section('title')
Leader - Pastor BabaYemi Orimogunje
@endsection

@section('content')

    <section id="leadership-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp" data-wow-duration="2s">Pastor  BabaYemi Orimogunje</h1>
                            <div class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="3s">
                            <span  class="wow fadeInUp float-right navs" data-wow-delay="2s" data-wow-duration="3s">
                              <a  href="{{route('homepage')}}">Home</a> ><a  href="{{route('leadership')}}"> About Us - Leadership </a> > Pastor BabaYemi Orimogunje</span></div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
        </div><!-- /.container -->
    </section ><!-- /.about -->
    <section id="leadership">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="leadership-pics">
                        <img src="{{asset('img/about/leaders/Pastor_Yemi_main.png')}}" class="img-fluid mx-auto d-block" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="leadership-info">
                        <div class="leadership-info-head">
                            <h3>Pastor BabaYemi Orimogunje</h3>
                            <span>Greensboro Church</span>
                        </div>
                        <div class="leadership-info-msg">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Perferendis eligendi veritatis magni, minima aliquam quos? Sint ipsum eaque dignissimos
                                voluptate fugiat earum optio magni nostrum, vero nesciunt. Deserunt, assumenda blanditiis?
                            </p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Perferendis eligendi veritatis magni, minima aliquam quos? Sint ipsum eaque dignissimos
                                voluptate fugiat earum optio magni nostrum, vero nesciunt. Deserunt, assumenda blanditiis?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="leadership-main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('kumuyi')}}">
                        <div class="leadership-main-info">
                            <div class="pastors-text">
                                <div class="pics">
                                    <img src="{{asset('img/about/leaders/kumuyi.jpg')}}" class="img-fluid"  alt="">
                                </div>
                                <div class="name-title">
                                    <h2>Pastor William F Kumuyi</h2>
                                    <span>General Superintendet</span>
                                </div>
                                <hr>
                            </div>
                            <div class="socials">
                                <nav class="nav justify-content-center">
                                    <a href="" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                </nav>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{route('olu')}}">
                        <div class="leadership-main-info">
                            <div class="pastors-text">
                                <div class="pics">
                                    <img src="{{asset('img/about/leaders/Pastor_Gbenga.png')}}" class="img-fluid"  alt="">
                                </div>
                                <div class="name-title">
                                    <h2>Pastor OluGbenga Omoteso</h2>
                                    <span>Pastor - State Overseer</span>
                                </div>
                                <hr>
                            </div>
                            <div class="socials">
                                <nav class="nav justify-content-center">
                                    <a href="" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                </nav>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{route('michael')}}">
                        <div class="leadership-main-info">
                            <div class="pastors-text">
                                <div class="pics">
                                    <img src="{{asset('img/about/leaders/Pastor-Dada.jpg')}}" class="img-fluid"  alt="">
                                </div>
                                <div class="name-title">
                                    <h2>Pastor Micheal Dada</h2>
                                    <span>Pastor - Regional Overseer</span>
                                </div>
                                <hr>
                            </div>
                            <div class="socials">
                                <nav class="nav justify-content-center">
                                    <a href="" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                </nav>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{route('festus')}}">
                        <div class="leadership-main-info">
                            <div class="pastors-text">
                                <div class="pics">
                                    <img src="{{asset('img/about/leaders/pastor_abu.jpg')}}" class="img-fluid"  alt="">
                                </div>
                                <div class="name-title">
                                    <h2>Pastor Festus Adu</h2>
                                    <span>Pastor - Decatur Church</span>
                                </div>
                                <hr>
                            </div>
                            <div class="socials">
                                <nav class="nav justify-content-center">
                                    <a href="" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                </nav>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ======================== subscription ======================================= -->
    <section class="subscription">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="subscription-text">
                        <h3>Subscribe To Our Newsletter</h3>
                        <h6>Subcribe Us And Tell Us About Your Story</h6>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="subscription-form">
                        <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Your Email">
                        <button type="submit" class="btn crose-btn">subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection