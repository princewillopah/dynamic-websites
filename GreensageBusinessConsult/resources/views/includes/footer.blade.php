
<section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="logo">
              <h3 class="w-title-a text-brand">
                <a href="{{route('home-page')}}">
                  <img src="{{ asset('img/icon/logo-inv.svg') }}"  alt=""></h3>
                </a>
                
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-3">
          <div class="f-section">
            <div class="f-menu">
              <h3 class="f-title text-brand"><span>About Us</span></h3>
            </div>
            <div class="f-body">
              <p class="f-text-content">
                The GREENSAGE BUSINESS CONSULT LIMITED is an established company that provides training solutions to companies and to individuals. We provide top-notch training solutions allowing individuals and organizations to achieve their full potential.
              </p>
            </div>
         
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="f-section">
            <div class="f-menu">
              <h3 class="f-title text-brand"><span>Services</span></h3>
            </div>
            <div class="f-body list">
              <div class="f-body-content">
                <ul class="list-unstyled">
                  <div class="row">
                    <div class="col-6">
                       <li class="item-list">
                          <i class="fa fa-angle-right"></i> <a class="{{(request()->is('/'))?'active':''}}" href="{{route('home')}}">Training Courses</a>
                        </li>
                        
                        <li class="item-list">
                          <i class="fa fa-angle-right"></i> <a  class="{{(request()->is('About-us'))?'active':''}}" href="{{route('about')}}">Hr Outsoursing</a>
                        </li>
                        <li class="item-list">
                          <i class="fa fa-angle-right"></i> <a  class="{{(request()->is('terminals'))?'active':''}}" href="{{route('home')}}">Personal Outsoursing</a>
                        </li>
                        <li class="item-list">
                          <i class="fa fa-angle-right"></i> <a class="{{(request()->is('health-quality-safety-and-environment'))?'active':''}}" href="{{route('home')}}">Background Check</a>
                        </li>
                    </div>
                    <div class="col-6">
                       <li class="item-list">
                         <i class="fa fa-angle-right"></i> <a class="{{(request()->is('top-jobs'))?'active':''}}" href="{{route('top-jobs')}}">Find A Job</a>
                       </li>
                       <li class="item-list">
                         <i class="fa fa-angle-right"></i> <a class="{{(request()->is('search'))?'active':''}}"  href="{{route('filter-2')}}">Find A Course</a>
                       </li>
                       @foreach($formats as $format)
                       <li class="item-list">
                        <i class="fa fa-angle-right"></i> <a class="{{(request()->is('training/'.$format->slug))?'active':''}}" href="{{route('training-route',$format->slug)}}">{{$format->name}}</a>
                        </li>
                      
                       @endforeach
                       {{-- <li class="item-list">
                         <i class="fa fa-angle-right"></i> <a class="{{(request()->is('shipping'))?'active':''}}" href="{{route('home')}}">In-house Training</a>
                       </li>
                       <li class="item-list">
                        <i class="fa fa-angle-right"></i> <a class="{{(request()->is('home'))?'active':''}}" href="{{route('home')}}">Virtual Training</a>
                      </li> --}}
                   </div>
                  </div>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-2 section-md-t3 footer-contact">
          <div class="f-section">
            <div class="f-menu">
              <h3 class="f-title text-brand"><span>Company</span></h3>
            </div>
            <div class="f-body-content company">
              <ul class="list-unstyled">
                     <li class="item-list">
                       <i class="fa fa-angle-right"></i> <a class="{{(request()->is('/'))?'active':''}}" href="{{route('home')}}">Home</a>
                     </li>
                     <li class="item-list">
                       <i class="fa fa-angle-right"></i> <a class="{{(request()->is('about-us'))?'active':''}}"  href="{{route('about')}}">About</a>
                     </li>
                     <li class="item-list">
                      <i class="fa fa-angle-right"></i> <a class="{{(request()->is('contact-us'))?'active':''}}"  href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li class="item-list">
                      <i class="fa fa-angle-right"></i> <a class="{{(request()->is('course-registration-form'))?'active':''}}"  href="{{route('course-registration-form')}}">Register For a course</a>
                    </li>
                    <li class="item-list">
                      <i class="fa fa-angle-right"></i> <a class="{{(request()->is('apply-job-now'))?'active':''}}"  href="{{route('apply-now-form-page')}}">Apply for a job</a>
                    </li>
               
              </ul>
            </div>

          </div>
        </div>
        <div class="col-sm-12 col-md-3 section-md-t3 footer-contact">
          <div class="f-section">
            <div class="f-menu">
              <h3 class="f-title text-brand"><span>Contact Us</span></h3>
            </div>
            <div class="f-body contact">
              <p><i class="fa fa-map-marker"> </i><span>Office Address: The City Mall Lagos</span></p>
              <p><i class="fa fa-envelope"></i> <span> info@greensagebconsult.com</span></p>
              <p><i  class="fa fa-phone"></i>  <span>+2347040161272</span></p>
            </div>
            <div class="f-body social-media">
              <h6>Follow Us On</h6>
              <div class="social-media-icons">
                <a href="https://www.facebook.com/greensage.consult/"><i class="fa fa-facebook"> </i></a>
                <a href="https://twitter.com/GreensageC?s=08"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/p/COsKj6Ynht9/?utm_medium=copy_link"><i  class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/greensage-business-consult-limited"><i  class="fa fa-linkedin"></i></a>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-footer">
              <p class="copyright color-text-a">
              Copyright &copy; 2019 - <?php echo date("Y");?> |
                <span class="color-a" style="color:$color-1;">Grensage Business Consult</span>,  All Rights Reserved.
              </p>
            </div>
      
          </div>
        </div>
      </div>
        
    </footer>
  {{-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> --}}




  <!-- Scripts -->
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
{{-- <script src="{{asset('js/bsnav.min.js')}}"></script> --}}

<script src="{{asset('js/bsnav.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- <script src="{{ asset('js/main.js') }}"></script> --}}
{{-- <script src="{{ asset('js/ajax.js') }}"></script>script --}}
@yield('script')
@stack('script')
@stack('cv-js')

@stack('paginated-list-data')
@stack('training')
@stack('job-about-us')
@stack('home-js')
@stack('course-reg-js')
@stack('apply-now-js')
@livewireScripts

<script>
  (function($) {
    "use strict";
  
  
    // Back to top button
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
      } else {
        $('.back-to-top').fadeOut('slow');
      }
    });
    $('.back-to-top').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 1500, 'easeInOutExpo');
      return false;
    });
  
  })(jQuery); 
</script>


{{-- <script>
    $(document).ready(function(){
    /////for laravel sorting
    $("#sort").on('change',function(){//whenever ths input (having the #sort id) changes, then submit its parent form
       this.form.submit();;//submit this//it is a get method by default
    });

 });
</script> --}}
<script>
  @if(Session::has('success'))
  toastr.options =
  {
      "closeButton" : true,
      "progressBar" : true
  }
          toastr.success("{{ session('success') }}");
  @endif
</script>



<script>
  $(document).ready(function(){
      // Add Active Class
      $(".search-icon").click(function(){
          $(".search-screen").addClass("active");
      });
  
      // Remove Active Class
      $(".close-icon").click(function(){
          $(".search-screen").removeClass("active");
      });
  });
  
    //for navbaar full search form
    $(function () {
      $('a[href="#search"]').on('click', function(event) {
          event.preventDefault();
          $('#search').addClass('open');
          $('#search > form > input[type="search"]').focus();
      });
      
      $('#search, #search button.close').on('click keyup', function(event) {
          if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
              $(this).removeClass('open');
          }
      });
      

     
  });
  </script>
  {{-- // ==========================================================
    //// our partners
    // ========================================================= --}}
  <script>
$('.our-partners-owl-carousel').owlCarousel({
// loop:false,
// items: 1,
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    center:true,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
    });
</script>
{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> --}}
{{-- <script type="text/javascript" src="{{asset('jss/jquery.cslider.js')}}"></script>
<script type="text/javascript">
  $(function() {
  
    $('#da-slider').cslider({
      autoplay	: true,
      bgincrement	: 450
    });
  
  });
</script> --}}
</body>
</html>
