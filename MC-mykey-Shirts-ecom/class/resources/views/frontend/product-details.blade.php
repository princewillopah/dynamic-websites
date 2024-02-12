@extends('layout.front')
@section('title')
    {{$product->slug}}
@endsection

@section('main')
    {{$product->name}}
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
          <div class="d-flex">
              <div class=" rounded mr-3 p-2" style="border: 3px #eee solid;">
                  <img src="{{asset('uploads/images/'.$product->image)}}" class="img-fluid" style="width: 400px; height: 400px" alt="Responsive image">
              </div>
              <div>
                  <h3 class="pb-2">{{$product->name}}</h3>
                  <h4 class="pb-2">₦ {{$product->price}}</h4>
                  <p class="pb-2">{{$product->description}}</p>
                  {{--<a href="" class="btn rounded-0" style="border: #d9d9d9 3px solid">Add to cart</a>--}}
                  <form action="{{route('cart.store')}}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{$product->id}}">
                      <input type="hidden" name="name" value="{{$product->name}}">
                      <input type="hidden" name="price" value="{{$product->price}}">
                      <button type="submit" class="btn rounded-0" style="border: #d9d9d9 3px solid">Add To Cart</button>
                  </form>
              </div>
          </div>
        </div>
    </div>
@endsection

@section('optional')
        <div class="mt-3 p-4" style="background-color: #eee">
            <div class="col-md-12 "><h4 class="pb-4 text-center">You may also like ...</h4></div>
            <div class="row">
                @foreach($may_also_like as $prod)
                    <div class="col-md-3 pr-1 pl-1">
                        <a href="{{route('front.products.show',$prod->slug)}}" >
                            <img src="{{asset('uploads/images/'.$prod->image)}}" class="img-fluid" style="width: 400px; height: 300px" alt="Responsive image">
                        </a>
                        <a style="color: #0a0a0a; text-decoration: none" href="{{route('front.products.show',$prod->slug)}}">
                            <p style="margin-bottom: 0; padding-bottom: 4px;text-align: center; font-weight: bold">{{$prod->name}}</p>
                            <p style="margin-bottom: 0; padding-bottom: 4px;text-align: center; font-weight: bold">₦ {{$prod->price}}</p>
                        </a>
                        <form action="{{route('cart.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$prod->id}}">
                            <input type="hidden" name="name" value="{{$prod->name}}">
                            <input type="hidden" name="price" value="{{$prod->price}}">
                            <button type="submit" class="btn btn-sm rounded-0 " style="border: #d9d9d9 3px solid; display:block; margin:auto; background: transparent">Add To Cart</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
