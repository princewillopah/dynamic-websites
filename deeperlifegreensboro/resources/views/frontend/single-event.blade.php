@extends('layouts.template')

@section('title')
Events - {{$single_event->title}}
@endsection

@section('content')

    {{-- <section id="event-single">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <div >
                         <span  >
                            <a  href="{{route('homepage')}}">Home</a> >  <a  href="{{route('our-event')}}">Events</a> > {{$single_event->title}}
                        </span>
                    </div> 
                </div>
            </div>
        </div>
    </section ><!-- /.about --> --}}

     <section class="single-event">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro">
                            <span  >
                                    <a  href="{{route('homepage')}}">Home</a> >  <a  href="{{route('our-event')}}">Events</a> > {{$single_event->title}}
                           </span>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="title">
                            <h1>{{$single_event->title}}</h1>
                    </div>

                      <img class="img-fluid" src="{{asset('uploads/events/'.$single_event->image)}}" alt="{{$single_event->title}} here ">
                      <div class="info">
                            <div class="event-meta">
                                    <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>  {{date_format($single_event->eventStartDate,'F d, Y')  }}</a>
                                    <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>  {{$single_event->eventStartDate->format('H:i a')}} - {{$single_event->eventEndDate->format('H:i a')}}</a>
                                    <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{$single_event->place}}</a>
                             </div>
                            <div class="message">
                                <p>
                                {!! $single_event->description !!}
                                </p>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </section>

   
    {{-- <section id="main-events">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Up Coming events</h1>
                   
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
                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{$event->place}}</a>
                        </div>
                        <p>
                            {{$event->description}}
                        </p>
                    
                    </div>
                    <div class="col-md-3 bn">
                        <a class="btn" href="">FIND OUT MORE</a>
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
    </section>   --}}

    <!-- ======================== latest sermons ======================================= -->

    <!-- ======================== subscription ======================================= -->
    {{-- <section class="subscription">
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
    </section> --}}

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
                    var target_date = new Date("September 23, 2019").getTime();
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