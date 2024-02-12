@extends('layouts.frontend-layouts')

@section('title')
  About Us | Top HR Outsourcing In Lagos | Nigeria
@endsection

@push('job-about-us-css')
<link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
<style>

</style>
@endpush

@section('style')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/set1.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" /> --}}
{{-- <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script> --}}
@endsection

@section('script')
<script>

</script>
@endsection

@section('content')

            <section  class="hr-hero">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="parallax-bg" style="background-image:url(../img/hr/bg.jpg)" data-swiper-parallax="-23%"></div>
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="my-swipper-content-wrapper">
                        <div class="title" data-swiper-parallax="-300">OUTSOURCING SOLUTIONS</div>
                            {{-- <div class="subtitle" data-swiper-parallax="-200">Subtitle</div> --}}
                            <div class="text" data-swiper-parallax="-100">
                            <p>Get the best and security-verified talents for your business with Halogen</p>
                            </div>
                    </div>
                    
                </div>
                <div class="swiper-slide">
                    <div class="my-swipper-content-wrapper">
                        <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">BUSINESS CONSULT</div>
                            {{-- <div class="subtitle" data-swiper-parallax="-200">Subtitle</div> --}}
                            <div class="text" data-swiper-parallax="-100">
                            <p>Reduce risk whilst increasing your productivity by focusing on what you know how to do best.</p>
                            </div>
                    </div>
                    
                </div>
                <div class="swiper-slide">
                    <div class="my-swipper-content-wrapper">
                            <div class="title" data-swiper-parallax="-300">BACKGROUND CHECK</div>
                            {{-- <div class="subtitle" data-swiper-parallax="-200">Subtitle</div> --}}
                            <div class="text" data-swiper-parallax="-100">
                            <p>Know the real person behind that face</p>
                            </div>
                    </div>
                    
                </div>
                <div class="swiper-slide">
                    <div class="my-swipper-content-wrapper">
                            <div class="title" data-swiper-parallax="-300">TALENT MANAGEMENT</div>
                            {{-- <div class="subtitle" data-swiper-parallax="-200">Subtitle</div> --}}
                            <div class="text" data-swiper-parallax="-100">
                            <p> Become more efficient and increase the profitability of success.</p>
                            </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="my-swipper-content-wrapper">
                            <div class="title" data-swiper-parallax="-300">TALENT ACQUISITION</div>
                            {{-- <div class="subtitle" data-swiper-parallax="-200">Subtitle</div> --}}
                            <div class="text" data-swiper-parallax="-100">
                            <p>Become more efficient and increase the profitability of success.</p>
                            </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="my-swipper-content-wrapper">
                            <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">HR  ADVISORY</div>
                            {{-- <div class="subtitle" data-swiper-parallax="-200">Subtitle</div> --}}
                            <div class="text" data-swiper-parallax="-100">
                            <p>Know the real person behind that face</p>
                            </div>
                    </div>

                </div>


                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-prev swiper-button-white"></div>
                <div class="swiper-button-next swiper-button-white"></div>
            </div>
            </section>

            <section id="hr-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="hr-about-text">
                                <div class="title">
                                    <span>Who We Are</span>
                                    <h4>HR solutions with for unprecedented results</h4>
                                </div>
                                <div class="hr-content">
                                    <p>At the Greensage Business Consult,we work with the increasingly 
                                    wide variety of organizations that exist in today's global business 
                                    environment. With simple, streamlined solutions, we can help you solve 
                                    even the toughest background screening problems and help your business
                                    work smarter.
                                    </p>

                                    <p>We get that employers need much more than raw data to operate a 
                                    successful background screening program. The Greensage Business Consult 
                                    specializes in helping organizations of all sizes and locations efficiently
                                    implement, utilize and refine their background screening programs.
                                    </p>

                                    <p>The great thing is that we’re on the candidate’s side as well. We 
                                    work hard to simplify their experience and make it easy to submit requested 
                                    information. Our dedicated candidate care team increases communication and 
                                    transparency. This gives your applicants much-needed peace of mind.
                                </p>
                                <a href="{{route('about')}}" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="hr-img">
                               <img src="{{asset('img/hr/GREENSAGE BUSINESS Consult- HR WEBSITE OR BUSINESSES IN LAGOS.jpg')}}" class="img-fluid" alt="GREENSAGE BUSINESS Consult: HR WEBSITE OR BUSINESSES IN LAGOS">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="our-hr-clients">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="our-partner-img">
                           <div class="our-partner-img-slide">
                               <div class="our-partners-owl-carousel owl-carousel owl-theme">
                                   <div class="item" >
                                           <div class="name-pic">
                                               <div class="pics">
                                                   <img src="{{asset('img/hr/our-clients/1.png')}}" alt="" class="img-fluid">
                                               </div>
                                           </div>
                                   </div>
                                   <div class="item" >
                                           <div class="name-pic">
                                               <div class="pics">
                                                   <img src="{{asset('img/hr/our-clients/2.png')}}" alt="" class="img-fluid">
                                               </div>
                                           </div>
                                   </div>
                                   <div class="item" >
                                           <div class="name-pic">
                                               <div class="pics">
                                                   <img src="{{asset('img/hr/our-clients/3.png')}}" alt="" class="img-fluid">
                                               </div>
                                           </div>
                                   </div>
                                   <div class="item" >
                                           <div class="name-pic">
                                               <div class="pics">
                                                   <img src="{{asset('img/hr/our-clients/4.jpeg')}}" alt="" class="img-fluid">
                                               </div>
                                           </div>
                                   </div>
                                   <div class="item" >
                                           <div class="name-pic">
                                               <div class="pics">
                                                   <img src="{{asset('img/hr/our-clients/5.jpeg')}}" alt="" class="img-fluid" >
                                               </div>
                                           </div>
                                   </div>
                                   <div class="item" >
                                           <div class="name-pic">
                                               <div class="pics">
                                                   <img src="{{asset('img/hr/our-clients/6.png')}}" alt="" class="img-fluid">
                                               </div>
                                           </div>
                                   </div>
                                   <div class="item" >
                                           <div class="name-pic">
                                               <div class="pics">
                                                   <img src="{{asset('img/hr/our-clients/7.png')}}" alt="" class="img-fluid">
                                               </div>
                                           </div>
                                   </div>
                                   <div class="item" >
                                           <div class="name-pic">
                                               <div class="pics">
                                                   <img src="{{asset('img/hr/our-clients/8.png')}}" alt="" class="img-fluid">
                                               </div>
                                           </div>
                                   </div>
                                   <div class="item" >
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="{{asset('img/hr/our-clients/9b.png')}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                               </div>
                           </div>
                
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        <section id="investment-plans" class="sections-white">
            <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="head">
                            <h2> Our Strength</h2>
                            {{-- <p>Choose How You Want to Invest With Us</p> --}}
                            <p>Greensage Business Consult is a professional services firm with capabilities  strategy, Business Consultation, HR Advisory, Outsourcing, Talent Acquisition and more.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="investment_plan_tab">
                            <div class="tabs">
                                    <input type="radio" name="tabs" id="tabone" checked="checked">
                                    <label for="tabone">Outsourcing</label>
                                    <div class="tab">
                                    <div class="row">
                                        <div class="col-md-4 img ">
                                        {{-- <h4>Silver Plan</h4> --}}
                                        <img src="{{asset('img/hr/hr-intro/Greensage Outsourcing.svg')}}" alt="Outsourcing in lagost state" class="img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="writeUp2">
                                                <div class="wraper">
                                                    <p>We have a large pool of candidates who are deployed almost immediately on request</p>
                                                        <p>Our outsourcing activities are technologically driven and very efficient, leading to the shortest turn-around time.</p>
                                                        <p>Our Recruitment process is rigorous thereby making only qualified and competitive candidates scale through our process.</p> 
                                                        <p>Our Outsourcing services has helped our client reduce labour cost drastically while increasing labour flexibility.</p> 
                                                        <p>We have top-notch facilitators that partners with us and we can also outsource training to facilitators 
                                                        that are not in the country.
                                                    </p> 
                                                </div>
                                                
                                            
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <input type="radio" name="tabs" id="tabtwo">
                                    <label for="tabtwo">Business Consult</label>
                                    <div class="tab">
                                        <div class="row">
                                                <div class="col-md-4 img">
                                                    {{-- <h4>Gold Plan</h4> --}}
                                                    <img src="{{asset('img/hr/hr-intro/Business Consult.svg')}}" alt="Outsourcing in lagost state" class="img-fluid ">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="writeUp2">
                                                        <div class="wraper">
                                                                    <p><i class="fa fa-dot-circle-o"></i><span >Strategy</span></p>
                                                                <p><i class="fa fa-dot-circle-o"></i><span >Process  Design and Restructuring</span></p>
                                                                <p><i class="fa fa-dot-circle-o"></i><span >Business  Intelligence </span></p>
                                                                <p><i class="fa fa-dot-circle-o"></i><span >Financial  Advisory</span></p>
                                                                <p><i class="fa fa-dot-circle-o"></i><span >Background  Check</span></p>
                                                                <p><i class="fa fa-dot-circle-o"></i><span >Technology</span></p>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                <input type="radio" name="tabs" id="tabfive">
                                <label for="tabfive">Background Check</label>
                                <div class="tab">
                                        <div class="row">
                                                <div class="col-md-4 img">
                                                    {{-- <h4>Diamond Plan</h4> --}}
                                                    <img src="{{asset('img/hr/hr-intro/Background Check.svg')}}" alt="Outsourcing in lagost state" class="img-fluid img-bottom">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="writeUp">
                                                        <p class="p-title">In a competitive job market, job seekers are
                                                            more likely to embellish their CV and 
                                                            profile to appear more attractive to 
                                                            employers. Likewise, already hired employees 
                                                            may have question marks about their career
                                                            history, credentials, and competence. 
                                                            This no doubt poses a risk to the success
                                                                of businesses. We conduct the following:</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="content-services">
                                                                <h6 class="title">BIO - DATA</h6>
                                                                <p><i class="fa fa-check"></i><span >Address Verification</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="content-services">
                                                                <h6 class="title">REFERENCE CHECKS</h6>
                                                                <p><i class="fa fa-check"></i><span >Guarantor Checks</span></p>
                                                                <p><i class="fa fa-check"></i><span >Personal Reference Checks</span></p>
                                                            </div>
                                                        </div>  
                                                        <div class="col-6">
                                                            <div class="content-services">
                                                                <h6 class="title">EDUCATION</h6>
                                                                <p><i class="fa fa-check"></i><span >Degree Verification</span></p>
                                                                <p><i class="fa fa-check"></i><span >Professional Membership Verification</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="content-services">
                                                                <h6 class="title">EMPLOYMENT</h6>	
                                                                <p><i class="fa fa-check"></i><span >Previous Employment Check</span></p>
                                                                <p><i class="fa fa-check"></i><span >NYSC Verification</span></p>
                                                                <p><i class="fa fa-check"></i><span >Extended workforce screening</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="content-services">
                                                                <h6 class="title">SECURITY CHECKS</h6>
                                                                <p><i class="fa fa-check"></i><span >Identity checks</span></p>
                                                                <p><i class="fa fa-check"></i><span >Criminal Records Check</span></p>
                                                                <p><i class="fa fa-check"></i><span >Credit Check</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="content-services">
                                                                <h6 class="title">Others</h6>
                                                                <p><i class="fa fa-check"></i><span >Drug and health screening</span></p>
                                                                <p><i class="fa fa-check"></i><span >Candidate experience</span></p>
                                                                <p><i class="fa fa-check"></i><span >Executive intelligence</span></p>
                                                                <p><i class="fa fa-check"></i><span >Monitoring services</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>

                                    <input type="radio" name="tabs" id="tabthree">
                                    <label for="tabthree">Talent Management</label>
                                    <div class="tab">
                                            <div class="row">
                                                    <div class="col-md-4 img">
                                                    {{-- <h4>Diamond Plan</h4> --}}
                                                    <img src="{{asset('img/hr/hr-intro/Talent Management.svg')}}" alt="Outsourcing in lagost state" class="img-fluid img-bottom">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="writeUp2">
                                                            <div class="wraper">
                                                                            <p><i class="fa fa-dot-circle-o"></i><span >Bulk Recruitment</span></p>
                                                                <p><i class="fa fa-dot-circle-o"></i><span >Head Hunting</span></p>
                                                                <p><i class="fa fa-dot-circle-o"></i><span >Executive Selection</span></p>
                                                            </div>
                                                 
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>

                                    <input type="radio" name="tabs" id="tabfour">
                                    <label for="tabfour">Talent Acquisition</label>
                                    <div class="tab">
                                            <div class="row">
                                                    <div class="col-md-4 img">
                                                    {{-- <h4>Diamond Plan</h4> --}}
                                                    <img src="{{asset('img/hr/hr-intro/Talent Acquisition.svg')}}" alt="Outsourcing in lagost state" class="img-fluid img-bottom">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="writeUp2">
                                                            <div class="wraper">
                                                                   <p>Our Recruitment services are tailored to ensure that the best-fit candidates 
                                                                are attracted, evaluated and selected for our clients. We deploy proprietary 
                                                                and internationally acclaimed selection tools in addition to our own stringent 
                                                                recruitment methodologies.</p>
                                                            </div>
                                                          
                                                        </div>
                                                       
                                                        
                                                        
                                                    </div>
                                                </div>
                                    </div>

                                    <input type="radio" name="tabs" id="tabsix">
                                    <label for="tabsix">HR  Advisory</label>
                                    <div class="tab">
                                     <div class="row">
                                        <div class="col-md-4 img">
                                        {{-- <h4>Diamond Plan</h4> --}}
                                        <img src="{{asset('img/hr/hr-intro/HR Advisory.svg')}}" alt="Outsourcing in lagost state" class="img-fluid img-bottom">
                                        </div>
                                         <div class="col-md-8">
                                            <div class="writeUp">
                                             <p class="p-title">With extensive years of experience in providing advisory services based on 
                                                        global best practices, the firm’s Advisory Division is one of Nigeria’s
                                                        fastest growing provider of advisory on Human Capital Management issues.
                                             </p>
                                         
                                            
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="content-services">
                                                        <p><i class="fa fa-dot-circle-o"></i><span >Change Management</span></p>
                                                        <p><i class="fa fa-dot-circle-o"></i><span >Team  Building</span></p>
                                                        <p><i class="fa fa-dot-circle-o"></i><span >Competency  Assessment</span></p>
                                                        <p><i class="fa fa-dot-circle-o"></i><span >Working  Planning</span></p>
                                                        <p><i class="fa fa-dot-circle-o"></i><span >Talent and Performance Management</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="content-services">
                                                        <p><i class="fa fa-dot-circle-o"></i><span >Succession Planning</span></p>
                                                        <p><i class="fa fa-dot-circle-o"></i><span >Compensation Benchmark and Structuring</span></p>
                                                        <p><i class="fa fa-dot-circle-o"></i><span >HR  Policies and Procedure</span></p>
                                                        <p><i class="fa fa-dot-circle-o"></i><span >Competency Assessments</span></p>
                                                        <p><i class="fa fa-dot-circle-o"></i><span >Training Needs Analysis</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                     

                                            
                                      </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-process">
            <div class="container">
                <div class="our-process-head">
                    <h4>Our Processes</h4>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="our-process-body">
                            <div class="our-process-icon">
                                <img src="{{asset('img/hr/processes/listening.svg')}}" class="img-fluid" alt="Listenting - our process">
                                <h4>Listening</h4>
                            </div>
                              <div class="our-process-text">
                                  <p>We pay attention to our clients’ Business Challenges</p>
                              </div>
                              <i class="fa fa-long-arrow-right arrow arrow1" aria-hidden="true"></i>
                              
                              <div class="arrow-mobile">
                                <span></span>
                                <span></span>
                                <span></span>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-sm-6">
                        <div class="our-process-body">
                            <div class="our-process-icon">
                                <img src="{{asset('img/hr/processes/analyse.svg')}}" class="img-fluid" alt="Listenting - our process">
                                <h4>Analyzing</h4>
                            </div>
                              <div class="our-process-text">
                                  <p>To determine the right approach of solving problem and finding new opportunities, we make intense analysis</p>
                              </div>
                              <i class="fa fa-long-arrow-right arrow arrow2" aria-hidden="true"></i>
                              <div class="arrow-mobile">
                                <span></span>
                                <span></span>
                                <span></span>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-sm-6">
                        <div class="our-process-body">
                            <div class="our-process-icon">
                                <img src="{{asset('img/hr/processes/designing.svg')}}" class="img-fluid" alt="Listenting - our process">
                                <h4>Designing</h4>
                            </div>
                              <div class="our-process-text">
                                  <p>We begin by designing new business and technology solutions to tackle the challenges</p>
                              </div>
                              <i class="fa fa-long-arrow-right arrow arrow3" aria-hidden="true"></i>
                              <div class="arrow-mobile">
                                <span></span>
                                <span></span>
                                <span></span>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-sm-6">
                        <div class="our-process-body">
                            <div class="our-process-icon">
                                <img src="{{asset('img/hr/processes/delivery.svg')}}" class="img-fluid" alt="Listenting - our process">
                                <h4>Delivering</h4>
                            </div>
                              <div class="our-process-text">
                                  <p>We deliver the real world solution that drive competitive advantage and stakeholders’ value</p>
                              </div>
                              
                        </div>
                    </div>

                </div>
            </div>
        </section>

  @endsection

 


  @push('job-about-us')
  <script src="{{asset('js/owl.carousel.min.js')}}"> </script>
  <script>
    // ==========================================================
    //// our partners
    // =========================================================
 
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
{{-- // ==========================================================
//// our partners
// ========================================================= --}}
      <!-- Swiper JS -->
  <script src="{{asset('js/swiper-bundle.min.js')}}"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      speed: 600,
      parallax: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        type: 'progressbar',
      },
      loop: true,
      autoplay: {
            delay: 5000,
        },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    //   renderProgressbar: function (progressbarFillClass) {
    //   return '<span class="' + progressbarFillClass + '"></span>';
  
    });
  </script>
  @endpush