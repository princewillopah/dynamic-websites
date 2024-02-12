@extends('layouts.frontend-layouts')

@section('title')
{{$course->title}}
@endsection



@section('content')

<section  class="single-course-hero">
  <div class="container">
   <div class="row">
       <div class="col-md-12">
           <div class="inner">
              <div class="content">
                  <h3 class="">{{$course->title}}</h3>
              </div>
           </div>
       </div>
   </div>
  </div>
</section>

{{-- //////////////////end our-clients////////////////////////////////////////////////////// --}}
<section  class="single-category-courses">
  <div class="container">
   <div class="row">

         <div class="col-md-8">
           <div class="inner">
             <h5>{{$course->title}}</h5>
             <span class="type">{{$course->format->name}}</span>
             <img src="{{asset('uploads/coverImgs/'.$course->cover_img)}}" alt="">
             <div>
              {!!$course->description!!}
             </div>
             {{-- <a href="{{route('single-course')}}">view Course</a> --}}
            </div>
          </div>
          <div class="col-md-4">
            <div class="side-content">
              
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