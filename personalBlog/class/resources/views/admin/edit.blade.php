@extends('layouts.admin')

@section('title')
EDIT
@endsection

@section('breadcrumbs')
    <a href="{{route('adminDashboard')}}" style="color: #999">Dashboard</a> / <a style="color: #999" href="{{route('users.index')}}">Users</a>/{{$user->name}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-2">
                <div class="card">
                    <div class="card-header">
                        User Edit Form
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{--<div class="col-md-4">--}}
                                {{--<div class="card">--}}
                                    {{--<img src="{{asset('admin/assets/images/icon/avatar-big-01.jpg')}}" class="card-img-top" alt="CoolAdmin" />--}}
                                    {{--<div class="card-body text-center">--}}
                                        {{--<h5 class="card-title">{{Auth::user()->name}}</h5>--}}
                                        {{--<p class="card-text">--}}
                                        {{--@if(Auth::user()->admin == 1 & Auth::user()->author == 1)--}}
                                           {{--Admin & Author--}}
                                        {{--@elseif(Auth::user()->admin == 1 & Auth::user()->author == 0)--}}
                                           {{--Admin--}}
                                        {{--@elseif(Auth::user()->admin == 0 & Auth::user()->author == 1)--}}
                                         {{--Author--}}
                                        {{--@else--}}
                                          {{--User--}}
                                        {{--@endif--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="col-md-8">
                                @include('includeFiles.messages')
                                <form action="{{route('user.update',$user->id)}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{$user->name}}"  autofocus>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label >{{ __('E-Mail Address') }}</label>
                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{$user->email}}">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="admin" name="admin" value="1" {{$user->admin == 1 ? 'checked':''}}>
                                        <label class="form-check-label" for="admin">Admin</label>
                                    </div>
                                    <div class="form-group form-check">

                                        <input type="checkbox" class="form-check-input" id="author" name="author" value="1" {{$user->author == true ? 'checked':''}}>
                                        <label class="form-check-label" for="author">Author</label>
                                    </div>
                                    <button class="btn btn-outline-secondary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection