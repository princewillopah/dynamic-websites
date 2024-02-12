@extends('layouts.admin')

@section('title')
Pastor
@endsection
{{--@section('page-content')--}}
   {{--All Categories--}}
{{--@endsection--}}

@section('content')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid ">
                <h2 class="h5 no-margin-bottom">  <span> All Events</span>  </h2>
                <a href="{{route('pastors.create')}}" class="btn btn-color  float-right">Create New</a>
            </div>
        </div>
        <!-- Breadcrumb-->
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">All Pastors </li>
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
                                <th>Name</th>
                                <th style="width:15%;text-align: center">Title</th>
                                <th colspan="3" style="width:10%;text-align: center">Actions</th>
                            </tr>
                        </thead>
                        @if(count($pastors) > 0)
                            <tbody>
                                @foreach($pastors as $pastor)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        @if(is_null($pastor->image))
                                            <img src="{{asset('placeholder-img/pastors/v1.jpg')}}" width="60" height="60" alt="cover img">
                                        @else
                                            <img src="{{asset('storage/'.$pastor->image)}}" width="60" height="60" alt="cover img">
                                        @endif
                                    </td>
                                    <td>{{$pastor->name}}</td>
                                    <td>{{$pastor->title}}</td>
                                    <td><a href="{{route('pastors.show',$pastor->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="view" ><i class="fa fa-th"></i> View</a></td>
                                    <td><a href="{{route('pastors.edit',$pastor->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="edit" ><i class="fa fa-pencil"></i> Edit</a></td>
                                    <td><button class="btn btn-outline-secondary btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deletePastorModal-{{$pastor->id}}"><i class="fa fa-trash"></i> Delete</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        @else
                            <tbody>
                                <tr >
                                    <th scope="row" colspan="9" class="text-center py-5">
                                       <h1 style="margin-bottom: 4px;"> No Records for Pastors</h1>
                                        <a href="{{route('pastors.create')}}" style="font-size: 18px; color: #3aafa9;text-decoration: none">Create New </a>
                                    </th>
                                </tr>
                            </tbody>
                        @endif
                    </table>
                </div>
            </div>
         </div>
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
    @foreach($pastors as $pastor)
        <div class="modal fade" id="deletePastorModal-{{$pastor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #eee">
                        <h5 class="modal-title" id="deleteModal-{{$pastor->id}}">Alert!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        You are about deleting the Pastor's record " <span style="color:#2b7a78!important; font-weight: 600">{{$pastor->title}} </span> " with ID: <span style="color:#2b7a78!important; font-weight: 600">{{$pastor->id}}</span>.
                        <span style="color: #0b3e6f; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                    </div>
                    <div class="modal-footer" style="background: #eee">
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
    @endforeach

@endsection

{{--@section('style')--}}
{{--@endsection--}}

{{--@section('script')--}}
{{--@endsection--}}
