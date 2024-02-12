@extends('layouts.member')

@section('title')
   {{$user->name}}'s Profile
@endsection


@section('content')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Welcome, {{$user->lastname}} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">

            <div class="col-md-12">
                <div class="profile-main">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="profile-pic">
                              
                               <div class="card" >
                                    @if(is_null(Auth::user()->photo))
                                    <img src="{{asset('uploads/person1.png')}}" class="img-fluid"  alt="{{ Auth::user()->name }}">
                                   @else
                                    <img src="{{asset('uploads/'.Auth::user()->photo)}}" class="img-fluid"  alt="{{ Auth::user()->name }}">
                                   @endif
                                    <div class="card-body">
                                    <h4 class="card-title">{{$user->name}} {{$user->lastname}}</h4>
                                      {{-- <p class="card-text">Some example text.</p> --}}
                                      {{-- <a href="#" class="btn btn-primary">See Profile</a> --}}
                                    </div>
                                  </div>
                           </div>
                       </div>
                       <div class="col-md-8">
                           <div class="main-info">
                            <form action="{{ route('profileupdate') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                        <div class="form-group">
                                            <label for="name" class="col-form-label text-md-right">{{ __('First Name') }}</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name}} " required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
         
                                        <div class="form-group">
                                            <label for="lastname" class="col-form-label text-md-right">{{ __('Last Name') }}</label>
                                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{$user->lastname}}" required autocomplete="lastname" autofocus>
                                            @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group">
                                            <label for="walletId" class="col-form-label text-md-right">{{ __('Bitcoin Wallet') }}</label>
                                            <input id="walletId" type="text" class="form-control @error('walletId') is-invalid @enderror" name="walletId" value="{{$user->walletId}}" required autocomplete="walletId" autofocus>
                                            @error('walletId')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group">
                                            <label for="phone_number" class="col-form-label text-md-right">{{ __('Phone Number') }}</label>
                                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $user->phone_number}}" required autocomplete="phone_number" autofocus>
                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                                <label for="photo">Profile Image:</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="avatar" name="avatar">
                                                    <label class="custom-file-label" for="avatar">Choose file</label>
                                                    </div>
                                                </div>
                                        </div>
        
                                    <button type="submit" class="btn rounded-0 form-submit w-25 bttn-fill bttn-md bttn-primary" name="submit">Edit</button>
                                 
                                </form>    


                           </div>
                       </div>
                   </div>
                </div>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

</div>
 


@endsection

{{-- #1e1e2f !important; #27293d --}}

@section('style')
        <style>
         .col-md-12 .profile-main{background: #1e1e2f !important; padding:20px}
         .col-md-12 .profile-main .card{background: transparent;color: #aaa; width: 80%}
         .col-md-12 .profile-main .card-body{background: transparent;}
        </style>  
@endsection


@section('script')
    
@endsection