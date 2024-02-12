@extends('layouts.template')

@section('title')
Sermons
@endsection

@section('content')
    <section id="sermon-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp" data-wow-duration="2s">Sermons</h1>
                            <div class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="3s">
                                <span class="sub">Enrich yourself with the words</span>
                                <span  class="wow fadeInUp float-right navs" data-wow-delay="2s" data-wow-duration="3s">
                                <a  href="{{route('homepage')}}">Home</a> >
                                    Sermons
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section ><!-- /.about -->
    <section id="main-sermon">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="main-sermon-content" class="mb-5">
                        <h2 class="section-heading">Most Recent Sermon</h2>
                        <p>You will be happy for this</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div style="height: 220px;overflow: hidden;">
                     <img class="img-fluid w-100 h-100 col-md-8 offset-md-2" src="{{asset('uploads/sermons/'.$latest_sermon->coverImage)}}" alt="{{$latest_sermon->coverImage}} here ">
                      </div>
                </div>
                <div class="col-md-12">
                    <div class="info">
                        <h4>{{$latest_sermon->title}}</h4>
                        <div class="infos">
                            <div class="pastor">Pastor: <span>{{ucfirst($latest_sermon->pastor->name)}}</span></div>
                            <div class="category">Category: <span>{{ucfirst($latest_sermon->category->name)}}</span></div>
                            <div class="date">Date: <span>{{date_format($latest_sermon->sermonDate,'F d, Y')  }}</span></div>
                        </div>
                    </div>
                    <div class="message col-md-8 offset-md-2">
                        <p>
                            {{$latest_sermon->description}}
                        </p>
                    </div>
                    <div class="readmoreSocial col-md-8 offset-md-2">
                        <a href="" class="readmore bttn-stretch bttn-md bttn-primary">Read More </a>
                        <div class="nav ml-auto socials">
                            <a href="" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="" class="nav-link youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="#" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            <a href="#" class="nav-link linkedin"><i class="fa fa-download" aria-hidden="true"></i></a>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- ======================== latest sermons ======================================= -->
    <section class="latest-sermons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-sermons-content">
                        <h2 class="section-heading">Recent Sermons</h2>
                        <p class="paragraph">Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">

           @foreach($firstRowRecent_sermon as $sermon)

            <div class="col-12 col-md-6 col-lg-4">
                <div class="latest-sermons-card">
                    <div class="card" >
                        <div class="latest-sermons-img-date">
                            {{-- <img class="card-img-top" src="img/home/3.jpg" alt="Card image" style="width:100%"> --}}
                            <img class="w-100 h-100 rounded" src="{{asset('uploads/sermons/'.$sermon->coverImage)}}" alt="{{$sermon->coverImage}} here ">
                            <div class="latest-sermons-date">
                                <h6>
                                    {{-- <span>10</span>MAR --}}
                                      <span> {{$sermon->sermonDate->format('d')}}</span> {{$sermon->sermonDate->format('M')}}
                               
                                </h6>
                            </div>
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">{{$sermon->title}}</h4>
                            <div class="latest-sermons-card-detail">
                                <p><i class="fa fa-user" aria-hidden="true"></i> <span class="name-title">Sermon From: </span><span class="name">{{$sermon->pastor->name}}</span>
                                </p>
                                <p><i class="fa fa-tag" aria-hidden="true"></i> <span class="name-title">Categories: </span><span class="name"> {{$sermon->category->name}}</span>
                                </p>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="name-title"> {{$sermon->sermonDate->format('M')}}  {{$sermon->sermonDate->format('d')}}</span> by </span><span class="name"> {{date('G:i a',strtotime($sermon->startTime))}} - {{date('G:i a',strtotime($sermon->endTime))}}</span>
                                </p>
                            </div> 
                            <div class="entry-action">

                                <a href="#"><i class="licon-camera-play"></i></a>
                                <a href="#"><i class="licon-headphones"></i></a>
                                <a href="#"><i class="licon-enter-down2"></i></a>
                                <a href="#"><i class="licon-file-empty"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            </div>
            <div class="row">

              @foreach($secondRowRecent_sermon as $sermon)

            <div class="col-12 col-md-6 col-lg-4">
                <div class="latest-sermons-card">
                    <div class="card" >
                        <div class="latest-sermons-img-date">
                            {{-- <img class="card-img-top" src="img/home/3.jpg" alt="Card image" style="width:100%"> --}}
                            <img class="w-100 h-100 rounded" src="{{asset('uploads/sermons/'.$sermon->coverImage)}}" alt="{{$sermon->coverImage}} here ">
                            <div class="latest-sermons-date">
                                <h6>
                                    {{-- <span>10</span>MAR --}}
                                      <span> {{$sermon->sermonDate->format('d')}}</span> {{$sermon->sermonDate->format('M')}}
                               
                                </h6>
                            </div>
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">{{$sermon->title}}</h4>
                            <div class="latest-sermons-card-detail">
                                <p><i class="fa fa-user" aria-hidden="true"></i> <span class="name-title">Sermon From: </span><span class="name">{{$sermon->pastor->name}}</span>
                                </p>
                                <p><i class="fa fa-tag" aria-hidden="true"></i> <span class="name-title">Categories: </span><span class="name"> {{$sermon->category->name}}</span>
                                </p>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="name-title"> {{$sermon->sermonDate->format('M')}}  {{$sermon->sermonDate->format('d')}}</span> by </span><span class="name"> {{date('G:i a',strtotime($sermon->startTime))}} - {{date('G:i a',strtotime($sermon->endTime))}}</span>
                                </p>
                            </div> 
                            <div class="entry-action">

                                <a href="#"><i class="licon-camera-play"></i></a>
                                <a href="#"><i class="licon-headphones"></i></a>
                                <a href="#"><i class="licon-enter-down2"></i></a>
                                <a href="#"><i class="licon-file-empty"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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