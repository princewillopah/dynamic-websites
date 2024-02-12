@extends('layouts.admin')

@section('title')
 Edit {{$event->title}}
@endsection

@section('content')
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

                                    {{-- <div class="form-group ">
                                        <label for="eventStartDate">Data & Time:</label>
                                        <input type="text" class="form-control"  data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd"  id="eventStartDate" name="eventStartDate" value="{{ $event->eventStartDate }}" >
                                    </div>

                                    <div class="form-group ">
                                        <label for="eventEndDate">Data & Time:</label>
                                        <input type="text" class="form-control"  data-time-format='hh:ii:00' data-date-format="yyyy-mm-dd"  id="eventEndDate" name="eventEndDate" value="{{ $event->eventEndDate }}" >
                                    </div> --}}
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
@endsection

<!-- Modal Form-->
{{--<div class="col-lg-4">--}}
    {{--<div class="block">--}}
        {{--<div class="title"><strong>Modal Form</strong></div>--}}
        {{--<div class="block-body text-center">--}}
            {{--<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Form in simple modal </button>--}}
            {{--<!-- Modal-->--}}
            {{--<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">--}}
                {{--<div role="document" class="modal-dialog">--}}
                    {{--<div class="modal-content">--}}
                        {{--<div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Signin Modal</strong>--}}
                            {{--<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>--}}
                        {{--</div>--}}
                        {{--<div class="modal-body">--}}
                            {{--<p>Lorem ipsum dolor sit amet consectetur.</p>--}}
                            {{--<form>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Email</label>--}}
                                    {{--<input type="email" placeholder="Email Address" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Password</label>--}}
                                    {{--<input type="password" placeholder="Password" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="submit" value="Signin" class="btn btn-primary">--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                        {{--<div class="modal-footer">--}}
                            {{--<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>--}}
                            {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

@section('css')
    {{--    <link href="{{ asset('css/trix.css') }}" rel="stylesheet">--}}
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
@endsection


