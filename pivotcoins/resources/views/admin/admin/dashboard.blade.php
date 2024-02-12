@extends('layouts.admin')

@section('title')
    Admin Dashboard
@endsection


@section('content')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Your Dashbord Info </h1>
                </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
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
            <div class="col-lg-4 col-6 ">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                <h3>{{$investors->count()}}</h3>
                  <p>INVESTORS</p>
                </div>
                <div class="icon">
                  {{-- <i class="ion ion-bag"></i> --}}
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
                <a href="{{route('members.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$deposits}}</h3>
                    <p>DEPOSITS</p>
                </div>
                <div class="icon">
                  {{-- <i class="ion ion-stats-bars"></i> --}}
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
                <a href="{{route('alldeposits')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-12">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$withdrawals->count()}}</h3>
                    <p>WITHDRAWALS</p>
                </div>
                <div class="icon">
                  {{-- <i class="ion ion-person-add"></i> --}}
                  <i class="fa fa-arrow-circle-right"></i>

                </div>
                <a href="{{route('allwithdrawals')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          
          </div><!-- /.row -->
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


@section('script')
    
@endsection