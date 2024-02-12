@extends('layouts.admin')

@section('title')
Comment
@endsection

@section('breadcrumbs')
    <a href="{{route('adminDashboard')}}" style="color: #999">Dashboard</a> / <a style="color: #999" href="{{route('comments.index')}}">Comments</a> / comment for post <span style="color:#666">{{$comment->post->title}} </span>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 my-2">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <p > <span style="font-weight: bold">Post Title: </span> {{$comment->post->title}} <span class="small float-right">by {{$comment->post->user->admin==1?'Admin: ':''}} {{$comment->post->user->name}}</span></p>
                        <p class="d-flex"> <span style="font-weight: bold; padding-right: 6px">PostBody: </span>  {{$comment->post->contents}}</p>
                        @if(($comment->post->user->admin == 0 & $comment->post->user->id != Auth::id()) || $comment->post->user->id == Auth::id())
                            <div class="d-flex">
                                <a href="{{route('post.edit',$comment->post->id)}}" class="btn btn-sm btn-outline-secondary ml-auto mr-2">Edit</a>
                                <button class="item btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#deletePostModal-{{$comment->post->id}}" >
                                    Delete
                                </button>
                            </div>
                          @else
                                 <a href="" class="float-right small" style="color: #222">by {{$comment->post->user->name}}</a>
                          @endif
                    </div>
                    <hr class="w-50" style="border-radius: 50%; height: 3px; background-color: #0b3e6f; margin:0 auto" >
                    <div class="card-body">
                      <span style="font-weight: bold">Comment:  </span>{{$comment->body}}
                        @if(($comment->user->admin == 0 & $comment->user->id != Auth::id()) || $comment->user->id == Auth::id())
                            <div class="d-flex">
                                <a href="{{route('comment.edit', $comment->id)}}" class="btn btn-sm btn-outline-secondary ml-auto mr-2">Edit</a>
                                <button class="item btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#deleteCommentModal-{{$comment->id}}" >
                                    Delete
                                </button>
                            </div>
                        @else
                            <a href="" class="float-right small" style="color: #222">by {{$comment->user->name}}</a>
                        @endif
                    </div>
                </div>
            @if(count($relatedComments) > 0)
                    <h5 class="mb-3">Other comments related to this post</h5>
                    @foreach($relatedComments as $comm)
                        <div class="jumbotron p-3 mb-1">
                            <div class="d-flex">
                                <h5>{{$comm->user->name}}</h5>
                                <small class="ml-auto">{{$comm->created_at->diffForHumans()}}</small>
                            </div>
                            <p>{{$comm->body}}</p>
                            @if(($comm->user->admin == 0 & $comm->user->id != Auth::id()) || $comm->user->id == Auth::id())
                                <div class="d-flex">
                                    <a href="" class="btn btn-sm btn-outline-secondary ml-auto mr-2">Edit</a>
                                    <button class="item btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#deleteRelatedCommentModal-{{$comm->id}}" >
                                        Delete
                                    </button>
                                </div>
                            @endif
                        </div>
                    @endforeach
            @endif
        </div>
        </div>
    </div>

    {{-------------------------post delete modal---------------------------------------------------------------------------------------}}
    <!-- Modal -->
    <div class="modal fade" id="deletePostModal-{{$comment->post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #eee">
                    <h5 class="modal-title" id="deletePostModal-{{$comment->post->id}}">You are about to delete post with Id: <span style="color: #0b3e6f">{{$comment->post->id}}</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span style="color: #0b3e6f; font-weight: bold"> Do You Want To Proceed?</span>
                </div>
                <div class="modal-footer" style="background: #eee">
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                    <form action="{{route('post.delete',$comment->post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Yes, Delete it</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-------------------------end post delete modal-------------------------------------------------------------------------------}}

    {{-------------------------comment delete modal---------------------------------------------------------------------------------------}}
        <!-- Modal -->
        <div class="modal fade" id="deleteCommentModal-{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #eee">
                        <h5 class="modal-title" id="deletePostModal-{{$comment->id}}">You are about to delete post with Id: <span style="color: #0b3e6f">{{$comment->id}}</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span style="color: #0b3e6f; font-weight: bold"> Do You Want To Proceed?</span>
                    </div>
                    <div class="modal-footer" style="background: #eee">
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                        <form action="{{route('comment.delete',$comment->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Yes, Delete it</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    {{-------------------------end comment delete modal-------------------------------------------------------------------------------}}




    {{-------------------------related comment delete modal---------------------------------------------------------------------------------------}}
    <!-- Modal -->
    @foreach($relatedComments as $comm)
    <div class="modal fade" id="deleteRelatedCommentModal-{{$comm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #eee">
                    <h5 class="modal-title" id="deleteRelatedCommentModal-{{$comm->id}}">You are about to delete this related comment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span style="color: #0b3e6f; font-weight: bold"> Do You Want To Proceed?</span>
                </div>
                <div class="modal-footer" style="background: #eee">
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                    <form action="{{route('RelatedComment.delete',$comm->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Yes, Delete it</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-------------------------end related comment delete modal-------------------------------------------------------------------------------}}
@endsection