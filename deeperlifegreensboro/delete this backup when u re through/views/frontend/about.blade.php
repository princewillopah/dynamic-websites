@extends('layouts.template')

@section('title')
About Us
@endsection

@section('content')

    <section id="about-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp" data-wow-duration="2s">About</h1>
                            <div class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="3s">
                             <span  class="wow fadeInUp navs" data-wow-delay="2s" data-wow-duration="3s">
                                      <a  href="{{route('homepage')}}">Home  </a> > About</span></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section ><!-- /.about -->

    <section id="who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h1> Who we are</h1>
                        <p>About Deeperlife Bible Church Greensboro</p>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="who-we-are">
                        <p>
                            It’s a pleasure to have you here. We are a religious organization, aiming to reach the unconverted, unconvinced, and uncommitted people in order to bring them closer to God. By being one with us, you get to transform other people’s lives by showing them their purpose, empowering them, and enriching them through the words of the Lord.We do not just preach the Lord’s words empty-handed. We teach others about the meaning of God’s message and emulate His ways for as long as we could. As you join our growing family, may God bless you with your life and lift you up in every way possible. In Jesus’ Name we pray, Amen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heads">
                        <h1>Our Services</h1>
                    </div>
                </div>
                <div class="col-md-4 offset-md-4">
                    <div class="services">
                        <h3>SUNDAY</h3>
                        <p> Sunday School @ 10:00am</p>
                        <p>Worship Service @ 11:00am</p>
                    </div>
                    <hr>
                    <div class="services">
                        <h3>WEDNESDAY</h3>
                        <p>Bible Study @ 7:00pm</p>
                    </div>
                    <hr>
                    <div class="services">
                        <h3>FRIDAY</h3>
                        <p>Faith Clinic @ 7:00pm</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="become-a-member">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="become-a-member-cover">
                        <h6>A Place For You</h6>
                        <h2>Find a place to connect and grow through a small group, class, or regular gathering.</h2>
                        <a href="" class="btn btn-primary">BECOME A MEMBER</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endsection