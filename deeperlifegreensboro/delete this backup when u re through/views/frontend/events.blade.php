@extends('layouts.template')

@section('title')
Events
@endsection

@section('content')

    <section id="event-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp" data-wow-duration="2s">Events</h1>
                            <div class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="3s">  <span class="sub cssanimation leFadeInLeft sequence">Take a tour with us</span> <span  class="wow fadeInUp float-right navs " data-wow-delay="2s" data-wow-duration="3s">
                                      <a  href="{{route('homepage')}}">Home</a> > Events</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="particles-js">
            <canvas class="particles-js-canvas-el" style="width: 100%;  height: 100%;" width="1349" height="800"></canvas>
        </div>
    </section ><!-- /.about -->

    <section id="latest-event">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h1>Latest event</h1>
                        <p>Experience God's Presence</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="img/sermons/sermon-today.jpg" alt="Chania">
                </div>
                <div class="col-md-6">
                    <div class="info">
                        <div class="date-place-info">
                            <div class="event-date">
                                <h6>
                                    <span>15</span>MAY
                                </h6>
                            </div>
                            <div class="event-date-body">
                                <h4>Exploring the christian faith</h4>
                                <div class="event-date-body-list">
                                    <p><i class="fa fa-calendar" aria-hidden="true"></i> <span class="name-title">Sermon From: </span><span class="name">Jorge Malone</span></p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="name-title">Categories: </span><span class="name"> God, Pray</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="message">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolorem
                                laudantium quisquam ut velit. A ab alias aut, dicta dignissimos
                                eligendi exercitationem ipsa magnam modi molestias saepe soluta voluptatem voluptates!
                            </p>
                        </div>
                        <div class="counter">
                            <ul class="event_timer">
                                <li><div id="day" class="event_num">2</div><div class="event_ss">day</div></li>
                                <li><div id="hour" class="event_num">22</div><div class="event_ss">hrs</div></li>
                                <li><div id="minute" class="event_num">29</div><div class="event_ss">min</div></li>
                                <li><div id="second" class="event_num">1</div><div class="event_ss">sec</div></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="main-events">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Up Coming events</h1>
                    <!--                <button class=" bttn-fill bttn-md bttn-primary">hiiiii</button>-->
                </div>
            </div>
            <div class="event">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/home/23.jpg" class="w-100 rounded" alt="Cinque Terre">
                    </div>
                    <div class="col-md-6">
                        <div class="events-text">
                            <h4>Seeing and Savoring Jesus Christ</h4>
                        </div>
                        <div class="event-meta">
                            <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>  March 01, 2018</a>
                            <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>  09:00 - 11:00</a>
                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>  11 Rose St, Brooklyn, NY</a>
                        </div>
                        <p>
                            Join us for an informational webinar about the U.S.-Japan COIL Initiative.
                            Learn about the initiative and receive general guidance.
                        </p>
                        <!--                                                <a href="#">Read More  <i class="fa fa-angle-double-right"></i></a>-->
                    </div>
                    <div class="col-md-3 bn">
                        <a class="btn">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/home/23.jpg" class="w-100 rounded" alt="Cinque Terre">
                    </div>
                    <div class="col-md-6">
                        <div class="events-text">
                            <h4>Seeing and Savoring Jesus Christ</h4>
                        </div>
                        <div class="event-meta">
                            <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>  March 01, 2018</a>
                            <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>  09:00 - 11:00</a>
                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>  11 Rose St, Brooklyn, NY</a>
                        </div>
                        <p>
                            Join us for an informational webinar about the U.S.-Japan COIL Initiative.
                            Learn about the initiative and receive general guidance.
                        </p>
                        <!--                                                <a href="#">Read More  <i class="fa fa-angle-double-right"></i></a>-->
                    </div>
                    <div class="col-md-3 bn">
                        <a class="btn">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/home/23.jpg" class="w-100 rounded" alt="Cinque Terre">
                    </div>
                    <div class="col-md-6">
                        <div class="events-text">
                            <h4>Speaker Interviews with J.Doe</h4>
                        </div>
                        <div class="event-meta">
                            <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>  March 19, 2018</a>
                            <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>  09:00 - 11:00</a>
                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>  17 Buit St, Center Disce, LA </a>
                        </div>
                        <p>
                            Join us for an informational webinar about the U.S.-Japan COIL Initiative.
                            Learn about the initiative and receive general guidance.
                        </p>
                        <!--                                                <a href="#">Read More  <i class="fa fa-angle-double-right"></i></a>-->
                    </div>
                    <div class="col-md-3 bn">
                        <a class="btn">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/home/23.jpg" class="w-100 rounded" alt="Cinque Terre">
                    </div>
                    <div class="col-md-6">
                        <div class="events-text">
                            <h4>Seeing and Savoring Jesus Christ</h4>
                        </div>
                        <div class="event-meta">
                            <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>  March 01, 2018</a>
                            <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>  09:00 - 11:00</a>
                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>  11 Rose St, Brooklyn, NY</a>
                        </div>
                        <p>
                            Join us for an informational webinar about the U.S.-Japan COIL Initiative.
                            Learn about the initiative and receive general guidance.
                        </p>
                        <!--                                                <a href="#">Read More  <i class="fa fa-angle-double-right"></i></a>-->
                    </div>
                    <div class="col-md-3 bn">
                        <a class="btn">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/home/23.jpg" class="w-100 rounded" alt="Cinque Terre">
                    </div>
                    <div class="col-md-6">
                        <div class="events-text">
                            <h4>Speaker Interviews with J.Doe</h4>
                        </div>
                        <div class="event-meta">
                            <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>  March 19, 2018</a>
                            <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>  09:00 - 11:00</a>
                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>  17 Buit St, Center Disce, LA </a>
                        </div>
                        <p>
                            Join us for an informational webinar about the U.S.-Japan COIL Initiative.
                            Learn about the initiative and receive general guidance.
                        </p>
                        <!--                                                <a href="#">Read More  <i class="fa fa-angle-double-right"></i></a>-->
                    </div>
                    <div class="col-md-3 bn">
                        <a class="btn">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
            <div class="paginate">
                <ul class="pagination justify-content-center">
                    <li class="page-item "><a class="page-link" href="#"><<</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">>></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ======================== latest sermons ======================================= -->




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