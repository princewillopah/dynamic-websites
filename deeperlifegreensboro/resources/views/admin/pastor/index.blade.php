@extends('layouts.admins')

@section('title')
Pastor
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
                <div class="row">
                  <div class="col-12">
                        <div class="card">
                                <div class="card-header d-flex">
                                  <h3 class="card-title" style="line-height:35px">Data Table With Full Features</h3>
                                  <a href="{{route('pastors.create')}}" class="btn btn-outline-primary  ml-auto">Create New</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <table id="table_id" class="table table-bordered table-striped display">
                                    <thead>
                                        <tr>
                                            <th style="width:2%;text-align: center">S/N</th>
                                            <th style="width:5%;text-align: center">Cover Img</th>
                                            <th>Name</th>
                                            <th style="width:15%;text-align: center">Title</th>
                                            <th style="width:15%;text-align: center">No. of Sermons</th>
                                            <th colspan="3" style="width:10%;text-align: center">Actions</th>
                                        </tr>
                                    </thead>
                                    @if(count($pastors) > 0)
                                    <tbody>
                                        @foreach($pastors as $pastor)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td style="padding:2px">
                                                {{-- @if(is_null($pastor->pic))
                                                    <img src="placeholder-img/pastors/v1.jpg" width="60" height="60" alt="cover img">
                                                @else  --}}
                                                    
                                                    {{-- <img src="{{URL::asset('/uploads/pastors/'.$pastor->pic)}}" width="60" height="60" alt="cover img"> --}}
                                                 {{-- @endif --}}
                                                 @if($pastor->pic)
                                                 
                                                 <img src="{{URL::asset('/uploads/pastors/'.$pastor->pic)}}" width="60" height="60" alt="Add image 4 {{$pastor->name}} " style="font-size:9px; padding:0; font-weight:300;line-height:1px">
                                                  
                                              {{-- @else  --}}
                                                {{-- <img src="{{asset('placeholder-img/pastors/v1.jpg')}}" width="60" height="60" alt="cover img">  --}}
                                                {{-- <img src="placeholder-img/pastors/person_1.jpg" width="60" height="60" alt="cover img"> --}}
                                                  @endif
                                                 
                                            </td>
                                            <td>{{$pastor->name}}</td>
                                            <td>{{$pastor->title}}</td>
                                            <td>{{$pastor->sermons->count()}}</td>
                                            <td><a href="{{route('pastors.show',$pastor->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="view" ><i class="fa fa-th"></i> View</a></td>
                                            <td><a href="{{route('pastors.edit',$pastor->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="edit" ><i class="fa fa-pencil"></i> Edit</a></td>
                                            <td><button class="btn btn-outline-secondary btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deletePastorModal-{{$pastor->id}}"><i class="fa fa-trash"></i> Delete</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <tbody>
                                        <tr >
                                            <th scope="row" colspan="9" class="text-center py-5">
                                               <h1 style="margin-bottom: 4px;"> No Records for Pastors</h1>
                                                <a href="{{route('pastors.create')}}" style="font-size: 18px; color: #3aafa9;text-decoration: none">Create New </a>
                                            </th>
                                        </tr>
                                    </tbody>
                                @endif
                                    <tfoot>             
                                        <tr>
                                            <th style="width:2%;text-align: center">S/N</th>
                                            <th style="width:5%;text-align: center">Cover Img</th>
                                            <th>Name</th>
                                            <th style="width:15%;text-align: center">Title</th>
                                            <th style="width:15%;text-align: center">No. of Sermons</th>
                                            <th colspan="3" style="width:10%;text-align: center">Actions</th>
                                        </tr>
                                    </tfoot>
                                  </table>
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                  </div><!-- /.col -->
                </div><!-- /.row -->
        </section>

</div>



{{-- ============================================================================= --}}
    {{--delete modal--}}
    @foreach($pastors as $pastor)
        <div class="modal fade" id="deletePastorModal-{{$pastor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" >
                        <h5 class="modal-title" id="deleteModal-{{$pastor->id}}">Alert!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        You are about deleting the Pastor's record " <span style="color:#2b7a78!important; font-weight: 600">{{$pastor->name}} </span> " with ID: <span style="color:#2b7a78!important; font-weight: 600">{{$pastor->id}}</span>. <br>    
                        <span style="color: #fff; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                    </div>
                    <div class="modal-footer" >
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                        <form action="{{route('pastors.destroy',$pastor->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Yes, Delete it</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('style')
 <!-- DataTables -->
 {{-- <link rel="stylesheet" href="{{asset('admin3/plugins/datatables/dataTables.bootstrap4.min.css')}}"> --}}
@endsection

@section('script')
<!-- DataTables -->
{{-- <script src="{{asset('admin3/plugins/datatables/jquery.dataTables.min.js')}}"></script> --}}
<script>
        // $(function () {
        //   $("#example1").DataTable();
        //   $('#example2').DataTable({
        //     "paging": true,
        //     "lengthChange": false,
        //     "searching": false,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": false
        //   });
        // });
        $(document).ready( function () {
          $('#table_id').DataTable();
        } );
      </script>
@endsection
