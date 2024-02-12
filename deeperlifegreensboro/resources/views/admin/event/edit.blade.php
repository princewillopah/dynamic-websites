@extends('layouts.admins')

@section('title')
 Edit {{$event->title}}
@endsection

@section('content')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{$event->title}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('events.index')}}">All Events</a></li>
                    <li class="breadcrumb-item active">{{$event->title}}</li>
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
                            <h3 class="card-title">Edit {{$event->title}}</h3>
                
                            <div class="card-tools">
                                <a href="{{URL::previous()}}" class="btn btn-outline-primary"> <i class="fa fa-arrow-left"></i> Back</a>
                                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-th"></i></button>
                            </div>
                    </div>

                     <!-- /.card-header -->
                     <div class="card-body">
                            <div class="row">
                             <div class="col-md-8 offset-md-2">
                                    <form method="POST" action="{{ route('events.update',$event->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label class="form-control-label">Event Name</label>
                                            <input type="text" id="title" placeholder="Enter Name" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$event->title}}">
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
    
                                        <div class="form-group">
                                            <label class="form-control-label">Place:</label>
                                            <input type="text" id="place" placeholder="Enter Place" class="form-control @error('place') is-invalid @enderror" name="place" value="{{$event->place}}">
                                            @error('place')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="date d-flex">
                                            <div class="form-group col-md-6">
                                                    <label for="eventStartDate">From:</label>
                                                    <input type="text" class="form-control  @error('eventStartDate') is-invalid @enderror"  data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd"  id="eventStartDate" name="eventStartDate"  value="{{$event->eventStartDate}}">
                                                    @if ($errors->has('eventStartDate'))
                                                    <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('eventStartDate') }}</strong>
                                                    </span>
                                                   @endif
                                                </div>
    
                                                <div class="form-group col-md-6">
                                                    <label for="eventEndDate">To:</label>
                                                    <input type="text" class="form-control  @error('eventEndDate') is-invalid @enderror"  data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd"  id="eventEndDate" name="eventEndDate" value="{{$event->eventEndDate}}">
                                                    @if ($errors->has('eventEndDate'))
                                                    <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('eventEndDate') }}</strong>
                                                    </span>
                                                @endif
                                                </div>
                                        </div>
                                    
                                        {{-- <div class="form-group">
                                            <label for="description">Details:</label>
                                            <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="description"  id="description" name="description"  rows="5" >{{ $event->description}}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="description">Details:</label>
                                            <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Place some text here"  id="description" name="description" style="height:30px" rows="5" >{{ $event->description }}</textarea>
                                         
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif
                                        </div> 
                            
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
                                            <input type="submit" value="Update" class="btn btn-primary">
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
            <script src="{{asset('js/trix.js')}}"></script>
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


















{{-- @section('content')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid ">
                <h2 class="h5 no-margin-bottom">  <span> {{$event->title}}</span>  </h2>
                <a href="{{URL::previous()}}" class="btn btn-color  float-right"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>

        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                <li class="breadcrumb-item "><a href="{{route('events.index')}}">All events  </a></li>
                <li class="breadcrumb-item active">{{$event->title}}</li>
            </ul>
        </div>

        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->
                    <div class="col-lg-8 offset-md-2">
                        <div class="block">
                            <div class="title"><strong class="d-block">Edit Event</strong></div>
                            <div class="block-body">
                                <form method="POST" action="{{ route('events.update',$event->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="form-control-label">Theme</label>
                                        <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $event->title }}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Place:</label>
                                        <input type="text" id="place" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ $event->place }}">
                                        @error('place')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="date d-flex">
                                            <div class="form-group col-md-6">
                                                    <label for="eventStartDate">From:</label>
                                                    <input type="text" class="form-control"  data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd"  id="eventStartDate" name="eventStartDate" value="{{ $event->eventStartDate }}" >
                                                </div>
    
                                                <div class="form-group col-md-6">
                                                    <label for="eventEndDate">To:</label>
                                                    <input type="text" class="form-control"  data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd"  id="eventEndDate" name="eventEndDate" value="{{ $event->eventEndDate }}">
                                                </div>
                                        </div>
                                    <div class="form-group">
                                        <label for="description">Details:</label>
                                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"  id="description" name="description"  rows="5" >{{ $event->description}}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="myimage">Cover Image:</label>
                                        <input type="file" class="form-control{{ $errors->has('myimage') ? ' is-invalid' : '' }}"  id="myimage" name="myimage" value="{{$event->image}}" >
                                        @if ($errors->has('myimage'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('myimage') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Update" class="btn btn-primary">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection --}}

{{-- 
@section('css')
    
    <link href="{{ asset('admin/css/datepicker.css') }}" rel="stylesheet">
@endsection

@section('script')
    <script src="{{asset('js/trix.js')}}"></script>
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
@endsection  --}}


