@extends('layouts.frontend-layouts')

@section('title')
   Course Registration
@endsection
@push('course-reg-css')
{{-- <link rel="stylesheet" href="dist/jquery-datepicker/jquery-ui.min.css"> --}}
<script>

    </script>
@endpush
@section('content')
<section  id="registration-hero" class="registration-hero">
   <div class="container">
            <div class="registration-hero-inner">
               <div class="registration-hero-inner-content ">
                   <h3 class=""><span>Course</span> Registration</h3>
               </div>
            </div>
   </div>
 </section>


{{-- <livewire:course-registration-form/> --}}
{{-- @livewire('course-registration-form') --}}

@include('frontend.registration._patials')






@endsection
@push('course-reg-js')
<script>
//    var today = new Date();

// var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();

   var dateControl = document.querySelector('input[type="date"]');
dateControl.min = '2021-06-30';
// dateControl.max  = '2021-06-30';
// dateControl.value = '2021-06-30';
// dateControl.step  = 
</script>

@endpush