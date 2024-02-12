@extends('layouts.admin')

@section('title')
    Comments
@endsection

@section('breadcrumbs')
    <a href="{{route('adminDashboard')}}" style="color: #999">Dashboard</a> / <a style="color: #999" href="{{route('comments.index')}}">Comments</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 mt-3 ml-3">All Comments</h3>

            <div class="table-responsive table-responsive-data2">
                @include('includeFiles.messages')
                <table class="table table-data2">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Comment</th>
                        <th>Post</th>
                        <th>User</th>
                        <th>date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($comments) > 0)
                      @foreach($comments as $comment)
                          <tr class="tr-shadow">
                              <td>{{$comment->id}}</td>
                              <td><a href="{{route('comments.show',[$comment->id,$comment->post->id])}}">{{str_limit($comment->body,20,'...')}}</a></td>
                              <td>{{$comment->post->title}}</td>
                              <td>{{$comment->user->name}}</td>
                              <td>{{$comment->created_at->diffForHumans()}}</td>
                              <td>
                                  <div class="table-data-feature">
                                      <a href="{{route('comments.show',[$comment->id,$comment->post->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="view">
                                          <i class="zmdi zmdi-mail-send"></i>
                                      </a>
                  {{------------------------------------------------------------------------------------------------------------}}
                                      @if(($comment->user->admin == 0 & $comment->user->id != Auth::id()) || $comment->user->id == Auth::id())
                                      <a href="{{route('comment.edit',[$comment->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                          <i class="zmdi zmdi-edit"></i>
                                      </a>
                                      @else
                                          <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Admin: You lack the privileges to edit this Comment">

                                          </a>
                                      @endif
           {{------------------------------------------------------------------------------------------------------------}}
                                      @if(($comment->user->admin == 0 & $comment->user->id != Auth::id()) || $comment->user->id == Auth::id())
                                          <span data-toggle="tooltip" data-placement="top" title="Delete">
                                                <button class="item" data-toggle="modal" data-target="#deleteCommentModal-{{$comment->id}}" >
                                                   <i class="zmdi zmdi-delete"></i>
                                                </button>
                                        </span>
                                      @else
                                          <span data-toggle="tooltip" data-placement="top" title="Admin: You lack the privileges to Delete this post">
                                                <button class="item"  >

                                                </button>
                                         </span>
                                      @endif
                                  </div>
                              </td>
                          </tr>

                      @endforeach
                      @else
                       <h2 style="text-align: center">No Comments made</h2>
                      @endif
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>

    {{-------------------------delete modal---------------------------------------------------------------------------------------}}
    @foreach($comments as $comment)
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
   @endforeach
    {{-------------------------end delete modal-------------------------------------------------------------------------------}}
@endsection