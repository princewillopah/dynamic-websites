@extends('layouts.dashboardLayout')

@section('title')
Updating {{$course->title}}
@endsection

@section('style')

@endsection

@section('script')

 {{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script> --}}
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script> --}}
<script src="{{ asset('ckeditor-standard/ckeditor.js') }}"></script>
<script>
    // CKEDITOR.replace( 'full-description' );

    CKEDITOR.replace( 'full-description', {
    filebrowserUploadUrl: "{{route('ckeditor.image_upload.store', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
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
                                    <li class="breadcrumb-item active" aria-current="page">Updating {{$course->title}}</li>
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

                        <form method="POST" action="{{ route('courses.update',$course->id) }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Course Title</label>
                                <input type="text" id="title" placeholder="Enter COURSE Title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$course->title }}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Amount</label>
                                <input type="number" min="0" id="amount" placeholder="Enter Course Amount" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{$course->amount }}">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="form-control-label">Short Description</label>
                                <textarea  id="short_description" rows="3" placeholder="Enter Short Description" class="form-control @error('short_description') is-invalid @enderror" name="short_description" >{{ $course->short_description }}</textarea>
                               
                                @error('short_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-control-label">Full Description</label>
                                {{-- <textarea  id="description" rows="5" placeholder="Enter Full Description" class="form-control @error('description') is-invalid @enderror" name="description" >{{ old('description') }}</textarea> --}}
                                <textarea class="form-control"id="full-description" role="5" name="description" placeholder="Enter Full Description. Press enter if you need to go to second paragraph"  class="form-control @error('description') is-invalid @enderror" name="description">{{ $course->description }}</textarea>
                                  
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Category</label>
                                <select name="category" id="pastor" class="form-control">
                                    <option value="" disabled>Select Course Category</option>
                                    @foreach($categorys as $category)
                                        <option value="{{$category->id}}"  {{$category->id == $course->category_id?"selected":""}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Format</label>
                                <select name="format" id="format" class="form-control">
                                    <option value="" disabled>Select Course Format</option>
                                    @foreach($formats as $format)
                                        <option value="{{$format->id}}" {{$format->id == $course->format_id?"selected":""}}>{{$format->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            

                            <div class="form-group">
                                <label for="cover_image">Cover Image:</label>
                                <input type="file" class="form-control" placeholder="Cover Image" id="cover_image" name="coverImage">
                            </div>

                        

                            <div class="form-group">
                                <input type="submit" value="Create" class="btn btn-primary">
                            </div>

                        </form>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

          @endsection




