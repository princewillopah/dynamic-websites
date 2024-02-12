@extends('layouts.master')

@section('title')
    single post
@endsection

@section('page-title')
@endsection

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset("assets/img/post-bg.jpg")}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{$post->title}}</h1>
                        <span class="meta">Posted by
                <a href="#">{{$post->user->name}}</a>
                on {{date_format($post->created_at,'F d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <p> {{$post->contents}}</p>
                </div>

                <div class="col-md-8 offset-2">
                    <hr>
                    <h2><i class="fa fa-comment" aria-hidden="true"></i> Comments</h2>
                  @if(count($post->comments) > 0)
                    @foreach($post->comments as $comments)
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{$comments->user->name}}</h5>
                                        <small>{{$comments->created_at->diffForHumans()}}</small>
                                    </div>
                                    <p class="my-1">{{$comments->body}}</p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                            </div>
                     @endforeach
                      @else
                       <h3>No Comments</h3>
                      @endif
                </div>
            </div>
        </div>
    </article>


@endsection