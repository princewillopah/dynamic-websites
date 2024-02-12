@extends('layouts.frontend-layouts')

@section('title')
  {{$job->title}} | Top Jobs In Lagos | Nigeria
@endsection


@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/set1.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
@endsection
@section('script')
<script src="{{asset('js/classie2.js')}}"></script>
<script src="{{asset('js/custom-file-input.js')}}"></script>

<script>
  (function() {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
      (function() {
        // Make sure we trim BOM and NBSP
        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
        String.prototype.trim = function() {
          return this.replace(rtrim, '');
        };
      })();
    }

    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
      // in case the input is already filled..
      if( inputEl.value.trim() !== '' ) {
        classie.add( inputEl.parentNode, 'input--filled' );
      }

      // events:
      inputEl.addEventListener( 'focus', onInputFocus );
      inputEl.addEventListener( 'blur', onInputBlur );
    } );

    function onInputFocus( ev ) {
      classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
      if( ev.target.value.trim() === '' ) {
        classie.remove( ev.target.parentNode, 'input--filled' );
      }
    }
  })();
</script>
@endsection

@section('content')

<section  class="single-hero">
  <div class="container">
   <div class="row">
       <div class="col-md-12">
           <div class="inner-wrap">
              <div class="content-wrap">
               <h3 class="job-title">{{$job->title}}</h3>
               <a href="{{route('apply-now-form-page',$job->job_code)}}">Apply Now</a>
              </div>
           </div>
       </div>
   </div>
  </div>
</section>


{{-- ////////////////end slider////////////////////////// --}}
<section id="single-job-intro">
  <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="row">

           <div class="col-lg-9 col-md-8">
              <div class="single-job-info">
                <div class="row">
                        <div class="col-12">
                          <h5>Job Information</h5>
                        </div>
                            <div class="col-sm-6">
                              <div class="job-content">
                                <div class="icon">
                                  <img src="{{asset('img/icon/checkmark.svg')}}" class="img-fluid" alt="{{$job->industry->name}}">
                                </div>
                                <div class="job-content-inner">
                                  <h5>Job Title</h5>
                                  <p>{{$job->title}}</p>
                                </div>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="job-content">
                                <div class="icon">
                                  <img src="{{asset('img/icon/checkmark.svg')}}" class="img-fluid" alt="{{$job->industry->name}}">
                                </div>
                                <div class="job-content-inner">
                                  <h5>Employer Name</h5>
                                  <p>{{$job->company_name}}</p>
                                </div>
                              </div>
                          </div>

                              <div class="col-sm-6">
                                <div class="job-content">
                                  <div class="icon">
                                    <img src="{{asset('img/icon/checkmark.svg')}}" class="img-fluid" alt="{{$job->industry->name}}">
                                  </div>
                                  <div class="job-content-inner">
                                    <h5>Sector</h5>
                                    <p>{{$job->industry->name}}</p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="job-content">
                                <div class="icon">
                                  <img src="{{asset('img/icon/checkmark.svg')}}" class="img-fluid" alt="{{$job->industry->name}}">
                                </div>
                                <div class="job-content-inner">
                                  <h5>Location</h5>
                                  <p>{{$job->location->name}}</p>
                                </div>
                              </div>
                          </div>

                          <div class="col-sm-6">
                            <div class="job-content">
                              <div class="icon">
                                <img src="{{asset('img/icon/checkmark.svg')}}" class="img-fluid" alt="{{$job->industry->name}}">
                              </div>
                              <div class="job-content-inner">
                                <h5>Job Type</h5>
                                <p>{{$job->job_type}}</p>
                              </div>
                            </div>
                          </div>

                      <div class="col-sm-6">
                        <div class="job-content">
                          <div class="icon">
                            <img src="{{asset('img/icon/checkmark.svg')}}" class="img-fluid" alt="{{$job->industry->name}}">
                          </div>
                          <div class="job-content-inner">
                            <h5>Posted On</h5>
                            <p>{{$job->formattedDate($job->created_at)}}</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="job-content">
                          <div class="icon">
                            <img src="{{asset('img/icon/checkmark.svg')}}" class="img-fluid" alt="{{$job->industry->name}}">
                          </div>
                          <div class="job-content-inner">
                            <h5>Contact Email</h5>
                            <p>hr@greensagebconsult.com</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="job-content">
                        <div class="icon">
                          <img src="{{asset('img/icon/checkmark.svg')}}" class="img-fluid" alt="{{$job->industry->name}}">
                        </div>
                        <div class="job-content-inner">
                          <h5>Job Code</h5>
                          <p>{{$job->job_code}}</p>
                        </div>
                      </div>
                    </div>
          
                </div>
              </div>

              <div class="single-job-description">
                <h4 class="title">Job Description</h4>
                <div class="single-job-description-content">
                  {!!$job->description!!}
                </div>
              </div>
           </div>
           <div class="col-lg-3 col-md-4">
              <div class="apply-info sticky-top">
                <div class="dead-line">
                    <div class="icon">
                     <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="deadline">
                      <p>Deadline</p>
                      <h5>{{$job->formatted_date}}</h5>
                    </div>
                    <div class="icon-fade">
                      <i class="fa fa-hourglass"></i>
                     </div>
                </div>
                <div class="apply-now">

                  <div class="col-md-12 mt-2">
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
                  @if(session('success'))
                  <div class="alert alert-success col-md-12 ">
                      <strong>{{session('success')}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

                  <h5 class="title">Apply Below</h5>
                  <form action="{{route('direct-job-apply')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" hidden name="job_id" value={{$job->id}}>
                    <section class="content bgcolor-4">
                     
                      <span class="input input--madoka">
                        <input class="input__field input__field--madoka" type="text" id="input-31" name="name" />
                        <label class="input__label input__label--madoka" for="input-31">
                          <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                          </svg>
                          <span class="input__label-content input__label-content--madoka">Name</span>
                        </label>
                      </span>
                      <span class="input input--madoka">
                        <input class="input__field input__field--madoka" type="email" name="email" id="input-32" />
                        <label class="input__label input__label--madoka" for="input-32">
                          <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                          </svg>
                          <span class="input__label-content input__label-content--madoka">Email</span>
                        </label>
                      </span>
                    </section>

                    <div class="cntr">
                      <span class="sex">Sex: </span>
                      <label for="rdo-1" class="btn-radio">
                        <input type="radio" id="rdo-1" name="sex" value="Male">
                        <svg width="20px" height="20px" viewBox="0 0 20 20">
                          <circle cx="10" cy="10" r="9"></circle>
                          <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                          <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                        </svg>
                        <span>Male</span>
                      </label>
                      <label for="rdo-2" class="btn-radio">
                        <input type="radio" id="rdo-2" name="sex" value="Female">
                        <svg width="20px" height="20px" viewBox="0 0 20 20">
                          <circle cx="10" cy="10" r="9"></circle>
                          <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                          <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                        </svg>
                        <span>Female</span>
                      </label>
                    </div>

                    <div class="box">
                      <input type="file" name="cv_upload" id="file-2" hidden class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple />
                      <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Upload CV</span></label>
                    </div> 
                    <button type="submit" class="btn">Submit</button>
                  </form>
                </div>
              </div>
           </div>
         </div>
       </div>
      </div>
    </div>
      @if($relatedjobs->count() > 0)
      <div class="row relatedJobs">
        <div class="col-12">
          <h4>Related Jobs</h4>
        </div>
       
       @foreach($relatedjobs as $rjob)
        <div class="col-md-6">
          <a href="{{route('single-job',[$rjob->id,$rjob->slug])}}">
             <div class="related-job">
               <div class="title">
                     <h5>{{$rjob->title}}</h5>
                     <span><span class="postdate">posted: </span>{{$rjob->created_at->diffForHumans()}}</span>
               </div>
          
              <div class="other-r">
                <div class="jtype">
                  <span>Job type</span>
                  <h6>{{$rjob->job_type}}</h6>
                </div>
                <div class="jlocation">
                  <span>Location</span>
                  <h6>{{$rjob->location->name}}</h6>
                </div>
                <div class="jsector">
                  <span>Sector</span>
                  <h6>{{$rjob->industry->name}}</h6>
                </div>
                <div class="jdate">
                  <span>Due Date </span>
                  <h6>{{$rjob->formattedDate($rjob->due_date)}}</h6>
                </div>
              </div>
          </div>
          </a>
         
        </div>
       @endforeach
       
      </div>
       @endif
     {{-- </div> --}}
  </div>
</section>

  @endsection