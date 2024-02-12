<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Greensage Business Consult | @yield('title') </title>
    <link href="{{ asset('img/icon/favicon.ico') }}" rel="icon">
  
   
    <!-- Fonts| -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">  
      <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
{{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bsnav.css') }}" rel="stylesheet" type="text/css" >
    {{-- <link href="{{ asset('css/bsnav.css') }}" rel="stylesheet" type="text/css" > --}}
      <!-- Basic stylesheet -->
  

    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
   @yield('style')
   @stack('cv-style')
   @stack('job-about-us-css')
   @stack('home-css')
   @stack('course-reg-css')
   @stack('apply-now-css')
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
   <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 
   @livewireStyles
   
  

  </head>
<body>

        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 1</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link 2</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link 1</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link 2</a>
                          </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Dropdown link
                            </a>
                            <div class="dropdown-menu">
                         
                            @foreach($cats as $cat)
                           <a class="dropdown-item" href="{{route('single-category',$cat->slug)}}">{{$cat->name}}</a>
                            @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> --}}



<div class="navbar navbar-expand-lg bsnav">
  <div class="container-fluid">
    <div class="nav-wrap">
      <a class="navbar-brand" href="{{route('home-page')}}">
        <img src="{{ asset('img/icon/logo.svg') }}" alt="Logo">
      </a>
      <div class="mobile-search mobile-search-display">
        <div class="search-icon-wrap">
              <i class="search-icon fa fa-search"></i>
              </div>
              <div class="search-screen">
                <form action="php.php" method="get">
                  <i class="close-icon fa fa-times"></i>
                  <input type="text" class="search-box" placeholder="Type and Hit Enter">
                  <input type="submit" class="search-btn" value="Submit">
                </form>
              </div>
      </div>
      
      {{-- <button class="navbar-toggler toggler-spring"  onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" id="menu"  type="button"    aria-expanded="false" aria-label="Toggle navigation">
        <svg  viewBox="0 0 100 100">
          <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
          <path class="line line2" d="M 20,50 H 80" />
          <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
      </button>  --}}
      <button class="navbar-toggler toggler-spring" type="button" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" id="menu"  type="button"    aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-end">
        

        <ul class="navbar-nav navbar-mobile mr-0">
          <li class="nav-item nav-item-line {{(request()->is('/'))?'active':''}}">
            <a class="nav-link head-color {{(request()->is('/'))?'active':''}}" href="{{route('home-page')}}" id="graphics">Home</a>
          </li>
          {{-- <li class="nav-item nav-item-line {{(request()->is('about-us'))?'active':''}}">
            <a class="nav-link head-color {{(request()->is('about-us'))?'active':''}}" href="{{route('about')}}" id="render">About Us</a>
          </li> --}}
           <li class="nav-item nav-item-line dropdown {{(request()->is('about-us'))?'active':''}}"><a class="nav-link head-color" href="#">About Us<i class="caret"></i></a>
              <ul class="navbar-nav mega">
                <li class="nav-item {{(request()->is('about-us'))?'active':''}}" ><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('calendar-page')}}">Download Our Calendar</a></li>
              </ul>
            </li>
            <li class="nav-item nav-item-line dropdown"><a class="nav-link head-color" href="">Trainings<i class="caret"></i></a>
              <ul class="navbar-nav mega">
                <li class="nav-item"><a class="nav-link" href="{{route('all-Course-categories')}}">Categories</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('all--courses')}}">All Courses</a></li>
                @foreach($formats as $format)
                <li class="nav-item"><a class="nav-link" href="{{route('training-route',$format->slug)}}">{{$format->name}}</a></li>
                @endforeach
       
              </ul>
            </li>
            <li class="nav-item nav-item-line dropdown"><a class="nav-link head-color" href="#">HR Services<i class="caret"></i></a>
              <ul class="navbar-nav mega">
                <li class="nav-item"><a class="nav-link" href="{{route('hr-about-us')}}">About Our Hr</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('cv')}}">CV Writing</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('top-jobs')}}">Job Search</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('apply-now-form-page')}}">Sign Up</a></li>
              </ul>
            </li>
            
        
            <li class="nav-item nav-item-line .bsnav dropdown megamenu "><a class="nav-link head-color" href="javascript:void(0)">Courses<i class="caret"></i></a>
              <div class="navbar-nav mega">
                <div class="container">
                  <div class="row mb-3">
                    <div class="col-sm-4 left-side">
                       <img src="{{asset("img/home/about-intro/1.jpg")}}" class="img-fluid" alt="Greensage Business Consult - the best place to study what the industry need">
                    </div>
                    <div class="col-lg-8">
                      <h4>Main Categories</h4>
                      @foreach ($cats->chunk(3) as $chunk)
                        <div class="row">
                            @foreach ($chunk as $cat)
                                <div class="col-lg-4">
                                  <i class="fa fa-angle-right"></i>
                                  <a href="{{route('single-category',$cat->slug)}}"> {{ $cat->name }}</a>
                                 
                                </div>
                            @endforeach
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </li>
            {{-- <li class="nav-item nav-item-line dropdown  mobile bsnav-mobile"><a class="nav-link head-color" href="#">Courses<i class="caret"></i></a>
              <ul class="navbar-nav mega">
                <li class="nav-item head-list"><strong>Main Categories</strong></li>
                  @foreach($cats as $cat)
                  <li class="nav-item"><a class="nav-link" href="{{route('single-category',$cat->slug)}}">{{$cat->name}}</a></li>
                  @endforeach
              </ul>
            </li> --}}

          <li class="nav-item nav-item-line{{(request()->is('contact-us'))?'active':''}}">
            <a class="nav-link  head-color{{(request()->is('contact-us'))?'active':''}}" href="{{route('contact')}}" id="exclusive">Contact</a>
          </li>
          <li class="nav-item desktop">
            <div class="search-icon-wrap">
                  <i class="search-icon fa fa-search"></i>
            </div>
            <div class="search-screen">
              <form action="{{route('search-result')}}" method="get">
                <i class="close-icon fa fa-times"></i>
                <input type="text" class="search-box" placeholder="Type and Hit Enter" name="search" value="{{request()->query('search')}}">
                <input type="submit" class="search-btn" value="Submit">
              </form>
            </div>
          </li>
        </ul> 
        {{-- value="{{request()->query('title')}}" --}}
      </div>
    </div>
    <div class="bsnav-mobile">
      <div class="bsnav-mobile-overlay"></div>
      <div class="navbar">
    {{-- this is where the mobile menu items(i.e those menu items from the desktop) reside// --}}
    </div>
    </div>
  </div>

</div>


