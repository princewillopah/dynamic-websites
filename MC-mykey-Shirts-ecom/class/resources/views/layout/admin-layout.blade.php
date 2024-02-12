<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Mykey Shirts - @yield('title')</title>

	<!-- Bootstrap core CSS-->
	<link href="{{asset('custom/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="{{asset('custom/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="{{asset('custom/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="{{asset('custom/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">

@include('includeFiles.navbar')





{{-----------------<!-- /#wrapper -->-----------------------------------------------------------------------}}
<div id="wrapper">
<!-- Sidebar---------------------------- -->
	@include('includeFiles.sidebar')
<!-- Sidebar---------------------------- -->

	<div id="content-wrapper">

		<div class="container-fluid">

			<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="{{route('dashboard')}}">Dashboard</a>
				</li>
				@yield('page')
			</ol>
			<!-- content-------------------->
			<div>
				@yield('content')
			</div>


		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<footer class="sticky-footer">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright © Your Website 2018</span>
				</div>
			</div>
		</footer>

	</div>
	<!-- /.content-wrapper -->

</div>
{{-----------------<!-- /#wrapper -->-----------------------------------------------------------------------}}

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave, {{ Auth::user()->name }}?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body ">Select  "<span style="color: orangered;font-weight: bold">Logout</span>" below if you are ready to end your current session.</div>
			<div class="modal-body ">Select "<span style="color: orangered;font-weight: bold">Cancel</span>" to terminate the current command.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				{{--<a class="btn btn-primary" href="login.html">Logout</a>--}}
				<a class="btn btn-primary" href="{{ route('logout') }}"
				   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('custom/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('custom/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('custom/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{asset('custom/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('custom/vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('custom/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('custom/js/sb-admin.min.js')}}"></script>

<!-- Demo scripts for this page-->
<script src="{{asset('custom/js/demo/datatables-demo.js')}}"></script>
<script src="{{asset('custom/js/demo/chart-area-demo.js')}}"></script>

</body>

</html>
