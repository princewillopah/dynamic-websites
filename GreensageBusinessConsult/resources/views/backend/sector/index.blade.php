@extends('layouts.admins')

@section('title')
 Categories
@endsection


@section('content')


{{-- ================================================= --}}

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">All Sermon's Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                {{-- <li class="breadcrumb-item"><a href="{{route('categories.index')}}">All Categories</a></li> --}}
                <li class="breadcrumb-item active">All Categories</li>
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
                              @if(count($categories) > 0)
                              <h3 class="card-title" style="line-height:35px">
                                {{$categories->count() ==1? '1 Category': 'All '.$categories->count().' Categories ' }}
                              </h3>
                              @else
                              <h3 class="card-title" style="line-height:35px">
                                NO CATEGORIES CREATED YET
                              </h3>
                              @endif
                                <a href="{{route('categories.create')}}" class="btn btn-outline-primary  ml-auto">Create New</a>
                              </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <table id="example1" class="table table-bordered table-striped">
                                      <thead>
                                          <tr>
                                              <th style="width:2%;text-align: center">S/N</th>
                                              <th style="width:5%;text-align: center">Category ID</th>
                                              <th>Category Name</th>
                                              <th style="width:15%;text-align: center">Numbers of sermons</th>
                                              <th colspan="2">Actions</th>
                                          </tr>
                                        </thead>
                                    @if(count($categories) > 0)
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$category->id}}</td>
                                            <td> <a href="{{route('categories.show',$category->id)}}">{{$category->name}}</a></td>
                                            <td>{{$category->sermons->count()}}</td>
                                            <td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="edit" data-toggle="modal" data-target="#editCatModal-{{$category->id}}" ><i class="fa fa-pencil"></i></a></td>
                                            <td><button class="btn btn-outline-secondary btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deleteUserModal-{{$category->id}}"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <tbody>
                                        <tr >
                                            <th scope="row" colspan="9" class="text-center py-5">
                                               <h1 style="margin-bottom: 4px;"> No Records for categories</h1>
                                                <a href="{{route('categories.create')}}" style="font-size: 18px; color: #3aafa9;text-decoration: none">Create New </a>
                                            </th>
                                        </tr>
                                    </tbody>
                                @endif
                                  </table>
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                  </div><!-- /.col -->
                </div><!-- /.row -->
        </section>

</div>














       {{--edit modal--}}
    @foreach($categories as $category)
        <div class="modal fade" id="editCatModal-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" >
                        <h5 class="modal-title" id="editCatModal-{{$category->id}}">{{$category->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('categories.update',$category->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                        <div class="form-group col-md-12">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  id="name" name="name" value="{{ $category->name }}" >
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                               <strong>{{ $errors->first('name') }}</strong>
                               </span>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer" >
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;Cancel&nbsp;</button>
                            <button type="submit" class="btn btn-outline-danger btn-sm">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach


    @foreach($categories as $category)
        <div class="modal fade" id="deleteUserModal-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" >
                        <h5 class="modal-title" id="deleteUserModal-{{$category->id}}">Alert!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        You are about deleting the category " <span style="color:#2b7a78!important; font-weight: 600">{{$category->name}} </span> " with ID: <span style="color:#2b7a78!important; font-weight: 600">{{$category->id}}</span>. <br>
                       @if(count($category->sermons)> 0)
                         <p>This Category has {{$category->sermons->count()}} sermons</p>
                       @endif
                        <span style="color: #fff; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                    </div>
                    <div class="modal-footer" >
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                        <form action="{{route('categories.destroy',$category->id)}}" method="post">
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
 <link rel="stylesheet" href="{{asset('admin3/plugins/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('script')
<!-- DataTables -->
<script src="{{asset('admin3/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script>
        $(function () {
          $("#example1").DataTable();
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
          });
        });
      </script>
@endsection
