@extends('layouts.admins')

@section('title')
 Create New
@endsection

@section('content')
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
                <li class="breadcrumb-item"><a href="{{route('pastors.index')}}">All Pastors</a></li>
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
                                    
                                    <form method="POST" action="{{ route('pastors.store') }}" enctype="multipart/form-data">
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
                                            <label class="form-control-label">Position</label>
                                            <input type="text" id="title" placeholder="Enter Posistion" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
    
                                        <div class="form-group">
                                            <label for="description">Some info:</label>
                                            <textarea class="form-control" placeholder="About..."  id="description" name="description"  rows="5" >{{ old('description') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="myimage">Cover Image:</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="myimage" name="myimage">
                                                <label class="custom-file-label" for="myimage">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-group">
                                            <label class="form-control-label">Phone:</label>
                                            <input type="text" id="phone" placeholder="Enter Phone number" class="form-control" name="phone" value="{{ old('phone') }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Facebook:</label>
                                            <input type="text" id="facebook" placeholder="Enter Facebook Link" class="form-control" name="facebook" value="{{ old('facebook') }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Twitter:</label>
                                            <input type="text" id="twitter" placeholder="Enter Twitter Link" class="form-control" name="twitter" value="{{ old('twitter') }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Instagram:</label>
                                            <input type="text" id="instagram" placeholder="Enter Instagram Link" class="form-control" name="instagram" value="{{ old('instagram') }}">
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




{{-- -------------------------------------------------- --}}

@section('css')

@endsection
{{-- -------------------------------------------------- --}}
 @section('script')
            <script src="{{asset('js/trix.js')}}"></script>
            <script>
                    $('#eventEndDate').datepicker({
                        language: 'en',
                        // clearButton: 'true',
                        autoClose: 'true',
                        timepicker: 'true',
                        minDate: new Date() // Now can select only dates, which goes after today
                    });
                    $('#eventStartDate').datepicker({
                        language: 'en',
                        // clearButton: 'true',
                        autoClose: 'true',
                        timepicker: 'true',
                        minDate: new Date() // Now can select only dates, which goes after today
                    })
                </script> 
@endsection

