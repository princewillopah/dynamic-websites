
@extends('layouts.app')

@section('title')
Login
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
                                        <img class="d-block w-100 " src="img/sign_in/1.jpg" alt="Storage / Handling / Shipping">
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
                                       <img class="d-block w-100 " src="img/sign_in/7.jpg" alt="Storage / Handling / Shipping">
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
                                       <img class="d-block w-100 " src="img/sign_in/6.jpg" alt="Storage / Handling / Shipping">
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
                                       <img class="d-block w-100 " src="img/sign_in/4.jpg" alt="Storage / Handling / Shipping">
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
                                       <img class="d-block w-100 " src="img/sign_in/5.jpg" alt="Storage / Handling / Shipping">
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
            <div class="col-md-4 offset-md-1">
                <div class="sign-in-main" >
                    <div class="contact-form" >
                        <h3 class="">MEMBER LOGIN</h3>
                        <p class="">
                            Sign in to start your investements
                        </p>

                         <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                           
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        <div class="form-group">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div class="">
                                <button type="submit" class="btn rounded-0 form-submit w-25 bttn-fill bttn-md bttn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <p class="signupMsg">Don't have an account? <span><a href="{{route('register') }}">Sign Up Now</a></span></p>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
