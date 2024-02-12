@extends('layouts.member')

@section('title')
Next Of Kin's Information
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Your Next Of Kin</h1>
                </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
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
          <div class="row">
             <div class="col-md-8 offset-md-2">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Next Of Kin's Information</h3>
      
                </div>
  {{-- -------------------------------------- --}}
                <!-- /.card-hefeadader -->
                <div class="card-body">
                  
                  <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 30px">Name: </th>
                        <th style="text-transform: uppercase;color: #fff;">{{$user->next_of_kin->name}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span class="event-text">Email: </span></td>
                        <td>{{$user->next_of_kin->email}}</td>
                    </tr>
                    <tr>
                        <td><span class="event-text" >Phone: </span></td>
                        <td>{{$user->next_of_kin->phone}}</td>
                    </tr>

                    </tbody>
                </table>

                </div><!-- /.card-body -->
 {{-- ---------------------------------------- --}}
                <div class="card-footer">
                  <a href="{{route('nxtfkinedit',[$user->id,$user->next_of_kin->id])}}" class="btn btn-outline-secondary btn-lg">Mordify</a>
                 
                </div>
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
    .content .deposit-message h3{
     color: #aaa;font-size: 30px;
        text-align: center;
}
.content .deposit-message p{color: #fff;text-align: center; margin-bottom: 50px;margin-top: 20px;}
.content .copy-walletid button.btn{
    background: transparent; color: #fff;transition: all ease .9s;
    border:1px solid white;
}
.content .copy-walletid button.btn:hover{
    transition: all ease .9s;background: teal;
}
  </style>

    <style>
  .content-header{background: #1e1e2f; border-bottom: 1px solid #888;padding:0 8px;margin-bottom: 30px;}
   .breadcrumb.float-sm-right{margin-top: 15px;}
   .content-header h1{font-size: 50px!important;color: #636b6f!important;font-family: 'Nunito', sans-serif!important;font-weight: 200!important;}
  </style> 
  <style>
  .Notification .btn{
    background: teal; 
    color:#fff;
    font-weight: 600;
    padding: 10px 20px;
    border:2px solid teal;
    transition: all .9s ease;
    text-align: center;
    display: block;
    margin: 50px auto;
     width: 20%;
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
<script src="{{asset('admin3/plugins/clipboard.js-master/dist/clipboard.min.js')}}"></script>
<script>
  var clipboard = new ClipboardJS('.btn');

$( document ).ready(function() {
  clipboard.on('success', function(e) {
    $(e.trigger).text("Copied!");
    e.clearSelection();
    setTimeout(function() {
      $(e.trigger).text("Copy Wallet ID");
    }, 2500);
  });

  clipboard.on('error', function(e) {
    $(e.trigger).text("Can't in Safari");
    setTimeout(function() {
      $(e.trigger).text("Copy Wallet ID");
    }, 2500);
  });
});

</script>
@endsection
