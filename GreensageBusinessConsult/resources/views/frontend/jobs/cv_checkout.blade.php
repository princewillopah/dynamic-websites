<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Greensage Business Consult | Chechout page </title>
    <link href="{{ asset('img/icon/favicon.ico') }}" rel="icon">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 

    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
   {{-- @yield('style')
   @stack('cv-style')
   @stack('job-about-us-css')
   @stack('home-css')
   @stack('course-reg-css')
   @stack('apply-now-css') --}}
{{-- <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}
   {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
 
  

  </head>
<body class="checkout">

<section id="cv-checkout">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="wrapper">
                    <div class="title">
                     <img src="{{ asset('img/icon/logo.svg') }}" alt="Logo">
                     <a href="{{ url()->previous() }}">Go Back</a>
                    </div>
                    <div class="order-info">
                        <span class="order-title">Your Ordered Detail</span>
                          <ul class="list-group">  
                               @foreach ($orders as $key => $value) 
                               <li class="list-group-item">
                                   <span class="key">{{str_replace('_', ' ', $key)}}</span>
                                   <span class="value">₦{{ $value }}</span>
                                </li>
                                @endforeach
                                <li class="list-group-item">
                                    <span class="total">Total</span>
                                    <span class="total-value">₦{{ $total }}</span>
                                 </li>
                          </ul>
                    </div>
                    <div class="personal-info">
                        {{-- <span class="order-title">Contact Details</span>
                         <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                            @csrf

                            <label for="inp" class="inp">
                                <input type="text" id="inp" name="name" value="{{ old('name') }}" placeholder="&nbsp;">
                                <span class="label">Name</span>
                                <span class="focus-bg"></span>
                            </label> 
        
                            <label for="inp" class="inp">
                                <input type="email" id="inp" name="email" value="{{ old('email') }}" placeholder="&nbsp;">
                                <span class="label">Email</span>
                                <span class="focus-bg"></span>
                            </label> 
                            <label for="inp" class="inp">
                                <input type="text" id="inp" name="phone" value="{{ old('phone') }}" placeholder="&nbsp;">
                                <span class="label">Phone</span>
                                <span class="focus-bg"></span>
                            </label> 
                            <input type="submit" value="Buy" />
                         </form> --}}
                         {{-- <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
                            <input type="hidden" name="public_key" value="FLWPUBK_TEST-SANDBOXDEMOKEY-X" />
                            <input type="hidden" name="customer[email]" value="jessepinkman@walterwhite.org" />
                            <input type="hidden" name="customer[phone_number]" value="0900192039940" />
                            <input type="hidden" name="customer[name]" value="Jesse Pinkman" />
                            <input type="hidden" name="tx_ref" value="bitethtx-019203" />
                            <input type="hidden" name="amount" value="3400" />
                            <input type="hidden" name="currency" value="NGN" />
                            <input type="hidden" name="meta[token]" value="54" />
                            <input type="hidden" name="redirect_url" value="https://demoredirect.localhost.me/" />
                            
                            <button type="submit">CHECKOUT</button> 
                          </form> --}}
                          {{-- <form method="POST" id="makepaymentForm">
                           
                            <input type="number" name="amount" placeholder="amount" id="amount"/>
                            <input type="text" name="name" placeholder="name" id="name" />
                            <input type="email" name="email" id="email" placeholder="email"/>
                            <input type="text" name="phone_number" id="phone_number" placeholder="Phone" />
                            
                            <button type="submit">CHECKOUT</button> 
                          </form> --}}
                          <form method="POST" id="makepaymentForm">
                              @csrf
                            <input type="number" name="amount" placeholder="amount" id="amount"/>
                            <input type="text" name="name" placeholder="name" id="name" />
                            <input type="email" name="email" id="email" placeholder="email"/>
                            <input type="text" name="phone_number" id="phone_number" placeholder="Phone" />
                            
                        
                            {{-- <button type="button" onClick="makePayment()">Pay Now</button> --}}
                            <button type="submit">CHECKOUT</button> 
                          </form>
                    </div>

                </div>
                {{-- @foreach($orders as $order) --}}
                {{-- {{$orders["Entry_Level_CV_Rewrite"]}} --}}
                {{-- @endforeach --}}
             
            </div>
        </div>
</div>
</section>






  <!-- Scripts -->
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{asset('js/custom-file-input.js')}}"></script>
  <script src="https://checkout.flutterwave.com/v3.js"></script>
  {{-- <form>
    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <button type="button" onClick="makePayment()">Pay Now</button>
  </form>
   --}}

   <script>
       $(function(){
         $('#makepaymentForm').submit(function(e){
             e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var phone_number = $('#phone_number').val();
            var amount = $('#amount').val();
            makePayment(name,email,phone_number,amount)
        
        });
       });
 
    function makePayment(name,email,phone_number,amount) {
      FlutterwaveCheckout({
        public_key: "FLWPUBK_TEST-c8a18998f3fd26b14acd14ee2d79a014-X",
        tx_ref: "RX1_{{substr(rand(0,time()),0,7)}}",
        amount: amount,
        currency: "NGN",
        // country: "NGN",
        payment_options: " ",
        // redirect_url:"{{route('verify-payment-success')}}", //redirect to here after payment
        //   "https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",
        // meta: {
        //   consumer_id: 23,
        //   consumer_mac: "92a3-912ba-1192a",
        // },
        customer: {
          email: email,
          phone_number: phone_number,
          name: name,
        },
        callback: function (data) {
            var transactionId = data.transaction_id
            var _token = $("input[name='_token']").val()
        //   
      
        $.ajax({
            type:"POST",
            url:"{{route('verify-payment')}}",
            // url:"{{URL::to("verify-payment")}}",
            data:{
                transactionId:transactionId,
                _token:_token
            },
            // dataType:"datatype",
            success: function(response){
                console.log(response)
                // if(response[0].status == true){
                //    $('form').prepend(`<h2>${response[0].message}</h2>`);
                // }else{
                //     $('form').prepend(`<h2>Failed to verify your payment</h2>`);
                // }
            }
        })
        },
        onclose: function() {
          // close modal
        },
        customizations: {
        //   title: "Greensage Bussiness Consult",
        title: "Greensage Bussiness Consult",
          description: "Payment for CV",
        logo: "https://greensagebconsult.com/img/icon/logo.svg"
        
        },
      });
    }
  </script>
{{-- <script src="{{asset('js/bsnav.js')}}"></script> --}}

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}


</body>
</html>
