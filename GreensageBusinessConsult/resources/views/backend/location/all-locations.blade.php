@extends('layouts.dashboardLayout')

@section('title')
All Categories
@endsection

@section('style')

  <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/multicheck/multicheck.css')}}">
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">

@endsection

@section('script')
{{-- <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script> --}}
     <!-- Bootstrap tether Core JavaScript -->
    {{-- <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script> --}}
     <!-- slimscrollbar scrollbar JavaScript -->
    {{-- <script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script> --}}
     <!--Wave Effects -->
    {{-- <script src="{{asset('dist/js/waves.js')}}"></script> --}}
     <!--Menu sidebar -->
    {{-- <script src="{{asset('dist/js/sidebarmenu.js')}}"></script> --}}
     <!--Custom JavaScript -->
    {{-- <script src="{{asset('dist/js/custom.min.js')}}"></script> --}}
     <!-- this page js -->
    <script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script> 
@endsection
@section('content')
  <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"> {{($locations->count()> 1?'All '.$locations->count().' locations': $locations->count()=== 1) ? 'All '.$locations->count().' locations':'No categorie Found' }} </h4>
                        <div class="ms-auto text-end ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All locations</li>
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
                <div class="row">
                    <div class="col-12">
                       
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr style="background:teal; color:#eee">
                                                <th style=" color:#eee">S/n</th>
                                                <th style=" color:#eee">Name</th>
                                                <th style=" color:#eee">Number Of Jobs</th>
                                                <th style=" color:#eee">View</th>
                                                <th style=" color:#eee">Delete</th>
                                                <th style=" color:#eee">Edit</th>
                                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($locations as $location)

                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$location->name}}</td>
                                            <td>{{$location->jobs->count()?$location->jobs->count():'None'}}</td>
                                            <th>View</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr style="background:teal;color:#eee">
                                             <th>S/n</th>
                                                <th>Name</th>
                                                <th >Number Of Jobs</th>
                                                <th>View</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
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
