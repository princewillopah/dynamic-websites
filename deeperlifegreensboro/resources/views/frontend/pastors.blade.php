@extends('layouts.template')

@section('title')
Leader - Pastor Festus
@endsection

@section('content')

    <section id="leadership-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp" data-wow-duration="2s">Pastor {{$pastor->name}}</h1>
                            <div class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="3s">
                            <span  class="wow fadeInUp float-right navs" data-wow-delay="2s" data-wow-duration="3s">
                                      <a  href="{{route('homepage')}}">Home</a> ><a  href="{{route('leadership')}}"> About Us - Leadership </a> > {{$pastor->name}} </span></div>
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
                        <img src="{{asset('uploads/pastors/'.$pastor->pic)}}" alt="{{$pastor->name}} picture here " class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="leadership-info">
                        <div class="leadership-info-head">
                            <h3>{{$pastor->name}}</h3>
                            <span>{{$pastor->title}}</span>
                        </div>
                        <div class="social"><!--this is for soscial icons-->
                            <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  {{$pastor->phone }}</a>
                            <a href="{{$pastor->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="{{$pastor->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i>  </a>
                            <a href="{{$pastor->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>
                        <div class="leadership-info-msg">
                            <p>
                                {{$pastor->description}}
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
              {{--   @foreach($otherpastors as $otherpastor)
                <div class="col-md-3">
                    <a href="{{route('pastors',$otherpastor->slug)}}">
                        <div class="leadership-main-info">
                            <div class="pastors-text">
                                <div class="pics">
                                    <img src="{{asset('uploads/pastors/'.$otherpastor->pic)}}" alt="{{$otherpastor->name}} picture here" class="img-fluid"  >
                                </div>
                                <div class="name-title">
                                    <h2>Pastor {{$otherpastor->name}}</h2>
                                    <span>{{$otherpastor->title}}</span>
                                </div>
                                <hr>
                            </div>
                            <div class="socials">
                                <nav class="nav justify-content-center">
                                    <a  href="{{$otherpastor->facebook}}" class="nav-link facebook" ><i class="fa fa-facebook"  aria-hidden="true"></i></a>
                                    <a href="{{$otherpastor->twitter}}}" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="{{$otherpastor->instagram}}" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                </nav>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach --}}
                @foreach ($otherpastors->chunk(4) as $chunk)
                    <div class="row mb-3">
                        @foreach ($chunk as $otherpastor)
                            <div class="col-md-3">
                                <a href="{{route('pastors',$otherpastor->slug)}}">
                                    <div class="leadership-main-info">
                                        <div class="pastors-text">
                                            <div class="pics">
                                                <img src="{{asset('uploads/pastors/'.$otherpastor->pic)}}" alt="{{$otherpastor->name}} picture here" class="img-fluid"  >
                                            </div>
                                            <div class="name-title">
                                                <h2>Pastor {{$otherpastor->name}}</h2>
                                                <span>{{$otherpastor->title}}</span>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="socials">
                                            <nav class="nav justify-content-center">
                                                <a  href="{{$otherpastor->facebook}}" class="nav-link facebook" ><i class="fa fa-facebook"  aria-hidden="true"></i></a>
                                                <a href="{{$otherpastor->twitter}}}" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="{{$otherpastor->instagram}}" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                            </nav>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
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

@section('style')
<style>
   #leadership-main .leadership-main-info .pastors-text .name-title {
    padding: 20px 0 20px 0;
} 
#leadership div.leadership-info
div.social a{
    font-size: 16px!important; 
    color: #716f6f!important;
    margin-right: 20px
}

</style>
@endsection