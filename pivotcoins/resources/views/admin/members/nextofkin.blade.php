@extends('layouts.member')

@section('title')
{{ucfirst($nxtfkn->name)}}'s next of kin
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update next of kin </h1>
                </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                       {{--  <li class="breadcrumb-item"><a href="">All Events</a></li>
                        <li class="breadcrumb-item active">Create New</li> --}}
                        </ol>
                    </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          
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
                       
                        <form method="POST" action=" {{route('nextofkin.store',[$nxtfkn->user->id,$nxtfkn->id])}}" >
                            @csrf
                             @method('PUT')
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input type="text" id="name" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror" name="name" 
                                value="{{$nxtfkn->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Phone Number</label>
                                <input type="text" id="phone" placeholder="Enter Phone Number" class="form-control @error('title') is-invalid @enderror" name="phone" value="{{$nxtfkn->phone}}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="text" id="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$nxtfkn->email}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Update" class="btn btn-primary">
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

@section('style')
  <style>
  .content-header{background: #1e1e2f; border-bottom: 1px solid #888;padding:0 8px;margin-bottom: 30px;}
   .breadcrumb.float-sm-right{margin-top: 15px;}
   .content-header h1{font-size: 50px!important;color: #636b6f!important;font-family: 'Nunito', sans-serif!important;font-weight: 200!important;}

  </style> 
  @endsection