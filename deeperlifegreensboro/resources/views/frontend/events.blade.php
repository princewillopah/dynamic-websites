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
                    {{-- <img class="img-fluid" src="img/sermons/sermon-today.jpg" alt="Chania"> --}}
                     {{-- <img class="img-fluid" src="{{asset('/uploads/events/'.$latest_event->image)}}" alt="{{$latest_event->title}} here "> --}}
                 <img class="img-fluid" src="{{asset('uploads/events/'.$latest_event->image)}}" alt="{{$latest_event->title}} here ">
                </div>
                <div class="col-md-6">
                    <div class="info">
                        <div class="date-place-info">
                            <div class="event-date">
                                <h6 style="text-transform:uppercase;">
                                    <span> {{$latest_event->eventStartDate->format('d')}}</span> {{$latest_event->eventStartDate->format('M')}}
                                   
                                </h6>
                            </div>
                            <div class="event-date-body">
                                {{-- <h4>{{strtoupper($latest_event->title)}}</h4> --}}
                            <h4>{{ucfirst($latest_event->title)}}</h4>
                                <div class="event-date-body-list">
                                 <p><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="name-title">Location: </span><span class="name">{{ucfirst($latest_event->place)}}</span></p>
                                    <p><i class="fa fa-hourglass-end" aria-hidden="true"></i> <span class="name-title">Time: </span><span class="name"> {{$latest_event->eventStartDate->format('H:i a')}} - {{$latest_event->eventEndDate->format('H:i a')}}</span></p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="message">
                            <p>
                            {!! Str::limit($latest_event->description, 500, ' ...') !!} <span><a style="color:#555; font-weight:700" href="{{route('single-event',$latest_event->slug)}}">Read More</a></span>
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
                        {{-- <div id="clock">
                          <ul id="clock">

                          </ul>
                        </div> --}}

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
            @foreach ($all_event as $event)
            <div class="event">
                <div class="row">
                    <div class="col-md-3">
                        
                        <img class="w-100 h-100 rounded" src="{{asset('uploads/events/'.$event->image)}}" alt="{{$event->title}} here ">
                    </div>
                    <div class="col-md-6">
                        <div class="events-text">
                            <h4>{{ucfirst($event->title)}}</h4>
                        </div>
                        <div class="event-meta">
                            <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>  {{date_format($event->eventStartDate,'F d, Y')  }}</a>
                            <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>  {{$event->eventStartDate->format('H:i a')}} - {{$event->eventEndDate->format('H:i a')}}</a>
                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ucfirst($event->place)}}</a>
                        </div>
                        <p>
                            {!! Str::limit($event->description, 300, ' ...') !!}
                        </p>
                    
                    </div>
                    <div class="col-md-3 bn">
                      <a class="btn" href="{{route('single-event',$event->slug)}}">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="paginate">
                <ul class="pagination justify-content-center">
                    {{$all_event->links()}}
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

@section('script')
        <script>
            function initTimer()
            {
                if($('.event_timer').length)
                {
                    // Uncomment line below and replace date
                    // var target_date = new Date("August 7, 2019").getTime();

                    // comment lines below
                    var date = new Date();
                    date.setDate(date.getDate() + 7);
                    // var target_date = date.getTime();
                    var target_date = new Date("October 23, 2019").getTime();
                    //----------------------------------------

                    // variables for time units
                    var days, hours, minutes, seconds;

                    var d = $('#day');
                    var h = $('#hour');
                    var m = $('#minute');
                    var s = $('#second');

                    setInterval(function ()
                    {
                        // find the amount of "seconds" between now and target
                        var current_date = new Date().getTime();
                        var seconds_left = (target_date - current_date) / 1000;

                        // do some time calculations
                        days = parseInt(seconds_left / 86400);
                        seconds_left = seconds_left % 86400;

                        hours = parseInt(seconds_left / 3600);
                        seconds_left = seconds_left % 3600;

                        minutes = parseInt(seconds_left / 60);
                        seconds = parseInt(seconds_left % 60);

                        // display result
                        d.text(days);
                        h.text(hours);
                        m.text(minutes);
                        s.text(seconds);

                    }, 1000);
                }
            }
            initTimer();
        </script>                
@endsection