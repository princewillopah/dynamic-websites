@extends('layout.front')
@section('title')
Cart
@endsection
@section('main')
	Cart
@endsection
@section('slider')
@endsection
@section('main-content')
	<div class="row">
		<div class="col-md-2">
			<div class="jumbotron jumbotron-fluid p-2 mt-0">

				<ul class="nav flex-column">
					@foreach($categories as $cat)
						<li class="nav-item">
							<a class="nav-link" href="{{route('category.main',$cat->slug)}}">{{$cat->name}}</a>
						</li>
					@endforeach
				</ul>
			</div>
		</div>

		<div class="col-md-10">
			<div class="row">
				<div class="col-md-8 offset-md-2 text-center mb-3">@include('includeFiles.messages')</div>
				@if(Cart::instance('default')->content()->count() > 0)
					<div class="col-md-8 offset-md-2 d-flex ">
						<div class="">
							<h3 class="mr-5">Your Cart Details: {{Cart::content('default')->count()}} Unique item(s) | {{Cart::instance('default')->count()}} quantities</h3>
						</div>
						<div class="ml-auto">
							@if(Cart::content('default')->count() > 0)
								<a href="{{route('emptycart')}}" class="btn btn-outline-danger btn-sm">Clear your Cart</a>
							@endif

						</div>
					</div>
				@endif
			</div>
			<div class="col-md-12">
				<table class="table">
					@if(Cart::instance('default')->content()->count() > 0)
						<thead>
						<tr>
							<th scope="col" STYLE="width: 20px">ID</th>
							<th scope="col">IMAGE</th>
							<th scope="col">PRODUCT</th>
							<th scope="col">PRICE</th>
							<th scope="col">QUANTITY</th>
							<th scope="col">AMOUNT</th>
							<th scope="col">TOTAL</th>
							<th scope="col">REMOVE</th>
							<th scope="col">SAVE FOR LATER</th>
						</tr>
						</thead>
						<tbody >
						@foreach(Cart::instance('default')->content() as $item)
							<tr>
								<th scope="row">{{$item->id}}</th>
								<th scope="row" style="width: 50px"><a href="{{route('front.products.show',$item->model->slug)}}"><img src="{{asset('uploads/images/'.$item->model->image)}}" alt="" style="width: 50px; height: 50px"></a></th>
								<th scope="row"><a href="{{route('front.products.show',$item->model->slug)}}">{{$item->model->name}}</a></th>
								<th scope="row">₦{{$item->model->price}}</th>
								{{--<td>3</td>--}}
								{{--<td class="text-center "><span style="border:1px solid #eee; padding:10px ">{{$item->qty}}</span></td>--}}
                                <td class="text-center ">

                                    <select class="form-control w-50 quantity" name="quantity" >//
                                        <option selected="{{$item->id}}">1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
                                    </select>
									{{--" data-id="{{$item->qty}}"--}}
                                </td>
								<td>{{$item->qty}} x ₦{{$item->model->price}}</td>
								<td>₦ {{$item->qty * $item->model->price}}</td>
								<td>
									<form action="{{route('cart.destroy',$item->rowId)}}" method="post">
										@csrf
										@method('delete')
										<button type="submit" class="btn" style="background: transparent"> <i class="fa fa-times" style="color: red; font-size: 17px;" aria-hidden="true"></i></button>
									</form>
								</td>
								<td>
									<form action="{{route('cart.switchToSaveForLater',$item->rowId)}}" method="post">
										@csrf
										<button type="submit" class="btn btn-sm btn-outline-secondary" style="font-size: 10px "><i class="fa fa-save" style="color: red; font-size: 17px;" aria-hidden="true"></i></button>
									</form>
								</td>
							</tr>
						@endforeach
						@else
							<tr>
								<td colspan="6" style="text-align: center; color: brown">
									<h1 style=" font-size: 50px;">Your Cart Is Empty</h1>
									<a href="{{route('homepage')}}" class="btn btn-outline-secondary rounded-0">Continue Shopping</a>
								</td>

							</tr>
						@endif
						</tbody>
						@if(Cart::instance('default')->content()->count() > 0)
							<thead style="background-color: #EEEEEE">
							<tr>
								<th scope="col" colspan="4">TOTAL AMOUNT ( <span class="small" style="color: lightcoral">for the {{Cart::instance('default')->count()}} items</span> ) </th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col" class="">₦{{Cart::subtotal()}}</th>
							</tr>
							</thead>
							<thead style="background-color: #EEEEEE">
							<tr>
								<th scope="col" colspan="4">TOTAL TAX ( <span class="small" style="color: lightcoral">5% of ₦{{Cart::subtotal()}}</span> ) </th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col" class="">₦{{Cart::tax()}}</th>
							</tr>
							</thead>
							<thead style="background-color: #EEEEEE">
							<tr>
								<th scope="col" colspan="4">GRAND TOTAL ( <span class="small" style="color: lightcoral">₦{{Cart::tax()}} + ₦{{Cart::subtotal()}}</span> ) </th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col" class="">₦{{Cart::total()}}</th>
							</tr>
							</thead>
						@endif
				</table>
			</div>
			@if(Cart::instance('default')->content()->count() > 0)
			<div class="d-flex col-md-12">
				<a href="{{route('checkout.index')}}" class="btn rounded-0 mx-auto checkout-btn my-4" >Checkout</a>
			</div>
			@endif
			<!-- /.col md-8 offset-md-2 -->

			{{------------------------------------------------------------------------------------------------------------------------------------------------}}
			{{--                           items save for later instance form                                                                               --}}
			{{------------------------------------------------------------------------------------------------------------------------------------------------}}
			@if(Cart::instance('saveForLater')->content()->count() > 0)
				<div class="col md-12"  style="margin-top: 50px;padding: 50px">
					<div style="background-color: #EEEEEE; ">
						@if(Cart::instance('saveForLater')->content()->count() === 1)
							<h2 class="text-center p-5">The Item You Saved For Later</h2>
						@elseif(Cart::instance('saveForLater')->content()->count() > 1 )
							<h2 class="text-center p-5">All {{Cart::instance('saveForLater')->content()->count()}} Items Your Saved For Later</h2>
							<div class="d-flex ">
								<a href="{{route('cart.clearSaveForLater')}}" class="btn btn-outline-danger btn-sm mr-2" style="display: block; ">Clear Cart</a>
							</div>
						@endif

					</div>
					<table class="table">
						<thead>
						<tr>
							<th scope="col" STYLE="width: 20px">ID</th>
							<th scope="col">IMAGE</th>
							<th scope="col">PRODUCT</th>
							<th scope="col">PRICE</th>
							<th scope="col">QUANTITY</th>
							<th scope="col">AMOUNT</th>
							<th scope="col">TOTAL</th>
							<th scope="col">REMOVE</th>
							<th scope="col">MOVE TO CART</th>
						</tr>
						</thead>
						<tbody >
						@foreach(Cart::instance('saveForLater')->content() as $item)
							<tr>
								<th scope="row">{{$item->id}}</th>
								<th scope="row" style="width: 50px"><img src="{{asset('uploads/images/'.$item->model->image)}}" alt="" style="width: 50px; height: 50px"></th>
								<th scope="row">{{$item->model->name}}</th>
								<th scope="row">₦{{$item->model->price}}</th>
								{{--<td>3</td>--}}
								<td class="text-center">{{$item->qty}}</td>
								<td>{{$item->qty}} x ₦{{$item->model->price}}</td>
								<td>₦ {{$item->qty * $item->model->price}}</td>
								<td>
									<form action="{{route('cart.switchToSaveForLater.destroy',$item->rowId)}}" method="post">
										@csrf
										@method('delete')
										<button type="submit" class="btn" style="background: transparent"> <i class="fa fa-times" style="color: red; font-size: 17px;" aria-hidden="true"></i></button>
									</form>
								</td>
								<td>
									<form action="{{route('cart.switchFromSaveForLaterToCart',$item->rowId)}}" method="post">
										@csrf
										<button type="submit" class="btn btn-sm btn-outline-secondary" style="background: transparent"><i class="fa fa-shopping-cart" style="color: red; font-size: 17px;" aria-hidden="true"></i></button>
									</form>
								</td>
							</tr>
						@endforeach
						</tbody>
						<thead style="background-color: #EEEEEE">
						<tr>
							<th scope="col" colspan="4">TOTAL AMOUNT ( <span class="small" style="color: lightcoral">for the {{Cart::instance('saveForLater')->count()}} items</span> ) </th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col" class="">₦{{Cart::instance('saveForLater')->subtotal()}}</th>
						</tr>
						</thead>
						<thead style="background-color: #EEEEEE">
						<tr>
							<th scope="col" colspan="4">TOTAL TAX ( <span class="small" style="color: lightcoral">5% of ₦{{Cart::subtotal()}}</span> ) </th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col" class="">₦{{Cart::instance('saveForLater')->tax()}}</th>
						</tr>
						</thead>
						<thead style="background-color: #EEEEEE">
						<tr>
							<th scope="col" colspan="4">GRAND TOTAL ( <span class="small" style="color: lightcoral">₦{{Cart::tax()}} + ₦{{Cart::subtotal()}}</span> ) </th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col" class="">₦{{Cart::instance('saveForLater')->total()}}</th>
						</tr>
						</thead>

					</table>
				</div>
			@endif
		</div>
	</div>
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('css/pageStyle.css')}}">
@stop
@section('extra-js')
	<script src="{{asset('js/app.js')}}"></script>
	<script>
		(function (){
          const classname = document.querySelectorAll('.quantity');

		Array.from(classname).forEach(function (element) {
             element.addEventListener('change',function () {
                 const id = element.getAttribute('data-id');
                       axios.patch(`/cart/${id}`, {
                       quantity:this.value
                     })
                     .then(function (response) {
                         console.log(response);
                     })
                     .catch(function (error) {
                         console.log(error);
                     });
            })
          })
        })();
	</script>
@stop