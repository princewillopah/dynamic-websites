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
                <li class="breadcrumb-item"><a href="{{route('sermons.index')}}">All Sermons</a></li>
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

                                <form method="POST" action="{{ route('sermons.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Title</label>
                                        <input type="text" id="title" placeholder="Enter Title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-control-label">Category</label>
                                        {{--<input type="text" id="title" placeholder="Enter Title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">--}}
                                        {{--@error('title')--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                                        {{--@enderror--}}
                                        <select name="category" id="category" class="form-control">
                                            @foreach($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Pastor</label>
                                        <select name="pastor" id="pastor" class="form-control">
                                            @foreach($pastors as $pastor)
                                                <option value="{{$pastor->id}}">{{$pastor->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-6 ml-0 pl-0">
                                        <label for="sermonDate">Date:</label>
                                        <input type="text" class="form-control   @error('sermonDate') is-invalid @enderror"  data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd"  id="sermonDate" name="sermonDate"  >
                                        @error('sermonDate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="date d-flex">
                                        <div class="form-group col-md-6 ml-0 pl-0">
                                            <label for="startTime">From:</label>
                                            <input type="text" class="form-control  @error('startTime') is-invalid @enderror"  id="startTime" name="startTime"  >
                                            @error('startTime')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="endTime">To:</label>
                                            <input type="text" class="form-control @error('endTime') is-invalid @enderror"  id="endTime" name="endTime" >
                                            @error('endTime')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="form-control-label">Video Link:</label>
                                        <input type="text" id="vidioLink" placeholder="Enter Video Link" class="form-control" name="vidioLink" value="{{ old('vidioLink') }}">
                                      
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Audio Link:</label>
                                        <input type="text" id="audioLink" placeholder="Enter Audio Link" class="form-control" name="audioLink" value="{{ old('audioLink') }}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Details:</label>
                                        <textarea class="form-control" placeholder="description"  id="description" name="description"  rows="5" >{{ old('description') }}</textarea>
                                        
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="myimage">Cover Image:</label>
                                        <input type="file" class="form-control" placeholder="myimage" id="myimage" name="myimage" value="{{ old('myimage') }}" >
                                      
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



@section('css')

@endsection

 @section('script')
            <script src="{{asset('js/trix.js')}}"></script>
            <script>
                    $('#sermonDate').datepicker({
                        language: 'en',
                        // clearButton: 'true',
                        autoClose: 'true',
                        timepicker: 'true',
                        // minDate: new Date() // Now can select only dates, which goes after today
                    });
                    $(document).ready(function(){
                        $('#startTime').mdtimepicker({
                            timeFormat: 'hh:mm:ss', // format of the time value (data-time attribute)
                            // format: 'h:mm tt', // format of the input value
                            format: 'h:mm:ss',
                            theme: 'blue', // 'red', 'purple', 'indigo', 'teal', 'green'
                            hourPadding: false
                        });

                        $('#endTime').mdtimepicker({
                            timeFormat: 'hh:mm:ss', // format of the time value (data-time attribute)
                            // format: 'h:mm tt', // format of the input value
                            format: 'h:mm:ss',
                            theme: 'blue', // 'red', 'purple', 'indigo', 'teal', 'green'
                            hourPadding: false
                        });
                    });
            </script>


@endsection

