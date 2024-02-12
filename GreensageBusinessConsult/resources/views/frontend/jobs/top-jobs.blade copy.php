@extends('layouts.frontend-layouts')

@section('title')
  Top Jobs In Lagos | Nigeria
@endsection


@section('style')
<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
<link rel="stylesheet" type="text/css" href="css/cs-skin-elastic.css" />
<style>
  /* for pagination */
  .pagination-container{margin: 20px auto 0 auto}
  ul.pagination {
  position: relative;
  background: #fff;
  display: flex;
  padding: 10px 20px;
  border-radius: 50px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

ul.pagination li {
  list-style: none;
  line-height: 50px;
  margin: 0 5px;
}

ul.pagination li.pageNumber {
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
}

ul.pagination li a {
  display: block;
  text-decoration: none;
  color: var(--head-0);;
  font-weight: 600;
  border-radius: 50%;
}

ul.pagination li.pageNumber:hover a,
ul.pagination li.pageNumber.active a {
  background: var(--head-0);
  color: #fff;
}

ul.pagination li:first-child {
  margin-right: 30px;
  font-weight: 700;
  font-size: 20px;
}

ul.pagination li:last-child {
  margin-left: 30px;
  font-weight: 700;
  font-size: 20px;
}
</style>
@endsection
@section('script')
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>
<script>
  (function() {
    [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
      new SelectFx(el);
    } );
  })();
</script>
<script>
  // for pagination
  $(document).ready(function() {
        $(".next").click(function() {
          $(".pagination")
            .find(".pageNumber.active")
            .next()
            .addClass("active");
          $(".pagination")
            .find(".pageNumber.active")
            .prev()
            .removeClass("active");
        });
        $(".prev").click(function() {
          $(".pagination")
            .find(".pageNumber.active")
            .prev()
            .addClass("active");
          $(".pagination")
            .find(".pageNumber.active")
            .next()
            .removeClass("active");
        });
      });

</script>
@endsection

@section('content')

<section  class="job-hero">
  <div class="container">
   <div class="row">
       <div class="col-md-12">
           <div class="inner-wrap">
              <div class="content-wrap">
                <form>
                  <div class="wrap">
                      <div class="input-group keyword">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-search"></i></span>
                        </div>
                      <input type="text" class=" form-control" id="search-term" name="search"   placeholder="Job Title, or Company" />
                      </div>
                    
                    <div class="location">
                      <select class="cs-select cs-skin-elastic" name="location" id="select_by_location">
                      <option value="" disabled selected>Select a Location</option>
                      @foreach($locations as $location)
                      <option value={{$location->id}}>{{$location->name}}</option>
                      @endForeach
                    </select>
                    </div>
                    <div class="sector">
                      <select class="cs-select cs-skin-elastic" name="sector" id="select_by_sector">
                        <option value="" disabled selected>Select a Sector</option>
                        @foreach($sectors as $sector)
                        <option value={{$sector->id}}>{{$sector->name}}</option>
                        @endForeach
                      </select>
                    </div>
                    <div class="submit">
                      <button type="submit" class="btn btn-primary"  >
                        <i class="fa fa-search"></i>
                        </button>
                    </div>
                    
                    
                    
                  </div>
                </form>
              </div>
           </div>
       </div>
   </div>
  </div>
</section>


{{-- ////////////////end slider////////////////////////// --}}
<section id="job-intro">
  <div class="container">

          <div class="row">
            <div class="col-12">
              <h3>Top Jobs</h3>
            </div>
          </div>
      <div class="row paginated-list-data-wrapper-for-ajax">
          @include('frontend.jobs.paginated-list-data')    
     </div>    
  </div>
  <input type="hidden" name="hidden_page" id="hidden_page" value="1">{{-- this hidden input is here to capture the page numer of the pagination so tha the ajax search function can use it  --}}
</section>
  @endsection



  @push('paginated-list-data')
  <script>



///////////////pagination////////////////////
      $(document).ready(function(){
        $(document).on('click','.pagination-container .pagination a',function(e){
            e.preventDefault();
           var pageNumber = $(this).attr('href').split('page=')[1];//attr('href') will get the link of "a" whish is www.greensageconsult.test/top-jobs?page=3//.split('page=') will split the link at point page= in into an array ['www.greensageconsult.test/top-jobs?','3'] not including the split point(ie page=); therefor,  (this).attr('href').split('page=')[0] will produce 'www.greensageconsult.test/top-jobs?' while $(this).attr('href').split('page=')[1] will produce "3"// here, we are interested in the number "3" 
           $("#hidden_page").val(pageNumber);//assign pageNumber to the hidden input for changes
           getMorePage(pageNumber)
        });
///////////////////// search field ////////
        $('#search-term').on('keyup',function(){
            // e.preventDefault();
           var pageNumber = $("#hidden_page").val();//get the page number  value of that hidden input
            getMorePage(pageNumber)
        });
///////////////////// select by location
          $('#select_by_location').on('change',function(){
            // e.preventDefault();
          
           var pageNumber = $("#hidden_page").val();//get the page number  value of that hidden input
            getMorePage(pageNumber)
        });
 ////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////
        function getMorePage(pageNumber){
        var search = $('#search-term').val()//get the value of search term
        var selectByLocation = $('#select_by_location option:selected').val()//get the value of the selected option
        $.ajax({
              type:"GET",
              url:"{{route('paginate-more-jobs-ajax')}}"+"?page="+pageNumber,//we need the full link plus the pageNumber sent to the controller to paginate//http://xxx.com/ + ?page= + 4//4 is pageNumber//
              data:{
                'search_query': search,
                'selected_location':selectByLocation,
              },
              success:function(data){
                $('.paginated-list-data-wrapper-for-ajax').html(data)//.paginated-list-data-wrapper-for-ajax is the tag class to render result sent back by controller
              }
            })
      }

      })
  </script>
 
  @endpush

