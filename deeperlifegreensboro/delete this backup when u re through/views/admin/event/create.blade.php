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
                                <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Theme</label>
                                        <input type="text" id="title" placeholder="Enter Theme" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
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
                                                <input type="text" class="form-control"  data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd"  id="eventStartDate" name="eventStartDate"  >
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="eventEndDate">To:</label>
                                                <input type="text" class="form-control"  data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd"  id="eventEndDate" name="eventEndDate" >
                                            </div>
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

