@extends('layouts.member')

@section('title')
Support
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
                  We are always available to attend to all
              your needs, questions and issues. All you have to do is to drop your message in 
              the message box and hit the "Send" button, then we will reply you as soon as 
              possible via your Email address or your Whatsapp. Thank you.
                </h4>
              </div>
             
             </div>
             <div class="col-md-6 offset-md-3">
              <form action="{{route('support.store')}}" method="POST" >
                  @csrf
                  <input type="hidden" name="name" value="{{$user->name}} {{$user->lastname}}">
                   <input type="hidden" name="email" value="{{$user->email}}">
                  <div class="form-group">
                    <textarea class="form-control rounded-0 @error('message') is-invalid @enderror" id="message" name="message" rows="5"  placeholder="Enter Message" required autocomplete="message">{{ old('message') }}</textarea>
                    @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-outline-primary" name="submit">Send </button>
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
@endsection

@section('script')
<!-- <script src="{{asset('admin3/plugins/clipboard.js-master/dist/clipboard.min.js')}}"></script> -->
<script>
 

</script>
@endsection
