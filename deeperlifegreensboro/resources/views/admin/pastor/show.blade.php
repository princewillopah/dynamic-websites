@extends('layouts.admins')

@section('title')
    {{$pastor->name}}
@endsection

@section('content')

<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{$pastor->name}}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('pastors.index')}}">All Pastors</a></li>
                <li class="breadcrumb-item active">{{$pastor->name}}</li>
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
                              <h3 class="card-title">{{$pastor->name}} <span style="color:#aaa"> Information</span></h3>
                  
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
                                                 <img src="{{asset('/uploads/pastors/'.$pastor->pic)}}" width="90%" height="100%" alt="Add image 4 {{$pastor->pic}} ">
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
                                                                <th>NAME: </th>
                                                                <th style="text-transform: uppercase;color: #fff;">{{$pastor->name}}</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><span class="event-text">TITLE: </span></td>
                                                                <td>{{$pastor->title}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="event-text" >PHONE: </span></td>
                                                                <td>{{$pastor->phone}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="event-text" >FACEBOOK: </span></td>
                                                                <td>{{$pastor->facebook}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="event-text" >TWITTER: </span></td>
                                                                <td>{{$pastor->twitter}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="event-text" >INSTAGRAM: </span></td>
                                                                <td>{{$pastor->instagram}}</td>
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
                                                <a href="{{route('pastors.edit',$pastor->id)}}" class="btn btn-outline-secondary btn-sm mr-1 mr-3"><i class="fa fa-pencil"></i> Edit</a>
                                                {{--<a href="" class="btn btn-color"><i class="fa fa-trash"></i> Delete</a>--}}
                                                <button class="btn btn-outline-secondary btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deletePastorModal-{{$pastor->id}}"><i class="fa fa-trash"></i> Delete</button>

                                            </div>
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
    
        <div class="modal fade" id="deletePastorModal-{{$pastor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" >
                            <h5 class="modal-title" id="deleteModal-{{$pastor->id}}">Alert!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            You are about deleting the Pastor's record " <span style="color:#2b7a78!important; font-weight: 600">{{$pastor->name}} </span> " with ID: <span style="color:#2b7a78!important; font-weight: 600">{{$pastor->id}}</span>. <br>    
                            <span style="color: #fff; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                        </div>
                        <div class="modal-footer" >
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                            <form action="{{route('pastors.destroy',$pastor->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Yes, Delete it</button>
                            </form>
    
                        </div>
                    </div>
                </div>
            </div>
    
@endsection


@section('css')
   
@endsection

 @section('script')
         
@endsection

