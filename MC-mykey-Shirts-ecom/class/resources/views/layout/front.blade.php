<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Princewill" content="">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
     @yield('page-style')
	<title>@yield('title') </title>
</head>
<body>
<nav class="navbar navbar-expand-lg bgcolor">
	<div class="container">
		<a class="navbar-brand" href="{{route('homepage')}}">MC-Mykey Wears</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Shirts <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="{{route('cart.index')}}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Cart
						@if(Cart::instance('default')->count() > 0)
					     	<span class="badge badge-danger">{{Cart::instance('default')->count()}}</span>
						@else
							<span class="badge badge-danger">0</span>
						@endif

					</a>
				</li>
				<li class="nav-item">
					@if (Route::has('login'))
						<div class="top-right links">
							@auth
								<a class="nav-link" href="{{ url('/home') }}">Home</a>
							@else
								<div class="d-flex">
									<a class="nav-link" style="color: orangered" href="{{ route('login') }}">Login</a>
									<a class="nav-link" style="color: orangered" href="{{ route('register') }}">Register</a>
								</div>
							@endauth
						</div>
					@endif
				</li>
			</ul>


		</div>
	</div><!-- /.container -->
</nav>

@section('slider')
<div class="container-fluid pt-4 px-0">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{asset('img/banner01.jpg')}}" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
					<h4 style="color: black">Welcome to mc-mykey shirts store</h4>
					<a href="" class="btn btn-success rounded-0 w-25  btn-lg">Check out our shirts</a>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{asset('img/banner08.jpg')}}" alt="Second slide">
				<div class="carousel-caption d-none d-md-block">
					<h4 style="color: black">Welcome to mc-mykey shirts store</h4>
					<a href="" class="btn btn-success rounded-0 w-25 btn-lg">Check out our shirts</a>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{asset('img/banner09.jpg')}}" alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h4 style="color: black">Welcome to mc-mykey shirts store</h4>
					<a href="" class="btn btn-success rounded-0 w-25  btn-lg">Check out our shirts</a>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{asset('img/banner10.jpg')}}" alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h4 style="color: black">Welcome to mc-mykey shirts store</h4>
					<a href="" class="btn btn-success rounded-0 w-25  btn-lg">Check out our shirts</a>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{asset('img/banner11.jpg')}}" alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h4 style="color: black">Welcome to mc-mykey shirts store</h4>
					<a href="" class="btn btn-success rounded-0 w-25  btn-lg">Check out our shirts</a>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div><!-- /.container container-fluid -->
@show
<section >
	<div class="container">
		<div class="row">
			<div class="col-md-12 p-2" style="background-color: #eeeeee">
				<h1 class="text-center"> @yield('main') </h1>
			</div>
			<!-- /.col-md-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>

<section>
	<div class="container-fluid my-3 ">
		@yield('main-content')
	</div>
</section>
<section>
	<div class="container-fluid" >
		<div class="row" >
			@yield('optional')
		</div>
	</div>
</section>

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="copywrite">
					<h4>Copyright 2018| princewill</h4>
				</div>
				<!-- /.copywrite -->
			</div>
		</div>
	</div>
</div><!-- /.footer -->

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('extra-js')

<script>
</script>

</body>
</html>




