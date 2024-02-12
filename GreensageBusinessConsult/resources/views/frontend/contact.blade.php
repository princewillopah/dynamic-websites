@extends('layouts.frontend-layouts')

@section('title')
  Contact Us
@endsection

@section('content')

<section  id="contact-hero">
  <div class="container">
   <div class="row">
       <div class="col-md-12">
           <div class="inner">
              <div class="content ">
                  <h3 class=""><span>Dont worry</span>, we have got your back</h3>
              </div>
           </div>
       </div>
   </div>
  </div>
</section>

<section id="contact-form" class="square_shape3 square_shape2">
   <div class="container">
  {{-- <div class="hilite-title">
    <strong>CONTACT US</strong> 
</div> --}}
      <div class="row ">
        <div class="col-md-6 ">
          {{-- <div class="form-wrap"></div> --}}
          <div class="form">
            
            {{-- @include('includes.messages') --}}
            <livewire:contact-form/>
            
              <div class="address">
                  <div class="head-title">
                    <h4>Contact Information</h4>
                  </div>
                  <div class="address-conntent">
                    <p class="addr"><i class="fa fa-map-marker"></i><span>Office Address: The City Mall Lagos</span></p>
                    <p class="phone"><i class="fa fa-phone"></i><span>+2347040161272</span></p>
                    <p class="email"><i class="fa fa-envelope"></i><span>info@greensagebconsult.com</span></p>
                  </div>
                </div>
          </div>
         
        </div>

              <div class="col-md-6">
                <div class="content">
                  <div class="content-inner">
                     <div class="head-title-mgs">
                        <h4>How Can We Help You?</h4>
                        <p>Please, select a topic below related to your inquiry. If you dont find what you need, dont hesitate to fill our contact form</p>
                      </div>
                      <div class="topic">
                        <a href="{{route('instructor-form')}}">
                          <h5>Become an instructor</h5>
                          <p>We are always recruiting proficient individuals to facilitate our trainings. Got what it takes? Join our team!</p>
                        </a> 
                        <i class="fa fa-angle-right"></i>
                    </div>
                      <div class="topic">
                         <a href="{{route('course-registration-form')}}">
                          <h5>Register for any of our courses</h5>
                          <p>Register for any of our online courses now and start learning!</p>
                        </a>  
                        <i class="fa fa-angle-right"></i>
                      </div>
                        <div class="topic">
                           <a href="{{route('hr-form')}}">
                            <h5>HR Consultancy</h5>
                            <p>We are always recruiting proficient individuals to facilitate our trainings. Got what it takes? Join our team!</p>
                          </a> 
                          <i class="fa fa-angle-right"></i>
                        </div>

                        <div class="our-customers">
                          <h5>Trusted By:</h5>
                          <div class="row">
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/Access bank logo.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/E-FINANCE logo.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/FEDERAL MINISTRY OF JUSTICE LOGO.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/adx.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/IMPACT PEOPLE LOGO.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/JAREN & JOSEPH LOGO.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/oxford group nigeria logo.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/SUMERU LOGO.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/SUN TRUST BANK LOGO.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/THE SME MALL.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/UNION BANK LOGO.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/capitalweb management limited.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 col-4">
                              <img src="img/contact/logos/healthstaion.svg" class="img-fluid" alt="">
                            </div>
                          </div>
                        </div>


                  </div>
                </div>
            </div>

      </div>

    </div>
</section>

<section id="map">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
            {{-- <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Arie%20den%20Toomweg%2037,%20Rotterdam,%20NL,%203089KA+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div> --}}
             <div class="map">
              {{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=628404%2C%20Tyumenskaya%20%2C%20Surgut%2C%20Neftyanikov%20street&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/172/"></a></div><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div> --}}
              {{-- <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Beekweg%2094%20A%20Vredepeel%205816%20AB%20Netherlands+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div> --}}
              {{-- <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=921&amp;height=600&amp;hl=en&amp;q=Stationsplein 11, 5701 PE Helmond, Netherlands&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.embedmymap.com/">Embed My Map</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:600px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:600px;}.gmap_iframe {height:600px!important;}</style></div> --}}
              <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=The%20City%20Mall%20Lagos+(GREENSAGE%20BUSINESS%20CONSULT%20LIMITED)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            </div>
          </div>
      </div>
  </div>
</section>

@endsection
