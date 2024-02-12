@extends('layouts.master')
@section('title')
   Home
@endsection

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset("assets/img/home-bg.jpg")}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Personal Blog</h1>
                        <span class="subheading">Get the best of this blog</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{route('single.post',$post->id)}}">
                        <h2 class="post-title">
                           {{$post->title}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{$post->contents}}
                        </h3>
                    </a>
                    <p class="post-meta d-flex">Posted by
                        <a href="#" class="px-1">{{$post->user->name}}</a>
                       <span>on {{date_format($post->created_at,'F d, Y') }}</span>
                        <span class="ml-auto"><i class="fa fa-comment" aria-hidden="true"></i> {{$post->comments->count()}}</span>

                    </p>
                </div>
                <hr>
                @endforeach

                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

@endsection