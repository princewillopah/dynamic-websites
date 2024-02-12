@extends('layouts.frontend-layouts')

@section('title')
  COURSE CATEGORIES 
@endsection

@section('script')

@endsection

@section('content')

<section  id="all-cat-hero">
  <div class="container">
   <div class="row">
       <div class="col-md-12">
           <div id="all-cat-hero-inner">
              <div class="all-cat-hero-content">
                  <h3 class="">Course Categories</h3>
              </div>
           </div>
       </div>
   </div>
  </div>
</section>


{{-- ////////////////end slider////////////////////////// --}}
<section id="all-cats">
  <div class="container">
    <div class="row">
        @foreach($categories as $cat)
        <div class="col-md-4 col-sm-6">
            {{-- <div class="course-cat-wrapper" style="height:100px; background-repeat: no-repeat; background-size: contain;background: url({{asset('uploads/category/cards/'.$cat->card_img)}}">
                {{$cat->name}}
                <img src="{{asset('uploads/category/icons/'.$cat->icon)}}" alt="">
            </div> --}}
            
            <div class="card">
                <img class="card-img-top" src="{{asset('uploads/category/cards/'.$cat->card_img)}}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">{{$cat->name}}</h4>
                  <p class="card-text">{{$cat->courses->count() === 1 ?  '1 Course' :$cat->courses->count().' Courses'}}</p>
                  <a href="{{route('single-category',$cat->slug)}}" class="btn btn-primary">Visit Courses</a>
                </div>
              </div>
        </div>
        @endforeach
        
    </div>
  </div>
</section>
   {{-- ////////////////service////////////////////////// --}}

{{-- //////////////////end our-clients////////////////////////////////////////////////////// --}}

  @endsection