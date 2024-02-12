<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title> Greensage Business Consult | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">

  @yield('style')
    <!-- Custom CSS -->
    {{-- <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet"> --}}
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
   
 <style>
     .divider{

     }
 </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{route('home-page')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            {{-- <img src="../../assets/images/dashboard-img/logo.svg" alt="homepage" class="light-logo" /> --}}
                            {{-- <img src="{{asset('assets/images/dashboard-img/logo.svg')}}" alt="homepage" class="light-logo" /> --}}
                            {{-- <img src="../../assets/images/logo-icon.png" alt="homepage" class="light-logo" /> --}}
                            <img style="width:200px" src="{{asset('assets/images/logo1.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            {{-- <img src="{{asset('assets/images/dashboard-img/logo.svg')}}" alt="homepage" class="light-logo" /> --}}
                            {{-- <img src="../../assets/images/logo.png" alt="homepage" class="light-logo" /> --}}
                            {{-- <img src="../../assets/img/icon/logo-light.png" alt="homepage" class="light-logo" /> --}}
                            {{-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> --}}
                            {{-- <img src="../../assets/images/dashboard-img/logo.svg" alt="homepage" class="light-logo" /> --}}

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li> --}}
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i
                                                            class="ti-calendar"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i
                                                            class="ti-settings"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i
                                                            class="ti-user"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i
                                                            class="fa fa-link"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{-- {{ Auth::user()->name ? Auth::user()->name:'' }} --}}
                                {{Auth::check()?Auth::user()->name: ''}}
                                <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    My Profile</a>
                                {{-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                                    Inbox</a> --}}
                                {{-- <div class="dropdown-divider"></div> --}}
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings me-1 ms-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off me-1 ms-1"></i> 
                                        Logout
                                     </a>
 
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                {{-- <div class="dropdown-divider"></div> --}}
                                {{-- <div class="ps-4 p-10"><a href="javascript:void(0)"class="btn btn-sm btn-success btn-rounded text-white">View Profile</a></div> --}}
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->



        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="charts.html" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                                    class="hide-menu">Charts</span></a></li> --}}


                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">COURSES SECTION</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <div class="divider"></div>
                                <li class="sidebar-item"><a href="{{route('all-courses')}}" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu">All Courses
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('add-course')}}" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Add Course
                                        </span>
                                    </a>
                                 </li>
                                 <div class="divider"></div>
                                 <li class="sidebar-item"><a href="{{route('all-categories')}}" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu">All Categories
                                </span></a></li>
                                <li class="sidebar-item"><a href="{{route('add-category')}}" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Add Category
                                        </span></a>
                                </li>
                                <div class="divider"></div>
                                <li class="sidebar-item"><a href="{{route('all-formats')}}" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu">All Format
                                </span></a></li>
                                <li class="sidebar-item"><a href="{{route('add-format')}}" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Add Format
                                        </span></a>
                                </li>
                                <div class="divider"></div>
                            </ul>
                        </li>




                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                class="hide-menu">HR SECTION</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <div class="divider"></div>
                                <li class="sidebar-item"><a href="{{route('all-jobs')}}" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu">All Jobs
                                        </span>
                                    </a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('add-job')}}" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu">Add Job
                                        </span>
                                    </a>
                                </li>
                                <div class="divider"></div>
                                <li class="sidebar-item"><a href="{{route('all-locations')}}" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> All Location
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('add-location')}}" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Add Location
                                       </span>
                                   </a>
                                </li>
                                <div class="divider"></div>
                                <li class="sidebar-item"><a href="{{route('all-sectors')}}" class="sidebar-link"><i
                                        class="mdi mdi-alert-octagon"></i><span class="hide-menu">All Sectors
                                    </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('add-sector')}}" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Add Sector
                                </span></a>
                                </li>
                                <div class="divider"></div>
                            </ul>
                        </li>

                        {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span
                                    class="hide-menu">Errors </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403
                                        </span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404
                                        </span></a></li>
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405
                                        </span></a></li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500
                              </span></a></li>
                            </ul>
                        </li> --}}


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
          

            <!-- ============================================================== -->
            <!-- main content -->
            <!-- ============================================================== -->

            <main class=" py-2">
                @yield('content')
            </main>

            <!-- ============================================================== -->
            <!-- End main content -->
            <!-- ============================================================== -->

                
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                 &copy; 2019 - <?php echo date("Y");?> | Greensage Business Consult
                 
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->


        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    {{-- <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script> --}}
<script>
   window.setTimeout(function() {
    $(".alert").fadeTo(2500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
{{-- <script src="{{ asset('ckeditor-full/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'full-description' );

</script> --}}


  @yield('script')
</body>

</html>