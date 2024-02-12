@extends('layouts.admin')

@section('title')
Post
@endsection

@section('breadcrumbs')
    <a href="{{route('adminDashboard')}}" style="color: #999">Dashboard</a> / <a style="color: #999" href="{{route('posts.index')}}">Posts</a> / {{$post->title}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 my-2">
                <div class="card">
                    <div class="card-header">
                        {{$post->title}}
                        @if($post->user == Auth::user())
                            <span class="small float-right">by <span style="color: #0b3e6f">You</span></span>
                        @else
                            <span class="small float-right">by <span style="color: #0b3e6f">{{$post->user->name}}</span></span>
                        @endif

                    </div>
                    <div class="card-body">
                        {{$post->contents}}
                        @if(($post->user->admin == 0 & $post->user->id != Auth::id()) || $post->user->id == Auth::id())
                            <div class="d-flex">
                                <a href="{{route('post.edit',$post->id)}}" class="btn btn-sm btn-outline-secondary ml-auto mr-2">Edit</a>
                                   <button class="item btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#deletePostModal-{{$post->id}}" >
                                                  Delete
                                  </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-8 offset-2">
                <hr>
                <h2><i class="fa fa-comment" aria-hidden="true"></i> Comments</h2>
                @if(count($post->comments) > 0)
                    @foreach($post->comments as $comments)
                        <div class="jumbotron p-3 mb-1">
                            <div class="d-flex">
                                <h5>{{$comments->user->name}}</h5>
                                <small class="ml-auto">{{$comments->created_at->diffForHumans()}}</small>
                            </div>
                            <p>{{$comments->body}}</p>
                            @if($comments->user->id == Auth::id() ||Auth::user()->admin == 1)
                            <div class="d-flex">
                                <a href="" class="btn btn-sm btn-outline-secondary ml-auto mr-2">Edit</a>
                                <a href="" class="btn btn-sm btn-outline-danger">Delete</a>
                            </div>
                           @endif
                        </div>
                    @endforeach
                @else
                    <h3>No Comments</h3>
                @endif
            </div>
        </div>
    </div>

    {{-------------------------delete modal---------------------------------------------------------------------------------------}}
        @include('includeFiles.post-delete-modal')
    {{-------------------------end delete modal-------------------------------------------------------------------------------}}

@endsection