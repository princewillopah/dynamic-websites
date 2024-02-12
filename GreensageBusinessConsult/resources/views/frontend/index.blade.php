@extends('layouts.frontend-layouts')

@section('title')
  The best place to learn in Lagos, Nigeria
@endsection

@section('style')

@endsection
{{-- /////////////////////////////////////////////////////////////////////// --}}
@push('home-css')
<link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet"/>
<!-- City -->
<link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet"/>

<link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" >
{{-- <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}" /> --}}
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
<style>
    /* video css  */
    .video-js {
  width: 100%;
  height: 298px;
}
</style>

{{-- /* ================================================================================ */ --}}

{{-- /* //home-hero slider */ --}}
<link rel="stylesheet" type="text/css" href="{{asset("css/hero-paralax-style.css")}}" />
   <script type="text/javascript" src="{{asset('js/modernizr.custom.28468.js')}}"></script>

{{-- /* ===================================================== */ --}}
<style>
    .owl-theme .owl-controls .owl-buttons div{
	color: #FFF;
	display: inline-block;
	zoom: 1;
	*display: inline;/*IE7 life-saver */
	margin: 5px;
	padding: 3px 10px;
	font-size: 12px;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
	background: #64dd17;
	filter: Alpha(Opacity=50);/*IE7 fix*/
	opacity: 0.5;
}
</style>


@endpush

@section('content')


<div class="mycourasel desktop-slider">
  <div id="myCarouselIndicators" class="carousel slide" data-ride="carousel">
      {{-- <ol class="carousel-indicators">
          <li data-target="#myCarouselIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#myCarouselIndicators" data-slide-to="1"></li>
          <li data-target="#myCarouselIndicators" data-slide-to="2"></li>
          <li data-target="#myCarouselIndicators" data-slide-to="3"></li>
          <li data-target="#myCarouselIndicators" data-slide-to="4"></li>
          <li data-target="#myCarouselIndicators" data-slide-to="5"></li>
      </ol> --}}

      <div class="carousel-inner">
          <div class="carousel-item active">
              <div class="img-container">
                <img class="d-block w-100" src="img/home/slide/business consult companies in lagos and in nigeria.jpg" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos">
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption-inner green-bg full-text-90">
                              <h1 class="wow animated fadeInUp"   data-wow-duration=".9s">Welcome to <span>Greensage Business Consult</span></h1>
                              <p class=" wow animated fadeInUp "  data-wow-delay=".9s" data-wow-duration=".9s">Africa's foremost learning , development and HR service provider. We have been delivering Training and consulting solutions to our clients for over 3 years
                              </p>
                             
                          <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                          <a href="{{route('about')}}" class="btn2  wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                        </div> 
                      </div>
                  </div>
              </div>
          </div>

          <div class="carousel-item">
              <div class="img-container">
                  <img class="d-block w-100"  src="img/home/slide/outsourcing and learning companies in lagos and in nigeria.png" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos" >
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption" id="caption2">
                              <div class="caption-inner white-bg full-text">
                                  <h1 class="wow animated fadeInUp" id="caption-title2" data-wow-duration=".9s" >What We Do Best</h1>
                                  <p class="animated wow fadeInUp " id="caption-para2" data-animation="fadeInRight" data-wow-delay=".9s" data-wow-duration=".9s">
                                      At Greensage, we focus on providing bespoke outsourcing solutions to
                                       meet the business needs of our clients. Our services include online
                                        and in-house Learning, Background checks and verification, 
                                        Personnel outsourcing, HR outsourcing,  Accounting services, 
                                        Payrolling services and Expense management.
                                  </p>
                                  {{-- <p class="animated wow fadeInUp mobile-p" id="caption-para2" data-animation="fadeInRight" data-wow-delay=".9s" data-wow-duration=".9s">
                                      Our services include online and in-house Learning, Background checks and verification, Personnel outsourcing, HR outsourcing,  Accounting services, Payrolling services and Expense management.
                                  </p> --}}
                                  <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                                  <a href="{{route('about')}}" class="btn2 wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                                
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="carousel-item">
              <div class="img-container">
                  <img class="d-block w-100"  src="img/home/slide/outsourcing and hr in lagos.png" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos" >
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption" >
                              <div class="caption-inner blue-bg">
                                  <h1 class="wow animated fadeInUp" id="caption-title4" data-animation="fadeInUp"  data-wow-duration=".9s" ><span>Stay focused</span> on what you do best</h1>
                                  <p class="animated wow fadeInUp" id="caption-para4" data-animation="fadeInUp" data-wow-delay=".9s" data-wow-duration=".9s">Let's help you achieve more with less
                                  </p>
                                  <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                                  <a href="{{route('about')}}" class="btn2 wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                                
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <div class="img-container">
                  <img class="d-block w-100"  src="img/home/slide/jobs in lagos and nigeria.png" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos">
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption-inner blue-bg">
                              <h1 class="wow animated fadeInUp"   data-wow-duration=".9s">Functional <span>Outsourcing</span></h1>
                              <p class=" wow animated fadeInUp"  data-wow-delay=".9s" data-wow-duration=".9s">Let's help your organization develop organic solutions that specifically address the challenges
                              </p>
                             <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                          <a href="{{route('about')}}" class="btn2  wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                        </div> 
                      </div>
                  </div>
              </div>
          </div>

          <div class="carousel-item ">
              <div class="img-container">
                  <img class="d-block w-100"  src="img/home/slide/outsourcing companies in lagos and in nigeria.png" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos" >
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption" id="caption2">
                              <div class="caption-inner green-bg">
                                  <h1 class="wow animated fadeInUp" id="caption-title2" data-wow-duration=".9s" ><span>Recruitment</span> has never been <span>easier</span></h1>
                                  <p class="animated wow fadeInUp" id="caption-para2" data-animation="fadeInRight" data-wow-delay=".9s" data-wow-duration=".9s">We understand
                                     that recruitment and selection processes can be quite a hurdle, let us help you simplify this with our top-notch expertise.
                                  </p>
                                  <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                                  <a href="{{route('about')}}" class="btn2 wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                                
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="carousel-item">
              <div class="img-container">
                  <img class="d-block w-100" src="img/home/slide/consulting and background check companies in lagos and in nigeria.png" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos" >
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption" >
                              <div class="caption-inner white-bg">
                                  <h1 class="wow animated fadeInUp" id="caption-title4" data-animation="fadeInUp"  data-wow-duration=".9s" ><span>Background Check</span></h1>
                                  <p class="animated wow fadeInUp" id="caption-para4" data-animation="fadeInUp" data-wow-delay=".9s" data-wow-duration=".9s">
                                    Let's help you know who you are hiring, thereby eliminating future problems for your company
                                  </p>
                                  <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                                  <a href="{{route('about')}}" class="btn2 wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                                
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
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


</div>



<div class="mycourasel mobile-slider">
  <div id="myCarouselIndicators-mobile" class="carousel slide" data-ride="carousel" >
      {{-- <ol class="carousel-indicators">
          <li data-target="#myCarouselIndicators-mobile" data-slide-to="0" class="active"></li>
          <li data-target="#myCarouselIndicators-mobile" data-slide-to="1"></li>
          <li data-target="#myCarouselIndicators-mobile" data-slide-to="2"></li>
          <li data-target="#myCarouselIndicators-mobile" data-slide-to="3"></li>
          <li data-target="#myCarouselIndicators-mobile" data-slide-to="4"></li>
          <li data-target="#myCarouselIndicators-mobile" data-slide-to="5"></li>
      </ol> --}}

      <div class="carousel-inner">
          <div class="carousel-item active">
              <div class="img-container">
                <img class="d-block w-100" src="img/home/slide/business consult companies in lagos and in nigeria-407x127.png" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos">
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption-inner green-bg full-text-90">
                              <h1 class="wow animated fadeInUp"   data-wow-duration=".9s">Welcome to <span>Greensage Business Consult</span></h1>
                              <p class=" wow animated fadeInUp "  data-wow-delay=".9s" data-wow-duration=".9s">Africa's foremost learning , development and HR service provider. We have been delivering Training and consulting solutions to our clients for over 3 years
                              </p>
                             
                          <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                          <a href="{{route('about')}}" class="btn2  wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                        </div> 
                      </div>
                  </div>
              </div>
          </div>

          <div class="carousel-item">
              <div class="img-container">
                  <img class="d-block w-100"  src="img/home/slide/outsourcing and learning companies in lagos and in nigeria-407x127.png" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos" >
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption" id="caption2">
                              <div class="caption-inner white-bg full-text">
                                  <h1 class="wow animated fadeInUp" id="caption-title2" data-wow-duration=".9s" >What We Do Best</h1>
                                  <p class="animated wow fadeInUp " id="caption-para2" data-animation="fadeInRight" data-wow-delay=".9s" data-wow-duration=".9s">
                                      At Greensage, we provide online
                                        and in-house Learning,outsourcing solutions, Background checks and verification, 
                                        Personnel outsourcing, HR outsourcing, Accounting services, 
                                        Payrolling services and Expense management.
                                  </p>
                                  {{-- <p class="animated wow fadeInUp mobile-p" id="caption-para2" data-animation="fadeInRight" data-wow-delay=".9s" data-wow-duration=".9s">
                                      Our services include online and in-house Learning, Background checks and verification, Personnel outsourcing, HR outsourcing,  Accounting services, Payrolling services and Expense management.
                                  </p> --}}
                                  <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                                  <a href="{{route('about')}}" class="btn2 wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                                
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="carousel-item">
              <div class="img-container">
                  <img class="d-block w-100"  src="img/home/slide/outsourcing and hr in lagos-407x127.png" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos" >
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption" >
                              <div class="caption-inner blue-bg">
                                  <h1 class="wow animated fadeInUp" id="caption-title4" data-animation="fadeInUp"  data-wow-duration=".9s" ><span>Stay focused</span> on what you do best</h1>
                                  <p class="animated wow fadeInUp" id="caption-para4" data-animation="fadeInUp" data-wow-delay=".9s" data-wow-duration=".9s">Let's help you achieve more with less
                                  </p>
                                  <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                                  <a href="{{route('about')}}" class="btn2 wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                                
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <div class="img-container">
                  <img class="d-block w-100"  src="img/home/slide/jobs in lagos and nigeria-407x127.png" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos">
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption-inner blue-bg">
                              <h1 class="wow animated fadeInUp"   data-wow-duration=".9s">Functional <span>Outsourcing</span></h1>
                              <p class=" wow animated fadeInUp"  data-wow-delay=".9s" data-wow-duration=".9s">Let's help your organization develop organic solutions that specifically address the challenges
                              </p>
                             <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                          <a href="{{route('about')}}" class="btn2  wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                        </div> 
                      </div>
                  </div>
              </div>
          </div>

          <div class="carousel-item ">
              <div class="img-container">
                  <img class="d-block w-100"  src="img/home/slide/outsourcing companies in lagos and in nigeria-407x127.png" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos" >
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption" id="caption2">
                              <div class="caption-inner green-bg">
                                  <h1 class="wow animated fadeInUp" id="caption-title2" data-wow-duration=".9s" ><span>Recruitment</span> has never been <span>easier</span></h1>
                                  <p class="animated wow fadeInUp" id="caption-para2" data-animation="fadeInRight" data-wow-delay=".9s" data-wow-duration=".9s">We understand
                                     that recruitment and selection processes can be quite a hurdle, let us help you simplify this with our top-notch expertise.
                                  </p>
                                  <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                                  <a href="{{route('about')}}" class="btn2 wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                                
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="carousel-item">
              <div class="img-container">
                  <img class="d-block w-100" src="img/home/slide/consulting and background check companies in lagos and in nigeria-407x127.png" alt="greensage business consult |jobs in nigeria | Hr in nigeria | outsourcing in lagos" >
              </div>
              <div class="carousel-caption ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="caption" >
                              <div class="caption-inner white-bg">
                                  <h1 class="wow animated fadeInUp" id="caption-title4" data-animation="fadeInUp"  data-wow-duration=".9s" ><span>Background Check</span></h1>
                                  <p class="animated wow fadeInUp" id="caption-para4" data-animation="fadeInUp" data-wow-delay=".9s" data-wow-duration=".9s">
                                    Let's help you know who you are hiring, thereby eliminating future problems for your company
                                  </p>
                                  <a href="{{route('contact')}}" class="btn1 wow animated fadeInUp"  data-wow-delay="1.8s" data-wow-duration=".9s">Contact Us</a>
                         
                                  <a href="{{route('about')}}" class="btn2 wow animated fadeInUp"  data-wow-delay="2s" data-wow-duration=".9s">Learn More</a>
                                
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div> <!--<carousel-inner-->
      <a class="carousel-control-prev " href="#myCarouselIndicators-mobile" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next " href="#myCarouselIndicators-mobile" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
      </a>
  </div>


</div>
<!-- /.mycourasel -->

  {{-- ////////////////end slider////////////////////////// --}}

{{-- //////////////search field /////////////// --}}
<section class="section-filter">
    <div class="inner">
         <form class="form-inline" action="{{route('filter-2')}}" method="GET">
            <input type="text" class="form-control col-sm-3"  name="title" value="{{request()->query('title')}}"  placeholder="Course Title">
                <select class="form-control col-md-4" name="category" id="sel1">
                    <option value="">Select Category</option>
                    @foreach($cats as $cat)
                    <option value={{$cat->id}}>{{$cat->name}}</option>
                    @endForeach
                </select>
          
         
            <select class="form-control col-md-3 " name="format" id="sel1">
              <option value="">Select Training Type</option>
              @foreach($formats as $format)
                  <option value={{$format->id}}>{{$format->name}}</option>
                @endForeach
            </select>
           
    
            <div class="col-md-2 btn">
                <input type="submit" class="btn btn-primary" value="Find Course" />
            </div>
            
          </form> 
    </div>
</section>
{{-- ////////////////end search field///////////////// --}}
{{-- /////////////////////// POPULAR COURSES /////////////////////////////////// --}}
<section id="popular-courses">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="h1-title">Most Popular Courses</h1>
                <div id="owl-demo" class="owl-popular-courses owl-carousel owl-theme">           
                    @foreach($popular_courses as $course)
                        <div class="item">
                        <div class="card">
                          
                            <img src="{{asset('uploads/thumbnails/'.$course->thumbnail)}}" class="img-fluid card-img-top" alt="{{$course->title}}">
                            <div class="card-body">
                              <h4 class="card-title">{{ucfirst($course->title)}}</h4>
                            
                              <p class="card-text"> {!! Str::limit($course->short_description, 100, '...') !!}</p>
                            </div>
                              <div class="card-footer">
                                <a href="{{route('single-course',[$course->category->slug,$course->slug])}}" class="btn view">view Course</a>
                                <span class="price">{{$course->formated_amount}}</span> 
                              </div>
                          </div>
                          
                        </div>
                    @endforeach
                  </div>
            </div>
      </div>
    </div>
</section>


{{-- /////////////////end popular courses ////////////////////////////////////////////////// --}}
{{-- //////////////////////categories///////////////////////// --}}
<section id="course-category">
    <div class="container">
        <div class="title">
         <h4>Our Key Competencies</h4>
         <p>We've got you covered from A to Z</p>
        </div>
            {{-- <div class="box-container">
                @foreach($cats as $cat)
                <div class="box">
                    <span class="number">{{$cat->courses->count()}}</span>
                    <i class="fa fa-code"></i>
                    <h3>{{$cat->name}}</h3>

                </div>
                @endforeach
            </div> --}}
            <div class="row">
                @foreach($cats as $cat)
                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                    <a href="{{route('single-category',$cat->slug)}}">
                      <div class="box" data-name="{{$cat->courses->count()}}">
                        <div class="box-inn">
                          <div class="img">
                            {{-- <img src="{{asset('img/icon/category/Administrative training.png')}}" alt=""> --}}
                            <img src="{{asset('uploads/category/icons/'.$cat->icon)}}" class="img-fluid" alt="{{$cat->name}}">
                                  </div>
                                    <h3>{{$cat->name}}</h3>
                                    <p>{{$cat->courses->count() === 1 ?  '1 Course' :$cat->courses->count().' Courses'}}</p> 
                                </div>
                       
                            </div>  
                     </a>
                </div>
                
                @endforeach
            </div>



   
        
        </div>
</section>
{{-- //////////////////end category////////////////////////////////////////////////////// --}}

{{-- //////////////////About us////////////////////////////////////////////////////// --}}
<section id="home-about-us">
    <div class="container">
        <div class="row "> 
                    <div class="col-md-6 abt-col">
                        <div class="abt">
                            <div class="abt-inner">
                            <h4>About GreenSage Business Consult</h4>
                            <div class="multiseparator"></div>
                            <p>GREENSAGE BUSINESS CONSULT LIMITED is an established company that provides corporate 
                                training solutions tailored to meet the needs of companies and individuals.
                                We provide top-notch training solutions allowing individuals
                                and organizations to achieve their full potential.</p>
                                <a href="{{route('about')}}" class="btn btn-read-more">Read More</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="img ">
                            {{-- <img src="img/home/cat-2.jpg" class="img-fluid" alt="best place to learn in lagos"> --}}
                            <video
                            id="my-video"
                            class="video-js -vjs-custom-theme vjs-theme-city"
                            controls
                            preload="auto"
                            poster="img/home/intro.png"
                            data-setup="{}"
                            muted
                            autoplay
                          >
                            <source src="img/home/intro.mp4" type="video/mp4" />
                           
                          </video>
                        </div>
                    </div>


           
        </div>
    </div>
</section>
{{-- ////////////////// end About us ////////////////////////////////////////////////////// --}}

{{-- ////////////////// our services ////////////////////////////////////////////////////// --}}
{{-- <section id="our-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="our-service">
                    <div class="our-service-inner">
                        <h4>Our Services</h4>
                        <p>We are dedicated to providing exceptional training 
                            and development services without 
                            compromising on standards, both on personal 
                            and professional levels.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 our-service-main">
                <div class="row">
                    <div class="col-md-6">
                        <div class="our-service-main-text">
                            <div class="img">
                                <img src="assets/" alt="">
                            </div>
                            <h5>INDIVIDUAL PROFESSIONAL TRAININGS</h5>
                            <p>The goal is to help individuals harness their potential through our professional training experience. Our individual training provides custom learning paths that meet your unique training needs.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our-service-main-text">
                            <div class="img">
                                <img src="assets/" alt="">
                            </div>
                            <h5>CUSTOMIZED PRIVATE TRAININGS</h5>
                            <p>In Greensage’s private and instructor-led course setting, content is delivered only to the company’s selected team and is customized to address the individual participants’ and the company’s specific needs.</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="our-service-main-text">
                            <div class="img">
                                <img src="assets/" alt="">
                            </div>
                            <h5>CONSULTANCY/HR SERVICES</h5>
                            <p>Our team of professionals are available to consult on issues ranging from marketing and sales to planning and project management. We are proficient at what we do.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our-service-main-text">
                            <div class="img">
                                <img src="assets/" alt="">
                            </div>
                            <h5>CORPORATE/STAFF TRAINING</h5>
                            <p>Our corporate training courses provide your employees with in-demand industry knowledge, hands-on practice, and confidence. We are committed to delivering the best possible learning experience by equipping your staff with unique methodologies that help them perform excellently and deliver maximally</p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section id="about-detail">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
         <div class="section-head text-black">
           <h3 class="text-gray-dark font-weight-300 m-b10">Our Expertise</h3>
           {{-- <p><a href="#" data-fa-icon="&#xf206;"> Unicode example</a></p> --}}
           <h2 class="title">We believe in developing partnerships and aspire to be
                the preferred partner for professional training and consultation services.</h2>
           <p>
             We pursue sustainable growth through expansion of both our existing learning facilities, 
             new mordern technologies, and acquisitions in markets with continued 
             growth in HR services and Training.</p>
         </div>

         <div class="section-content row">
           <div class="col-lg-6 col-md-6 service-box style3">
             <div class="icon-bx-wraper wraper1" data-name="&#xf058" >
               <div class="icon-lg">
                 <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-robot-arm"></i></a>
               </div>
               <div class="icon-content">
                 <h2 class="dlab-tilte">Individual Profesional Tranings</h2>
                 <p>The goal is to help individuals harness their potential through our professional 
                     training experience. Our individual training provides custom
                      learning paths that meet your unique training needs.</p>
               </div>
             </div>
           </div>
           <div class="col-lg-6 col-md-6 service-box style3">
             <div class="icon-bx-wraper wraper2" data-name="&#xf058">
               <div class="icon-lg">
                 <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-factory-1"></i></a>
               </div>
               <div class="icon-content">
                 <h2 class="dlab-tilte">Consultancy/HR Services</h2>
                 <p>Our team of professionals are available to consult on issues ranging
                      from marketing and sales to planning and project management.
                      We’ve been doing this for years and can say without sentiments,
                       we are the best.</p>
               </div>
             </div>
           </div>
           <div class="col-lg-6 col-md-6 service-box style3">
             <div class="icon-bx-wraper inc3 wraper3" data-name="&#xf058">
               <div class="icon-lg">
                 <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-fuel-station"></i></a>
               </div>
               <div class="icon-content">
                 <h2 class="dlab-tilte">Corporate/Staff Training</h2>
                 <p>Our corporate training courses provide your employees with in-demand industry 
                     knowledge, hands-on practice, and confidence. We are committed to delivering 
                     the best possible learning experience by equipping your staff with unique 
                     methodologies that help them perform excellently and deliver maximally
                    </p>
               </div>
             </div>
           </div>
           <div class="col-lg-6 col-md-6 service-box style3">
             <div class="icon-bx-wraper inc4 wraper4" data-name="&#xf058">
               <div class="icon-lg">
                 <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-fuel-truck"></i></a>
               </div>
               <div class="icon-content">
                 <h2 class="dlab-tilte ">Customized Private Training</h2>
                 <p>Our bespoke private Training are created and crafted to meet your training needs</p>
               </div>
             </div>
           </div>
           {{-- <div class="col-lg-6 col-md-6 service-box style3">
             <div class="icon-bx-wraper inc5" data-name="05">
               <div class="icon-lg">
                 <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-conveyor-1"></i></a>
               </div>
               <div class="icon-content">
                 <h2 class="dlab-tilte">We Can, We Care</h2>
                 <p class="mb-1">We foster an entrepreneurial spirit with a decentralised management structure, and a can-do mentality by empowering people to make the right decisions. </p>

                   <p>We care for our people by helping them develop the right skills and capabilities, and offer continuous training to achieve the best possible results.</p>
               </div>
             </div>
           </div> --}}
           {{-- <div class="col-lg-6 col-md-6 service-box style3">
             <div class="icon-bx-wraper inc6" data-name="06">
               <div class="icon-lg">
                 <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-engineer-1"></i></a>
               </div>
               <div class="icon-content">
                 <h2 class="dlab-tilte">Human Resources</h2>
                 <p>Our industry involves a broad range of qualifications, skills and expertise. We employ the best talents. Because our work environment, the markets, and the technology are constantly changing, we have to keep learning completely new things as well, and therefore support our employees through adequate training programs. </p>
               </div>
             </div>
           </div> --}}
         </div>
        </div>
        
        <div class="col-lg-4 col-md-12">
         <div class="sticky-top img">
          <img src="img/home/side.jpg" class="img-fluid" alt="img">
         </div>	
       </div>

      </div>
    </div>
  </section>
{{-- //////////////////end services////////////////////////////////////////////////////// --}}
{{-- ////////////////// why-choose-us////////////////////////////////////////////////////// --}}
<section id="about-counter">
    <div class="container">
      <div class="section-head text-white text-center">
        <h2 class="title-box m-tb0 max-w800 ">Why Greensageconsult? <span class="bg-primary"></span></h2>
        <p>
          We provide cost efficient and effective development solutions regardless of your budget size. We will work with you to ensure your (ROI) is justified through the use of innovative and creative development solutions. Our services are top-notch and thorough
        </p>
      </div>
    </div>

      <div class="container main">
        <div class="row text-white">
          <div class="col-lg-4 col-md-4  col-sm-6 m-b30">
            <div class="icon-bx-wraper bx-style-1 p-a30 center">
              <div class="icon-lg text-white m-b20"> <a href="javascript:void(0);" class="icon-cell "><i class="flaticon-rating"></i></a> </div>
              <div class="icon-content">
                <h5 class="dlab-tilte text-uppercase">Corporate Trainings</h5>
                <p>Up-to-date and Curated for an evolving work force </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4  col-sm-6 m-b30">
            <div class="icon-bx-wraper bx-style-1 p-a30 center">
              <div class="icon-lg text-white m-b20"> <a href="javascript:void(0);" class="icon-cell "><i class="flaticon-rating"></i></a> </div>
              <div class="icon-content">
                <h5 class="dlab-tilte text-uppercase">HR Services</h5>
                <p>Providing best practices and services for optimal organizational performance </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4  col-sm-6 m-b30">
            <div class="icon-bx-wraper bx-style-1 p-a30 center">
              <div class="icon-lg text-white m-b20"> <a href="javascript:void(0);" class="icon-cell "><i class="flaticon-rating"></i></a> </div>
              <div class="icon-content">
                <h5 class="dlab-tilte text-uppercase">CV Writing</h5>
                <p>Giving you that extra edge with our professional CV writing Services.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
            <div class="icon-bx-wraper bx-style-1 p-a30 center">
              <div class="icon-lg  m-b20"> <a href="javascript:void(0);" class="icon-cell "><i class="flaticon-shuttle"></i></a> </div>
              <div class="icon-content">
                <h5 class="dlab-tilte text-uppercase">Verification </h5>
                <p>High integrity assurance for personnel verification </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
            <div class="icon-bx-wraper bx-style-1 p-a30 center">
              <div class="icon-lg  m-b20"> <a href="javascript:void(0);" class="icon-cell "><i class="flaticon-promotion"></i></a> </div>
              <div class="icon-content">
                <h5 class="dlab-tilte text-uppercase">Outsourcing</h5>
                <p>Your trusted corporate extension with seamless procedural maintainability</p>
              </div>
            </div>
          </div>
        </div>
      </div>

  </section>
{{-- //////////////////end category////////////////////////////////////////////////////// --}}


{{-- ////////////////// our-clients////////////////////////////////////////////////////// --}}
<section id="our-clients">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Tested and approved by</h2>
            </div>
             <div class="col-12">
                 <div class="row">
                      <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c1">
                        <div class="img">
                            <img src="img/icon/our-clients/Access bank logo.svg" class="img-fluid " alt="greensageconsult-client">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c2">
                        <div class="img">
                            <img src="img/icon/our-clients/E-FINANCE logo.svg" class="img-fluid " alt="greensageconsult-client">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c3">
                        <div class="img">
                            <img src="img/icon/our-clients/FEDERAL MINISTRY OF JUSTICE LOGO.svg" class="img-fluid " alt="greensageconsult-client">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c4">
                        <div class="img">
                            <img src="img/icon/our-clients/adx.svg" class="img-fluid " alt="adx-client">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c5">
                        <div class="img">
                            <img src="img/icon/our-clients/UNION BANK LOGO.svg" class="img-fluid " alt="greensageconsult-client">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c6">
                        <div class="img">
                            <img src="img/icon/our-clients/IMPACT PEOPLE LOGO.svg" class="img-fluid " alt="greensageconsult-client">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c7">
                        <div class="img">
                            <img src="img/icon/our-clients/THE SME MALL.svg" class="img-fluid " alt="greensageconsult-client">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c8">
                        <div class="img">
                            <img src="img/icon/our-clients/JAREN & JOSEPH LOGO.svg" class="img-fluid " alt="greensageconsult-client">
                        </div>
                    </div> 
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c9">
                        <div class="img">
                            <img src="img/icon/our-clients/oxford group nigeria logo.svg" class="img-fluid " alt="greensageconsult-client">
                        </div>
                    </div> 
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c10">
                        <div class="img">
                            <img src="img/icon/our-clients/SUMERU LOGO.svg" class="img-fluid " alt="greensageconsult-client">
                        </div>
                    </div> 
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c11">
                        <div class="img">
                            <img src="img/icon/our-clients/SUN TRUST BANK LOGO.svg" class="img-fluid " alt="greensageconsult-client">
                        </div>
                    </div> 
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c12">
                      <div class="img">
                          <img src="img/icon/our-clients/capitalweb management limited.svg" class="img-fluid " alt="greensageconsult-client">
                      </div>
                  </div>   
                  <div class="col-md-3 col-lg-2 col-sm-4 col-6 c c13">
                    <div class="img">
                        <img src="img/icon/our-clients/healthstaion.svg" class="img-fluid " alt="greensageconsult-client">
                    </div>
                </div>
                 </div>
             </div>
            
        </div>
    </div>
</section>
{{-- //////////////////end our-clients////////////////////////////////////////////////////// --}}




{{-- ////////////////// what-our-clients-say////////////////////////////////////////////////////// --}}
<section id="what-our-clients-say">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <div class="inner">
                  <div class="inner-text">
                      <span>READ TESTIMONIALS</span>
                      <h4>It's always a joy to hear that the work we do has positively reviews</h4>
                  </div>
              </div>
            </div>
        </div>

        <div class="row">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                   <div class="swiper-slide">
                        <div class="testimony">
                            <div class="content">
                                <img src="img/home/icons/up-quote.svg" class="up-quote" alt="our client says">
                                <p class="card-text">Very insightful and informative</p>
                                <img src="img/home/icons/down-quote.svg" class="down-quote" alt="our client says">
                            </div>
                             <div class="detail">
                                <h3>Union bank Delegate</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimony">
                            <div class="content">
                                <img src="img/home/icons/up-quote.svg" class="up-quote" alt="our client says">
                                <p>An extremely
                                    informative course! The facilitator
                                     was highly professional and I really 
                                     enjoyed the training.</p>
                                <img src="img/home/icons/down-quote.svg" class="down-quote" alt="our client says">
                            </div>
                             <div class="detail">
                                <h3>eFinance Limited Delegate</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimony">
                            <div class="content">
                                <img src="img/home/icons/up-quote.svg" class="up-quote" alt="our client says">
                                <p>Outstanding training! It was well organized, I totally learnt a lot from the relevant case studies</p>
                                <img src="img/home/icons/down-quote.svg" class="down-quote" alt="our client says">
                            </div>
                             <div class="detail">
                                <h3>ADX Credit Limited Delegate</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimony">
                            <div class="content">
                                <img src="img/home/icons/up-quote.svg" class="up-quote" alt="our client says">
                               <p>I got ideas on pivoting. How I can engage my clients online regardless of my current challenges. Thank you</p>
                                <img src="img/home/icons/down-quote.svg" class="down-quote" alt="our client says">
                            </div>
                             <div class="detail">
                                <h3>Victoria Bajomo</h3>
                                <span>(CEO - Chariv Hands)</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimony">
                            <div class="content">
                                <img src="img/home/icons/up-quote.svg" class="up-quote" alt="our client says">
                               <p>An insightful webinar. More of this should be done often. It was interactive. The guest speaker was eloquent and well vast in the topic</p>
                                <img src="img/home/icons/down-quote.svg" class="down-quote" alt="our client says">
                            </div>
                             <div class="detail">
                                <h3>Mary Godfrey</h3>
                                <span>(Financial Analyst)</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimony">
                            <div class="content">
                                <img src="img/home/icons/up-quote.svg" class="up-quote" alt="our client says">
                                <p class="card-text">I learnt difference between telemarketing and telesales. Really insightful training, keep it up.</p> 
                                <img src="img/home/icons/down-quote.svg" class="down-quote" alt="our client says">
                            </div>
                             <div class="detail">
                                <h3>Samuel Jolumo</h3>
                                <span>(Travel agent - Wakanow.com)</span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="swiper-slide">
                        <div class="testimony">
                            <div class="content">
                                <img src="img/home/icons/up-quote.svg" class="up-quote" alt="our client says">
                                <p class="card-text">I got a clear understanding of the disparity between Telesales and Telemarketing. I got helpful tips that I would use even as a communication intern. I can’t think of anything I wasn’t okay with. Well done. Thank you.</p>      
                                <img src="img/home/icons/down-quote.svg" class="down-quote" alt="our client says">
                            </div>
                             <div class="detail">
                                <h3>Esther Effiong</h3>
                                <span>(Street Priests Inc.)</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimony">
                            <div class="content">
                                <img src="img/home/icons/up-quote.svg" class="up-quote" alt="our client says">
                                <p class="card-text">This training was quite educative and insightful. It’s full of relevant information for this time. All in all, it was a great webinar.</p>                              
                                <img src="img/home/icons/down-quote.svg" class="down-quote" alt="our client says">
                            </div>
                             <div class="detail">
                                <h3>Adebisi Obansa</h3>
                                <span>(Lawyer)</span>
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

        </div>

    </div>
</section>
{{-- //////////////////end what-our-clients-say////////////////////////////////////////////////////// --}}


<section id="our-partners">
  <div class="container">
          <div id="our-partners-wapper">
            <div id="our-partners-wapper-inner">
                <div id="our-partners-title">
                  <h4><span>OUR PARTNERS</span></h4>
                  <div class="border-line"></div>
                </div>
                <div id=""  class="row">
                  <div class="col-4">
                    <div class="img">
                          <img src="{{asset('img/home/our-partners/THE SME MALL.svg')}}" class="img-fluid" alt="THE SME MALL">
                            <p>The SME Mall</p>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="img">
                      <img src="{{asset('img/home/our-partners/youth dynamix.svg')}}" class="img-fluid" alt="youth dynamix">
                      <p>Vicvanny</p>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="img">
                      <img src="{{asset('img/home/our-partners/vicvanny.svg')}}" class="img-fluid" alt="vicvanny">
                      <p>Youth Dynamix</p>
                    </div>
                  </div>
                </div>
            </div>
            
      </div>
  </div>
</section>

{{-- ////////////////// call-to-actio////////////////////////////////////////////////////// --}}

<section id="register-now">
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="img">
              <img src="img/home/call-to-action.jpg" class="img-fluid" alt=" greensage outsourcing">
            </div>
          </div>
          <div class="col-md-8">
             <div class="register-now">
               <div class="register-now-inner">
                    <h5>Register for Any Our Courses</h5>
                    <p>Get the best online and in-house courses for your professionall career. We ahave proficient individuals to facilitate our trainings.</p>
                    <a href="{{route('course-registration-form')}}" >Register Now</a>
               </div>
              </div>
          </div>
        </div>
    </div>
</section>
{{-- 

{{-- ////////////////// category////////////////////////////////////////////////////// --}}
{{-- //////////////////end ////////////////////////////////////////////////////// --}}


{{-- ////////////////// category////////////////////////////////////////////////////// --}}
{{-- //////////////////end ////////////////////////////////////////////////////// --}}


  @endsection
@push('home-js')
<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
{{-- <script type="text/javascript">
    $('.counter-count').each(function () {
          $(this).prop('Counter',0).animate({
              Counter: $(this).text()
          }, {
              duration: 3000,
              easing: 'swing',
              step: function (now) {
                  $(this).text(Math.ceil(now));
              }
          });
      });
  
  </script> --}}
  {{-- //owl slider --}}
  <script>
      $(document).ready(function() {
     
     $(".owl-popular-courses").owlCarousel({
    
      //   //  autoPlay: 3000, //Set AutoPlay to 3 seconds
      //    items : 6,
      //   //  itemsDesktop : [1199,3],
      //   //  itemsDesktopSmall : [979,3]
      //    //Basic Speeds
         slideSpeed : 200,
        paginationSpeed : 800,
     
      //   //Autoplay
        autoPlay : 3000,//Set AutoPlay to 3 seconds//default is false
        goToFirst : true,
        goToFirstSpeed : 1000,
     
      //   // Navigation
        navigation : true,
        navigationText : ["prev","next"],
        pagination : false,
        paginationNumbers: false,
     
      //   // Responsive
      // //   responsive: true,
       items : 4,//or 5
      // //   itemsDesktop : [1199,4],
      // //   itemsDesktopSmall : [980,3],
      // //   itemsTablet: [768,2],
      // //   itemsMobile : [479,1],
      mouseDrag: true,
      responsiveClass: true,
      responsive:{
          0:{
              items:1,
              // nav:true
          },
          576:{
              items:2,
              // nav:false
          },
          768:{
              items:3,
              // nav:true,
              // loop:false
          },
          992:{
              items:4,
              // nav:true,
              // loop:false
          },
     }
      // responsive: {
      //     0:{
      //       items: 1
      //     },
      //     480:{
      //       items: 3
      //     },
      //     769:{
      //       items: 6
      //     }
      // }
  
    
     });
  });
  </script>

<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
   
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        // rotate: 50,
        // stretch: 0,
        // depth: 100,
        // modifier: 1,
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
      },
     loop: true,//optional// continues looping 
       // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    //   type: 'bullets',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    //auto play//<!-- hold this slide for 2 seconds -->
// <div class="swiper-slide" data-swiper-autoplay="2000">//in case u need a patitcular slide to stay longer
    autoplay: {
    delay: 5000,
  },
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
    //// Responsive breakpoints
        // breakpoints: {
        //     // when window width is >= 320px
        //     320: {
        //     slidesPerView: 2,
        //     spaceBetween: 20
        //     },
        //     // when window width is >= 480px
        //     480: {
        //     slidesPerView: 3,
        //     spaceBetween: 30
        //     },
        //     // when window width is >= 640px
        //     640: {
        //     slidesPerView: 4,
        //     spaceBetween: 40
        //     }
        // },
    });
  </script>
<script type="text/javascript" src="{{asset('js/jquery.cslider.js')}}"></script>
<script type="text/javascript">
  $(function() {
  
    $('#da-slider').cslider({
      autoplay	: true,
      bgincrement	: 450
    });
  
  });
</script>
@endpush
  {{-- @section('script')
  <script src="assets/js/owl.carousel.js"></script>
  <script>

    $(document).ready(function() {
   
   $("#owl-demo").owlCarousel({
  
      //  autoPlay: 3000, //Set AutoPlay to 3 seconds
      //  items : 4,
      //  itemsDesktop : [1199,3],
      //  itemsDesktopSmall : [979,3]
       //Basic Speeds
       slideSpeed : 200,
      paginationSpeed : 800,
   
      //Autoplay
      autoPlay : 3000,//Set AutoPlay to 3 seconds//default is false
      goToFirst : true,
      goToFirstSpeed : 1000,
   
      // Navigation
      navigation : true,
      navigationText : ["prev","next"],
      pagination : true,
      paginationNumbers: true,
   
      // Responsive
      responsive: true,
      items : 4,//or 5
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsMobile : [479,1]
  
   });
  
  });
  </script>
  @endsection --}}














