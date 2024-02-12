@extends('layouts.dashboardLayout')

@section('title')
All Courses
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
    {{-- <script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script> --}}
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
        $(function() {
          $('.toggle-popularity').on('change',function(){
            var popularity_status = $(this).prop('checked') == true ? 1 : 0;//prop() get the attribute from the input//if true the status = 1 else; status = 0
            var course_id = $(this).data('id');///user_id equals to the value of course->id//('id') is from data-id in input field
            var ajax_alert = {'background':'green','text-align':'center',
                               'color':'#fff','width':'40%','margin':'auto','padding':'10px 20px'
                            }
            $.ajax({
                type:"GET",
                datatype:"JSON",
                url:"{{route('courses.make-popularity')}}",
                data:{'popularStatus':popularity_status,'courseId':course_id},
                success:function(data){
                    $('#ajax-message').fadeIn('slow');
                    $('#ajax-message').css(ajax_alert);
                    $('#ajax-message').text('Popularity Status has been changed successfully');
                    setTimeout(()=>{$('#ajax-message').fadeOut('slow')},2000)

                }

            });
        });
        })
      </script>
      {{--  --}}
@endsection
@section('content')
  <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"> {{($courses->count()> 1?'All '.$courses->count().' courses': $courses->count()=== 1) ? 'All '.$courses->count().' courses':'No course Found' }} </h4>
                        <div class="ms-auto text-end ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Courses</li>
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
                                                <th style=" color:#eee">Category</th>
                                                <th style=" color:#eee">Type</th>
                                                <th style=" color:#eee">Make Popular</th>
                                                <th style=" color:#eee">View</th>
                                                <th style=" color:#eee">Delete</th>
                                                <th style=" color:#eee">Edit</th>
                                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($courses as $course)

                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$course->title}}</td>
                                            <td>{{$course->category->name}}</td>
                                            <td>{{$course->format->name}}</td>
                                            <th><input type="checkbox" class="toggle-popularity" {{$course->popular == true ? 'checked':''}} data-id={{$course->id}} data-toggle="toggle" data-on="Make Unpopular" data-off="Make Popular" data-onstyle="success" data-offstyle="danger" data-style="slow"></th>
                                            <th>View</th>
                                            <th>Delete</th>
                                            <td><a href="{{route('courses.edit',$course->id)}}" class="btn btn-primary  btn-sm  float-right  mr-1" title="edit">EDIT</a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr style="background:teal;color:#eee">
                                             <th>S/n</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Type</th>
                                                <th>Make Popular</th>
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
