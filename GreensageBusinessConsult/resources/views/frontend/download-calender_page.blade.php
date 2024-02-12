@extends('layouts.frontend-layouts')

@section('title')
   Download Greensage Calendar for this year
@endsection

@section('content')
<section  id="registration-hero" class="registration-hero">
   <div class="container">
            <div class="registration-hero-inner">
               <div class="registration-hero-inner-content ">
                   <h3 class="">Download our  <span>Calendar</span></h3>
               </div>
            </div>
   </div>
 </section>


 <section id="download-calender" class="download-page">
   <div class="container">
      <div class="download-calender">
         <div class="download-calender-content">
               <h2>Thank you. You can now download the form</h2>
               <a href="{{route('get-calender')}}" class="btn-sub"> <i class="fa fa-download"></i>Download</a>
             
            </div>
      </div>
   </div>
</section>


@endsection
{{-- @push('course-reg-js') --}}
{{-- <script>

</script>

@endpush --}}