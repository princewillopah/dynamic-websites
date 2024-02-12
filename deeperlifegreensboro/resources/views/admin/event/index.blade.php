@extends('layouts.admins')

@section('title')
 Events
@endsection


@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">All Events</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                {{-- <li class="breadcrumb-item"><a href="{{route('events.index')}}">All Events</a></li> --}}
                <li class="breadcrumb-item active">All Events</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        @include('includes.messages')

 <!-- Main content -->
 <section class="content">
        <div class="row">
          <div class="col-12">
                <div class="card">
                        <div class="card-header d-flex">
                          <h3 class="card-title" style="line-height:35px">Data Table With Full Features</h3>
                          <a href="{{route('events.create')}}" class="btn btn-outline-primary  ml-auto">Create New</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                                <table id="example2" class="table table-bordered table-striped">
                                        
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
                                                             <td style="padding:2px">
                                                                <img src="{{asset('/uploads/events/'.$event->image)}}" width="60" height="60" alt="Add image 4 {{$event->title}} " style="font-size:9px; padding:0; font-weight:300;line-height:1px">
                                                            </td>
                                                            <td>{{$event->title}}</td>
                                                            <td>{{$event->eventStartDate->toFormattedDateString()}} </td>
                                                            <td>
                                                                @if(is_null($event->eventEndDate))
                                                                    {{$event->eventStartDate->format('H:i a')}}
                                                                @else
                                                                    {{$event->eventStartDate->format('H:i a')}} - {{$event->eventEndDate->format('H:i a')}}
                                                                @endif
                                                            </td>
                        
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
                                                <tfoot>             
                                                        <tr>
                                                            <th style="width:2%;text-align: center">S/N</th>
                                                            <th style="width:5%;text-align: center">Cover Img</th>
                                                            <th>Event Theme</th>
                                                            <th style="width:15%;text-align: center">Event Date</th>
                                                            <th style="width:20%;text-align: center">Event Time</th>
                                                            <th style="width:12%;text-align: center">Event Place</th>
                                                            <th colspan="3" style="width:10%;text-align: center">Actions</th>
                                                        </tr>
                                                    </tfoot>
                                                  </table>
                                                </div>
                                                <!-- /.card-body -->
                                              </div>
                                              <!-- /.card -->
                                  </div><!-- /.col -->
                                </div><!-- /.row -->
                        </section>
                
                </div>

       {{--edit modal--}}
{{--    @foreach($categories as $category)--}}
        {{--<div class="modal fade" id="editCatModal-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
            {{--<div class="modal-dialog" role="document">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header" style="background: #eee">--}}
                        {{--<h5 class="modal-title" id="editCatModal-{{$category->id}}">{{$category->name}}</h5>--}}
                        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                            {{--<span aria-hidden="true">&times;</span>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                    {{--<form action="{{route('categories.update',$category->id)}}" method="post">--}}
                        {{--@csrf--}}
                        {{--@method('PUT')--}}

                        {{--<div class="modal-body">--}}
                        {{--<div class="form-group col-md-12">--}}
                            {{--<label for="name">Name:</label>--}}
                            {{--<input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  id="name" name="name" value="{{ $category->name }}" >--}}
                            {{--@if ($errors->has('name'))--}}
                                {{--<span class="invalid-feedback" role="alert">--}}
                               {{--<strong>{{ $errors->first('name') }}</strong>--}}
                               {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="modal-footer" style="background: #eee">--}}
                        {{--<button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;Cancel&nbsp;</button>--}}
                            {{--<button type="submit" class="btn btn-outline-danger btn-sm">Update</button>--}}
                    {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}

    {{--delete modal--}}
    @foreach($events as $event)
        <div class="modal fade" id="deleteEventModal-{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" >
                        <h5 class="modal-title" id="deleteUserModal-{{$event->id}}">Alert!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        You are about deleting the Event " <span style="color:#2b7a78!important; font-weight: 600">{{$event->title}} </span> " with ID: <span style="color:#2b7a78!important; font-weight: 600">{{$event->id}}</span>.
                        <span style="color: #0b3e6f; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                    </div>
                    <div class="modal-footer">
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
    @endforeach

@endsection

@section('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin3/plugins/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('script')
<!-- DataTables -->
<script src="{{asset('admin3/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script>
       $(function () {
         $("#example1").DataTable();
         $('#example2').DataTable({
           "paging": true,
           "lengthChange": false,
           "searching": false,
           "ordering": true,
           "info": true,
           "autoWidth": false
         });
       });
     </script>
@endsection