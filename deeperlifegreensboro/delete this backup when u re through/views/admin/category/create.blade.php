@extends('layouts.admin')

@section('title')
 Create New
@endsection

@section('content')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid ">
                <h2 class="h5 no-margin-bottom">  <span> Add New</span> </h2>
                <a href="{{URL::previous()}}" class="btn btn-color  float-right"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>

    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create New </li>
        </ul>
    </div>

    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-8 offset-md-2">
                    <div class="block">
                        <div class="title"><strong class="d-block">Create Category</strong></div>
                        <div class="block-body">
                            <form method="POST" action="{{ route('categories.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    <input type="text" id="name" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Create" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- Modal Form-->
{{--<div class="col-lg-4">--}}
    {{--<div class="block">--}}
        {{--<div class="title"><strong>Modal Form</strong></div>--}}
        {{--<div class="block-body text-center">--}}
            {{--<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Form in simple modal </button>--}}
            {{--<!-- Modal-->--}}
            {{--<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">--}}
                {{--<div role="document" class="modal-dialog">--}}
                    {{--<div class="modal-content">--}}
                        {{--<div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Signin Modal</strong>--}}
                            {{--<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>--}}
                        {{--</div>--}}
                        {{--<div class="modal-body">--}}
                            {{--<p>Lorem ipsum dolor sit amet consectetur.</p>--}}
                            {{--<form>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Email</label>--}}
                                    {{--<input type="email" placeholder="Email Address" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Password</label>--}}
                                    {{--<input type="password" placeholder="Password" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="submit" value="Signin" class="btn btn-primary">--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                        {{--<div class="modal-footer">--}}
                            {{--<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>--}}
                            {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


