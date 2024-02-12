@extends('layout.admin-layout')
@section('title')
create Category
@endsection
@section('page')
	<li class="breadcrumb-item active"> Create Category</li>
@endsection
@section('content')

	<div class="row">
		<div class="col-md-8 offset-md-2">
			@include('includeFiles.messages')
		</div>
		<div class="col-md-8 offset-md-2">
			{!! Form::open(['method'=>'POST', 'action'=>['CategoryController@store'],'style'=>'display:inline;',]) !!}
			<div class="form-group">
				{!! Form::label('name','Name:') !!}
				{!! Form::text('name',null,['class'=>"form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"]) !!}
				@if ($errors->has('name'))
					<span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('name') }}</strong>
                     </span>
				@endif
			</div>
			<div class="form-group" style="display: inline;">
				{{--{!! Form::submit('Create User',['class'=>'form-control btn btn-primary btn-lg']) !!}--}}
				<button type="submit" class="btn btn-primary" style="display: inline;">Add Category</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>

@endsection