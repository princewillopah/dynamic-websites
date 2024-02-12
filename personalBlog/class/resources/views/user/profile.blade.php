@extends('layouts.admin')

@section('title')
profile
@endsection

@section('breadcrumbs')
    <a href="{{route('adminDashboard')}}" style="color: #999">Dashboard</a> / {{Auth::user()->name}}'s profile
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-2">
                <div class="card">
                    <div class="card-header">
                        Profile Settings
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{asset('admin/assets/images/icon/avatar-big-01.jpg')}}" class="card-img-top" alt="CoolAdmin" />
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{Auth::user()->name}}</h5>
                                        <p class="card-text">
                                        @if(Auth::user()->admin == 1 & Auth::user()->author == 1)
                                           Admin & Author
                                        @elseif(Auth::user()->admin == 1 & Auth::user()->author == 0)
                                           Admin
                                        @elseif(Auth::user()->admin == 0 & Auth::user()->author == 1)
                                         Author
                                        @else
                                          User
                                        @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                @include('includeFiles.messages')
                                <form action="{{route('profile.update')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{Auth::user()->name}}"  autofocus>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label >{{ __('E-Mail Address') }}</label>
                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{Auth::user()->email}}">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Old Password</label>
                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" >
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password">New Password</label>
                                        <input type="password" class="form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}" id="new_password" name="new_password" >
                                        @if ($errors->has('new_password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">{{ __('Confirm New Password') }}</label>
                                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" >
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