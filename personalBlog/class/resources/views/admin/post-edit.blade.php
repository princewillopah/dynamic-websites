@extends('layouts.admin')

@section('title')
    Edit Post
@endsection

@section('breadcrumbs')
    <a href="{{route('adminDashboard')}}" style="color: #999">Dashboard</a> / <a style="color: #999" href="{{route('posts.index')}}">Posts</a> / Edit Post with title: <span style="color: #0b3e6f">{{$post->title}}</span> and ID: <span style="color: #0b3e6f">{{$post->id}}</span>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 my-2 p-5">
                <form action="{{route('post.update',$post->id)}}" method="post">
                    @csrf
                    {{method_field('PUT')}}
                     <div class="form-group">
                        <label>{{ __('Post Title') }}</label>
                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title', $post->title) }}"  autofocus>
                          @if ($errors->has('title'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                              </span>
                      @endif
                      </div>
                    <div class="form-group">
                        <label for="contents">{{ __('Post Content') }}</label>
                        <textarea class="form-control{{ $errors->has('contents') ? ' is-invalid' : '' }}" id="contents" name="contents" rows="3" placeholder="Enter Post content">{{ old('contents',$post->contents) }}</textarea>
                        @if ($errors->has('contents'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('contents') }}</strong>
                              </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Update Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection