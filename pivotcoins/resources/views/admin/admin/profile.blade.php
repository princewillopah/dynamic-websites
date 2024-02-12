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
                    <h1>Profile Page</h1>
                </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <a href="{{route('profileEdit')}}" class="btn btn-outline-secondary btn-sm ml-4">Update</a>

                   <!--      <li class="breadcrumb-item"><a href="">All Events</a></li>
                        <li class="breadcrumb-item active">Create New</li> -->
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
                                    <h4 class="card-title">{{ucfirst($user->name)}} {{ucfirst($user->lastname)}}</h4>
                                      {{-- <botton href="#" class="btn btn-primary">Edit Next of Kin</a> --}}
                                       
                                       <a href="{{route('nxtfkin')}}" class="btn btn-primary">View Next of Kin</a>
                                      <a href="{{route('profileEdit')}}" class="btn btn-primary">Edit Profile</a>

                                    </div>
                                  </div>
                           </div>
                       </div>
                       <div class="col-md-8">
                         <div class="box">
                              <h5>Basic Information</h5>
                              <table class="table">
                                  <thead>
                                  <tr>
                                      <th style="width: 30px">Name: </th>
                                      <th style="text-transform: uppercase;color: #fff;">{{ucfirst($user->name)}} {{ucfirst($user->lastname)}}</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td><span class="event-text">Wallet ID: </span></td>
                                      <td>{{$user->walletId}}</td>
                                  </tr>
                                  <tr>
                                      <td><span class="event-text" >Email: </span></td>
                                      <td>{{$user->email}}</td>
                                  </tr>
                                  <tr>
                                      <td><span class="event-text" >Phone(Whatsapp): </span></td>
                                      <td>{{$user->phone_number}}</td>
                                  </tr>
                                 {{--  <tr>
                                      <td><span class="event-text" >Address: </span></td>
                                      <td>{{$user->address}}</td>
                                  </tr> --}}
                                   <tr>
                                      <td><span class="event-text" >Registration Date </span></td>
                                      <td>{{$user->created_at->toFormattedDateString()}}</td>
                                  </tr>
                                  </tbody>
                              </table>
                         </div>
{{-- -------------------------------next of kin---------------------- --}}
                     
                       
                      
                   </div>
                </div>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

</div>
 {{-- -----------------------------------------------modals----------------------- --}}

@endsection




  



{{-- #1e1e2f !important; #27293d --}}

@section('style')
  <style>
  .content-header{background: #1e1e2f; border-bottom: 1px solid #888;padding:0 8px;margin-bottom: 30px;}
   .breadcrumb.float-sm-right{margin-top: 15px;}
   .content-header h1{font-size: 50px!important;color: #636b6f!important;font-family: 'Nunito', sans-serif!important;font-weight: 200!important;}
  </style> 
    <style>
.col-md-12 .profile-main{background: #1e1e2f !important; 
    padding:20px}
     .col-md-12 .profile-main .card{background: transparent;
         color: #aaa; width: 90%}
     .col-md-12 .profile-main .card-body{background: transparent;
}
.col-md-12 .profile-main .card-body h4{margin-bottom: 20px;text-align: center;}
.col-md-12 .profile-main .card-body .btn-primary{
    background: transparent;border:2px solid #aaa;
}
    </style>  

    <style>
  .box{
     position: relative;
     width: 90%; border-radius: 15px; 
     background: transparent;
     border: 2px solid #3aafa9;
     padding: 20px;margin-bottom: 30px
}
  .table th, .table td {
      border-top: 1px solid #1d3852!important;
      padding-left: 0px!important;
      border-bottom: none!important 
}
  .box h5{
      position: absolute;
      color: #3aafa9;display: inline;
      background: #1e1e2f !important;
      padding: 8px 5px;
      font-size: 18px;
      left: 20px;
      top: -20px;
}
  .table th:first-child, .table td:first-child{color:#fff; font-weight: 700; text-transform:capitalize!important;}
  .tabl
  </style>
  <style>
 .Notification .btn{
    background: teal; 
    color:#fff!important;
    font-weight: 600;
    padding: 10px 20px;
    border:2px solid teal;
    transition: all .9s ease;
    text-align: center;
    display: block;
    margin: 30px auto;
     width: 50%;
}

.Notification .btn:hover{
    background: transparent;
    color: teal;
     border:2px solid #aaa;
    transition: all .9s ease; 
}
  </style>

@endsection


@section('script')
    
@endsection

