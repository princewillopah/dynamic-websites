@extends('layouts.frontend-layouts')

@section('title')
{{$course->title}}
@endsection



@section('content')

<section  id="single-course-hero">
  <div class="container">
   <div class="row">

       <div class="col-md-12">
            <div id="hero-wrap">
                  <div id="inner">
                        <div id="content">
                            <h2 id="">{{$course->title}}</h2>
                            <h5>{{$course->short_description}}</h5>
                            <div id="other-content">
                              <p><span>Course Type:</span> <a href="{{route('training-route',$course->format->slug)}}">{{$course->format->name}}</a></p>
                              <p><span>Course Category:</span> <a href="{{route('single-category',$course->category->slug)}}">{{$course->category->name}}</a></p>
                            </div>
                        </div>
                      </div>


                          <div class="detail-price ">
                              <div class="detail-inner-banner" >
                                <p>{{$course->format->name}} Course</p>
                                
                              </div> 
                              <div class="detail-inner-main" >
                                <p>Get this course at <span>{{$course->formated_amount}}</span></p>
                                <a href="{{route('course-registration-form')}}" class="btn">Sign Up For This Course</a>
                              </div>
                          </div>
            </div>


       </div>

    </div>
  </div>
</section>

{{-- //////////////////end our-clients////////////////////////////////////////////////////// --}}
<section  id="single-courses">
  <div class="container">
   <div class="row">

         <div class="col-md-8">
           <div class="inner">
             <h5 class="course-title">{{$course->title}}</h5>
             <img src="{{asset('uploads/coverImgs/'.$course->cover_img)}}" class="img-fluid" alt="{{$course->title}}">
             {{-- @if($course && $course->cover_img)
                  <img src="{{asset('uploads/coverImgs/'.$course->cover_img)}}" class="img-fluid" alt="{{$course->title}}">
                @else

                  <img src="{{asset('uploads/defaultImgs/cover_img_.jpg')}}" class="img-fluid w-25 h-25"  alt="{{$course->title}}" >
                @endif --}}
             <div class="course-main-content">
              {!!$course->description!!}
             </div>
             {{-- <a href="{{route('single-course')}}">view Course</a> --}}
            </div>
          </div>


          <div class="col-md-4 ">
            <div class="side-content sticky-top">
              @if($related_popular_courses->count() > 0)  
              <div class="popular-courses">
                <h4>Popular Courses</h4>
                @foreach($related_popular_courses as $popular)
                <div class="course-wrap">
                  <a href="{{route('single-course',[$popular->category->slug,$popular->slug])}}">
                  <div class="img">
                    {{-- <img src="{{$popular ? asset('uploads/coverImgs/'.$popular->thumbnail) : asset('uploads/defaultImgs/thumb_img_.jpg')}}" class="img-fluid" alt="{{$course->title}}"> --}}
                  
                
                  <img src="{{asset('uploads/thumbnails/'.$popular->thumbnail)}}" class="img-fluid" alt="{{$popular->title}}">
       
              </div>
                  <div class="wrap-conten">
                    <h5>{{$popular->title}}</h5>
                    <p>{{$popular->formated_amount}}</p>
                  </div>
                </a>
                </div>
                @endforeach
              </div>
              @endif
            

              <div class="working-days">
                <h2> Working hours</h2>
                  <p><span class="days" >Monday</span><span class="time">	9:00 am - 5.00 pm</span></p>
                  <p><span class="days" >Tuesday</span><span class="time">	9:00 am - 5.00 pm</span></p>
                  <p><span class="days" >Wednesday</span><span class="time">	9:00 am - 5.00 pm</span></p>
                  <p><span class="days" >Thursday</span><span class="time">	9:00 am - 5.00 pm</span></p>
                  <p><span class="days" >Friday</span><span class="time">	9:00 am - 5.00 pm</span></p>
                  <p><span class="days" >Saturday</span><span class="time">	9:00 am - 5.00 pm</span></p>
                  <p><span class="days" >Sunday</span><span class="time">	9:00 am - 5.00 pm</span></p>

              </div>
            </div>
          </div>

   </div>
  </div>
</section>



{{-- //////////////////end our-clients////////////////////////////////////////////////////// --}}

@if($related_courses->count() > 0)
<section  class="other-categories">
  <div class="container">
   <div class="row">
    <div class="col-12 others">
      <h2 class="title">OTHER COURSES FROM THE SAME CATEGORIES</h2>
      {{-- <div class="multiseparator"></div> --}}
    </div>
    @foreach($related_courses as $r_course)
      <div class="col-mg-3 col-sm-4 col-xs-6 ">
        <div class="related-cat">
          <a href="{{route('single-course',[$r_course->category->slug,$r_course->slug])}}"> {{$r_course->title}}</a>
        </div>
        
      </div>
    @endforeach
    
   </div>
  </div>
</section>

@endif



  @endsection