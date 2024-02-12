@extends('layouts.admins')

@section('title')
 Create New
@endsection

@section('content')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create New</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('events.index')}}">All Events</a></li>
                    <li class="breadcrumb-item active">Create New</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container">

                    <div class="card card-default">
                            <div class="card-header">
                            <h3 class="card-title">Create</h3>
                
                            <div class="card-tools">
                                <a href="{{URL::previous()}}" class="btn btn-outline-primary"> <i class="fa fa-arrow-left"></i> Back</a>
                                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-th"></i></button>
                            </div>
                    </div>

                     <!-- /.card-header -->
                     <div class="card-body">
                            <div class="row">
                             <div class="col-md-8 offset-md-2">
                                    <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-control-label">Event Name</label>
                                            <input type="text" id="title" placeholder="Enter Name" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
    
                                        <div class="form-group">
                                            <label class="form-control-label">Place:</label>
                                            <input type="text" id="place" placeholder="Enter Place" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ old('place') }}">
                                            @error('place')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="date d-flex">
                                            <div class="form-group col-md-6">
                                                    <label for="eventStartDate">From:</label>
                                                    <input type="text" class="form-control  @error('eventStartDate') is-invalid @enderror"  data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd"  id="eventStartDate" name="eventStartDate"  >
                                                    @if ($errors->has('eventStartDate'))
                                                    <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('eventStartDate') }}</strong>
                                                    </span>
                                                   @endif
                                                </div>
    
                                                <div class="form-group col-md-6">
                                                    <label for="eventEndDate">To:</label>
                                                    <input type="text" class="form-control  @error('eventEndDate') is-invalid @enderror"  data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd"  id="eventEndDate" name="eventEndDate" >
                                                    @if ($errors->has('eventEndDate'))
                                                    <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('eventEndDate') }}</strong>
                                                    </span>
                                                @endif
                                                </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="description">Details:</label>
                                            <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Place some text here"  id="description" name="description" style="height:30px" rows="5" >{{ old('description') }}</textarea>
                                         
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif
                                        </div> 

                                        {{-- <textarea id="editor1" name="editor1" placeholder="Place some text here" style="width: 100%"></textarea>
                                              <br> --}}
                                        {{-- <textarea class="textarea" placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea> --}}
                            
                                        <div class="form-group">
                                                <label for="myimage">Cover Image:</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="myimage" name="myimage">
                                                    <label class="custom-file-label" for="myimage">Choose file</label>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Create" class="btn btn-primary">
                                        </div>
    
                                    </form>
                                </div>
                            </div><!-- /.row -->
                          </div><!-- /.card-body -->
           {{-- ---------------------------------------- --}}
                          <div class="card-footer">
                           
                          </div>
                        </div>

          </div><!-- /.container-fluid -->
      </section>
        <!-- /.content -->
    </div>

   
@endsection



@section('style')
<link rel="stylesheet" href="{{asset('admin3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
<style>
.ck.ck-button.ck-enabled.ck-off.ck-button_with-text.ck-dropdown__button, .ck.ck-icon.ck-button__icon{color:#aaa!important}
/* .ck.ck-icon.ck-button__icon,.ck.ck-icon.ck-button__icon,.ck.ck-icon.ck-button__icon{color:#aaa!important} */
.ck.ck-toolbar{background: transparent!important;border:1px solid teal!important;}
.ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-blurred.ck-editor__editable_inline{background: transparent!important;border:1px solid teal!important;color:#aaa!important}

</style>
@endsection

 @section('script')
 <script src="{{asset('admin3/plugins/ckeditor/ckeditor.js')}}"></script>
 <!-- Bootstrap WYSIHTML5 -->
 <script src="{{asset('admin3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
           
 <script>
        $(function () {
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
          ClassicEditor
            .create(document.querySelector('#description'))
            .then(function (editor) {
              // The editor instance
            })
            .catch(function (error) {
              console.error(error)
            })
      
        //   // bootstrap WYSIHTML5 - text editor
      
        //   $('.textarea').wysihtml5({
        //     toolbar: { fa: true }
        //   })
        })
      </script>    
           
           
           <script>
                    $('#eventEndDate').datepicker({
                        language: 'en',
                        // clearButton: 'true',
                        autoClose: 'true',
                        timepicker: 'true',
                        minDate: new Date() // Now can select only dates, which goes after today
                    });
                    $('#eventStartDate').datepicker({
                        language: 'en',
                        // clearButton: 'true',
                        autoClose: 'true',
                        timepicker: 'true',
                        minDate: new Date() // Now can select only dates, which goes after today
                    })
                </script> 
@endsection

