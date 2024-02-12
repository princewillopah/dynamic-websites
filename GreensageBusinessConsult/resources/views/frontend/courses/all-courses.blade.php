@extends('layouts.frontend-layouts')

@section('title')
All Courses
@endsection

@section('style')
<style>
   :root{
    --head-0:rgb(37, 59, 92);
    --bg-3: rgba(235,239,245,0.6);
} 

</style>
@endsection


@section('content')
<section  id="all-courses-hero">
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

                  {{-- <div class="form-wrap">
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
                  </div> --}}

              </div>
           </div>
       </div>
   </div>
  </div>
</section>


<section id="all-courses-content" class="section">
  <div class="ajax-wrapper">
    @include('frontend.includes.all-courses-ajax-list')
  </div>

</section>

@endsection
@push('script')
<script>
  $(document).ready(function(){
    $(document).on('click','.bs-pagination ul.pagination a',function(event){//when pages re clicked, target the ul.pagination anchor tag
      event.preventDefault();//stop the pagination btn from reloading the page
      var page  = $(this).attr('href').split('page=')[1];//assuming http://xxx.com/?page=4 //[0]=http://xxx.com//[0] = page=4//we need the page number "4", thats why we split at ('page=') to give the next element "4" at index [1]
      getMoreUser(page)//the ajax//pass page number to it
       

    });
  });
  function getMoreUser(pageNum){
    $.ajax({
      type:"GET",
      url:"{{route('get-all-courses-ajax')}}"+"?page="+pageNum,//http://xxx.com + ?page= + 4
      success:function(data){
        $('.ajax-wrapper').html(data)
      }
    })
  }
</script>
@endpush