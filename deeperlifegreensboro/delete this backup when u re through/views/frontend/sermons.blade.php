@extends('layouts.template')

@section('title')
Sermons
@endsection

@section('content')
    <section id="sermon-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp" data-wow-duration="2s">Sermons</h1>
                            <div class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="3s">
                                <span class="sub">Enrich yourself with the words</span>
                                <span  class="wow fadeInUp float-right navs" data-wow-delay="2s" data-wow-duration="3s">
                                <a  href="{{route('homepage')}}">Home</a> >
                                    Sermons
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section ><!-- /.about -->
    <section id="main-sermon">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="main-sermon-content" class="mb-5">
                        <h2 class="section-heading">today's sermon</h2>
                        <p>You will be happy for this</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <img class="img-fluid col-md-8 offset-md-2" src="img/sermons/sermon-today.jpg" alt="Chania">
                </div>
                <div class="col-md-12">
                    <div class="info">
                        <h4>what jesus sees in you</h4>
                        <div class="infos">
                            <div class="pastor">Pastor: <span>John Brown</span></div>
                            <div class="category">Category: <span>God, Prayer</span></div>
                            <div class="date">Date: <span>08 Mar 2018</span></div>
                        </div>
                    </div>
                    <div class="message col-md-8 offset-md-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ex nam sint voluptate. Animi asperiores aspernatur
                            culpa dolore enim fuga in, nam nulla perspiciatis quibusdam quos ratione reprehenderit soluta voluptate.</p>
                    </div>
                    <div class="readmoreSocial col-md-8 offset-md-2">
                        <a href="" class="readmore bttn-stretch bttn-md bttn-primary">Read More </a>
                        <div class="nav ml-auto socials">
                            <a href="" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="" class="nav-link youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="#" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            <a href="#" class="nav-link linkedin"><i class="fa fa-download" aria-hidden="true"></i></a>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- ======================== latest sermons ======================================= -->
    <section class="latest-sermons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-sermons-content">
                        <h2 class="section-heading">Popular Sermons</h2>
                        <p class="paragraph">Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="latest-sermons-card">
                        <div class="card" >
                            <div class="latest-sermons-img-date">
                                <img class="card-img-top" src="img/home/3.jpg" alt="Card image" style="width:100%">
                                <div class="latest-sermons-date">
                                    <h6>
                                        <span>10</span>MAR
                                    </h6>
                                </div>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title">What Must I Do To Be Save</h4>
                                <div class="latest-sermons-card-detail">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> <span class="name-title">Sermon From: </span><span class="name">Jorge Malone</span></p>
                                    <p><i class="fa fa-tag" aria-hidden="true"></i> <span class="name-title">Categories: </span><span class="name"> God, Pray</span></p>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="name-title"> March 10 on 9: </span><span class="name">00 am - 11:00 am</span></p>
                                </div>
                                <div class="entry-action">
                                    <a href="#"><i class="licon-camera-play"></i></a>
                                    <a href="#"><i class="licon-headphones"></i></a>
                                    <a href="#"><i class="licon-enter-down2"></i></a>
                                    <a href="#"><i class="licon-file-empty"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="latest-sermons-card">
                        <div class="card" >
                            <div class="latest-sermons-img-date">
                                <img class="card-img-top" src="img/home/4.jpg" alt="Card image" style="width:100%">
                                <div class="latest-sermons-date">
                                    <h6>
                                        <span>24</span>MAR
                                    </h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">The Second Coming of Christ</h4>
                                <div class="latest-sermons-card-detail">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> <span class="name-title">Sermon From: </span><span class="name">Jorge Malone</span></p>
                                    <p><i class="fa fa-tag" aria-hidden="true"></i> <span class="name-title">Categories: </span><span class="name"> God, Pray</span></p>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="name-title"> March 24 on 9: </span><span class="name">00 am - 11:00 am</span></p>
                                </div>
                                <div class="entry-action">
                                    <a href="#"><i class="licon-camera-play"></i></a>
                                    <a href="#"><i class="licon-headphones"></i></a>
                                    <a href="#"><i class="licon-enter-down2"></i></a>
                                    <a href="#"><i class="licon-file-empty"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="latest-sermons-card">
                        <div class="card" >
                            <div class="latest-sermons-img-date">
                                <img class="card-img-top" src="img/home/5.jpg" alt="Card image" style="width:100%">
                                <div class="latest-sermons-date">
                                    <h6>
                                        <span>15</span>MAY
                                    </h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Start a New Way of Living</h4>
                                <div class="latest-sermons-card-detail">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> <span class="name-title">Sermon From: </span><span class="name">Jorge Malone</span></p>
                                    <p><i class="fa fa-tag" aria-hidden="true"></i> <span class="name-title">Categories: </span><span class="name"> God, Pray</span></p>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="name-title"> May 15 on 9: </span><span class="name">00 am - 11:00 am</span></p>
                                </div>
                                <div class="entry-action">
                                    <a href="#"><i class="licon-camera-play"></i></a>
                                    <a href="#"><i class="licon-headphones"></i></a>
                                    <a href="#"><i class="licon-enter-down2"></i></a>
                                    <a href="#"><i class="licon-file-empty"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="latest-sermons-card">
                        <div class="card" >
                            <div class="latest-sermons-img-date">
                                <img class="card-img-top" src="img/home/3.jpg" alt="Card image" style="width:100%">
                                <div class="latest-sermons-date">
                                    <h6>
                                        <span>10</span>MAR
                                    </h6>
                                </div>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title">What Must I Do To Be Save</h4>
                                <div class="latest-sermons-card-detail">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> <span class="name-title">Sermon From: </span><span class="name">Jorge Malone</span></p>
                                    <p><i class="fa fa-tag" aria-hidden="true"></i> <span class="name-title">Categories: </span><span class="name"> God, Pray</span></p>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="name-title"> March 10 on 9: </span><span class="name">00 am - 11:00 am</span></p>
                                </div>
                                <div class="entry-action">
                                    <a href="#"><i class="licon-camera-play"></i></a>
                                    <a href="#"><i class="licon-headphones"></i></a>
                                    <a href="#"><i class="licon-enter-down2"></i></a>
                                    <a href="#"><i class="licon-file-empty"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="latest-sermons-card">
                        <div class="card" >
                            <div class="latest-sermons-img-date">
                                <img class="card-img-top" src="img/home/4.jpg" alt="Card image" style="width:100%">
                                <div class="latest-sermons-date">
                                    <h6>
                                        <span>24</span>MAR
                                    </h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">The Second Coming of Christ</h4>
                                <div class="latest-sermons-card-detail">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> <span class="name-title">Sermon From: </span><span class="name">Jorge Malone</span></p>
                                    <p><i class="fa fa-tag" aria-hidden="true"></i> <span class="name-title">Categories: </span><span class="name"> God, Pray</span></p>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="name-title"> March 24 on 9: </span><span class="name">00 am - 11:00 am</span></p>
                                </div>
                                <div class="entry-action">
                                    <a href="#"><i class="licon-camera-play"></i></a>
                                    <a href="#"><i class="licon-headphones"></i></a>
                                    <a href="#"><i class="licon-enter-down2"></i></a>
                                    <a href="#"><i class="licon-file-empty"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="latest-sermons-card">
                        <div class="card" >
                            <div class="latest-sermons-img-date">
                                <img class="card-img-top" src="img/home/5.jpg" alt="Card image" style="width:100%">
                                <div class="latest-sermons-date">
                                    <h6>
                                        <span>15</span>MAY
                                    </h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Start a New Way of Living</h4>
                                <div class="latest-sermons-card-detail">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> <span class="name-title">Sermon From: </span><span class="name">Jorge Malone</span></p>
                                    <p><i class="fa fa-tag" aria-hidden="true"></i> <span class="name-title">Categories: </span><span class="name"> God, Pray</span></p>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="name-title"> May 15 on 9: </span><span class="name">00 am - 11:00 am</span></p>
                                </div>
                                <div class="entry-action">
                                    <a href="#"><i class="licon-camera-play"></i></a>
                                    <a href="#"><i class="licon-headphones"></i></a>
                                    <a href="#"><i class="licon-enter-down2"></i></a>
                                    <a href="#"><i class="licon-file-empty"></i></a>
                                </div>
                            </div>
                        </div>
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