@extends('layouts.frontend-layouts')

@section('title')
  Apply for jobs in nigeria | Job website In Lagos | Nigeria
@endsection

@push('apply-now-css')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" /> --}}

@endpush


  @section('content')
  <form action="{{route('apply-now')}}" method="post" enctype="multipart/form-data">

  
  @csrf
       
  <section id="personal-info">
     <div class="container">
         <div class="row">
             <div class="col-6 offset-3">
                 <div class="row">
                    @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                       <div class="alert alert-danger col-md-12 mt-2">
                           {{$error}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endforeach
                            @endif
                            @if(session('error'))
                            <div class="alert alert-danger col-md-12 ">
                                <strong>{{session('error')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                 </div>
             </div>
         </div>
        <div class="personal-info">
           <div class="personal-info-content center">
                 <h2>Job Application Form</h2>
                 
                        <input type="text" id="inp" name="name" value="{{ old('name') }}" placeholder="&nbsp;">
                   

                        <input type="text" id="inp" name="email" value="{{ old('email') }}" placeholder="&nbsp;">
                        
                   
                        <input type="text" id="inp" name="job_code"  placeholder="&nbsp;" value="{{$job_code?$job_code: old('job_code')}}">
                      

                    <div class="radio-box">
                        <p>Sex: </p>
                        <div class="radio">
                            <label class="rad-label">
                                <input type="radio" class="rad-input"  name="sex" value="Male" {{ old("sex") == 'Male' ? 'checked' : '' }}>
                       
                                </label>
                            
                                <label class="rad-label">
                                <input type="radio" class="rad-input"  name="sex" value="Female" {{ old("sex") == 'Female' ? 'checked' : '' }}>
                            
                            </label>
                        </div>
                      </div>
                      <div class="box">
                        <input type="file" name="cv_upload" id="file-2" value="{{ old('cv_upload') }}" hidden class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple />
                    
                      <input type="submit" class="btn-job" value="Submit">
              
              </div>
        </div>
     </div>
  </section>
  </form>
  @endsection

 


  @push('apply-now-js')
  {{-- for file imput --}}
 {{-- //for toast --}}
 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <script>
   @if(Session::has('success'))
   toastr.options =
   {
       "closeButton" : true,
       "progressBar" : true
   }
           toastr.success("{{ session('success') }}");
   @endif
 </script> --}}
  @endpush