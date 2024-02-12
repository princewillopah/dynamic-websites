<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | Deeperlife Greensboro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
 
  <link rel="stylesheet" href="{{asset('admin3/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('admin3/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin3/dist/css/adminlte.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin3/plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('admin3/plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('admin3/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
  {{-- <link rel="stylesheet" href="{{asset('admin3/plugins/datepicker/datepicker3.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin3/plugins/daterangepicker/daterangepicker-bs3.css')}}"> --}}
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('admin3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
   <!-- DataTables -->
 <link rel="stylesheet" href="{{asset('admin3/plugins/datatables/dataTables.bootstrap4.min.css')}}">
 <link rel="stylesheet" href="{{asset('admin3/plugins/datatable/datatables.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="{{ asset('admin3/dist/css/datepicker.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('admin3/dist/css/daterangepicker.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('admin3/dist/css/mdtimepicker.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('admin3/dist/css/style.css')}}">
  @yield('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('home')}}" class="nav-link">Dashboard</a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
      </li> --}}
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          {{-- <i class="fa fa-user"></i> --}}
          <img src="{{asset('admin3/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" width="30px" height="30px" alt="User Image">
          <span class="">{{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          {{-- <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div> --}}
          <a href="{{route('homepage')}}" class="dropdown-item">
            <i class="fa fa-home mr-2"></i> Home
          </a>
          <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-arrow-down mr-2"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin3/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Deeperlife Greensboro</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin3/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('home')}}" class="nav-link  {{(request()->is('home'))?'active':''}}">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{(request()->is('pastors'))||(request()->is('pastors/create'))?'active':''}}">
              <i class="nav-icon fa fa-table"></i>
              <p>
                PASTORS 
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            {{-- <ul id="pastor" class="collapse list-unstyled ">
                <li {{(request()->is('pastors'))?'active':''}}><a href="{{route('pastors.index')}}">All Pastors</a></li>
                <li {{(request()->is('pastors/create'))?'active':''}}><a href="{{route('pastors.create')}}">Create New</a></li>
            </ul> --}}
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('pastors.index')}}" class="nav-link {{(request()->is('pastors'))?'active':''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All Pastors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('pastors.create')}}" class="nav-link {{(request()->is('pastors/create'))?'active':''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link {{(request()->is('categories'))||(request()->is('categories/create'))?'active':''}}">
                <i class="nav-icon fa fa-table"></i>
                <p>
                  CATEGORY
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('categories.index')}}" class="nav-link {{(request()->is('categories'))?'active':''}}">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>All Categories</p>
                    </a>
                  </li>
                <li class="nav-item">
                  <a href="{{route('categories.create')}}" class="nav-link {{(request()->is('categories/create'))?'active':''}}">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create New</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link {{(request()->is('events'))||(request()->is('events/create'))?'active':''}}">
                <i class="nav-icon fa fa-table"></i>
                <p>
                  EVENTS 
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('events.index')}}" class="nav-link {{(request()->is('events'))?'active':''}}">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>All Events</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('events.create')}}" class="nav-link {{(request()->is('events/create'))?'active':''}}">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create New</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link {{(request()->is('sermons'))||(request()->is('sermons/create'))?'active':''}}">
                  <i class="nav-icon fa fa-table"></i>
                  <p>
                    SERMONS 
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('sermons.index')}}" class="nav-link {{(request()->is('sermons'))?'active':''}}">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>All Sermons</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('sermons.create')}}" class="nav-link {{(request()->is('sermons/create'))?'active':''}}">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Create New</p>
                    </a>
                  </li>
                </ul>
              </li>
  


         
            <li class="nav-header">SETTINGS</li>
           {{--  <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  Calendar
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li> --}}
           {{--  <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-envelope-o"></i>
                <p>
                  HOME
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/mailbox/mailbox.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Inbox</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/mailbox/compose.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Compose</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/mailbox/read-mail.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Read</p>
                  </a>
                </li>
              </ul>
            </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  
  <footer class="main-footer text-center">
  <strong>Copyright &copy; 2019 <a href="{{route('home')}}">Deeperlife Church Greensboro, NC</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin3/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin3/https://code.jquery.com/ui/1.12.1/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin3/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('admin3/https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
<script src="{{asset('admin3/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin3/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('admin3/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin3/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin3/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin3/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')}}"></script>
{{-- <script src="{{asset('admin3/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('admin3/plugins/datepicker/bootstrap-datepicker.js')}}"></script> --}}
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('admin3/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin3/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin3/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin3/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin3/dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('admin3/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin3/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin3/plugins/datatable/datatables.min.js')}}"></script>
<script src="{{asset('admin3/dist/js/datepicker.min.js')}}"></script>
<script src="{{asset('admin3/dist/js/datepicker.en.js')}}"></script>
<script src="{{asset('admin3/dist/js/mdtimepicker.js')}}"></script>

<script>
         $(document).ready( function () {
          $('#table_id').DataTable();
        } );
</script>

@yield('script')
</body>
</html>
