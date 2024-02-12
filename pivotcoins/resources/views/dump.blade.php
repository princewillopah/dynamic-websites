<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@YIELD('title') | Pivotcoins</title>
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
    @yield('css')
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
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
                        {{--<div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>--}}
                        {{--<div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>--}}
                        {{--<div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div>--}}
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

                    {{--<div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>--}}
                        {{--<div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">--}}
                                {{--<div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">--}}
                                    {{--<div class="status online"></div>--}}
                                {{--</div>--}}
                                {{--<div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">--}}
                                {{--<div class="profile"><img src="img/avatar-2.jpg" alt="..." class="img-fluid">--}}
                                    {{--<div class="status away"></div>--}}
                                {{--</div>--}}
                                {{--<div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">--}}
                                {{--<div class="profile"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">--}}
                                    {{--<div class="status busy"></div>--}}
                                {{--</div>--}}
                                {{--<div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">--}}
                                {{--<div class="profile"><img src="img/avatar-5.jpg" alt="..." class="img-fluid">--}}
                                    {{--<div class="status offline"></div>--}}
                                {{--</div>--}}
                                {{--<div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>--}}
                    {{--</div>--}}
                    {{--<!-- Tasks-->--}}
                    {{--<div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>--}}
                        {{--<div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">--}}
                                {{--<div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>--}}
                                {{--<div class="progress">--}}
                                    {{--<div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>--}}
                                {{--</div></a><a href="#" class="dropdown-item">--}}
                                {{--<div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>--}}
                                {{--<div class="progress">--}}
                                    {{--<div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>--}}
                                {{--</div></a><a href="#" class="dropdown-item">--}}
                                {{--<div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>--}}
                                {{--<div class="progress">--}}
                                    {{--<div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>--}}
                                {{--</div></a><a href="#" class="dropdown-item">--}}
                                {{--<div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>--}}
                                {{--<div class="progress">--}}
                                    {{--<div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>--}}
                                {{--</div></a><a href="#" class="dropdown-item">--}}
                                {{--<div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>--}}
                                {{--<div class="progress">--}}
                                    {{--<div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>--}}
                                {{--</div></a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Tasks end-->--}}

                    {{--<!-- Megamenu-->--}}
                    {{--<div class="list-inline-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Mega <i class="fa fa-ellipsis-v"></i></a>--}}
                        {{--<div class="dropdown-menu megamenu">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>--}}
                                    {{--<ul class="list-unstyled mb-3">--}}
                                        {{--<li><a href="#">Lorem ipsum dolor</a></li>--}}
                                        {{--<li><a href="#">Sed ut perspiciatis</a></li>--}}
                                        {{--<li><a href="#">Voluptatum deleniti</a></li>--}}
                                        {{--<li><a href="#">At vero eos</a></li>--}}
                                        {{--<li><a href="#">Consectetur adipiscing</a></li>--}}
                                        {{--<li><a href="#">Duis aute irure</a></li>--}}
                                        {{--<li><a href="#">Necessitatibus saepe</a></li>--}}
                                        {{--<li><a href="#">Maiores alias</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>--}}
                                    {{--<ul class="list-unstyled mb-3">--}}
                                        {{--<li><a href="#">Lorem ipsum dolor</a></li>--}}
                                        {{--<li><a href="#">Sed ut perspiciatis</a></li>--}}
                                        {{--<li><a href="#">Voluptatum deleniti</a></li>--}}
                                        {{--<li><a href="#">At vero eos</a></li>--}}
                                        {{--<li><a href="#">Consectetur adipiscing</a></li>--}}
                                        {{--<li><a href="#">Duis aute irure</a></li>--}}
                                        {{--<li><a href="#">Necessitatibus saepe</a></li>--}}
                                        {{--<li><a href="#">Maiores alias</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>--}}
                                    {{--<ul class="list-unstyled mb-3">--}}
                                        {{--<li><a href="#">Lorem ipsum dolor</a></li>--}}
                                        {{--<li><a href="#">Sed ut perspiciatis</a></li>--}}
                                        {{--<li><a href="#">Voluptatum deleniti</a></li>--}}
                                        {{--<li><a href="#">At vero eos</a></li>--}}
                                        {{--<li><a href="#">Consectetur adipiscing</a></li>--}}
                                        {{--<li><a href="#">Duis aute irure</a></li>--}}
                                        {{--<li><a href="#">Necessitatibus saepe</a></li>--}}
                                        {{--<li><a href="#">Maiores alias</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>--}}
                                    {{--<ul class="list-unstyled mb-3">--}}
                                        {{--<li><a href="#">Lorem ipsum dolor</a></li>--}}
                                        {{--<li><a href="#">Sed ut perspiciatis</a></li>--}}
                                        {{--<li><a href="#">Voluptatum deleniti</a></li>--}}
                                        {{--<li><a href="#">At vero eos</a></li>--}}
                                        {{--<li><a href="#">Consectetur adipiscing</a></li>--}}
                                        {{--<li><a href="#">Duis aute irure</a></li>--}}
                                        {{--<li><a href="#">Necessitatibus saepe</a></li>--}}
                                        {{--<li><a href="#">Maiores alias</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row megamenu-buttons text-center">--}}
                                {{--<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-1"><i class="fa fa-clock-o"></i><strong>Demo 1</strong></a></div>--}}
                                {{--<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-2"><i class="fa fa-clock-o"></i><strong>Demo 2</strong></a></div>--}}
                                {{--<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-3"><i class="fa fa-clock-o"></i><strong>Demo 3</strong></a></div>--}}
                                {{--<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-4"><i class="fa fa-clock-o"></i><strong>Demo 4</strong></a></div>--}}
                                {{--<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-danger"><i class="fa fa-clock-o"></i><strong>Demo 5</strong></a></div>--}}
                                {{--<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-info"><i class="fa fa-clock-o"></i><strong>Demo 6</strong></a></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Megamenu end     -->--}}

                    <!-- Languages dropdown    -->
                    <div class="list-inline-item dropdown">

                        <a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle">
                            {{--<img src="img/flags/16/GB.png" alt="English">--}}
                            <!-- <span class="d-none d-sm-inline-block">{{ Auth::user()->name }}</span> -->
                        </a>
                        <div aria-labelledby="languages" class="dropdown-menu">
                            <a rel="nofollow" href="{{ route('homepage')}}" class="dropdown-item">
                                {{--<img src="img/flags/16/FR.png" alt="English" class="mr-2">--}}
                                <span>Home </span>
                            </a>
                            <a rel="nofollow" href="{{ route('logout') }}" class="dropdown-item"
                                {{--<img src="img/flags/16/DE.png" alt="English" class="mr-2">--}}
                                {{--<span>German</span>--}}
                                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                {{--</a>--}}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>
                    <!-- Log out               -->
                    {{--<div class="list-inline-item logout">--}}
                        {{--<a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a>--}}
                    {{--</div>--}}

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
                    <!-- <h1 class="h5">{{ Auth::user()->name }}</h1> -->
                    <p>Admin </p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus-->
            <span class="heading">Menu</span>
            <ul class="list-unstyled">
                <li class="{{(request()->is('home'))?'active':''}}"><a href="{{route('home')}}"> <i class="icon-home"></i>DASHBOARD</a></li>
<!-- {{--                <li class="{{(request()->is('categories'))?'active':''}}"><a href="{{route('categories.index')}}"> <i class="icon-grid"></i>CATEGORIES </a></li>--}} -->
                <!-- <li class="{{(request()->is('categories'))?'active':''}}" ><a href="#categories" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>CATEGORIES </a>
                    <ul id="categories" class="collapse list-unstyled ">
                        <li {{(request()->is('categories'))?'active':''}}><a href="{{route('categories.index')}}">All Categories</a></li>
                        <li {{(request()->is('categories/create'))?'active':''}}><a href="{{route('categories.create')}}">Create New</a></li>

                    </ul>
                </li>
                <li class=""><a href="#sermons" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>SERMONS</a>
                    <ul id="sermons" class="collapse list-unstyled ">
                        <li><a href="#">All Sermons</a></li>
                        <li><a href="#">Children Sermons </a></li>
                        <li><a href="#">Youth Sermons </a></li>
                        <li><a href="#">Men Sermons </a></li>
                        <li><a href="#">Women Sermons </a></li>
                    </ul>
                </li>
                <li class="{{(request()->is('events'))?'active':''}}" ><a href="#events" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>EVENTS </a>
                    <ul id="events" class="collapse list-unstyled ">
                        <li {{(request()->is('events'))?'active':''}}><a href="{{route('events.index')}}">All Events</a></li>
                        <li {{(request()->is('events/create'))?'active':''}}><a href="{{route('events.create')}}">Create New</a></li>
                    </ul>
                </li> -->
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
    @yield('script')
</body>
</html>





======================================
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
============================================================
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | Pivotcoins</title>
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
    @yield('css')
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/ico" href="img/generics/logo/fav_16.ico"/>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
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
                                    <source srcset="img/generics/logo/PivotcoinsThickThinReversed-small.png"  media="(max-width:600px)">
                                    <img src="img/generics/logo/PivotcoinsThickThinReversed-large.png"  class="" alt="">
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
                    <!-- <p>Admin </p> -->
                </div>
            </div>
            <!-- Sidebar Navidation Menus-->
            <span class="heading">Menu</span>
            <ul class="list-unstyled">
                <li class="{{(request()->is('home'))?'active':''}}"><a href="{{route('home')}}"> <i class="icon-home"></i>DASHBOARD</a></li>
            </ul>
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
    @yield('script')
</body>
</html>


{{-- ====================================================================== --}}


@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')

<div class="sign-in">
    <div class="container">
        <div class="row " >
            <div class="col-md-6">
                <div class="sign-in-img" >
                    <div class="my-courasel">

                        <div id="myCarouselIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarouselIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarouselIndicators" data-slide-to="1"></li>
                                <li data-target="#myCarouselIndicators" data-slide-to="2"></li>
                                <li data-target="#myCarouselIndicators" data-slide-to="3"></li>
                                <li data-target="#myCarouselIndicators" data-slide-to="4"></li>

                            </ol>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="img-container">
                                        <img class="d-block w-100 " src="img/sign_in/1.jpg" alt="Storage / Handling / Shipping">
                                    </div>
                                    <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                        <div class="row">
                                            <div class="col-md-12">
                                             <div class="caption-inner">
                                                  <p class=" wow fadeInUp"  data-wow-delay=".6s" data-wow-duration="2s">Pivotcoins has been my only investment option ever since i discovered it.
                                                       All i have to do is to invest and sit lazily watching my yields rolling in.
                                                    </p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="courasel-overlay"> </div>
                                </div>

                               <div class="carousel-item ">
                                   <div class="img-container">
                                       <img class="d-block w-100 " src="img/sign_in/7.jpg" alt="Storage / Handling / Shipping">
                                   </div>
                                   <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                       <div class="row">
                                           <div class="col-md-12">
                                               <div class="caption-inner">
                                                   <p class=" wow fadeInUp"  data-wow-delay=".6s" data-wow-duration="2s">Truth be said, making fast money through cryptocurrencies is magical and pivotcoins just makes it easier for me. Thank you guys. Greate job.
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="courasel-overlay"> </div>
                               </div>
                               <div class="carousel-item ">
                                   <div class="img-container">
                                       <img class="d-block w-100 " src="img/sign_in/6.jpg" alt="Storage / Handling / Shipping">
                                   </div>
                                   <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                       <div class="row">
                                           <div class="col-md-12">
                                               <div class="caption-inner">
                                                  <p class=" wow fadeInUp"  data-wow-delay=".6s" data-wow-duration="2s">I just had my very first profit and that great. Love you guys
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="courasel-overlay"> </div>
                               </div>
                               <div class="carousel-item ">
                                   <div class="img-container">
                                       <img class="d-block w-100 " src="img/sign_in/4.jpg" alt="Storage / Handling / Shipping">
                                   </div>
                                   <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                       <div class="row">
                                           <div class="col-md-12">
                                                <div class="caption-inner">
                                                  <p class=" wow fadeInUp"  data-wow-delay=".6s" data-wow-duration="2s">Make a wise choice now. Invest now and start earning everyday
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="courasel-overlay"> </div>
                               </div>
                               <div class="carousel-item ">
                                   <div class="img-container">
                                       <img class="d-block w-100 " src="img/sign_in/5.jpg" alt="Storage / Handling / Shipping">
                                   </div>
                                   <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                       <div class="row">
                                           <div class="col-md-12">
                                                 <div class="caption-inner">
                                                   <p class=" wow fadeInUp"  data-wow-delay=".6s" data-wow-duration="2s">
                                                    I have been a customer of Pivotcoins for the last 
                                                    9 months & find them to be the best company to invest in bitcoin. 
                                                    Given their outstanding services, quick supports & returns, it will be a smart moves to invest here.
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="courasel-overlay"> </div>
                               </div>
                            </div>

                                
                        </div><!-- /.mycourasel -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-1">
                <div class="sign-in-main" >
                    <div class="contact-form" >
                        <h3 class="">MEMBER LOGIN</h3>
                        <p class="">
                            Sign in to start your investements
                        </p>
                        <form id="contacts_form" action="{{ route('login') }}" method="POST">
                        @csrf
                            <div class="form-wrapper-outer">
                                <div class="field-wrapper">
                                    <input type="email" name="email" id="" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="field-placeholder"><span>Email</span></div>
                                </div>

                                <div class="field-wrapper">
                                    <input type="password" name="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <!-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> -->
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="field-placeholder"><span>Password</span></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn rounded-0 form-submit w-25 bttn-fill bttn-md bttn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                            </div>
                            <p class="signupMsg">Don't have an account? <span><a href="{{route('register') }}">Sign Up Now</a></span></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
