@extends('layouts.frontend-layouts')

@section('title')
search result
@endsection

@section('content')
<section  id="search-hero">
  <div class="container">
   <div class="row">
       <div class="col-md-12">
           <div class="content-inner">
              <div class="content">
                <div class="top">
                  <h2>LEADING PROVIDER
                    OF TRAINING COURSES </h2>
                    <h3>BROWSE COURSES BY TITLE, COURSE TYPE OR CATEGORY</h3>
                </div>
                
                  <div class="form-wrap">
                       <form class="form-inline" action="{{route('filter-2')}}" method="GET">
                          <input type="text" class="form-control col-sm-3"  name="title" value="{{request()->query('title')}}"  placeholder="Course Title">
                              <select class="form-control col-sm-4" name="category" id="sel1">
                                  <option value="">Select Category</option>
                                  @foreach($cats as $cat)
                                  <option value={{$cat->id}}>{{$cat->name}}</option>
                                  @endForeach
                              </select>
                        
                       
                          <select class="form-control col-sm-3 " name="format" id="sel1">
                            <option value="">Select Training Type</option>
                            @foreach($formats as $format)
                                <option value={{$format->id}}>{{$format->name}}</option>
                              @endForeach
                          </select>
                         
                  
                          <div class="col-sm-2 btn">
                              <input type="submit" class="btn btn-primary" value="Find Course" />
                          </div>
                          
                        </form> 
                  </div>

              </div>
           </div>
       </div>
   </div>
  </div>
</section>


<section id="search-content" class="section">
    <div class="container">

      <div class="row">
        <div class="col-12 result">
          <h2>search results ({{$courses->count()}})</h2>
        </div>
      </div>

      <div class="row">
      @foreach($courses as $course)
        <div class="col-md-6 col-sm-6">
          <div class="wrapper">
            <div class="left">
               {{-- <p class="sub">course</p> --}}
               <h5>{{$course->title}}</h5>
               <p>{{$course->formated_amount}}</p>
            </div>
            <div class="right">
              <div class="right-top">
                <p class="right-top-left"><span>Caterory:</span> {{$course->category->name}}</p>
                {{-- <p class="right-top-right">₦{{$course->amount}}</p> --}}
              </div>
              <div class="right-middle">
               <h5>{!! Str::limit($course->short_description, 30, '...') !!}</h5>
              </div>
              <div class="right-bottom">
                <p class="right-bottom-left"><span>Course type:</span> {{$course->format->name}}</p>
                  <a href="{{route('single-course',[$course->category->slug,$course->slug])}}" class="right-bottom-right">view</a>
              </div>
            </div>
          </div>


        </div>
      @endForeach
       
      </div>
    </div>
  </section>
@endsection