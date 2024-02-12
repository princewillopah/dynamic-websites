@extends('layouts.admin')

@section('title')
{{$depositor->name}} {{$depositor->lastname}}'s Deposits Records
@endsection


@section('content')
  

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
      <div class="col-sm-6">
          <h1 class="m-0 text-dark" style="font-size: 20px">{{ucfirst($depositor->name)}}'s Transaction</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{route('members.index')}}">All members</a></li>
          <li class="breadcrumb-item"><a href="{{route('members.show',$depositor->id)}}">{{$depositor->name}} {{$depositor->lastname}}</a></li>
          <li class="breadcrumb-item active">{{$depositor->name}} {{$depositor->lastname}}'s deposits</li>
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
          <h3 class="card-title" style="line-height:35px">{{$deposits->count() > 1?'All '.$deposits->count().' Records':$deposits->count().' Record'}}</h3>
            {{-- <a href="" class="btn btn-outline-primary  ml-auto">Create New</a> --}}
            <button class="btn btn-outline-secondary  btn-sm mr-2 ml-auto" title="Make Deposit" data-toggle="modal" data-target="#createModal-{{$depositor->id}}">Make Deposit</button>
            <button class="btn btn-outline-secondary  btn-sm " title="make Withdrawals" data-toggle="modal" data-target="#withdrawModal-{{$withdrawerer->id}}"></i> Make Withdrawals</button>
                              
          </div>
          <!-- /.card-header -->
          <div class="card-body">
    
          <p style="margin: 50px 0px 10px 0px;color: #aaa;font-size: 20px">Deposits Table</p>
          <table  class="table table-bordered table-striped">

                <thead>
                <tr>
                  <th>S/N</th>
                  <th>AMOUNT</th>
                  <th>PLAN</th>
                  <th>RETURNS</th>
                  <th>STATUS</th>
                  <th>PAYOUT</th>
                  <th>DATE OF DEPOSIT</th>
                  <th>EDIT DEPOSIT</th>
                  <th>DELETE DEPOSIT</th>
                  <th>MAKE ACTIVE</th>
                   <th>PAY</th>
                  <!-- <th>DELETE DEPOSIT</th> -->
                </tr>
                </thead>
                
                  @if(count($deposits) > 0)
                  <tbody>
                    @foreach($deposits as $deposit)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>${{$deposit->deposit_amount}}</td>
                      <td>{{$deposit->plan}}%</td>
                      <td>${{$deposit->returns}}</td>
                      <td>
                        @if($deposit->active_deposit ==1)
                          <span style="color:teal">Active</span>
                        @else
                          <span style="color:#aaa">Inactive</span>
                        @endif
                      </td>
                       <td>
                          @if($deposit->paid == 1)
                            <i class="fa fa-check" style="color: teal"></i>
                          @elseif($deposit->paid == 0)
                            <i class="fa fa-times" style="color: #aaa"></i>
                          @endif
                      </td>
                      <td>{{date_format($deposit->created_at,'F d, Y') }} </td>
                      <td><button class="btn btn-outline-secondary  btn-sm mr-1" title="Edit" data-toggle="modal" data-target="#editModal-{{$deposit->id}}"><i class="fa fa-pencil"></i> Edit</button></td> 
                      <td><button class="btn btn-outline-danger btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deleteDepositModal-{{$deposit->id}}"><i class="fa fa-trash"></i> Delete</button></td> 
                      <td>
                   
                       @if($deposit->active_deposit == 1)
                        <a href="{{route('make.inactive',[$deposit->user->id,$deposit->id] )}}" class="btn btn-outline-success btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Make Inactive" >
                            <i class="fa fa-times"></i> Make Inactive
                        </a>
                        @elseif($deposit->active_deposit == 0)
                          <a href="{{route('make.active', [$deposit->user->id,$deposit->id])}}" class="btn btn-outline-warning btn-sm mr-1"  data-toggle="tooltip" data-placement="top" title="make Active" >
                               <i class="fa fa-check"></i> Make Active
                          </a>
                       @endif
                        </td> 
                    
                        <td>
                       @if($deposit->paid == 1)
                        <a href="{{route('cancel', [$deposit->user->id,$deposit->id])}}" class="btn btn-outline-secondary btn-sm mr-1"  data-toggle="tooltip" data-placement="top" title="remove payment" >
                              Cancel
                          </a>
                        @elseif($deposit->paid == 0)
                          <a href="{{route('pay', [$deposit->user->id,$deposit->id])}}" class="btn btn-outline-secondary btn-sm mr-1"  data-toggle="tooltip" data-placement="top" title="make payment" >
                              Pay
                          </a>
                       @endif
                        </td> 
                    </tr>
                    @endforeach
                  </tbody>
                @else
                <tbody>
                  <tr >
                    <th scope="row" colspan="11" class="text-center py-5">
                       <h1 style="margin-bottom: 4px;"> No Deposit made Yet</h1>
                        {{-- <a href="{{route('pastors.create')}}" style="font-size: 18px; color: #3aafa9;text-decoration: none">Create New </a> --}}
                    </th>
                  </tr>
                </tbody>
                @endif
                <tfoot>
                <tr>
                  <th>TOTAL</th>
                  <th colspan="10">{{$totalDeposit==0?'N/A':$totalDeposit}}</th>
                  {{-- <th></th>
                  <th></th>
                  <th></th> --}}
                </tr>
                </tfoot>
          </table>

          <p style="margin: 50px 0px 10px 0px;color: #aaa; font-size: 20px">Withdrawals Table</p>
          <table  class="table table-bordered table-striped">

                <thead>
                <tr>
                  <th>S/N</th>
                  <th>AMOUNT</th>
                  <th>DATE OF DEPOSIT</th>
                  <th>EDIT DEPOSIT</th>
                  <th>DELETE DEPOSIT</th>
                </tr>
                </thead>
                
                  @if(count($withdraws) > 0)
                  <tbody>
                    @foreach($withdraws as $withdraw)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>${{$withdraw->withdrwal_amount}}</td>
                      <td>{{date_format($withdraw->created_at,'F d, Y') }} </td>
                      <td><button class="btn btn-outline-secondary  btn-sm mr-1" title="Edit" data-toggle="modal" data-target="#editWithdrawlModal-{{$withdraw->id}}"><i class="fa fa-pencil"></i> Edit</button></td> 
                      <td><button class="btn btn-outline-danger btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deletewithdralwModal-{{$withdraw->id}}"><i class="fa fa-trash"></i> Delete</button></td> 
                      
                   
                    </tr>
                    @endforeach
                  </tbody>
                @else
                <tbody>
                  <tr >
                    <th scope="row" colspan="5" class="text-center py-5">
                       <h1 style="margin-bottom: 4px;"> No Deposit made Yet</h1>
                        {{-- <a href="{{route('pastors.create')}}" style="font-size: 18px; color: #3aafa9;text-decoration: none">Create New </a> --}}
                    </th>
                  </tr>
                </tbody>
                @endif
                <tfoot>
                <tr>
                  <th>TOTAL</th>
                  <th colspan="5">{{$totalWithdraws}}</th>
                  {{-- <th></th>
                  <th></th>
                  <th></th> --}}
                </tr>
                </tfoot>
          </table>


          </div> <!-- /.card-body -->
         </div><!-- /.card -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section>

</div>


{{-- ------- add deposit------------------------------------------------------------------------------------------------------------------------------- --}}
<div class="modal fade" id="createModal-{{$depositor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header" >
              <h5 class="modal-title" >Make Deposit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="{{route('member.deposit.store',$depositor->id)}}" method="post">
              @csrf
              <div class="modal-body">
              <div class="form-group col-md-12">
                  <label for="deposit_amount">Amount:</label>
                  <input type="number" class="form-control{{ $errors->has('deposit_amount') ? ' is-invalid' : '' }}" min="1000" id="deposit_amount" name="deposit_amount" >
                  @if ($errors->has('deposit_amount'))
                      <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('deposit_amount') }}</strong>
                     </span>
                  @endif
              </div>

          </div>
           
          <div class="modal-footer" >
              <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;Cancel&nbsp;</button>
                  <button type="submit" class="btn btn-outline-secondary btn-sm"> &nbsp; &nbsp; &nbsp;Add &nbsp; &nbsp; &nbsp;</button>
          </div>
          </form>
      </div>
  </div>
</div>
{{-- -------------withdraw deposit------------------------------------------------------------------------------- --}}
<div class="modal fade" id="withdrawModal-{{$withdrawerer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header" >
              <h5 class="modal-title" >Make Withdrawal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="{{route('member.withdrawal.store',$withdrawerer->id)}}" method="post">
              @csrf
              <div class="modal-body">
              <div class="form-group col-md-12">
                  <label for="withdrwal_amount">Amount:</label>
                  <input type="number" class="form-control{{ $errors->has('withdrwal_amount') ? ' is-invalid' : '' }}" min="0" id="withdrwal_amount" name="withdrwal_amount" >
                  @if ($errors->has('withdrwal_amount'))
                      <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('withdrwal_amount') }}</strong>
                     </span>
                  @endif
              </div>

          </div>
           
          <div class="modal-footer" >
              <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;Cancel&nbsp;</button>
                  <button type="submit" class="btn btn-outline-secondary btn-sm"> &nbsp; &nbsp; &nbsp;Add &nbsp; &nbsp; &nbsp;</button>
          </div>
          </form>
      </div>
  </div>
</div>


{{-- ---------------edit deposit------------------------------------------------------------------------------------------------ --}}


 @foreach($deposits as $deposit)
<div class="modal fade" id="editModal-{{$deposit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <h5 class="modal-title" >Edit Deposit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('member.deposit.update',[$depositor->id,$deposit->id])}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                <div class="form-group col-md-12">
                    <label for="deposit_amount">Amount:</label>
                <input type="text" class="form-control{{ $errors->has('deposit_amount') ? ' is-invalid' : '' }}"  id="deposit_amount" name="deposit_amount" value="{{$deposit->deposit_amount}}">
                    @if ($errors->has('deposit_amount'))
                        <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('deposit_amount') }}</strong>
                       </span>
                    @endif
                </div>

            </div>
            <div class="modal-footer" >
                <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;Cancel&nbsp;</button>
                    <button type="submit" class="btn btn-outline-danger btn-sm">Edit</button>
            </div>
            </form>
        </div>
    </div>
  </div>
  @endforeach

  {{-- ---------------edit withdrawl------------------------------------------------------------------------------------------------ --}}


 @foreach($withdraws as $withdraw)
<div class="modal fade" id="editWithdrawlModal-{{$withdraw->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <h5 class="modal-title" >Edit Withdrawal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('member.withdrawal.update',[$withdraw->user->id,$withdraw->id])}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                <div class="form-group col-md-12">
                    <label for="withdrwal_amount">Amount:</label>
                <input type="text" class="form-control{{ $errors->has('withdrwal_amount') ? ' is-invalid' : '' }}"  id="deposit_amount" name="withdrwal_amount" value="{{$withdraw->withdrwal_amount}}">
                    @if ($errors->has('withdrwal_amount'))
                        <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('withdrwal_amount') }}</strong>
                       </span>
                    @endif
                </div>

            </div>
            <div class="modal-footer" >
                <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;Cancel&nbsp;</button>
                    <button type="submit" class="btn btn-outline-danger btn-sm">Edit</button>
            </div>
            </form>
        </div>
    </div>
  </div>
  @endforeach
  
{{-- ----------- delete deposit ---------------------------------------------------------------------------------------------------- --}}

    @foreach($deposits  as $deposit )
       <div class="modal fade" id="deleteDepositModal-{{$deposit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header" >
                       <h5 class="modal-title">Delete Deposit</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       You are about deleting this deposit made on <span style="color:#2b7a78!important; font-weight: 600">{{date_format($deposit->created_at,'F d, Y') }} </span> <br>    
                       <span style="color: #fff; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                   </div>
                   <div class="modal-footer" >
                       <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                       <form action="{{route('member.deposit.destroy',[$deposit->user_id,$deposit->id])}}" method="post">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-outline-danger btn-sm">Yes, Delete it</button>
                       </form>

                   </div>
               </div>
           </div>
       </div>

  @endforeach

  {{-- ----------- delete withdrawal ---------------------------------------------------------------------------------------------------- --}}

    @foreach($withdraws  as $withdraw )
       <div class="modal fade" id="deletewithdralwModal-{{$withdraw->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header" >
                       <h5 class="modal-title">Delete Withdrawal</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       You are about deleting this deposit made on <span style="color:#2b7a78!important; font-weight: 600">{{date_format($withdraw->created_at,'F d, Y') }} </span> <br>    
                       <span style="color: #fff; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                   </div>
                   <div class="modal-footer" >
                       <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                       <form action="{{route('member.withdrawal.destroy',[$withdraw->user_id,$withdraw->id])}}" method="post">
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
    
<style src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css"></style>
    <style>
  .content-header{background: #1e1e2f; border-bottom: 1px solid #888;padding:0 8px;margin-bottom: 30px;}
   .breadcrumb.float-sm-right{margin-top: 15px;}
   .content-header h1{font-size: 30px!important;color: #636b6f!important;
    font-family: 'Nunito', sans-serif!important;font-weight: 200!important;margin-top: 15px!important;}
  </style> 
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>

    
@endsection

     

  
 