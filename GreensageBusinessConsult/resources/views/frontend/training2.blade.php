@extends('layouts.frontend-layouts')

@section('title')
  IN-HOUSE TRAINING
@endsection

@section('script')
<script>
$("li").click(function () {
  $(this).addClass("active").siblings().removeClass("active");
});
 </script>

@endsection
@section('style')
      <style>
       
  </style>
@endsection 


@section('content')

<section  id="training-hero">
  <div class="container">
   <div class="row">
       <div class="col-md-12">
           <div class="inner">
              <div class="content">
                  <h3 class="cssanimation leFadeInLeft sequence">{{$format->name}}</h3>
                  @if($format->slug==='in-house-training')
                  <p> Our In house training courses are the most cost effective and efficient way to train your team. We provide development solution and ensure return on investment (RoI) is justified through the use of innovation and creative development Solutions.
                  </p>
                  @endif
              </div>
           </div>
       </div>
   </div>
  </div>
</section>


{{-- ////////////////end slider////////////////////////// --}}
@if($format->slug==='in-house-training')
<section id="training-intro">
  <div class="container">
      <div class="main-content">
          <div class="content">         
            <p>Our In house training courses are customized and developed with your organizational objectives as its core guidelines. It is a complete learning solution delivered at your location at your preferred time. They are completely standard courses to suit your specific learning objectives
            </p>

            <p>Our team of experienced consultants can develop entirely new training courses that will meet your training needs. <span>Contact us: <a href="{{route('contact')}}" class="contact-us-inline">trainings@greensageconsult.org</a></span>
            </p>    
      </div>
      </div>
  </div>
</section>
@endif


<section  class="single-list-courses">
  <div class="container">
   <div class="row">
    <div class="col-md-4 filter-desktop ">
     <div class="search sticky-top">
       <form action="">
         <input type="text" class="form-control" placeholder="Filter By Name">
         @if($cats->count() > 0)
         <p>
           Filter {{$format->name}} <span>BY CATEGORY</span>
         </p>
         
          @foreach($category_of_courses_with_same_format as $cat)
          <div class="form-group">
            <input type="checkbox" id="category" name="category[]" >
            <label for="category" data-content="{{$cat->name}}">{{$cat->name}} ({{$cat->courses->count()}})</label>
          </div>
          @endforeach
         @endif
        
       </form>
       
     </div>
    </div>
    <div class="col-md-12 filter-mobile">
      <div class="search">
        <form action="">
          <input type="text" class="form-control" placeholder="Filter By Name">
          @if($cats->count() > 0)
          <p>
            Filter {{$format->name}} <span>BY CATEGORY</span>
          </p>
          
           @foreach($cats as $cat)
           <div class="form-group">
             <input type="checkbox" id="todo" name="todo" value="todo">
             <label for="todo" data-content="{{$cat->name}}">{{$cat->name}}</label>
           </div>
           @endforeach
          @endif
         
        </form>
        
      </div>
     </div>

    <div class="col-md-8 main-courses-desktop">
      <div class="main-courses">
        <div class="row">
          <div class="title">
            <h5><span style="font-weight: 600">Results Found:</span> {{$format_courses->count()}} of  {{$format_courses_count}} {{$format->name}} {{$format_courses_count > 1 || 0 ? " Courses":"Course"}}  </h5>
            <form name="sortProducts"  id="sortProducts">
              <input type="hidden" name="url" id="url" value="{{$format->slug}}">
              <select name="sort" id="sort" class="custom-select">
                {{-- <option selected>Custom Select Menu</option> --}}
                <option value="" >Sort By</option>
                <option value="newest_product" {{isset($_GET['sort']) && $_GET['sort']=='newest_product'? 'selected':''}}>Newest Products</option>
                <option value="alphabetical" {{isset($_GET['sort']) && $_GET['sort']=='alphabetical'? 'selected':''}}>Alphabetical Order</option>
                {{-- <option value="popularity">Popularity</option> --}}
                <option value="price_lowest" {{isset($_GET['sort']) && $_GET['sort']=='price_lowest'? 'selected':''}}>Lowest Price</option>
                <option value="price_hightest" {{isset($_GET['sort']) && $_GET['sort']=='price_hightest'? 'selected':''}}>Highest Price</option>
              </select>
            </form>
          </div>
        </div>
        <div class="filter_product">
              @include('frontend.includes.ajax_course_list')
          </div>      
      </div>
    </div>
    
   </div>
  </div>
</section>

  @endsection