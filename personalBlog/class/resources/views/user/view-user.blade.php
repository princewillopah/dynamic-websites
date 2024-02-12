@extends('layouts.admin')

@section('title')
profile
@endsection

@section('breadcrumbs')
    <a href="{{route('adminDashboard')}}" style="color: #999">Dashboard</a> / <a style="color: #999" href="{{route('users.index')}}">Users</a> / {{$user->name}}'s Info
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-2">
                <div class="card">
                    <div class="card-header">
                        {{$user->name}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{asset('admin/assets/images/icon/avatar-big-01.jpg')}}" class="card-img-top" alt="CoolAdmin" />
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{$user->name}}</h5>
                                        <p class="card-text">
                                        @if($user->admin == 1 & $user->author == 1)
                                           Admin & Author
                                        @elseif($user->admin == 1 & $user->author == 0)
                                           Admin
                                        @elseif($user->admin == 0 & $user->author == 1)
                                         Author
                                        @else
                                          User
                                        @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul class="list-group">
                                    <li class="list-group-item disabled" aria-disabled="true"><span style="font-weight: bold">Name: </span>{{$user->name}}</li>
                                    <li class="list-group-item disabled" aria-disabled="true"><span style="font-weight: bold">Role: </span>{{$user->name}}</li>
                                    <li class="list-group-item disabled" aria-disabled="true"><span style="font-weight: bold">Email: </span>{{$user->email}}</li>
                                    <li class="list-group-item disabled" aria-disabled="true">
                                        <p><span style="font-weight: bold">Number of posts: </span>{{$user->posts->count()>0?$user->posts->count():"none"}}</p>
                                        <p><span style="font-weight: bold">Number of comments: </span>{{$user->comments->count()>0?$user->comments->count():"none"}}</p>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection