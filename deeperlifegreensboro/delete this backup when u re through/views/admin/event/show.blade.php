@extends('layouts.admin')

@section('title')
    {{$event->title}}
@endsection

@section('content')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid ">
                <h2 class="h5 no-margin-bottom">  <span> {{$event->title}}</span>  <a href="{{URL::previous()}}" class="btn btn-color  float-right"> <i class="fa fa-arrow-left"></i> Back</a></h2>
            </div>
        </div>

        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('events.index')}}">All Events</a></li>
                <li class="breadcrumb-item active">{{$event->title}} </li>
            </ul>
        </div>

        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->
                    <div class="col-lg-6 ">
                        <div class="block">
                            <div class="block-body">
                                @if(is_null($event->image))
                                    <img src="{{asset('placeholder-img/events/event3.jpg')}}" width="100%" height="100%" alt="cover img">
                                @else
                                    <img src="{{asset('storage/'.$event->image)}}" width="100%" height="100%" alt="cover img">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="block">
                                <div class="block-body">
                                    {{--<h5><span style="font-weight: bold;margin-right: 8px;">TITLE: </span>{{$event->title}}</h5>--}}
                                    {{--<p><span class="event-text">PLACE: </span> {{$event->place}}</p>--}}
                                    {{--<p><span class="event-text">DATE: </span> {{$event->eventDate}}</p>--}}
                                    {{--<p><span class="event-text">TIME: </span> {{$event->eventDate}}</p>--}}
                                    {{--<p style="display: flex"><span class="event-text" >DETAILS: </span> <span> {{$event->description}}</span></p>--}}

                                    <div class="event-table">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>TITLE: </th>
                                                <th style="text-transform: uppercase;color: #fff;">{{$event->title}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><span class="event-text">PLACE: </span></td>
                                                <td>{{$event->place}}</td>
                                            </tr>
                                            <tr>
                                                <td><span class="event-text">DATE: </span></td>
                                                <td>{{date_format($event->eventStartDate,'F d, Y')  }}  </td>

                                            </tr>
                                            <tr>
                                                <td><span class="event-text">TIME: </span> </td>
                                                <td>{{$event->eventStartDate->format('H:i a')}} - {{$event->eventEndDate->format('H:i a')}}</td>
                                            </tr>
                                            <tr>
                                                <td><span class="event-text" >DETAILS: </span></td>
                                                <td>{{$event->description}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>




                                </div>
                            </div>
                    </div>
                    <div class="col-md-12">
                        <div class="block">
                            <div class="d-flex justify-content-end">
                                <a href="{{route('events.edit',$event->id)}}" class="btn btn-outline-secondary btn-sm mr-1 mr-3"><i class="fa fa-pencil"></i> Edit</a>
                                {{--<a href="" class="btn btn-color"><i class="fa fa-trash"></i> Delete</a>--}}
                                <button class="btn btn-outline-secondary btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deleteEventModal-{{$event->id}}"><i class="fa fa-trash"></i> Delete</button>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>


{{--delete moda;--}}
    {{--@foreach($events as $event)--}}
        <div class="modal fade" id="deleteEventModal-{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #eee">
                        <h5 class="modal-title" id="deleteUserModal-{{$event->id}}">Alert!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        You are about deleting the Event " <span style="color:#2b7a78!important; font-weight: 600">{{$event->title}} </span> " with ID: <span style="color:#2b7a78!important; font-weight: 600">{{$event->id}}</span>.
                        <span style="color: #0b3e6f; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                    </div>
                    <div class="modal-footer" style="background: #eee">
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                        <form action="{{route('events.destroy',$event->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Yes, Delete it</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    {{--@endforeach--}}
@endsection


@section('css')
{{--    <link href="{{ asset('css/trix.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('admin/css/jquery.datetimepicker.min.css') }}" rel="stylesheet">
@endsection

 @section('script')
            {{--<script src="{{asset('js/trix.js')}}"></script>--}}
            <script src="{{asset('admin/js/jquery.datetimepicker.full.js')}}"></script>
            <script src="{{asset('admin/js/jquery.datetimepicker.min.js')}}"></script>
            <script>
                $("#eventDate").datetimepicker({
                    // format: 'yyyy-mm-dd hh:ii',
                    autoclose: true,
                    todayBtn: true
                });
            </script>
@endsection

