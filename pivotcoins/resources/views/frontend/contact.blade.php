@extends('layouts.frontend')

@section('title')
    Contact
@endsection

@section('content')

    <section id="bg-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contents">
                        <div class="contents-message">
                            
                            <p>Ask a question—we’re all ears!</p>
                            <h1 class="cssanimation leFadeInLeft sequence">Contact Pivotcoins</h1>
                            <div class="wow fadeInUp">
                                <span class="sub">Have a suggestion? Question or concern? you want to <br>  know more about Pivotcoins, our investment plans? Send us a<br> message and we are going to answer all your questions.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-media" >
        <div class="container">
            <div class="contact-form-media-content">
                <div class="row">
                    <div class="col-md-6 order-2">
                        <div class="contact-media" >
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="img/contact/contact_us_savers.jpg" class="img-fluid" alt="contact support image">
                                </div>
                            </div>
                            <div class="row contact-media-content">
                                <div class="col-md-6">
                                    <div class="socials">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><p>PO Box 1759 Hereford,<br>TX 79045 United States</p>
                                    </div>
                                    <div class="socials">
                                        <i class="fa fa-phone" aria-hidden="true"></i><p>  +1 450-231-4914 <br> +1 434-223-4613</p>
                                    </div>
                                    <div class="socials">
                                            <i class="fa fa-whatsapp" aria-hidden="true"></i><p>+1 929-201-6519</p>
                                        </div>
                                    <div class="socials">
                                        <i class="fa fa-envelope" aria-hidden="true"></i><p> supports@pivotcoins.trade</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="nav justify-content-center">
                                            <a href="#" class="nav-link" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" class="nav-link"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" class="nav-link"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                            <a href="#" class="nav-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-1">
                        <div class="contact-form" >
                            <h3 class="">Get in touch</h3>
                            @include('includes.messages')
                            <p class="">   
                                Just complete the following input boxes, and we will get back to you as soon as we get your messages? 
                            </p>
                            <form id="contacts_form" action="contact" method="POST">
                                {{csrf_field()}}
                                <div class="form-group field-wrapper">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="width: 100%">
                                    <span class="bottom bottoms"></span>
                                    <span class="right"></span>
                                    <span class="top"></span>
                                    <span class="left"></span>
                                     @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group" style="margin-top: 28px; margin-bottom: 28px">
                               <input type="email" class="form-control @error('email') is-invalid @enderror" style="width: 100%" placeholder="Email"  autocomplete="email" required name="email"  value="{{ old('email') }}">
                                    <span class="bottom bottoms"></span>
                                    <span class="right"></span>
                                    <span class="top"></span>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <textarea class="form-control rounded-0 @error('message') is-invalid @enderror" id="message" name="message" rows="10"  placeholder="Message" required autocomplete="message">{{ old('message') }}</textarea>
                                    <span class="bottom bottoms"></span>
                                    <span class="right"></span>
                                    <span class="top"></span>
                                    <span class="left"></span>
                                     @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                               <button type="submit" class="btn rounded-0 form-submit w-25 bttn-fill bttn-md bttn-primary" name="submit">Send <i class="fa fa-plane"></i></button>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <div class="container wow fadeInUp" data-wow-duration="10ms">
            <div class="row">
                <div class="col-12">
                    <div class="mymap">
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d315210.6769855924!2d3.9569949993955795!3d51.88681644511156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c44c418ed675b5%3A0x85cb3522902b5034!2sTheemsweg+45%2C+3197+KM+Botlek+Rotterdam%2C+Netherlands!5e0!3m2!1sen!2sng!4v1554346935846!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                          <iframe src="https://maps.google.com/maps?q=PO%20Box%201759%20Hereford%20TX%2079045%20United%20States&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        {{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=PO%20Box%201759%20Hereford%20TX%2079045%20United%20States&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/"></a></div><style>.mapouter{position:relative;text-align:right;height:100%;width:100%px;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div> --}}
                    </div>
                    <!-- /.mymap -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
   
@endsection



{{--@section('style')--}}
{{--@endsection--}}

{{--@section('script')--}}
{{--@endsection--}}