@extends('layouts.frontend-layouts')

@section('title')
  About Us
@endsection

@section('script')
<script type="text/javascript">


//////////slider////////////////////////
////////////////////////////////////////

</script>
@endsection

@section('content')

<section  id="about-about-hero">
  <div class="container">
           <div class="inner">
              <div class="about-hero-content">
                  <h3 class=""><span>Greensage</span> is about your vision</h3>
              </div>
   </div>
  </div>
</section>


{{-- ////////////////end slider////////////////////////// --}}
<section id="about-about-us">
  <div class="container">
      <div class="row "> 
                  <div class="col-md-6">
                      <div class="abt">
                          <div class="abt-inner">
                          <h4>About GreenSage Business Consult</h4>
                          <p>The GREENSAGE BUSINESS CONSULT LIMITED is an established company that provides corporate training solutions tailored to meet the needs of companies and to individuals. We provide top-notch training solutions allowing individuals and organizations to achieve their full potential.</p>
                          <p>At Greensage Business Consult Limited, we apply very high standards and values. We are dedicated to providing exceptional training and development services without compromising on standards, both on personal and professional levels.</p>  
                          <p>We provide trainings for SMEs and large corporations. We know that knowledge is that gap between your organization and its proposed goal, therefore we bridge that gap!</p>
                        
                              <a href="{{route('contact')}}" class="btn btn-read-more">Contact Us</a>
                          </div>
                      </div>
                      
                  </div>
                  <div class="col-md-6">
                      <div class="img ">
                          {{-- <img src="img/home/cat-2.jpg" class="img-fluid" alt="best place to learn in lagos"> --}}
                          <video
                          id="my-video"
                          class="video-js -vjs-custom-theme vjs-theme-city"
                          controls
                          preload="auto"
                          poster="img/about/intro.png"
                          data-setup="{}"
                          muted
                          autoplay
                        >
                          <source src="img/home/intro.mp4" type="video/mp4" />
                         
                        </video>
                      </div>
                  </div>


         
      </div>
  </div>
</section>
   {{-- ////////////////service////////////////////////// --}}
<section id="about-services">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="heading">Our Services</h3>
      </div>
      <div class="col-md-4">
        <div class="about-services-container">
            <div class="img">
              <img src="img/about/0.jpg" class="img-fluid" alt="consultation in lagos">
            </div>
            <div class="about-services-content">
             <div class="about-services-content-inner">
               <h4>INDIVIDUAL PROFESSIONAL TRAININGS</h4>
               <p>The goal is to help individuals harness their potential through our professional training experience. Our individual training provides custom learning paths that meet your unique training needs.</p>
             </div>
            </div>
        </div>   
      </div>

      <div class="col-md-4">
        <div class="about-services-container">
            <div class="img about-mobile">
              <img src="img/about/2.jpg" class="img-fluid" alt="consultation in lagos">
            </div>
            <div class="about-services-content">
             <div class="about-services-content-inner">
               <h4>CORPORATE/STAFF TRAININGS</h4>
             <p>Our corporate training courses provide your employees with in-demand industry knowledge, hands-on practice, and confidence. We are committed to delivering the best possible learning experience by equipping your staff with unique methodologies that help them perform excellently and deliver maximally.</p>
              </div>
            </div>
        </div>
        
      </div>

      <div class="col-md-4">
        <div class="about-services-container">
            <div class="img">
              <img src="img/about/1.png" class="img-fluid" alt="consultation in lagos">
            </div>
            <div class="about-services-content">
             <div class="about-services-content-inner">
               <h4>CONSULTANCY</h4>
                <p>Our team of professionals are available to consult on issues ranging from marketing and sales to planning and project management. We’ve been doing this for years and can say without sentiments, we are the best.</p>
              </div>
            </div>
        </div>
           
      </div>

      <div class="col-md-12 customize">
        <div class="row">
          <div class="col-md-4">
            <img src="img/about/3.jpg" class="img-fluid" alt="consultation in lagos">
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-12">
                <h3>CUSTOMIZED PRIVATE TRAININGS</h3>
              </div>
              <div class="col-md-8">
                <p>In Greensage’s private and instructor-led course setting, content is delivered only to the company’s selected team and is customized to address the individual participants’ and the company’s specific needs. Discussions and context of the private course are set on the company’s deliverables and challenges, so they are immediately productive and help build real-life professional improvement</p>
                <p>We have a network of experienced professional trainers, providing extensive knowledge and experience of private industry, business and government enterprises which allows us to develop industry-leading training courses and seminars.</p>
              </div>
              <div class="col-md-4 list">
              <p class="p-list-head">The benefits of Greensage’s Customized Private Training options available, including:</p>
                <p><span class="icon"><i class="fa fa-long-arrow-right"></i> </span>
                  <span class="text"> Customization</span>
                </p>

                <p><span class="icon"><i class="fa fa-long-arrow-right"></i> </span>
                  <span class="text"> Cost-effectiveness</span>
                </p>

                <p><span class="icon"><i class="fa fa-long-arrow-right"></i> </span>
                  <span class="text"> Location Convenience</span>
                </p>

                <p><span class="icon"><i class="fa fa-long-arrow-right"></i> </span>
                  <span class="text"> Interactivity</span>
                </p>

                <p><span class="icon"><i class="fa fa-long-arrow-right"></i> </span>
                  <span class="text"> Content is dynamically adapted to suit group needs and pace</span>
                </p>
           

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
{{-- /////////////////////////////////// --}}
<section id="our-values">
  <div class="container">
    <div class="row ">

      <div class="col-md-5 main-val">
        <div class="about-values-content">
          <div class="about-values-content-inner">
            <h4>Vision Statement</h4>
             <p>Our vision is to provide cutting edge learning experiences through excellent and experienced educators, thereby creating a platform for our trainees to stand out and compete in the global market</p>
          </div>
        </div>
      </div>
      <div class="col-md-7 others">
        <div class="row">
            <div class="col-md-12">
            <div class="about-values-content">
              <div class="about-values-content-inner">
                <h4>Our Company Mantra</h4>
                <p>‘Sharpen Your Edge’ – this is at the core of that we do, and is experienced by those who trust us with their people development</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="about-values-content">
              <div class="about-values-content-inner">
                <h4>Mission Statement</h4>
              <p>Providing top-notch facilitators, first class delivery, and State of the art training centers</p>
              </div>
            </div>
          </div>
              <div class="col-md-12">
              <div class="about-values-content">
                <div class="about-values-content-inner">
                  <h4>Core Values</h4>
                <p>T.A.P: Top-notch service, Accountability, Professionalism</p>
                </div>
              </div>
            </div>
        </div>
       

      </div>
      
      
     

    </div>
  </div>
</section>
    
{{-- ////////////////// our-clients////////////////////////////////////////////////////// --}}
<section id="about-our-clients">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <h2>Our Major Clients</h2>
          </div>
           <div class="col-12">
               <div class="row">
                  <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                      <div class="img">
                          <img src="img/about/our-clients/5.jpeg" class="img-fluid" alt="greensageconsult-client">
                      </div>
                  </div>
                  <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                    <div class="img">
                        <img src="img/about/our-clients/9.png" class="img-fluid" alt="greensageconsult-client">
                    </div>
                </div> 
                <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                  <div class="img">
                      <img src="img/about/our-clients/access.jpg" class="img-fluid" alt="greensageconsult-client | access bank logo | learning place | oursourcing ">
                  </div>
              </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                      <div class="img">
                          <img src="img/about/our-clients/capitalweb management liited.png" class="img-fluid" alt="greensageconsult-client">
                      </div>
                  </div>
                  <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                    <div class="img">
                        <img src="img/about/our-clients/sme mall.png" class="img-fluid" alt="greensageconsult-client">
                    </div>
                </div>
                {{-- <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                  <div class="img">
                      <img src="img/about/our-clients/oxford group logo.png" class="img-fluid" alt="greensageconsult-client">
                  </div>
              </div> --}}
              <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                <div class="img">
                    <img src="img/about/our-clients/Sumeru-Brand-Logo-2.png" class="img-fluid" alt="greensageconsult-client">
                </div>
            </div>

                    <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                      <div class="img">
                          <img src="img/about/our-clients/1.png" class="img-fluid" alt="greensageconsult-client">
                      </div>
                  </div>
                  <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                      <div class="img">
                          <img src="img/about/our-clients/2.png" class="img-fluid" alt="greensageconsult-client">
                      </div>
                  </div>
                  <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                      <div class="img">
                          <img src="img/about/our-clients/adx.png" class="img-fluid" alt="greensageconsult-client">
                      </div>
                  </div>
                  <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                      <div class="img">
                          <img src="img/about/our-clients/4.jpeg" class="img-fluid" alt="greensageconsult-client">
                      </div>
                  </div>
                 
                  <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                      <div class="img">
                          <img src="img/about/our-clients/6.png" class="img-fluid" alt="greensageconsult-client">
                      </div>
                  </div>
                  <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                      <div class="img">
                          <img src="img/about/our-clients/7.png" class="img-fluid" alt="greensageconsult-client">
                      </div>
                  </div>
                  <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                      <div class="img">
                          <img src="img/about/our-clients/8.png" class="img-fluid" alt="greensageconsult-client">
                      </div>
                  </div> 
                  <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                    <div class="img">
                        <img src="img/about/our-clients/hs.png" class="img-fluid" alt="greensageconsult-client">
                    </div>
                </div> 
                   
               </div>
           </div>
          
      </div>
  </div>
</section>
{{-- //////////////////end our-clients////////////////////////////////////////////////////// --}}

  @endsection