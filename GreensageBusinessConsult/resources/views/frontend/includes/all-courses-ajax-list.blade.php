<div class="container">

    {{-- <div class="row">
      <div class="col-12 result">
        <h2>search results ({{$courses->count()}})</h2>
      </div>
    </div> --}}

    <div class="row">
    @foreach($courses as $course)
      <div class="col-lg-3 col-md-4 col-sm-4">


        <div class="card">
          {{-- <img class="card-img-top" src="{{asset('img/contact/bg-400-.png')}}" alt="Card image"> --}}
          <img src="{{asset('uploads/thumbnails/'.$course->thumbnail)}}" class="img-fluid card-img-top" alt="{{$course->title}}">
          <div class="card-body">
            <h4 class="card-title">{{$course->title}}</h4>
            <p class="card-text">{!! Str::limit($course->short_description, 40, '...') !!}</p>
            <span>{{$course->formated_amount}}</span>
          </div>
          <div class="card-footer">
            <a href="{{route('single-course',[$course->category->slug,$course->slug])}}" class="">view</a>
            <a href="{{route('training-route',$course->format->slug)}}">{{$course->format->name}}</a>
          </div>
        </div>

      </div>
    @endForeach
    <div class="col-12">
        {{$courses->links()}}
    </div>
       
    </div>
  </div>