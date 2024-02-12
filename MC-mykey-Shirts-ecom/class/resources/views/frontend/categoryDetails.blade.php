@extends('layout.front')
@section('title')
	CATEGORIES
@endsection

@section('main')
	{{$category->name}}
@endsection
@section('slider')
@endsection
@section('main-content')
	<div class="row">
		<div class="col-md-2">
			<div class="jumbotron jumbotron-fluid p-2 mt-0">

				{{--<ul class="nav flex-column">--}}
					{{--@foreach($categories as $cat)--}}
						{{--<li class="nav-item">--}}
							{{--<a class="nav-link" href="{{route('category.main',$cat->slug)}}">{{$cat->name}}</a>--}}
						{{--</li>--}}
					{{--@endforeach--}}
				{{--</ul>--}}
				<div class="list-group">
					@foreach($categories as $cat)

						<a href="{{route('category.main',['category'=>$cat->slug])}}" class="list-group-item list-group-item-action {{request()->category === $cat->slug? 'active' :''}}" style="">
							{{$cat->name}}
						</a>
					@endforeach
				</div>
			</div>
		</div>
		<div class="col-md-10">
			@if(count($category->products) > 0)
				@foreach ($category->products->chunk(4) as $chunk)
					<div class="row mb-2">
						@foreach ( $chunk as $prod)
							<div class="col-md-3">
								<div class="card">
									<a href="{{route('front.products.show',$prod->slug)}}"><img class="card-img-top" src="{{asset('uploads/images/'.$prod->image)}}" style="height: 150px" alt="Card image cap" ></a>
									<div class="card-body p-2" style="background-color: #eeeeee; text-align: center">
										<a style="color: #0a0a0a; text-decoration: none" href="{{route('front.products.show',$prod->slug)}}">
											<h5 class="card-title mb-0">{{$prod->name}}</h5>
											<p class="card-text mb-0">₦{{$prod->price}}</p>
										</a>
										<form action="{{route('cart.store')}}" method="post">
											@csrf
											<input type="hidden" name="id" value="{{$prod->id}}">
											<input type="hidden" name="name" value="{{$prod->name}}">
											<input type="hidden" name="price" value="{{$prod->price}}">
											<button type="submit" class="btn btn-primary" style="display: inline;">Add To Cart</button>
										</form>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				@endforeach
			@else
				<h1 style="text-align: center;margin: 100px auto">No Products for {{$category->name}}</h1>
			@endif
		</div>

	</div>
@endsection

@section('page-style')
	<link rel="stylesheet" href="{{asset('css/pageStyle.css')}}">
@stop