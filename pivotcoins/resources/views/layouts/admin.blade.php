<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | Pivotcoins</title>
  <link rel="shortcut icon" type="image/ico" href="{{asset('admin3/dist/img/fav_16.ico')}}"/>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('admin3/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('admin3/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin3/dist/css/adminlte.css')}}">
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
   <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">

  <link href="{{ asset('admin3/dist/css/datepicker.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('admin3/dist/css/daterangepicker.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('admin3/dist/css/mdtimepicker.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('admin3/dist/css/style.css')}}">
  <!-- <script src="dist/clipboard.min.js"></script> -->
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
      <a href="{{route('home')}}" class="nav-link">Dashboard  </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">
          <div class="rate">Bitcoin Price: <span class="btc">1 BTC</span> = <span class="btc-usd"><span class="price">10606.13</span></span> USD</div>
        </a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          {{-- <i class="fa fa-user"></i> --}}
          @if(is_null(Auth::user()->photo))
          <img src="{{asset('uploads/person1.png')}}" class="img-circle elevation-2" width="30px" height="30px" alt="{{ Auth::user()->name }}">
         @else
          <img src="{{asset('uploads/'.Auth::user()->photo)}}" class="img-circle elevation-2" width="30px" height="30px" alt="{{ Auth::user()->name }}">
         @endif
          <span class="pl-2" > {{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          {{-- <span class="dropdown-item dropdown-header">15 Notifications</span> --}}
          {{-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div> --}}
          <a href="{{ route('homepage')}}" class="dropdown-item py-3">
            <i class="fa fa-home mr-2"></i> Home
            {{-- <span class="float-right text-muted text-sm">12 hours</span> --}}
          </a>
          <div class="dropdown-divider"></div>
           <a href="{{ route('home')}}" class="dropdown-item py-3">
            <i class="fa fa-user mr-2"></i> Customer Dashboard
            {{-- <span class="float-right text-muted text-sm">12 hours</span> --}}
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('profile')}}" class="dropdown-item py-3">
            <i class="fa fa-user mr-2"></i> Profile
            {{-- <span class="float-right text-muted text-sm">12 hours</span> --}}
          </a>
           <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item py-3"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">       
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
            <i class="fa fa-file mr-2"></i> {{ __('Logout') }} 
            {{-- <span class="float-right text-muted text-sm">2 days</span> --}}
          </a>
          {{-- <div class="dropdown-divider"></div> --}}
          {{-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> --}}
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
    <a href="{{route('homepage')}}" class="brand-link">
      <img src="{{asset('admin3/dist/img/admin-logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">
          {{-- Pivotcoins --}}
          <img src="{{asset('admin3/dist/img/PivotcoinsThickthinReversed-large.png')}}" alt="AdminLTE Logo" >
      
         
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(is_null(Auth::user()->photo))
          <img src="{{asset('uploads/person1.png')}}" class="img-circle elevation-2" width="30px" height="30px" alt="{{ Auth::user()->name }}">
         @else
          <img src="{{asset('uploads/'.Auth::user()->photo)}}" class="img-circle elevation-2" width="30px" height="30px" alt="{{ Auth::user()->name }}">
         @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }} (<span style="color:teal">Admin</span> )</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashboard')}}" class="nav-link  {{(request()->is('dashboard'))?'active':''}}">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{route('members.index')}}" class="nav-link   {{(request()->is('members'))?'active':''}}">
                <i class="nav-icon fa fa-th"></i>
                <p>
                  All Investors
                  <span class="right badge badge-danger">{{$users}}</span>
                </p>
              </a>
            </li>
          <li class="nav-item">
            <a href="{{route('alldeposits')}}" class="nav-link {{(request()->is('users/all-deposits'))?'active':''}}">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Deposit
                <span class="right badge badge-danger">{{$deposits}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('allwithdrawals')}}" class="nav-link {{(request()->is('users/all-withdrawals'))?'active':''}}">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Withdraw
                <span class="right badge badge-danger">{{$withdrawals}}</span>
              </p>
            </a>
          </li>
 
        
    {{-- ===========SETTINGS====================== --}}
               {{--  <li class="nav-header">SETTINGS</li>
                  <li class="nav-item">
                  <a href="" class="nav-link">
                      <i class="nav-icon fa fa-calendar"></i>
                      <p>
                        Profile
                        <span class="badge badge-info right">2</span>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                      <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon fa fa-calendar"></i>
                        <p>
                          Next of Kin
                          <span class="badge badge-info right">2</span>
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon fa fa-calendar"></i>
                        <p>
                          Help
                          <span class="badge badge-info right">2</span>
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon fa fa-calendar"></i>
                        <p>
                          Logout
                          <span class="badge badge-info right">2</span>
                        </p>
                      </a>
                    </li> --}}
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- ======Content Wrapper. Contains page content ====================-->
  @yield('content')
  
  <!-- /.========content-wrapper ==================================-->

  
  <footer class="main-footer text-center">
  <strong>Copyright &copy; 2019 <a href="{{route('home')}}"> Pivotcoins</a></strong>
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
{{-- <script src="{{asset('admin3/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script> --}}
<script src="{{asset('admin3/plugins/datatable/datatables.min.js')}}"></script>
<script src="{{asset('admin3/dist/js/datepicker.min.js')}}"></script>
<script src="{{asset('admin3/dist/js/datepicker.en.js')}}"></script>
<script src="{{asset('admin3/dist/js/mdtimepicker.js')}}"></script>
<!-- <script src="{{asset('admin3/plugins/clipboard.js-master/dist/clipboard.min.js')}}"></script> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> --}}

<!-- <script src="dist/clipboard.min.js"></script> -->
<script>
         $(document).ready( function () {
          $('#table_id').DataTable();
        } );
</script>
<script>
$(function(){
	getCurr();
	setInterval( getCurr,30000);
	function getCurr()
	{
		$.get( "https://api.cryptonator.com/api/ticker/btc-usd", function( response )
		{
			$('.btc-usd').find('.price').html(parseFloat(response.ticker.price).toFixed(2));
			//$('.btc-usd').find('.price').html(response.ticker.price);
			console.log(response.ticker.change.indexOf('-'));
			if((response.ticker.change.indexOf('-')+1))
			{
				$('.btc-usd').find('.change').addClass('minus');
			}

			$('.btc-usd').find('.change').html(response.ticker.change);
		}, "json" );
	}
});





</script>


@yield('script')
</body>
</html>
