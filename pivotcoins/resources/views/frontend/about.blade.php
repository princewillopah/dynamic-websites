@extends('layouts.frontend')

@section('title')
    About
@endsection

@section('content')

    <section id="bg-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp">Trade In The Moment, <br> Invest in The Future</h1>
                             {{-- <h3 class="wow fadeInRight">Your Success</h3> --}}
                            {{-- <div class="wow fadeInUp">
                                <span class="sub cssanimation leFadeInLeft sequence">Take a tour with us</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-us" class="sections">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-10 offset-md-1">
                    <div class="about-us-main">
                        <p>Pivotcoins was founded at the end of 2016 by the team
                            of experts in blockchain programming and IT engineers.
                            The current members of our altcoins mining team come from different
                            scientific disciplines, but our common faith in
                            cryptocurrencies has brought us together.</p>
                    </div>
                    <hr>
                </div> --}}
                <div class="col-md-6">
                    <img class="img-fluid" src="img/about/aboutus.jpg" alt="">
                </div>
                <div class="col-md-6">
                     <div class="about-us-main">
                        <h2>About Pivotcoins</h2>
                           <p>
                                Pivotcoins is an investment company that provide world class Cryptocurrency investment solutions, 
                                opportunities, trading, mining, private exchange and expertise to institutions, individuals and their advisers. 
                                We are uniquely positioned to capitalize on the massive opportunity
                                Cryptocurrencies offer with the objective of helping our clients to build better futures for themselves.
                            </p>

                          <p>  Pivotcoins is backed by a team of world-class financial experts and the best technology talent.
                               Our talented team of data scientists, financial gurus, software engineers and Information 
                               Security Analyst  have previously worked at such companies as Amazon and Google.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section id="about-us-vision" class="sections">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                            <div class="about-us-vision-main">
                                <h3 class="h3">A Short History</h3>
                                <p>Pivotcoins was founded at the end of 2016 by the team of experts
                                     in blockchain programming and IT engineers. The current members 
                                     of our mining team come from financial and scientific 
                                     disciplines, but our common faith in cryptocurrencies has brought us
                                      together
                                </p>
                                <h3 class="h3">Our Value</h3>
                                <p> 
                                    Pivotcoins is committed to a set of important standards that characterizes the relationships we have with our esteem 
                                    investors and partners, and we follow every decision taken from these standards strickly. 
                                </p>
                                <h3 class="h3">Our Mission</h3>
                                <p>
                                    Pivotcoins is dedicated to empowering individuals, institutions and companies to trade and invest, with confidence, in an
                                    innovative and reliable environment; supported 
                                    by best-in-class personal service and uncompromising integrity.
                                </p>
                            </div>
                        </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="img/about/1.jpg" alt="">
                    </div>
               
    
                </div>
    
            </div>
        </section>
    <section id="about-us-vission" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    {{-- <div class="about-img">
                        <img src="{{asset('img/about/about-us.png')}}" class="img-fluid" alt="about-us-image">
                    </div> --}}
                    <div class="vid">
                        <video autoplay loop muted playsinline style="width:100%;height:100%">
                            {{-- <source src="{{asset('img/about/crystal.webm')}}" type="video/webm"> --}}
                            <source src="{{asset('img/about/crystal.mp4')}}" type="video/mp4">
                        </video> 
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-us-main">
                        <h2>Why Choose Pivotcoins</h2>
                       <div class="why-chose-us-list">
                           <i class="fa fa-angle-double-right"></i>
                          <p class=""><span class="topic">security</span>:  <span class="content pl-2"> We provide full protections against DDoS attacks, full data encryption and other forms of security attacks</span> </p>
                       </div>
                       <div class="why-chose-us-list">
                        <i class="fa fa-angle-double-right"></i>
                       <p class=""><span class="topic">Customer support</span>:  <span class="content pl-2"> You are the reasons we are here. satsifying your needs is the top of our priorities</span> </p>
                      </div>
                      <div class="why-chose-us-list">
                        <i class="fa fa-angle-double-right"></i>
                       <p class=""><span class="topic">expertise</span>:  <span class="content pl-2"> We have put together the few of the best experts in the industry for successful investment</span> </p>
                      </div>
                      <div class="why-chose-us-list">
                        <i class="fa fa-angle-double-right"></i>
                        <p class=""><span class="topic">Payouts</span>:  <span class="content pl-2">withdrawals requests are processed promptly with no forms of delay.</span> </p>
                     </div>
                     <div class="why-chose-us-list">
                        <i class="fa fa-angle-double-right"></i>
                       <p class=""><span class="topic">No Tricks</span>:  <span class="content pl-2">Great and realistic plans are placed for your investment and returns.</span> </p>
                    </div>
                    <div class="why-chose-us-list">
                        <i class="fa fa-angle-double-right"></i>
                       <p class=""><span class="topic">Referrals</span>:  <span class="content pl-2"> Our Referrals Programs gives you the opportunities to put a mimimum of 5% bonus of your referrals' deposits in your pocket</span> </p>
                    </div>



                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- <section id="about-us-vission" class="sections">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="{{asset('img/about/about-us.png')}}" class="img-fluid" alt="about-us-image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-us-main">
                        <h2>how we came to be</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto aspernatur blanditiis consectetur cum eos illo iste minima recusandae repudiandae! A amet at cumque esse facere nostrum veritatis voluptatem voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos, doloribus enim et fuga itaque libero nobis optio pariatur praesentium quia, vel. Asperiores consequatur esse molestiae, ratione rem similique suscipit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem blanditiis quibusdam rerum tempora? Ad adipisci alias aperiam aspernatur debitis dolor enim laboriosam libero modi, nam porro repellendus totam voluptatem?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id magnam necessitatibus non provident quo unde vero voluptate? Minus, placeat, qui! Ex explicabo hic maxime molestias nihil saepe temporibus ut?</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="msg">

                    </div>
                </div>
                <div class="col-md-6">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </section> --}}
@endsection



{{--@section('style')--}}
{{--@endsection--}}

{{--@section('script')--}}
{{--@endsection--}}