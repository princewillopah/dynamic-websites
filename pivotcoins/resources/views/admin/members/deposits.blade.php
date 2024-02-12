@extends('layouts.member')

@section('title')
Deposits
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hello {{ucfirst($user->name)}} {{ucfirst($user->lastname)}}</h1>
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
               <div class="deposit-message">
    <!-- ===================================================== -->
                 @if(session()->has('success'))
                    <div class="col-md-8 offset-md-2 my-5" style="background:teal">
                        <div class="alert  alert-dismissible fade show" style="background:teal;text-align: center">
                            <button type="button" class="close" data-dismiss="alert" style="color: white;">&times;</button>
                            <strong style="color:#fff">{{ session()->get('success') }}</strong>
                            </div>
                        </div>
                    {{-- @else --}}
                    @endif
<!-- =================================================== -->
                 <h3>
                  Please, note that you will automatically be placed in any of 
                  the three plans depending on the amount you deposited.
                 </h3>
                 <p>The Minimum Amount: $1000.00 </p>
               </div>
             </div>
             <div class="col-md-6 offset-md-3">
               <div class="copy-walletid d-flex">
             
                        <div class="input-group">
                          <input  class="form-control" id="foo" value="1Ayv7uQSPcutJLWT4rSJenwq2hdEivgMTh">
                          <div class="input-group-prepend">
                            <button class="btn" data-clipboard-target="#foo">
                              Copy Wallet ID
                             </button>
                          </div>
                        </div>
               </div>
             </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->



        <form action="{{route('deposit.notification.store')}}" method="POST" >
          @csrf
          <input type="hidden" name="name" value="{{$user->name}} {{$user->lastname}}">
           <input type="hidden" name="email" value="{{$user->email}}">
             <section class="Notification">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                        <button type="submit" class="btn btn-outline-primary" name="submit">Send Notification </button>
                    {{-- <a href="" class="btn"></a> --}}

                  </div>
                </div>
              </div>
        </section>
      </form>



  




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
