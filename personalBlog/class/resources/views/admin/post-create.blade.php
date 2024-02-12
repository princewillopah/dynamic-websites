@extends('layouts.admin')

@section('title')
    Create Post
@endsection

@section('breadcrumbs')
    <a href="{{route('adminDashboard')}}" style="color: #999">Dashboard</a> / <a style="color: #999" href="{{route('posts.index')}}">Posts</a> / create Post
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 my-2 p-5">
                <form action="{{route('post.store')}}" method="post">
                    @csrf
                     <div class="form-group">
                        <label>{{ __('Post Title') }}</label>
                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}"  autofocus>
                          @if ($errors->has('title'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                              </span>
                      @endif
                      </div>
                    <div class="form-group">
                        <label for="contents">{{ __('Post Content') }}</label>
                        <textarea class="form-control{{ $errors->has('contents') ? ' is-invalid' : '' }}" id="contents" name="contents" rows="3" placeholder="Enter Post content">{{ old('contents') }}</textarea>
                        @if ($errors->has('contents'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('contents') }}</strong>
                              </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Create Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection