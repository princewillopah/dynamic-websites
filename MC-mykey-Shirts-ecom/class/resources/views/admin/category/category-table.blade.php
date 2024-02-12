@extends('layout.admin-layout')
@section('title')
	{{$category->name}}
@endsection
@section('page')
	<li class="breadcrumb-item active"> All {{$category->name}}</li>
@endsection
@section('content')
	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="col-md-8 offset-md-2 pt-2">
			@include('includeFiles.messages')
		</div>
		<div class="card-header d-flex">
			<div>
				<i class="fas fa-table"></i> Category Data Table for {{$category->name}}
			</div>
			<a href="{{route('categories.index')}}" class="btn btn-outline-secondary ml-auto mr-3" > <i class="fas fa-long-arrow-alt-left" style="color: royalblue"></i> Back</a>
			<a href="" class="btn btn-outline-secondary " data-toggle="modal" data-target="#addCategory">Add Category</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
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
						<th>Created Date</th>
						<th>Last Updated</th>
						<th>
							Action
						</th>

					</tr>
					</tfoot>
					<tbody>
					@foreach($category->products as $categoryP)
						<tr>
							<td>{{$categoryP->id}}</td>
							<td>{{$categoryP->name}}</td>
							{{--<td>{{$categoryP->products->count()}}</td>--}}
							<td>{{$categoryP->created_at->format('d / m / Y')}}</td>
							<td>{{$categoryP->updated_at->format('d / m / Y')}}</td>
							<td>
								{!! Form::open(['method'=>'DELETE', 'action'=>['CategoryController@destroy', $categoryP->id],'style'=>'display:inline!important;']) !!}
								{{link_to_route('products.show', 'View',$categoryP->id, ['class'=>'btn btn-secondary btn-sm ti-view-list-alt'])}}
								{{link_to_route('products.edit', 'Edit', $categoryP->id, ['class'=>'btn btn-primary btn-sm ti-pencil-alt'])}}
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
				{!! Form::open(['method'=>'POST', 'action'=>['CategoryController@storeIndividual',$category->id],'style'=>'display:inline;',]) !!}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Category in {{$category->name}}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="form-group">
							{!! Form::label('name','Name:') !!}
							{!! Form::text('name',null,['class'=>"form-control"]) !!}
						</div>
						<div class="form-group">
							{!! Form::label('category_id','Category:') !!}
							{!! Form::select('category_id',$cat,null,['class'=>"form-control"]) !!}
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