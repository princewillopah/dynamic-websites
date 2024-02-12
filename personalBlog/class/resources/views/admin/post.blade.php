@extends('layouts.admin')

@section('title')
    Posts
@endsection

@section('breadcrumbs')
    <a href="{{route('adminDashboard')}}" style="color: #999">Dashboard</a> / <a style="color: #999" href="{{route('posts.index')}}">Posts</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
           <h3 class="title-5 ml-5 mt-3">All Posts</h3>
           <a href="{{route('post.create')}}" class="btn btn-outline-secondary btn-lg rounded-0  float-right mr-3">
                        <i class="zmdi zmdi-plus"></i>add item
           </a>
            <div class="table-responsive table-responsive-data2">
                @include('includeFiles.messages')
                <table class="table table-data2">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Post</th>
                        <th>Content</th>
                        <th>Author</th>
                        <th>created at</th>
                        <th>updated at</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($posts) > 0)
                      @foreach($posts as $post)
                          <tr class="tr-shadow">
                              <td>{{$post->id}}</td>
                              <td><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></td>
                              <td>{{str_limit($post->contents,20,'...')}}</td>
                              <td>{{$post->user->name}}</td>
                              <td>{{$post->created_at->toFormattedDateString()}}</td>
                              <td>{{$post->updated_at->diffForHumans()}}</td>
                              <td>
                                  <div class="table-data-feature">
                          {{------------------------------------------------------------------------------------------------------------}}
                                      <a href="{{route('post.show',$post->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="view">
                                          <i class="zmdi zmdi-mail-send"></i>
                                      </a>
                              {{------------------------------------------------------------------------------------------------------------}}
                                      @if(($post->user->admin == 0 & $post->user->id != Auth::id()) || $post->user->id == Auth::id())
                                      <a href="{{route('post.edit',$post->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                          <i class="zmdi zmdi-edit"></i>
                                      </a>
                                      @else
                                          <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Admin: You lack the privileges to edit this post">
                                              <i class="zmdi zmdi-edit"></i>
                                          </a>
                                      @endif
                          {{------------------------------------------------------------------------------------------------------------}}
                                      @if(($post->user->admin == 0 & $post->user->id != Auth::id()) || $post->user->id == Auth::id())
                                      <span data-toggle="tooltip" data-placement="top" title="Delete">
                                                <button class="item" data-toggle="modal" data-target="#deletePostModal-{{$post->id}}" >
                                                   <i class="zmdi zmdi-delete"></i>
                                                </button>
                                      </span>
                                      @else
                                          <span data-toggle="tooltip" data-placement="top" title="Admin: You lack the privileges to Delete this post">
                                                <button class="item"  >

                                                </button>
                                         </span>
                                      @endif
                         {{------------------------------------------------------------------------------------------------------------}}
                                  </div>
                              </td>
                          </tr>

                      @endforeach
                      @else
                       <h2 style="text-align: center">No Posts made</h2>
                      @endif
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>

    {{-------------------------delete modal---------------------------------------------------------------------------------------}}
    @foreach($posts as $post)
       @include('includeFiles.post-delete-modal')
    @endforeach
    {{-------------------------end delete modal---------------------------------------------------------------------------------------}}




@endsection