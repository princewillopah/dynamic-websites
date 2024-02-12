@extends('layouts.admin')

@section('title')
    Edit Comment
@endsection

@section('breadcrumbs')
    <a href="{{route('adminDashboard')}}" style="color: #999">Dashboard</a> / <a style="color: #999" href="{{route('comments.index')}}">Comments</a> / Edit comment of post: <span style="color: #0b3e6f">{{$comment->post->title}}</span>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 my-2 p-5">
                <form action="{{route('comment.update',[$comment->id])}}" method="post">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="body">{{ __('Comment') }}</label>
                        <textarea class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" id="body" name="body" rows="3" placeholder="Comment field cant be empty">{{ old('body',$comment->body) }}</textarea>
                        @if ($errors->has('body'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('body') }}</strong>
                              </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Update Comment</button>
                </form>
            </div>
        </div>
    </div>
@endsection