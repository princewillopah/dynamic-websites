@extends('layouts.dashboardLayout')

@section('title')
All Jobs
@endsection

     @section('style')

  <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/multicheck/multicheck.css')}}">
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/bootstrap-toggle.min.css')}}" rel="stylesheet">
    <style>
           .slow .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }
           .btn.btn-success.toggle-on,.btn.btn-danger.toggle-off{line-height: 12px}
           .toggle.btn {max-height: 36px;}
           .btn-success{background:teal!important;color:#eee!important;font-weight: 700;border:1px solid teal!important}
           .btn-danger{background:#eee!important;color:rgb(30, 25, 41)!important;font-weight: 700;border:1px solid #aaa!important}
           .btn-default{background:#aaa!important;}
           /* .btn-danger, .dropdown-toggle{border:none!important} */
    </style>
 
    @endsection

    @section('script')
    <script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap-toggle.min.js')}}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
    
    
    <script>
        $(function() {
          $('#toggle-two').bootstrapToggle({
            on: 'Make Unpopular',
            off: 'Make Popular'
          });
        })
      </script>
       <script>
 
      </script>
     
@endsection


@section('content')

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        @include('includes.messages')
                        <div id="ajax-message"></div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr style="background:teal; color:#eee">
                                                <th style=" color:#eee">S/n</th>
                                                <th style=" color:#eee">Title</th>
                                                <th style=" color:#eee">Due Date</th>
                                                <th style=" color:#eee">Applicants</th>
                                                <th style=" color:#eee">Publish</th>
                                                <th style=" color:#eee">View</th>
                                                <th style=" color:#eee">Delete</th>
                                                <th style=" color:#eee">Edit</th>
                                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($jobs as $job)

                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$job->title}}</td>
                                            <td>{{$job->due_date}}</td>
                                            <td>{{$job->applicants->count()}}</td>
                                            {{-- <th><input type="checkbox" class="toggle-popularity" {{$job->popular == true ? 'checked':''}} data-id={{$job->id}} data-toggle="toggle" data-on="Make Unpopular" data-off="Make Popular" data-onstyle="success" data-offstyle="danger" data-style="slow"></th> --}}
                                            <th>{{$job->show == 1? 'Published':'Unpublished'}}</th>
                                            <th>View</th>
                                            <th>Delete</th>
                                            <td><a href="{{route('jobs.edit',$job->id)}}" class="btn btn-primary  btn-sm  float-right  mr-1" title="edit">EDIT</a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr style="background:teal;color:#eee">
                                                <th style=" color:#eee">S/n</th>
                                                <th style=" color:#eee">Title</th>
                                                <th style=" color:#eee">Due Date</th>
                                                <th style=" color:#eee">Applicants</th>
                                                <th style=" color:#eee">Publish</th>
                                                <th style=" color:#eee">View</th>
                                                <th style=" color:#eee">Delete</th>
                                                <th style=" color:#eee">Edit</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

@endsection
