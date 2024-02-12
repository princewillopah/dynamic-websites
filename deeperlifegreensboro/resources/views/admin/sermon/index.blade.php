@extends('layouts.admins')

@section('title')
Sermons
@endsection


@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">All Sermons</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                {{-- <li class="breadcrumb-item"><a href="{{route('events.index')}}">All Events</a></li> --}}
                <li class="breadcrumb-item active">All Sermons</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        @include('includeFiles.messages')

 <!-- Main content -->
 <section class="content">
        <div class="row">
          <div class="col-12">
                <div class="card">
                        <div class="card-header d-flex">
                          <h3 class="card-title" style="line-height:35px">Data Table With Full Features</h3>
                          <a href="{{route('sermons.create')}}" class="btn btn-outline-primary  ml-auto">Create New</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                    
                                <thead>
                                    <tr>
                                        <th style="width:2%;text-align: center">S/N</th>
                                        <th style="width:5%;text-align: center">Cover Img</th>
                                        <th>Title</th>
                                        <th style="width:15%;text-align: center">Category</th>
                                        <th style="width:12%;text-align: center">Author</th>
                                        <th style="width:15%;text-align: center">Date</th>
                                        <th style="width:15%;text-align: center">Time</th>
                                        <th colspan="3" style="width:10%;text-align: center">Actions</th>
                                    </tr>
                                </thead>
                                @if(count($sermons) > 0)
                                    <tbody>
                                        @foreach($sermons as $sermon)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                             <td style="padding:2px">
                                                 {{-- @if($sermon->coverImagec)                      --}}
                                                 <img src="{{asset('/uploads/sermons/'.$sermon->coverImage)}}" width="60" height="60" alt="Add image 4 {{$sermon->title}} " style="font-size:9px; padding:0; font-weight:300;line-height:1px">
                                                 {{-- @endif             --}}
                                            </td>
                                            <td>{{$sermon->title}}</td>
                                            <td>{{$sermon->category->name}}</td>
                                            <td><a href="{{route('pastors.show',$sermon->pastor->id)}}">{{$sermon->pastor->name}}</a></td>
                                            <td>{{$sermon->sermonDate->toFormattedDateString()}} </td>
                                            <td>{{date('G:i a',strtotime($sermon->startTime))}} - {{date('G:i a',strtotime($sermon->endTime))}}</td>
                                            <td><a href="{{route('sermons.show',$sermon->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="edit" ><i class="fa fa-th"></i> View</a></td>
                                            <td><a href="{{route('sermons.edit',$sermon->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="edit" ><i class="fa fa-pencil"></i> Edit</a></td>
                                            <td><button class="btn btn-outline-secondary btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deleteSermonModal-{{$sermon->id}}"><i class="fa fa-trash"></i> Delete</button></td>
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
                                            <th>Title</th>
                                            <th style="width:15%;text-align: center">Category</th>
                                            <th style="width:12%;text-align: center">Author</th>
                                            <th style="width:15%;text-align: center">Date</th>
                                            <th style="width:15%;text-align: center">Time</th>
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


    {{--delete modal--}}
    @foreach($sermons as $s)
    <div class="modal fade" id="deleteSermonModal-{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" >
                    <h5 class="modal-title">Alert!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    You are about deleting the sermon's record " <span style="color:#2b7a78!important; font-weight: 600">{{$s->title}} </span> " with ID: <span style="color:#2b7a78!important; font-weight: 600">{{$s->id}}</span>. <br>    
                    <span style="color: #fff; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                </div>
                <div class="modal-footer" >
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                    <form action="{{route('sermons.destroy',$s->id)}}" method="post">
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

{{--@section('style')--}}
{{--@endsection--}}

{{--@section('script')--}}
{{--@endsection--}}
