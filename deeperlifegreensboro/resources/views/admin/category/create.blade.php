@extends('layouts.admins')

@section('title')
 Create New
@endsection

@section('content')
    {{-- <div class="page-content">
        <div class="page-header">
            <div class="container-fluid ">
                <h2 class="h5 no-margin-bottom">  <span> Add New</span> </h2>
                <a href="{{URL::previous()}}" class="btn btn-color  float-right"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div> --}}

    <!-- Breadcrumb-->
    {{-- <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create New </li>
        </ul>
    </div> --}}

    {{-- <section class="no-padding-top">
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
    </section> --}}

    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create New</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('categories.index')}}">All Categories</a></li>
                    <li class="breadcrumb-item active">Create New</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
          
            <!-- Main content -->
            <section class="content">
                <div class="container">
    
                        <div class="card card-default">
                                <div class="card-header">
                                  <h3 class="card-title">Create</h3>
                      
                                  <div class="card-tools">
                                      <a href="{{URL::previous()}}" class="btn btn-outline-primary"> <i class="fa fa-arrow-left"></i> Back</a>
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-th"></i></button>
                                  </div>
                                </div>
                  {{-- -------------------------------------- --}}
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <div class="row">
                                   <div class="col-md-8 offset-md-2">
                                        
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
                                  </div><!-- /.row -->
                                </div><!-- /.card-body -->
                 {{-- ---------------------------------------- --}}
                                <div class="card-footer">
                                 
                                </div>
                              </div>
    
                </div><!-- /.container-fluid -->
            </section>
              <!-- /.content -->
          </div>

@endsection




