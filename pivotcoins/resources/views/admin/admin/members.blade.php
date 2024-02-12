@extends('layouts.admin')

@section('title')
Investors
@endsection


@section('content')
  

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
      <div class="col-sm-6">
          <h1 class="m-0 text-dark">All investors</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">All Investors</li>
          </ol>
      </div><!-- /.col -->
      </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


    {{-- <div class="content-header">
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
     <!-- Main content --> --}}



  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex">
            <h3 class="card-title" style="line-height:35px"> </h3>
            <a href="{{URL::previous()}}" class="btn btn-outline-primary  ml-auto">Back</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>S/N</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>VIEW</th>
                <th>DELETE</th>
              </tr>
              </thead>
              
                  @if(count($users) > 0)
                  <tbody>
                      @foreach($users as $user)
                      
                   {{--    @if($user->admin == 0)--}}
                      <tr>
                          <td>{{$loop->iteration}}</td>
                          {{-- <td>
                              @if(is_null($user->image))
                                  <img src="{{asset('placeholder-img/users/v1.jpg')}}" width="60" height="60" alt="cover img">
                              @else
                                  <img src="{{asset('storage/'.$user->image)}}" width="60" height="60" alt="cover img">
                              @endif
                          </td> --}}
                          <td>{{$user->name}}</td>
                          <td>{{$user->lastname}}</td>
                    
                           <td><a href="{{route('members.show',$user->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="view" ><i class="fa fa-th"></i> View</a></td>
                        {{-- <td><a href="" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="edit" ><i class="fa fa-pencil"></i> Edit</a></td> --}}
                        @if($user->admin == 1)
                           <td>Admin</td>
                        @elseif($user->admin == 0)
                           <td><button class="btn btn-outline-secondary btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deleteuserModal-{{$user->id}}"><i class="fa fa-trash"></i> Delete</button></td> 
                        </tr>
                        @endif
                       
                      {{--        @endif--}}
                      @endforeach
                  </tbody>
              @else
              <tbody>
                  <tr >
                      <th scope="row" colspan="9" class="text-center py-5">
                         <h1 style="margin-bottom: 4px;"> No Investors Yet</h1>
                          {{-- <a href="{{route('pastors.create')}}" style="font-size: 18px; color: #3aafa9;text-decoration: none">Create New </a> --}}
                      </th>
                  </tr>
              </tbody>
              @endif
              <tfoot>
              <tr>
                  <th>S/N</th>
                  <th>FIRST NAME</th>
                  <th>LAST NAME</th>
                  <th>VIEW</th>
                  <th>DELETE</th>
              </tr>
              </tfoot>
            </table>
          
          </div> <!-- /.card-body -->
         </div><!-- /.card -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section>
</div>

{{-- ========================================================== --}}
  @foreach($users as $user)
  <div class="modal fade" id="deleteuserModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" >
                        <h5 class="modal-title" id="deleteuserModal-{{$user->id}}">Alert!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span> You are about deleting <span style="color: #fff">{{ucwords($user->name)}} {{ucfirst($user->lastname)}}'s</span>  Record</span>.<br>
                        <span style="color: #fff; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                    </div>
                    <div class="modal-footer" >
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                        <form action="{{route('destroy',$user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Yes, Delete it</button>
                        </form>

                    </div>
                </div>
            </div>
  </div>
 @endforeach
  {{-- ============================================================================== --}}

@endsection


@section('style')
    <style>   
  .content-header{background: #1e1e2f; border-bottom: 1px solid #888;padding:0 8px;margin-bottom: 30px;}
   .breadcrumb.float-sm-right{margin-top: 15px;}
   .content-header h1{font-size: 50px!important;color: #636b6f!important;font-family: 'Nunito', sans-serif!important;font-weight: 200!important;}
  </style> 
    
@endsection


@section('script')
    <!-- page script -->
<script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection