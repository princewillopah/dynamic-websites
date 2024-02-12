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
   :root{
        --color-1:#64dd17;
    --bg-3: rgba(235,239,245,0.6);
    --head-0:rgb(37, 59, 92);
   }
   .pagination {
     display: flex;
    justify-content:center;
    margin-top:15px; 
  }

    .pagination li   :hover{background: var(--head-0);
        transition: .9s ease all;
        color:#fff;
}
  .pagination li a {font-size: 15px;
      text-decoration: none;
      color: var(--head-0);font-weight: 700;
      display: block;
      margin: auto;
      // line-height: 30px;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: var(--head-0);
    border-color:  var(--head-0);
}
  </style>

  <style>
 .filter-mobile{padding: 0!important}

.dropdown-check-list {
display: inline-block;
    width: 100%;
    margin-bottom: 20px;
}

.dropdown-check-list .anchor {
position: relative;
cursor: pointer;
display: inline-block;
padding: 5px 50px 5px 10px;
border: 1px solid #ccc;
  width: 100%
}

.dropdown-check-list .anchor:after {
position: absolute;
content: "";
border-left: 2px solid black;
border-top: 2px solid black;
padding: 5px;
right: 10px;
top: 20%;
-moz-transform: rotate(-135deg);
-ms-transform: rotate(-135deg);
-o-transform: rotate(-135deg);
-webkit-transform: rotate(-135deg);
transform: rotate(-135deg);
}

.dropdown-check-list .anchor:active:after {
right: 8px;
top: 21%;
}

.dropdown-check-list ul.items {
padding: 5px 10px 5px 10px;
display: none;
margin: 0;
border: 1px solid #ccc;
border-top: none;
}

.dropdown-check-list ul.items li {
list-style: none;
}
.dropdown-check-list ul.items li span.number{
  font-size: 12px;
  float: right
}
.dropdown-check-list.visible .anchor {
color: var(--head-0);
  font-weight: bold
}

.dropdown-check-list.visible .items {
display: block;
}
  </style>
@endsection 


@section('content')

<section  id="training-hero">
  <div class="container">
   {{-- <div class="row">
       <div class="col-md-12">
           <div class="inner"> --}}
              <div class="content">
                  <h3 class="">{{$format->name}}</h3>
                  @if($format->slug==='in-house-training')
                  <p> Our In house training courses are the most cost effective and efficient way to train your team. We provide development solution and ensure return on investment (RoI) is justified through the use of innovation and creative development Solutions.
                  </p>
                  @endif
              </div>
           {{-- </div>
       </div>
   </div> --}}
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
         {{-- <input type="text" class="form-control" placeholder="Filter By Name"> --}}
         @if($cats->count() > 0)
         <p>
           Filter {{$format->name}} <span>BY CATEGORY</span>
         </p>
         
          @foreach($category_of_courses_with_same_format as $cat)
          <div class="form-group">
            <input type="checkbox" class="category" name="category[]" value="{{$cat->id}}" >
            <label for="category">{{$cat->name}} ({{$cat->courses->count()}})</label>
          </div>
          @endforeach
         @endif
        
       </form>
       
     </div>
    </div>
    <div class="col-md-12 filter-mobile">
       <div id="list1" class="dropdown-check-list " tabindex="100">
        <form action=""> 
          @if($cats->count() > 0)
          <span class="anchor">Filter {{$format->name}} <span>BY CATEGORY</span></span>
          <ul class="items">
            @foreach($category_of_courses_with_same_format as $cat)
            <li class="">
              <input type="checkbox" class="category"  name="category[]"  value={{$cat->id}}>
            <span >{{$cat->name}}</span> 
            <span class="number">({{$cat->courses->count()}})</span>
            </li>
            @endforeach
          </ul>
        </div>
        @endif
      </form>
     </div>

    

    <div class="col-md-8 main-courses-desktop">
      <div class="main-courses">
        <div class="row">
          <div class="title">
            <h5><span style="font-weight: 600">Results Found:</span> {{$format_courses->count()}} of  {{$format_courses_count}} {{$format->name}} {{$format_courses_count > 1 || 0 ? " Courses":"Course"}}  </h5>
            <form name="sortProducts"  id="sortProducts">
              <input type="hidden" name="url" id="url_slug" value="{{$format->slug}}">
              <select name="sort" id="sortBy" class="custom-select">
                {{-- <option value="" >Sort By</option>
                <option value="newest_product" {{isset($_GET['sort']) && $_GET['sort']=='newest_product'? 'selected':''}}>Newest Products</option>
                <option value="alphabetical" {{isset($_GET['sort']) && $_GET['sort']=='alphabetical'? 'selected':''}}>Alphabetical Order</option>
               
                <option value="price_lowest" {{isset($_GET['sort']) && $_GET['sort']=='price_lowest'? 'selected':''}}>Lowest Price</option>
                <option value="price_hightest" {{isset($_GET['sort']) && $_GET['sort']=='price_hightest'? 'selected':''}}>Highest Price</option>
              --}} 
              <option value=""  disabled selected>Sort By</option>
              <option value="newest_product" id="sort_by_newest_product">Newest Products</option>
              <option value="alphabetical" id="sort_by_alphabetical">Alphabetical Order</option>
             
              <option value="price_lowest" id="sort_by_price_lowest">Lowest Price</option>
              <option value="price_hightest" id="sort_by_price_hightest">Highest Price</option>
            
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
  <input type="hidden" name="hidden_page" id="hidden_page" value="1">{{-- this hidden input is here to capture the page numer of the pagination so tha the ajax search function can use it  --}}
</section>
@endsection

@push('training')
{{-- <script>var product_url = "{{url(' / ')}}/product/";</script> --}}
<script>
  $(document).ready(function(){
/////for laravel sorting
    // $("#sort").on('change',function(){//whenever ths input (having the #sort id) changes, then submit its parent form
    //    this.form.submit();;//submit this//it is a get method by default
    // });
//------------------------PAGINATION LOGIC-----------------------------------------------------------
    $(document).on('click','.pagination li a',function(e){
            e.preventDefault();
           var pageNumber = $(this).attr('href').split('page=')[1];//attr('href') will get the link of "a" whish is www.greensageconsult.test/top-jobs?page=3//.split('page=') will split the link at point page= in into an array ['www.greensageconsult.test/top-jobs?','3'] not including the split point(ie page=); therefor,  (this).attr('href').split('page=')[0] will produce 'www.greensageconsult.test/top-jobs?' while $(this).attr('href').split('page=')[1] will produce "3"// here, we are interested in the number "3" 
          $("#hidden_page").val(pageNumber);//assign pageNumber to the hidden input for changes
          var slug = $("#url_slug").val();//get the  slug
          var filter = get_checkedboxes('category')
          // var x = `{{route('paginate-more-courses-ajax')}}`+"?page="+pageNumber,
          // alert(slug)
           getMorePage(pageNumber,slug,filter)
        });
//------------------------SORT BY  LOGIC-----------------------------------------------------------
      $('#sortBy').on('change',function(){
           var pageNumber = $("#hidden_page").val();//get the page number  value of that hidden input
           var slug =   $("#url_slug").val();
           var filter = get_checkedboxes('category')
            getMorePage(pageNumber,slug,filter)
        });
//------------------------Check category  LOGIC-----------------------------------------------------------
    $('.category').on('click',function(){//once checkbox clicked
           
            var filter = get_checkedboxes('category')//call checkbox array function and pass the class

           var pageNumber = $("#hidden_page").val();//get the page number  value of that hidden input
           var slug =   $("#url_slug").val();//get the page slug
          getMorePage(pageNumber,slug,filter)//send 
        });

      function get_checkedboxes(class_name){//checkbox array function
        var filter = [];//arrays of checkboxes carrying ids
        $('.'+class_name+':checked').each(function(){//once a checkbox(having the classname passed to it) is checked, add it to the filter array
          
              filter.push($(this).val());//add it
           })
           return filter;
      }

// //------------------------SORT BY  LOGIC-----------------------------------------------------------
//------------------------SORT BY  LOGIC-----------------------------------------------------------
//------------------------SORT BY  LOGIC-----------------------------------------------------------
//------------------------SORT BY  LOGIC-----------------------------------------------------------
//------------------------SORT BY  LOGIC-----------------------------------------------------------
//------------------------SORT BY  LOGIC-----------------------------------------------------------
//------------------------SORT BY  LOGIC-----------------------------------------------------------
//------------------------SORT BY  LOGIC-----------------------------------------------------------
//------------------------PAGINATION LOGIC-----------------------------------------------------------
function getMorePage(pageNumber,slug,filter){
         var sort_By = $('#sortBy option:selected').val();//get the value of the selected option
          
            $.ajax({
                  type:"GET",
                 url:'/training-courses/'+slug+'?page='+pageNumber,//we need the full link plus the pageNumber sent to the controller to paginate//http://xxx.com/ + ?page= + 4//4 is pageNumber//
                  data:{
                    // 'sortbyNewestProduct': sort_by_newest_product,
                    'sortBy':sort_By,
                    'filter':filter,//for check boxes

                  },
                  success:function(data){
                    $('.filter_product').html(data)//.paginated-list-data-wrapper-for-ajax is the tag class to render result sent back by controller
                  }
                })
          }
//------------------------AJAX LOGIC-----------------------------------------------------------


    });
</script>
<script>
  var checkList = document.getElementById('list1');
checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
  if (checkList.classList.contains('visible'))
    checkList.classList.remove('visible');
  else
    checkList.classList.add('visible');
}
</script>
@endpush


