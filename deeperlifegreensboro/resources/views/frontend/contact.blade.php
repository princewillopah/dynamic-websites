@extends('layouts.template')

@section('title')
Contact
@endsection

@section('content')


    <section id="contact-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp" data-wow-duration="2s">Contact Us</h1>
                            <div class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="3s">  <span class="sub">We want to hear from you</span> <span  class="wow fadeInUp float-right navs" data-wow-delay="2s" data-wow-duration="3s">
                                      <a  href="{{route('homepage')}}">Home</a> > Contact</span></div>
                        </div>
                    </div><!-- /.contents -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section ><!-- /.about -->

    <!-- ================================   form ===================================================-->
    <section class="contact-form-media" >
        <div class="container">
            <div class="contact-form-media-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-form" >

                            <h4 class="mb-4">Send Us Message</h4>
                            @include('includes.messages')
                            <form id="contacts_form" action="contact" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <!--                                            <input type="text" class="form-control rounded-0 " id="name" name="name"  placeholder="Name" value="--><?php //echo isset($_POST['name']) ? $name: '';?><!--" >-->
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="width: 100%">
                                    <span class="bottom"></span>
                                    <span class="right"></span>
                                    <span class="top"></span>
                                    <span class="left"></span>
                                     @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!--	                                        <small class="name-error">name input should not be empty</small>-->
                                </div>
                                <div class="form-group">
                                    
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" style="width: 100%" placeholder="Email"  autocomplete="email" required name="email"  value="{{ old('email') }}">
                                    <span class="bottom"></span>
                                    <span class="right"></span>
                                    <span class="top"></span>
                                    <span class="left"></span>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <!--                                            <textarea class="form-control rounded-0" id="message" name="message" rows="10" style="height: 200px;" placeholder="Message" >--><?php //echo isset($_POST['message']) ? $message: '';?><!--</textarea>-->
                                    <!--	                                        <small class="message-error">message input should not be empty</small>-->
                                    <textarea class="form-control rounded-0 @error('message') is-invalid @enderror" id="message" name="message" rows="10"  placeholder="Message" required autocomplete="message">{{ old('message') }}</textarea>
                                    <span class="bottom"></span>
                                    <span class="right"></span>
                                    <span class="top"></span>
                                    <span class="left"></span>
                                      @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--                                        <input type="submit" class="btn rounded-0 form-submit w-25 " value="Send" name="submit">-->
                                <!--                                        <input type="submit" class="bttn-fill bttn-md bttn-primary" value="Send" name="submit">-->
                                <button type="submit" class="btn rounded-0 form-submit w-25 bttn-fill bttn-md bttn-primary" name="submit">Send </button>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="contact-media wow fadeIn" data-wow-delay="1s" data-wow-duration="3s">
                            <h4 class="mb-4">Address</h4>
                            <div class="socials">
                                <p><span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i><span>4925-1131 West Market Street<br> Greensboro, NC. 27407 </span> </span></p>
                                <p><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span> +1-919-412-3237</p>
                                <p><span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span> contact@dlbcgreensboro.com</p>
                            </div>

                            <div class="nav">
                                <a href="#" class="nav-link" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="nav-link"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="nav-link"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                <a href="#" class="nav-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" class="nav-link"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
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
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d315210.6769855924!2d3.9569949993955795!3d51.88681644511156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c44c418ed675b5%3A0x85cb3522902b5034!2sTheemsweg+45%2C+3197+KM+Botlek+Rotterdam%2C+Netherlands!5e0!3m2!1sen!2sng!4v1554346935846!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                        
                         <iframe src="https://maps.google.com/maps?q=4925-1131%20West%20Market%20Street%20Greensboro%2C%20NC.%2027407&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
                             
                         </iframe>
                        
                      
                    </div>
                    <!-- /.mymap -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.map -->

    <!-- ======================== subscription ======================================= -->
    <section class="subscription">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="subscription-text">
                        <h3>Subscribe To Our Newsletter</h3>
                        <h6>Subcribe Us And Tell Us About Your Story</h6>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="subscription-form">
                        <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Your Email">
                        <button type="submit" class="btn crose-btn">subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================footer =============================================-->

@endsection