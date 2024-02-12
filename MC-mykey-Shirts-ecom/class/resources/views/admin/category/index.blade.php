@extends('layout.admin-layout')
@section('title')
	All Categories
@endsection
@section('page')
	<li class="breadcrumb-item active"> All Categories</li>
@endsection
@section('content')
	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="col-md-8 offset-md-2 pt-2">
			@include('includeFiles.messages')
		</div>
	<div class="card-header d-flex">
		<div>
			<i class="fas fa-table"></i> Category Data Table
		</div>
		<a href="" class="btn btn-outline-secondary ml-auto" data-toggle="modal" data-target="#addCategory">Add Category</a>
	</div>
	<div class="card-body">
	<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>In Stuck</th>
	<th>Created Date</th>
	<th>Last Updated</th>
	<th>
	   Actions
	</th>
	</tr>
	</thead>
	<tfoot>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>In Stuck</th>
	<th>Created Date</th>
	<th>Last Updated</th>
	<th>
		Action
	</th>

	</tr>
	</tfoot>
	<tbody>
	@foreach($categories as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->name}}</td>
			<td>{{$category->products->count()}}</td>
			<td>{{$category->created_at->format('d / m / Y')}}</td>
			<td>{{$category->updated_at->format('d / m / Y')}}</td>
			<td>
				{!! Form::open(['method'=>'DELETE', 'action'=>['CategoryController@destroy', $category->id],'style'=>'display:inline!important;']) !!}
				{{link_to_route('categories.show', 'View',$category->id, ['class'=>'btn btn-secondary btn-sm ti-view-list-alt'])}}
				{{link_to_route('products.edit', 'Edit', $category->id, ['class'=>'btn btn-primary btn-sm ti-pencil-alt'])}}
				{{ Form::button('Delete', ['type'=>'submit','class'=>'btn btn-danger btn-sm ti-trash','style'=>'display:inline!important;','onclick'=>'confirm("are you sure of this task?")']) }}
				{!! Form::close() !!}
			</td>

		</tr>
	@endforeach
	</tbody>
	</table>
	</div>
	</div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
	</div>

	{{------------------------------create category modal- ------------------------}}
	<!-- Modal -->
	<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				{!! Form::open(['method'=>'POST', 'action'=>['CategoryController@store'],'style'=>'display:inline;',]) !!}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						{!! Form::label('name','Name:') !!}
						{!! Form::text('name',null,['class'=>"form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"]) !!}
						@if ($errors->has('name'))
							<span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('name') }}</strong>
                     </span>
						@endif
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" style="display: inline;">Add Category</button>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>




@endsection