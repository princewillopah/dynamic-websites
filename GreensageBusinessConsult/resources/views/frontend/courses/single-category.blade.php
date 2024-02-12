@extends('layouts.frontend-layouts')

@section('title')
{{$category->name}}
@endsection



@section('content')

<section  id="single-category-hero">
  <div class="container">
   <div class="row">
       <div class="col-md-12">
           <div class="single-category-hero-inner">
              <div class="single-category-hero-content">
                  <h3 class="">{{$category->name}}</h3>
              </div>
           </div>
       </div>
   </div>
  </div>
</section>

{{-- //////////////////  end our-clients   ////////////////////////////////////////////////////// --}}
<section  class="single-list-courses">
  <div class="container">
   <div class="row">
    <div class="col-md-8">
      <div class="main-courses">
        <div class="row">
          <div class="title">
            <h5><span style="font-weight: 600">Results Found:</span> {{$category->courses->count()}} {{$category->courses->count() > 1 || 0?" Courses":"Course"}}</h5>
          </div>
           @foreach($category_courses as $course )
           <div class="col-sm-12 inner">

           
             <a href="{{route('single-course',[$category->slug,$course->slug])}}">
               <div class="row">
                  <div class="col-6">
                    <h5>{{$course->title}}</h5>
                  </div>
                  <div class="col-3">
                    <span>{{$course->format->name}}</span>
                  </div>
                  <div class="col-2">
                    <span>{{$course->formated_amount}}</span>
                  </div>
                  <div class="col-1">
                    <i class="fa fa-angle-right"></i>
                  </div>
                </div>
            </a>
             
             
            </div>
        @endforeach
        </div>
          {{-- <div class="load-more">
            <h5>Load More</h5>
          </div> --}}
      </div>
    </div>
    <div class="col-md-4">
      <div class="popular-single-categories">
        <div class="side-content sticky-top">
          @if($popularCoursesFromRelatedCat->count() > 0)  
          <div class="popular-courses">
            <h4>Popular Courses from this category</h4>
            @foreach($popularCoursesFromRelatedCat as $popular)
            <div class="course-wrap">
              <a href="{{route('single-course',[$popular->category->slug,$popular->slug])}}">
              <div class="img">
                {{-- <img src="{{$popular ? asset('uploads/coverImgs/'.$popular->thumbnail) : asset('uploads/defaultImgs/thumb_img_.jpg')}}" class="img-fluid" alt="{{$course->title}}"> --}}
              
            
              <img src="{{asset('uploads/coverImgs/'.$popular->thumbnail)}}" class="img-fluid" alt="{{$popular->title}}">
   
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
  </div>
</section>

<section  class="other-categories">
  <div class="container">
   <div class="row">
    <div class="col-12 others">
      <h2 class="title">OTHER CATEGORIES</h2>
    </div>
    @foreach($relatedCategories as $r_category)
      <div class="col-mg-3 col-sm-4 col-xs-6 ">
        <div class="related-cat">
          <a href="{{route('single-category',$r_category->slug)}}"> {{$r_category->name}}</a>
        </div>
        
      </div>
    @endforeach
    
   </div>
  </div>
</section>



  @endsection