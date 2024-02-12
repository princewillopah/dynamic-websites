@extends('layouts.admin')

@section('title')
 Categories
@endsection
{{--@section('page-content')--}}
   {{--All Categories--}}
{{--@endsection--}}

@section('content')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid"> 
                    <h2 class="h5 no-margin-bottom">  <span> All Categories</span></h2>
                    <a href="{{route('categories.create')}}" class="btn btn-color">Create New</a>         
             </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">All Categories </li>
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
                            <th style="width:5%;text-align: center">Category ID</th>
                            <th>Category Name</th>
                            <th style="width:15%;text-align: center">Numbers of sermons</th>
                            <th colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>34</td>
                            <td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="edit" data-toggle="modal" data-target="#editCatModal-{{$category->id}}" ><i class="fa fa-pencil"></i></a></td>
                            <td><button class="btn btn-outline-secondary btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deleteUserModal-{{$category->id}}"><i class="fa fa-trash"></i></button></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

       {{--edit modal--}}
    @foreach($categories as $category)
        <div class="modal fade" id="editCatModal-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #eee">
                        <h5 class="modal-title" id="editCatModal-{{$category->id}}">{{$category->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('categories.update',$category->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">
                        <div class="form-group col-md-12">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  id="name" name="name" value="{{ $category->name }}" >
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                               <strong>{{ $errors->first('name') }}</strong>
                               </span>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer" style="background: #eee">
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;Cancel&nbsp;</button>
                            <button type="submit" class="btn btn-outline-danger btn-sm">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{--delete modal--}}
    @foreach($categories as $category)
        <div class="modal fade" id="deleteUserModal-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #eee">
                        <h5 class="modal-title" id="deleteUserModal-{{$category->id}}">Alert!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        You are about deleting the category " <span style="color:#2b7a78!important; font-weight: 600">{{$category->name}} </span> " with ID: <span style="color:#2b7a78!important; font-weight: 600">{{$category->id}}</span>.
                        <span style="color: #0b3e6f; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                    </div>
                    <div class="modal-footer" style="background: #eee">
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                        <form action="{{route('categories.destroy',$category->id)}}" method="post">
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
