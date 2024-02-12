@extends('layouts.admin')

@section('title')
 Create New
@endsection

@section('content')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid ">
                <h2 class="h5 no-margin-bottom">  <span> Add New</span>  </h2>
                <a href="{{URL::previous()}}" class="btn btn-color  float-right"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>

        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create New </li>
            </ul>
        </div>

        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->
                    <div class="col-lg-8 offset-md-2">
                        <div class="block">
                            <div class="title"><strong class="d-block">Create Event</strong></div>
                            <div class="block-body">
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
                                        <select name="author" id="author" class="form-control">
                                            @foreach($authors as $author)
                                                <option value="{{$author->id}}">{{$author->name}}</option>
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
                                        <input type="text" id="vidioLink" placeholder="Enter Video Link" class="form-control @error('vidioLink') is-invalid @enderror" name="vidioLink" value="{{ old('vidioLink') }}">
                                        @error('vidioLink')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Audio Link:</label>
                                        <input type="text" id="audioLink" placeholder="Enter Audio Link" class="form-control @error('audioLink') is-invalid @enderror" name="audioLink" value="{{ old('audioLink') }}">
                                        @error('audioLink')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Details:</label>
                                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="description"  id="description" name="description"  rows="5" >{{ old('description') }}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="myimage">Cover Image:</label>
                                        <input type="file" class="form-control{{ $errors->has('myimage') ? ' is-invalid' : '' }}" placeholder="myimage" id="myimage" name="myimage" value="{{ old('myimage') }}" >
                                        @if ($errors->has('myimage'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('myimage') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Create" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

