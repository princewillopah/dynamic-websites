@extends('layouts.frontend-layouts')

@section('title')
  Apply for jobs in nigeria | Job website In Lagos | Nigeria
@endsection

@push('apply-now-css')
<link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />
{{-- toast --}}


<style>
/* /////input field ///// */

</style>
@endpush

@section('style')

@endsection

@section('script')
{{-- <script src="{{asset('js/classie2.js')}}"></script> --}}

<script>
//  
</script>
@endsection

  @section('content')
  <form action="{{route('apply-now')}}" method="post" enctype="multipart/form-data">
  {{-- <label for="inp" class="inp">
    <input type="text" id="inp" placeholder="&nbsp;">
    <span class="label">Label</span>
    <span class="focus-bg"></span>
  </label>  --}}
  
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
                 
                    <label for="inp" class="inp">
                        <input type="text" id="inp" name="name" value="{{ old('name') }}" placeholder="&nbsp;">
                        <span class="label">Name</span>
                        <span class="focus-bg"></span>
                    </label> 

                    <label for="inp" class="inp">
                        <input type="text" id="inp" name="email" value="{{ old('email') }}" placeholder="&nbsp;">
                        <span class="label">Email</span>
                        <span class="focus-bg"></span>
                    </label> 
                    <label for="inp" class="inp">
                        <input type="text" id="inp" name="job_code"  placeholder="&nbsp;" value="{{$job_code?$job_code: old('job_code')}}">
                        <span class="label">Job Code</span>
                        <span class="focus-bg"></span>
                    </label> 

                    <div class="radio-box">
                        <p>Sex: </p>
                        <div class="radio">
                            <label class="rad-label">
                                <input type="radio" class="rad-input"  name="sex" value="Male" {{ old("sex") == 'Male' ? 'checked' : '' }}>
                                <div class="rad-design"></div>
                                <div class="rad-text">Male</div>
                                </label>
                            
                                <label class="rad-label">
                                <input type="radio" class="rad-input"  name="sex" value="Female" {{ old("sex") == 'Female' ? 'checked' : '' }}>
                                <div class="rad-design"></div>
                                <div class="rad-text">Female</div>
                            </label>
                        </div>
                      </div>
                      <div class="box">
                        <input type="file" name="cv_upload" id="file-2" value="{{ old('cv_upload') }}" hidden class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple />
                        <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Upload CV</span></label>
                      </div>
                      {{-- <div class="box">
                        <input type="file" name="cv_upload" id="file-2" hidden class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple />
                        <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Upload CV</span></label>
                      </div> --}}
                      <input type="submit" class="btn-job" value="Submit">
              
              </div>
        </div>
     </div>
  </section>
  </form>
  @endsection

 


  @push('apply-now-js')
  {{-- for file imput --}}
 <script src="{{asset('js/custom-file-input.js')}}"></script>
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