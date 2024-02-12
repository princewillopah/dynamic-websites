@extends('layout.admin-layout')
@section('title')
create Product
@endsection
@section('page')
	<li class="breadcrumb-item active"> Create Product</li>
@endsection
@section('content')

	<div class="row">
		<div class="col-md-8 offset-md-2">
			@include('includeFiles.messages')
		</div>
		<div class="col-md-8 offset-md-2">
			{!! Form::open(['method'=>'POST', 'action'=>['ProductController@store'],'style'=>'display:inline;','files'=>true,]) !!}
			<div class="form-group">
				{!! Form::label('name','Name:') !!}
				{!! Form::text('name',null,['class'=>"form-control"]) !!}
			</div>
			<div class="form-group">
				{!! Form::label('category_id','Category:') !!}
				{!! Form::select('category_id',$categories,null,['class'=>"form-control"]) !!}
			</div>
			<div class="form-group">
				{!! Form::label('size','Size:') !!}
				{!! Form::select('size',['small'=>'Small', 'medium'=>'Medium','large'=>'Large'],null,['class'=>"form-control"]) !!}
			</div>
			<div class="form-group">
				{!! Form::label('price','Price:') !!}
				{!! Form::text('price',null,['class'=>"form-control"]) !!}
			</div>
			<div class="form-group">
				{!! Form::label('image','Image:') !!}
				{!! Form::file('image',null,['class'=>"form-control"]) !!}
			</div>
			<div class="form-group">
				{!! Form::label('description','Description:') !!}
				{!! Form::textarea('description',null,['class'=>"form-control"]) !!}
			</div>
			<div class="form-group mb-2" style="display: inline;">
				<button type="submit" class="btn btn-primary" style="display: inline;">Add Product</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>

@endsection