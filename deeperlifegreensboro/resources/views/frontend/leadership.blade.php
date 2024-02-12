@extends('layouts.template')

@section('title')
About - Leadership
@endsection

@section('content')


    <section id="leadership-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp" data-wow-duration="2s">Leadership</h1>
                            <div class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="3s">
                                <span class="sub">Get to know our us</span>
                                <span  class="wow fadeInUp float-right navs" data-wow-delay="2s" data-wow-duration="3s">
                                      <a  href="{{route('homepage')}}">Home  </a> > About Us - Leadership</span></div>
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
                        <img src="{{asset('img/about/leaders/kumuyi_main.jpg')}}" class="img-fluid mx-auto d-block" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="leadership-info">
                        <div class="leadership-info-head">
                            <h3>Pastor William F Kumuyi</h3>
                            <span>General Superintendet</span>
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
                        <a href="{{route('kumuyi')}}"  class="btn bttn-stretch bttn-md bttn-primary">Read More</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="leadership-main">
        <div class="container">
            {{-- <div class="row"> --}}
              {{--   @foreach($pastors as $pastor)
                     <div class="col-md-3">
                    <a href="{{route('pastors',$pastor->slug)}}">
                        <div class="leadership-main-info">
                            <div class="pastors-text">
                                <div class="pics" style="height: 200px; width: 200px; overflow: hidden">
                                    <img class="" style="width: 100%; height: 100%" src="{{asset('uploads/pastors/'.$pastor->pic)}}" alt="{{$pastor->name}} picture here ">
                                </div>
                                <div class="name-title">
                                    <h2>Pastor {{$pastor->name}}</h2>
                                    <span>{{$pastor->title}}</span>
                                </div>
                                <hr>
                            </div>
                            <div class="socials">
                                <nav class="nav justify-content-center">
                                    <a href="{{$pastor->facebook}}" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="{{$pastor->twitte}}" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="{{$pastor->instagram}}" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                </nav>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach --}}
                @foreach ($pastors->chunk(4) as $chunk)
                    <div class="row mb-3">
                        @foreach ($chunk as $pastor)
                            <div class="col-md-3">
                              <a href="{{route('pastors',$pastor->slug)}}">
                                    <div class="leadership-main-info">
                                        <div class="pastors-text">
                                            <div class="pics" style="height: 200px; width: 200px;">
                                                <img class="" style="width: 100%; height: 100%" src="{{asset('uploads/pastors/'.$pastor->pic)}}" alt="{{$pastor->name}} picture here ">
                                            </div>
                                            <div class="name-title">
                                                <h2>Pastor {{$pastor->name}}</h2>
                                                <span>{{$pastor->title}}</span>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="socials">
                                            <nav class="nav justify-content-center">
                                                <a href="{{$pastor->facebook}}" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="{{$pastor->twitte}}" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="{{$pastor->instagram}}" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                            </nav>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            {{-- </div> --}}
        </div>
    </section>

    <!--<section id="leadership-main">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-3">-->
    <!--                <div class="leadership-main-info">-->
    <!--                    <div class="pastors-text">-->
    <!--                        <div class="pics">-->
    <!--                                          <img src="img/about/Pastor_Gbenga.png" class="img-fluid"  alt="">-->
    <!--                        </div>-->
    <!--                        <div class="name-title">-->
    <!--                            <h2>Pastor OluGbenga Omoteso</h2>-->
    <!--                            <span>Pastor - State Overseer</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="pastor-info">-->
    <!--                        <p>Lorem ipsum dolor Aspernatur blanditiis commodi-->
    <!--                            dignissimos eligendi eum labore, praesentium quas quidem sed tempora?-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                    <div class="socials">-->
    <!--                        <nav class="nav justify-content-center">-->
    <!--                            <a href="" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
    <!--                            <a href="#" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>-->
    <!--                            <a href="#" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>-->
    <!--                        </nav>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->


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

@section('style')
<style>
   #leadership-main .leadership-main-info .pastors-text .name-title {
    padding: 20px 0 20px 0;
} 
</style>
@endsection

