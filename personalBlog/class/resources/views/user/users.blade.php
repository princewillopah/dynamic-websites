@extends('layouts.admin')

@section('title')
    Users
@endsection

@section('breadcrumbs')
    <a href="{{route('adminDashboard')}}" style="color: #999">Dashboard</a> / <a style="color: #999" href="{{route('users.index')}}">Users</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">All Posts</h3>
            <div class="table-data__tool d-flex">
                <div class="">
                <span class="pl-3">{{$users->count()}} Users from {{$AdminAuthors}} admins who are also authors/  {{$admin}} admins / {{$authors}} authors / {{$Allusers}} users</span>
                </div>
                <div class=" ml-auto pr-5">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add item
                    </button>
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                @include('includeFiles.messages')
                <table class="table table-data2">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Date Joined</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($users) > 0)
                        @foreach($users as $user)
                            <tr class="tr-shadow">
                                <td>{{$user->id}}</td>
                                <td><a href="{{route('user.view',$user->id)}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                <td>
                                    {{--@if($user->admin == 1 & $user->author == 1)--}}
                                     {{--Admin / Author--}}
                                    {{--@elseif($user->admin == 1 & $user->author == 0)--}}
                                    {{--Admin--}}
                                    {{--@elseif($user->admin == 0 & $user->author == 1)--}}
                                    {{--Author--}}
                                   {{--@else--}}
                                    {{--User--}}
                                   {{--@endif--}}
                                    @if($user->admin == 1)
                                        Admin
                                        @if($user->author == 1)
                                          / Author
                                        @endif
                                   @elseif($user->author == 1)
                                    Author
                                  @else
                                     User
                                   @endif
                                </td>
                                <td>{{date_format($user->created_at,'F d, Y')  }}</td>
                                <td>
                                    <div class="table-data-feature">
                          {{--------------------------------------------------------------------------------------------}}
                                    @if($user->author == 1)
                                        <a href="{{route('removeAuthor',$user->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="remove author's privilege" >
                                            <i class="zmdi zmdi-square-o"></i>
                                        </a>
                                        @elseif($user->author == 0)
                                            <a href="{{route('addToAuthor',$user->id)}}"class="item" data-toggle="tooltip" data-placement="top" title="make author" >
                                                <i class="zmdi zmdi-square-down"></i>
                                            </a>
                                       @endif
                           {{--------------------------------------------------------------------------------------------}}
                                        <a href="{{route('user.view',$user->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="zmdi zmdi-mail-send"></i>
                                        </a>
                           {{--------------------------------------------------------------------------------------------}}
                                        @if(($user->admin == 0 & $user->id != Auth::id()) || $user->id == Auth::id())
                                        <a href="{{route('user.edit',$user->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        @else
                                         <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="You dont have privileges to edit this Admin's profile">
                                         </a>
                                        @endif
                        {{--------------------------------------------------------------------------------------------}}
                                        @if($user->admin != 1)
                                            {{--<form action="{{route('user.delete',$user->id)}}" method="post">--}}
                                                {{--@csrf--}}
                                            <span data-toggle="tooltip" data-placement="top" title="Delete">
                                                <button class="item" data-toggle="modal" data-target="#deleteUserModal-{{$user->id}}" >
                                                   <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </span>
                                            {{--</form>--}}
                                        @else
                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="You dont have privileges to delete this Admin Record">
                                                {{--<i class="zmdi zmdi-delete"></i>--}}
                                            </a>
                                       @endif
                        {{--------------------------------------------------------------------------------------------}}
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                    @else
                        <h2 style="text-align: center">No Users</h2>
                    @endif
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>
    {{--<!-- Button trigger modal -->--}}
    {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
        {{--Launch demo modal--}}
    {{--</button>--}}

    {{-------------------------delete modal---------------------------------------------------------------------------------------}}
    @foreach($users as $user)
        @include('includeFiles.delete-modal')
    @endforeach
    {{-------------------------end delete modal---------------------------------------------------------------------------------------}}

@endsection