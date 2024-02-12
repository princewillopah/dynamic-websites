@extends('layouts.admin')

@section('title')
Sermons
@endsection
{{--@section('page-content')--}}
   {{--All Categories--}}
{{--@endsection--}}

@section('content')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid ">
                <h2 class="h5 no-margin-bottom">  <span> All sermon</span>  </h2>
                <a href="{{route('events.create')}}" class="btn btn-color  float-right">Create New</a>
            </div>
        </div>
        <!-- Breadcrumb-->
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">All Events </li>
            </ul>
        </div>
        <!-- includes-->
        @include('includeFiles.messages')
    <!-- table-->
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th style="width:2%;text-align: center">S/N</th>
                                <th style="width:5%;text-align: center">Cover Img</th>
                                <th>Event Theme</th>
                                <th style="width:15%;text-align: center">Event Date</th>
                                <th style="width:20%;text-align: center">Event Time</th>
                                <th style="width:12%;text-align: center">Event Place</th>
                                <th colspan="3" style="width:10%;text-align: center">Actions</th>
                            </tr>
                        </thead>
                        @if(count($events) > 0)
                            <tbody>
                                @foreach($events as $event)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        @if(is_null($event->image))
                                            <img src="{{asset('placeholder-img/events/event3.jpg')}}" width="60" height="60" alt="cover img">
                                        @else
                                            <img src="{{asset('storage/'.$event->image)}}" width="60" height="60" alt="cover img">
                                        @endif

                                    </td>
                                    <td>{{$event->title}}</td>
                                    <td>{{$event->eventStartDate->toFormattedDateString()}} </td>
                                    <td>{{$event->eventStartDate->format('H:i a')}} - {{$event->eventEndDate->format('H:i a')}}</td>
                                    <td>{{$event->place}}</td>
                                    <td><a href="{{route('events.show',$event->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="edit" ><i class="fa fa-th"></i> View</a></td>
                                    <td><a href="{{route('events.edit',$event->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="edit" ><i class="fa fa-pencil"></i> Edit</a></td>
                                    <td><button class="btn btn-outline-secondary btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deleteEventModal-{{$event->id}}"><i class="fa fa-trash"></i> Delete</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        @else
                            <tbody>
                                <tr >
                                    <th scope="row" colspan="9" class="text-center py-5">
                                       <h1 style="margin-bottom: 4px;"> No Event</h1>
                                        <a href="{{route('events.create')}}" style="font-size: 18px; color: #3aafa9;text-decoration: none">Create New </a>
                                    </th>
                                </tr>
                            </tbody>
                        @endif
                    </table>
                </div>
            </div>
         </div>
    </div>



    {{--delete modal--}}
    {{--@foreach($events as $event)--}}
        {{--<div class="modal fade" id="deleteEventModal-{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
            {{--<div class="modal-dialog" role="document">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header" style="background: #eee">--}}
                        {{--<h5 class="modal-title" id="deleteUserModal-{{$event->id}}">Alert!</h5>--}}
                        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                            {{--<span aria-hidden="true">&times;</span>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                        {{--You are about deleting the Event " <span style="color:#2b7a78!important; font-weight: 600">{{$event->title}} </span> " with ID: <span style="color:#2b7a78!important; font-weight: 600">{{$event->id}}</span>.--}}
                        {{--<span style="color: #0b3e6f; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>--}}
                    {{--</div>--}}
                    {{--<div class="modal-footer" style="background: #eee">--}}
                        {{--<button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>--}}
                        {{--<form action="{{route('events.destroy',$event->id)}}" method="post">--}}
                            {{--@csrf--}}
                            {{--@method('DELETE')--}}
                            {{--<button type="submit" class="btn btn-outline-danger btn-sm">Yes, Delete it</button>--}}
                        {{--</form>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}

@endsection

{{--@section('style')--}}
{{--@endsection--}}

{{--@section('script')--}}
{{--@endsection--}}
