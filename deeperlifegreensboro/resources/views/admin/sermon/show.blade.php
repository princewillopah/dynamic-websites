@extends('layouts.admins')

@section('title')
    {{$sermon->title}}
@endsection

@section('content')
<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{$sermon->title}}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('sermons.index')}}">All Events</a></li>
                <li class="breadcrumb-item active">{{$sermon->title}}</li>
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
                              <h3 class="card-title">{{$sermon->title}} </h3>
                  
                              <div class="card-tools">
                                  <a href="{{URL::previous()}}" class="btn btn-outline-primary"> <i class="fa fa-arrow-left"></i> Back</a>
                                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-th"></i></button>
                              </div>
                            </div> 
                            <div class="card-body">              
                                <div class="row">
                                    <!-- Basic Form-->
                                    <div class="col-lg-6 ">
                                        <div class="block">
                                            <div class="block-body">
                                                  <img src="{{asset('/uploads/sermons/'.$sermon->coverImage)}}" width="90%" height="100%" alt="Add image 4 {{$sermon->title}} ">
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="block">
                                                <div class="block-body">
                                                     <div class="event-table">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th>TITLE: </th>
                                                                <th style="text-transform: uppercase;color: #fff;">{{$sermon->title}}</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><span class="event-text">CATEGORY: </span></td>
                                                                <td>{{$sermon->category->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="event-text">PASTOR: </span></td>
                                                                <td>{{$sermon->pastor->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="event-text">DATE: </span></td>
                                                                <td>{{date_format($sermon->sermonDate,'F d, Y')  }}  </td>

                                                            </tr>
                                                            <tr>
                                                                <td><span class="event-text">TIME: </span> </td>
                                                                <td>{{date('G:i a',strtotime($sermon->startTime))}} - {{date('G:i a',strtotime($sermon->endTime))}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="event-text" >DETAILS: </span></td>
                                                                <td>{{$sermon->description}}</td>
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
                                                <a href="{{route('sermons.edit',$sermon->id)}}" class="btn btn-outline-secondary btn-sm mr-1 mr-3"><i class="fa fa-pencil"></i> Edit</a>
                                                {{--<a href="" class="btn btn-color"><i class="fa fa-trash"></i> Delete</a>--}}
                                                <button class="btn btn-outline-secondary btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deleteSermonModal-{{$sermon->id}}"><i class="fa fa-trash"></i> Delete</button>

                                            </div>
                                        </div>
                                    </div>


                                </div>

                        <div class="card-footer">                                
                                            </div>
                                        </div>

                                    </div><!-- /.container-fluid -->
                                    </section>
                        <!-- /.content -->
                        </div>

{{-- ==============delete modal ========================================= --}}

{{--delete moda;--}}
    {{--@foreach($sermons as $sermon)--}}
        <div class="modal fade" id="deleteSermonModal-{{$sermon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #eee">
                        <h5 class="modal-title">Alert!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        You are about deleting the Sermon " <span style="color:#2b7a78!important; font-weight: 600">{{$sermon->title}} </span> " with ID: <span style="color:#2b7a78!important; font-weight: 600">{{$sermon->id}}</span>.
                        <span style="color: #0b3e6f; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                    </div>
                    <div class="modal-footer" style="background: #eee">
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                        <form action="{{route('sermons.destroy',$sermon->id)}}" method="post">
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

