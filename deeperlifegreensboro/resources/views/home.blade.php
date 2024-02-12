@extends('layouts.admins')


@section('title')
Dashboard
@endsection

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">All Databases</h1>
                </div>
                    {{-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('events.index')}}">All Events</a></li>
                        <li class="breadcrumb-item active">Create New</li>
                        </ol>
                    </div> --}}
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                <h3>{{$sermon->count()}}</h3>
                  <p>SERMONS</p>
                </div>
                <div class="icon">
                  {{-- <i class="ion ion-bag"></i> --}}
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
                <a href="{{route('sermons.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$event->count()}}</h3>
                    <p>EVENTS</p>
                </div>
                <div class="icon">
                  {{-- <i class="ion ion-stats-bars"></i> --}}
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
                <a href="{{route('events.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$pastor->count()}}</h3>
                    <p>PASTORS</p>
                </div>
                <div class="icon">
                  {{-- <i class="ion ion-person-add"></i> --}}
                  <i class="fa fa-arrow-circle-right"></i>

                </div>
                <a href="{{route('pastors.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$category->count()}}</h3>
                    <p>CATEGORIES</p>
                </div>
                <div class="icon">
                  {{-- <i class="ion ion-pie-graph"></i> --}}
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
                <a href="{{route('categories.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->



</div>
 
@endsection


@section('style')

@endsection

@section('script')

@endsection
