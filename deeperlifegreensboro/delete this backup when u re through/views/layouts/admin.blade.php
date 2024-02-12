<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | Deeperlife Greensboro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('admin/css/style.default.css')}}" id="theme-stylesheet">


    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('admin/css/jquery-ui-timepicker-addon.css')}}"> --}}
    <link href="{{ asset('admin/css/datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/daterangepicker.css') }}" rel="stylesheet">
   
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('img/generics/logo/fav_16.ico') }}"/>
    @yield('css')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <link href="{{ asset('admin/css/mdtimepicker.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="search-panel">
                <div class="search-inner d-flex align-items-center justify-content-center">
                    <div class="close-btn">Close <i class="fa fa-close"></i></div>
                    <form id="searchForm" action="#">
                        <div class="form-group">
                            <input type="search" name="search" placeholder="What are you searching for...">
                            <button type="submit" class="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <!-- Navbar Header-->
                    <a href="index.html" class="navbar-brand">
                    <picture>
                            <img src="{{asset('admin/img/used/logo-dark-admin.png')}}" class="" alt="">
                        </picture>
                    </a>
                    <!-- Sidebar Toggle Btn-->
                    <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
                </div>

                <div class="right-menu list-inline no-margin-bottom">
                    <div class="list-inline-item">
                        <a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a>
                    </div>
                    <!-- Languages dropdown    -->
                    <div class="list-inline-item dropdown">
                        <a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle">
                            <span class="d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
                        </a>
                        <div aria-labelledby="languages" class="dropdown-menu">
                            <a rel="nofollow" href="{{ route('homepage')}}" class="dropdown-item">
                                <span>Home </span>
                            </a>
                            <a rel="nofollow" href="{{ route('logout') }}" class="dropdown-item"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>
                    <!-- Log out               -->
                   <!-- <div class="list-inline-item logout">
                       <a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a>
                    </div> -->

                </div>
            </div>
        </nav>
    </header><!-- end header-->

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <nav id="sidebar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="{{asset('admin/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h5">{{ Auth::user()->name }}</h1>
                    <p>Admin </p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus-->
            <span class="heading">Menu</span>
            <ul class="list-unstyled">
                <li class="{{(request()->is('home'))?'active':''}}"><a href="{{route('home')}}"> <i class="icon-home"></i>DASHBOARD</a></li>

                <li class="{{(request()->is('pastors'))?'active':''}}" ><a href="#pastor" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>PASTORS </a>
                    <ul id="pastor" class="collapse list-unstyled ">
                        <li {{(request()->is('pastors'))?'active':''}}><a href="{{route('pastors.index')}}">All Pastors</a></li>
                        <li {{(request()->is('pastors/create'))?'active':''}}><a href="{{route('pastors.create')}}">Create New</a></li>
                    </ul>
                </li>
{{--                <li class="{{(request()->is('categories'))?'active':''}}"><a href="{{route('categories.index')}}"> <i class="icon-grid"></i>CATEGORIES </a></li>--}}
                <li class="{{(request()->is('categories'))?'active':''}}" ><a href="#categories" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>CATEGORIES </a>
                    <ul id="categories" class="collapse list-unstyled ">
                        <li {{(request()->is('categories'))?'active':''}}><a href="{{route('categories.index')}}">All Categories</a></li>
                        <li {{(request()->is('categories/create'))?'active':''}}><a href="{{route('categories.create')}}">Create New</a></li>
                    </ul>
                </li>
                <li class=""><a href="#sermons" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>SERMONS</a>
                    <ul id="sermons" class="collapse list-unstyled ">
                        <li {{(request()->is('sermons'))?'active':''}}><a href="{{route('sermons.index')}}">All Sermons</a></li>
                        <li {{(request()->is('sermons/create'))?'active':''}}><a href="{{route('sermons.create')}}">Create New </a></li>
                        {{--<li><a href="#">Youth Sermons </a></li>--}}
                        {{--<li><a href="#">Men Sermons </a></li>--}}
                        {{--<li><a href="#">Women Sermons </a></li>--}}
                    </ul>
                </li>
                  <li class="{{(request()->is('events'))?'active':''}}" ><a href="#events"" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>EVENTS </a>
                  <ul id="events" class="collapse list-unstyled ">
                     <li {{(request()->is('events'))?'active':''}}><a href="{{route('events.index')}}">All Events</a></li>
                     <li {{(request()->is('events/create'))?'active':''}}><a href="{{route('events.create')}}">Create New</a></li>
                  </ul>
               </li>
            </ul>
            {{--<span class="heading">Extras</span>--}}
            {{--<ul class="list-unstyled">--}}
                {{--<li> <a href="#"> <i class="icon-settings"></i>JHJ </a></li>--}}
                {{--<li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>--}}
                {{--<li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>--}}
            {{--</ul>--}}
        </nav>
        <!-- Sidebar Navigation end-->

{{--=========================================================================================================================--}}

            @yield('content')

{{--=========================================================================================================================--}}

            <footer class="footer mt-4">
                <div class="footer__block block no-margin-bottom">
                    <div class="container-fluid text-center">
                      <p class="no-margin-bottom">2019 &copy; Pivotcoins</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>



<script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin/js/charts-home.js')}}"></script>
<script src="{{asset('admin/js/front.js')}}"></script>

<script src="{{asset('admin/js/datepicker.min.js')}}"></script>
<script src="{{asset('admin/js/datepicker.en.js')}}"></script>
    <script src="{{asset('admin/js/mdtimepicker.js')}}"></script>
    @yield('script')
</body>
</html>