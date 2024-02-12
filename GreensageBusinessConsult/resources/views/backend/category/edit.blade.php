@extends('layouts.dashboardLayout')

@section('title')
Update  {{$category->update}}
@endsection

@section('content')
 <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <a href="{{URL::previous()}}" class="btn btn-outline-primary"> <i class="fa fa-arrow-left"></i> Back</a>
                        <div class="ms-auto text-end ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             

                      <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <h5 style="text-align: center;font-size:20px; color:teal;margin-bottom:20px">Editing {{$category->name}}</h5>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        @if(count($errors)>0)
                           @foreach($errors->all() as $error)
                              <div class="alert alert-danger">
                                  {{$error}}
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                         @endforeach
                       @endif
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-md-8 offset-md-2" style="min-height: 450px;">
                        <form method="POST" action="{{ route('categories.update',$category->id) }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input type="text" id="name" placeholder="Enter Category Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="cover_image">Cover Image:</label>
                                <input type="file" class="form-control  @error('cover_image') is-invalid @enderror" placeholder="Cover Image" id="cover_image" name="cover_image">
                                @error('cover_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="icon">Category Icon:</label>
                                <input type="file" class="form-control  @error('icon') is-invalid @enderror" placeholder="Icon" id="icon" name="icon">
                                @error('icon')
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
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->


          @endsection




