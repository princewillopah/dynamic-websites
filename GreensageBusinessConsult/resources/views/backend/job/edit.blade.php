@extends('layouts.dashboardLayout')

@section('title')
Updating {{$job->title}}
@endsection

@section('style')
{{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
<link rel="stylesheet" href="dist/jquery-datepicker/jquery-ui.min.css">
{{-- <link rel="stylesheet" href="/resources/demos/style.css"> --}}
{{-- <link rel="stylesheet" href="dist/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css"> --}}
<style>
    /* .ui-widget-header .ui-icon {background-image: url(images/ui-icons_222222_256x240.png);} */
</style>
@endsection

@section('script')
<script src="dist/jquery-datepicker/jquery-ui.js"></script>

 {{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script> --}}
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
  {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
  {{-- <script src="dist/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js"></script> --}}
  {{-- <script src="js/datepicker.min.js"></script> --}}
<script src="{{ asset('ckeditor-standard/ckeditor.js') }}"></script>
<script>
    // CKEDITOR.replace( 'full-description' );

    CKEDITOR.replace( 'full-description', {
    filebrowserUploadUrl: "{{route('ckeditor.image_upload.store', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
<script>
   $(document).ready(function(){
                                //  $.datepicker.setDefaults( $.datepicker.regional[ "" ] );
                                $('#due_date').datepicker({
                                    language: 'en',
                                    // clearButton: 'true',
                                    autoClose: 'true',
                                    timepicker: 'true',
                                    minDate: new Date() // Now can select only dates, which goes after today
                                });
         
                             });
    </script>

@endsection

@section('content')
 <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <a href="{{URL::previous()}}" class="btn btn-outline-primary"> <i class="fa fa-arrow-left"></i> Back</a>
                        <div class="ms-auto text-end ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">    Editing {{$job->title}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             

                      <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8 offset-md-2" style="min-height: 450px;">
                        @include('includes.messages')

                        <form method="POST" action="{{ route('jobs.update', $job->id) }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Job Title</label>
                                <input type="text" id="title" placeholder="Enter Job Title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $job->title }}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Company Name</label>
                                <input type="text" id="company_name" placeholder="Enter Company name" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{  $job->company_name }}">
                                @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Job Type</label>
                                <select  id="job_type" name="job_type" class="form-control" value="{{$job->job_type}}">
                                    <option value="" disabled hidden>Select Course Format</option>
                                    {{-- <option value="">Select Course Format</option> --}}
                                    <option value="Full Time" {{($job->job_type == "Full Time")?'selected':''}}>Full time</option>
                                    <option value="Part Time" {{($job->job_type == "Part Time")?'selected':''}}>Part time</option>
                                    <option value="Intern" {{($job->job_type == "Intern")?'selected':''}}>Intern</option>
                                    <option value="Contract" {{($job->job_type == "Contract")?'selected':''}} >Contract</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Short Description</label>
                                <textarea  id="short_description" rows="3" placeholder="Enter Short Description" class="form-control @error('short_description') is-invalid @enderror" name="short_description" >{{  $job->short_description }}</textarea>
                               
                                @error('short_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-control-label">Full Description</label>
                                {{-- <textarea  id="description" rows="5" placeholder="Enter Full Description" class="form-control @error('description') is-invalid @enderror" name="description" >{{ old('description') }}</textarea> --}}
                                <textarea class="form-control"id="full-description" role="5" name="description" placeholder="Enter Full Description. Press enter if you need to go to second paragraph"  class="form-control @error('description') is-invalid @enderror" name="description">{{ $job->description }}</textarea>
                                  
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="due_date">Job Expiry date</label>
                                <input type="text" class="form-control  @error('due_date') is-invalid @enderror"  id="due_date" name="due_date" data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd" value="{{$job->due_date}}">
                                @error('due_date')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Location</label>
                                <select name="location" id="location" class="form-control" value="{{  $job->location }}">
                                  
                                    {{-- <option value="" disabled>Select Course Category</option> --}}
                                    {{-- @foreach($locations as $location)
                                        <option value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach --}}
                                    @foreach($locations as $location)
                                    <option value="{{$location->id}}" {{($location->id == $job->location_id)?'selected':''}}>
                                        {{$location->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Sector</label>
                                <select name="sector" id="sector" class="form-control"  >
                                    {{-- <option value="" disabled>Select Course Format</option> --}}
                                    @foreach($sectors as $sector)
                                        <option value="{{$sector->id}}" {{($sector->id == $job->industry_id)?'selected':''}}>{{$sector->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            

                           

                        

                            <div class="form-group">
                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>

                        </form>

                    </div>
                </div>
      
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

          @endsection


          

          @section('script')
                     <script>
                           // Reset language
                           $(document).ready(function(){
                                //  $.datepicker.setDefaults( $.datepicker.regional[ "" ] );
                                $('#due_date').datepicker({
                                    language: 'en',
                                    // clearButton: 'true',
                                    autoClose: 'true',
                                    timepicker: 'true',
                                    minDate: new Date() // Now can select only dates, which goes after today
                                });
         
                             });
                     </script>
         
         
         @endsection

