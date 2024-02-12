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


{{-- <livewire:course-registration-form/> --}}
@livewire('download-calendar-form')

@endsection
{{-- @push('course-reg-js')
<script>

</script>

@endpush --}}