@if($format_courses_count > 0)

@foreach($format_courses as $course )
<div class="row">
    <div class="col-sm-12 inner">
      <a href="{{route('single-course',[$course->category->slug,$course->slug])}}">
        <div class="course-list">
            <div class="column-1">
              <h5>{{$course->title}}</h5>
            </div>
            <div class="column-2">
              <span>{{$course->format->name}}</span>
            </div>
            <div class="column-3">
              <span>{{$course->formated_amount}}</span>
            </div>
          </div>
      </a>  
      </div>
  </div>
@endforeach
    {{-- pagination --}}
        @if(isset($_GET['sort']) && !empty($_GET['sort'])) {{--  ['sort'] is the paramiter --}}{{-- $_GET['sort'] is whatsoever select option value selected--}}
        {{ $format_courses->appends(['sort' =>$_GET['sort']])->links()}}
        @else
          {{ $format_courses->links()}}
        @endif
     {{--end  pagination 'vendor.pagination.custom-pagination'--}}

@else
<div class="row">
 <div class="col-sm-12 inner">
    <div class="column-1" style="width:100%">
      <h5>No Courses Yet</h5>
    </div>
  </div>
</div>
@endif