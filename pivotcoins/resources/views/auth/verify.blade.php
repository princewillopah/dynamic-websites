

@extends('layouts.app')

@section('title')
Verification
@endsection

@section('content')

<div class="sign-in">
    <div class="container">
        <div class="row " >
            <div class="col-md-6">
                <div class="sign-in-img" >
                    <div class="my-courasel">

                        <div id="myCarouselIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarouselIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarouselIndicators" data-slide-to="1"></li>
                                <li data-target="#myCarouselIndicators" data-slide-to="2"></li>
                                <li data-target="#myCarouselIndicators" data-slide-to="3"></li>
                                <li data-target="#myCarouselIndicators" data-slide-to="4"></li>

                            </ol>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="img-container">
                                    <img class="d-block w-100 " src="{{asset('img/sign_in/1.jpg')}}" alt="Storage / Handling / Shipping">
                                    </div>
                                    <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                        <div class="row">
                                            <div class="col-md-12">
                                             <div class="caption-inner">
                                                  <p class=" wow fadeInUp"  data-wow-delay=".6s" data-wow-duration="2s">Pivotcoins has been my only investment option ever since i discovered it.
                                                       All i have to do is to invest and sit lazily watching my yields rolling in.
                                                    </p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="courasel-overlay"> </div>
                                </div>

                               <div class="carousel-item ">
                                   <div class="img-container">
                                       <img class="d-block w-100 " src="{{asset('img/sign_in/7.jpg')}}" alt="Storage / Handling / Shipping">
                                   </div>
                                   <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                       <div class="row">
                                           <div class="col-md-12">
                                               <div class="caption-inner">
                                                   <p class=" wow fadeInUp"  data-wow-delay=".6s" data-wow-duration="2s">Truth be said, making fast money through cryptocurrencies is magical and pivotcoins just makes it easier for me. Thank you guys. Greate job.
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="courasel-overlay"> </div>
                               </div>
                               <div class="carousel-item ">
                                   <div class="img-container">
                                       <img class="d-block w-100 " src="{{asset('img/sign_in/6.jpg')}}" alt="Storage / Handling / Shipping">
                                   </div>
                                   <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                       <div class="row">
                                           <div class="col-md-12">
                                               <div class="caption-inner">
                                                  <p class=" wow fadeInUp"  data-wow-delay=".6s" data-wow-duration="2s">I just had my very first profit and that great. Love you guys
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="courasel-overlay"> </div>
                               </div>
                               <div class="carousel-item ">
                                   <div class="img-container">
                                       <img class="d-block w-100 " src="{{asset('img/sign_in/4.jpg')}}" alt="Storage / Handling / Shipping">
                                   </div>
                                   <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                       <div class="row">
                                           <div class="col-md-12">
                                                <div class="caption-inner">
                                                  <p class=" wow fadeInUp"  data-wow-delay=".6s" data-wow-duration="2s">Make a wise choice now. Invest now and start earning everyday
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="courasel-overlay"> </div>
                               </div>
                               <div class="carousel-item ">
                                   <div class="img-container">
                                       <img class="d-block w-100 " src="{{asset('img/sign_in/5.jpg')}}" alt="Storage / Handling / Shipping">
                                   </div>
                                   <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                       <div class="row">
                                           <div class="col-md-12">
                                                 <div class="caption-inner">
                                                   <p class=" wow fadeInUp"  data-wow-delay=".6s" data-wow-duration="2s">
                                                    I have been a customer of Pivotcoins for the last 
                                                    9 months & find them to be the best company to invest in bitcoin. 
                                                    Given their outstanding services, quick supports & returns, it will be a smart moves to invest here.
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="courasel-overlay"> </div>
                               </div>
                            </div>

                                
                        </div><!-- /.mycourasel -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sign-in-main" >
                  
                    {{-- <div class="card"> --}}
                        {{-- <div class="card-header">{{ __('Verify Your Email Address') }}</div> --}}
                    <div class="verif"> <h3>Thank you for signing up,  <span>{{ Auth::user()->name }}</span></h3></div>
                            
                        <div class="card-body" style="color: #aaa!important">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif
                    
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                        </div>
                    {{-- </div> --}}
                    

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('style')
<style>
   .sign-in-main .verif h3 {color:rgba(#aaa, .6)!important;font-size:30px}
    .verif h3 span{color:rgba(#aaa, .6)!important;font-size:30px}
</style>

@endsection





























{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
