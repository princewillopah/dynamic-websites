@extends('layout.front')

@section('title')
Checkout
@endsection

@section('main')
Checkout
@endsection

@section('slider')
@endsection

@section('main-content')
    <div class="row" style="margin-left:50px;margin-right:50px">
        <div class="col-md-6">
         <h3 class="pb-2 font-weight-bold">Billing Details</h3>
          <form class="col-md-12 px-0">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email">

                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tony Grey">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="E.G 45 OKOROGBO STREET">
                </div>
                <div class="d-flex ">
                    <div class="form-group col-md-6 pl-0">
                        <label for="postalcode" class="mb-1">Postal Code</label>
                        <input type="text" class="form-control" id="postalcode" name="postalcode" placeholder="E.g 23456">
                    </div>
                    <div class="form-group col-md-6 px-0">
                        <label for="phone" class="mb-1">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="E.g +234-01-23-345-345 ">
                    </div>
                </div>
                <div class="d-flex ">
                    <div class="form-group col-md-6 pl-0">
                        <label for="city" class="mb-1">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="E.g LAGOS">
                    </div>
                    <div class="form-group col-md-6 px-0">
                        <label for="province" class="mb-1">Provice</label>
                        <input type="text" class="form-control" id="province" name="province" placeholder="E.g APAPA ">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h3 class="pb-2  font-weight-bold">Your Order</h3>
            @if(Cart::instance('default')->content()->count() > 0)
            <table class="table table-striped">
                <tbody>
                @foreach(Cart::instance('default')->content() as $item)
                <tr>
                    <td style="width: 20%;padding:7px"><a href="{{route('front.products.show',$item->model->slug)}}"><img src="{{asset('uploads/images/'.$item->model->image)}}" alt="" style="width: 100%;"></a></td>
                    <td class="pl-0 " style="padding-bottom: 5px;padding-top: 5px;">
                        <h5 class="font-weight-bold" style="margin-bottom: 4px">{{$item->model->name}}</h5>
                        <p class="mb-1 " style="color: #595959">{{str_limit($item->model->description,50,'...')}}</p>
                        <p class="mb-0 font-weight-bold"> ₦{{$item->model->price}}</p>
                    </td>
                    <td style="width: 10% ; vertical-align: middle;" class="pl-0">
                        <div class="form-group">
                            <select class="form-control" id=""  >
                                <option value="1">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <div class="row h-50">
                    <div class="col-md-8 offset-md-2 m-auto">
                        <h1 style="color: orangered;text-align: center; padding-bottom: 20px">Your Cart is emtpy</h1>
                        <a href="{{route('homepage')}}" class="btn btn-outline-secondary rounded-0 w-100">Continue Shopping</a>
                    </div>
                </div>
            @endif
            {{-----------------------------------------------}}
                          {{--total--}}
            {{-----------------------------------------------}}
            @if(Cart::instance('default')->content()->count() > 0)
            <ul class="list-group mb-4">
                <li class="list-group-item font-weight-bold">Subtotal:    <span class="float-right" style="color:brown">₦{{Cart::subtotal()}}</span> </li>
                <li class="list-group-item font-weight-bold">Tax ( <span class="small" style="color: #808080">5% of ₦{{Cart::subtotal()}}</span> ):       <span class="float-right" style="color:brown">₦{{Cart::tax()}}</span> </li>
                <li class="list-group-item font-weight-bold">Grand Total ( <span class="small" style="color:#808080">₦{{Cart::tax()}} + ₦{{Cart::subtotal()}}</span> ):   <span class="float-right" style="color:brown">₦{{Cart::total()}}</span></li>
            </ul>
                <a href="{{route('homepage')}}" class="btn btn-outline-secondary rounded-0">Continue Shopping</a>
                <a href="{{route('cart.index')}}" class="btn btn-outline-secondary rounded-0">Back To Cart</a>
           @endif
        </div>
    </div>
{{--------------------------------------------------------------------------------------------------------------------------------------------}}
    <hr style="width: 50%;height: 3px; background-color: orangered; border-radius: 50%">
{{--------------------------------------------------------------------------------------------------------------------------------------------}}
    <div class="row my-5" >
        <div class="col-md-8 offset-md-2">
            <h2 class="pb-2 font-weight-bold text-center">Payment Details</h2>
            <form class="">
                <div class="form-group">
                    <label for="cardName">Card Name</label>
                    <input type="text" class="form-control" id="cardName"  name="cardName" placeholder="Visa">
                </div>
                <div class="form-group">
                    <label for="CardAddress">Address</label>
                    <input type="text" class="form-control" id="CardAddress" name="CardAddress" placeholder="E.G 45 OKOROGBO STREET">
                </div>
                <div class="form-group">
                    <label for="creditCardNumber">Address</label>
                    <input type="text" class="form-control" id="creditCardNumber" name="creditCardNumber" placeholder="E.G 4567-6543-5678-3445">
                </div>
                <div class="d-flex ">
                    <div class="form-group col-md-6 pl-0">
                        <label for="expiryDate" class="mb-1">Expiry Date</label>
                        <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="E.g MM/DD">
                    </div>
                    <div class="form-group col-md-6 px-0">
                        <label for="cvcCode" class="mb-1">CVC Code</label>
                        <input type="text" class="form-control" id="cvcCode" name="cvcCode" placeholder="E.g 356 ">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary rounded-0 w-25">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{asset('css/pageStyle.css')}}">
@stop