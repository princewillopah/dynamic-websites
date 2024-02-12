@extends('layouts.member')

@section('title')
Withdrawals
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                 {{--    <h1>Hello {{ucfirst($user->name)}} {{ucfirst($user->lastname)}}</h1> --}}
                    <h1>Make Withdrawals</h1>
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
<!-- ===================================================== -->

    @if(session()->has('success'))
    <div class="col-md-8 offset-md-2 my-5" style="background:teal">
        <div class="alert  alert-dismissible fade show" style="background:teal;text-align: center">
            <button type="button" class="close" data-dismiss="alert" style="color: white;">&times;</button>
            <strong style="color:#fff">{{ session()->get('success') }}</strong>
            </div>
        </div>
    @else

<!-- =================================================== -->

     <section class="content">
        <div class="container-fluid">
          <div class="row">
             <div class="col-md-8 offset-md-2">
              <div class="message">
                <h4>
                   Hello, {{ucfirst($user->name)}} {{ucfirst($user->lastname)}}. You Request for withdrawals is done immediately.
                </h4>
              </div>
             
             </div>
             <div class="col-md-6 offset-md-3">
              <form action="{{route('withdrawal.request.store')}}" method="POST" >
                  @csrf
                  <input type="hidden" name="name" value="{{$user->name}} {{$user->lastname}}">
                   <input type="hidden" name="email" value="{{$user->email}}">
                    <input type="hidden" name="walletId" value="{{$user->walletId}}">
                    <div class="form-group">
                        <label for="amount" class="col-form-label text-md-right">{{ __('Amount') }}</label>
                        <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>
                        @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                 
                     <section class="Notification">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-12 pl-0">
                                  <button type="submit" class="btn btn-outline-primary" name="submit">Make Request </button>
                              {{-- <a href="" class="btn"></a> --}}

                            </div>
                          </div>
                        </div>
                  </section>

              </form>
               
             </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  @endif
  




</div>
 
@endsection

@section('style')
  <style>
  .content-header{background: #1e1e2f; border-bottom: 1px solid #888;padding:0 8px;margin-bottom: 30px;}
   .breadcrumb.float-sm-right{margin-top: 15px;}
   .content-header h1{font-size: 50px!important;color: #636b6f!important;font-family: 'Nunito', sans-serif!important;font-weight: 200!important;}

.content .message{
    margin: 0px auto 50px;
  }

.content .message h4{font-size: 20px;line-height: 35px;text-align: center;
color: #aaa;
font-family: 'Nunito', sans-serif;
font-weight: 500!important;}
.content .message h4 span{color: #fff}
.form-group .form-control{padding: 17px;color:#aaa;
    font-size:15px; line-height:35px;border: 2px solid teal;
}
.btn{padding: 10px 20px}
.btn-outline-primary{border: 1px solid teal;
 color:teal;
    font-weight: 600;transition: all ease .9s;
}
.btn-outline-primary:hover{color:#1e1e2f;background: teal;border:1px solid teal}
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
<!-- <script src="{{asset('admin3/plugins/clipboard.js-master/dist/clipboard.min.js')}}"></script> -->
<script>
 

</script>
@endsection
