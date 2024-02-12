@extends('layouts.app')

@section('title')
 Password Reset
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
     <style>
        
body{background: #27293d;}

.container .col-md-8{
    margin:150px auto 200px
}
.container .col-md-8 .card{background:#0d1120; }
.card .card-header{ color: #aaa}
.col-form-label{color: #aaa;}
.card .btn{color:teal;transition:.9s all ease;background: transparent;border:1px solid teal}
.card .btn:hover{background: teal;
    color:#0d1120;transition:.9s all ease }
.form-control{background: transparent;color: #aaa;}
footer .copyright{color: #aaa}
     </style>
@endsection
