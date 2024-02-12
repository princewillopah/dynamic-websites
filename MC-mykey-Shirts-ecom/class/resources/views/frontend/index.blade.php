@extends('layout.front')
@section('title')
Welcome
@endsection

@section('main')
	Our Collections
@endsection

@section('main-content')
	<div class="row">
		<div class="col-md-2">
			<div class="jumbotron jumbotron-fluid p-2 mt-0">

				{{--<ul class="nav flex-column">--}}
					{{--@foreach($categories as $cat)--}}
						{{--<li class="nav-item {{request()->category == $cat->slug?'active':''}}">--}}
							{{--<a class="nav-link " href="{{route('category.main',$cat->slug)}}">{{$cat->name}}</a>--}}
						{{--</li>--}}
					{{--@endforeach--}}
				{{--</ul>--}}

                <div class="list-group">
					@foreach($categories as $cat)
                    <a href="{{route('category.main',$cat->slug)}}" class="list-group-item list-group-item-action {{request()->category == $cat->slug?'active':''}}">
						{{$cat->name}}
                    </a>
					@endforeach
                </div>
			</div>
		</div>
		<div class="col-md-10 py-5" style="background-color:#eee; ">
			<h3 class="text-center font-weight-bold py-4" style="color: #0d3349">Featured Products</h3>
			<div class="row">
				@foreach($featured as $feature_prod)
					<div class="col-md-4 mb-3">
						<a href="{{route('front.products.show',$feature_prod->slug)}}"><img class="card-img-top" src="{{asset('uploads/images/'.$feature_prod->image)}}" style="height: 150px" alt="{{$feature_prod->id}}" ></a>
						<a style="color: #0a0a0a; text-decoration: none;" href="{{route('front.products.show',$feature_prod->slug)}}">
						   <h5 class="text-center mt-3">{{$feature_prod->name}}</h5>
						   <p class="text-center">₦{{$feature_prod->price}}</p>
						</a>
						<form action="{{route('cart.store')}}" method="post" >
							@csrf
							<input type="hidden" name="id" value="{{$feature_prod->id}}">
							<input type="hidden" name="name" value="{{$feature_prod->name}}">
							<input type="hidden" name="price" value="{{$feature_prod->price}}">
							<button type="submit" class="btn" style="display: block;background-color: transparent;border:3px solid grey;margin: auto">Add  To Cart</button>
						</form>
					</div>
				@endforeach
			</div>

		</div>
	</div>
	<div class="row " style="margin-top: 100px;">
		<div class="col-md-10 offset-md-1">
			<h3 class="text-center font-weight-bold py-4" style="color: #0d3349">New Arravals</h3>
			@foreach ($products->chunk(4) as $chunk)
				<div class="row mb-2">
					@foreach ($chunk as $prod)
						<div class="col-md-3">
							<div class="card">
								<a href="{{route('front.products.show',$prod->slug)}}"><img class="card-img-top" src="{{asset('uploads/images/'.$prod->image)}}" style="height: 150px" alt="{{$prod->id}}" ></a>
								<div class="card-body p-1" style="background-color: #eeeeee; text-align: center">
									<a style="color: #0a0a0a; text-decoration: none" href="{{route('front.products.show',$prod->slug)}}">
										<h5 class="card-title">{{$prod->name}}</h5>
										<p class="card-text">₦{{$prod->price}}</p>
									</a>
									<form action="{{route('cart.store')}}" method="post" >
										@csrf
										<input type="hidden" name="id" value="{{$prod->id}}">
										<input type="hidden" name="name" value="{{$prod->name}}">
										<input type="hidden" name="price" value="{{$prod->price}}">
										{{--<input type="number" name="qty" min="1" value="1" >--}}
										<button type="submit" class="btn btn-primary" style="display: inline;">Add  To Cart</button>
									</form>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			@endforeach
		</div>
	</div>
	{{--@include('includeFiles.messages')--}}
@endsection