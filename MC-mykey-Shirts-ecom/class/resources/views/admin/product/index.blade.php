@extends('layout.admin-layout')
@section('title')
	All Products
@endsection
@section('page')
	<li class="breadcrumb-item active"> All Products</li>
@endsection
@section('content')
	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="col-md-8 offset-md-2 pt-2">
			@include('includeFiles.messages')
		</div>
	<div class="card-header d-flex">
		<div>
			<i class="fas fa-table"></i> Products Data Table
		</div>
		<a href="" class="btn btn-outline-secondary ml-auto" data-toggle="modal" data-target="#addProduct">Add Product</a>
	</div>
	<div class="card-body">
	<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
	<tr>
	<th style="width: 5px">ID</th>
	<th>Image</th>
	<th>Name</th>
	<th>Category</th>
	<th>Featured</th>
	<th>Arrival Date</th>
	<th>Size</th>
	<th>Price</th>
	{{--<th>Make Featured</th>--}}
	<th>Take Actions</th>
	</tr>
	</thead>
	<tfoot>
	<tr>
	  <th>ID</th>
	<th>Image</th>
	<th>Name</th>
	<th>Category</th>
	<th>Featured</th>
	<th>Arrival Date</th>
	<th>Size</th>
	<th>Price</th>
	{{--<th>Make Featured</th>--}}
	<th>Take Actions</th>

	</tr>
	</tfoot>
	<tbody>
	@foreach($products as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td><img src="{{asset('uploads/images/'.$product->image)}}" alt="" style="width: 50px; height: 50px"></td>
			<td>{{$product->name}}</td>
			<td>{{$product->category->name}}</td>
			<td>{{$product->featured}}</td>
			<td>{{$product->created_at->format('d/m/Y')}}</td>
			<td>{{$product->size}}</td>
			<td>₦{{$product->price}}</td>
			<td class="d-flex">
				@if($product->featured === 1)
					<a href="{{route('products.removeFromFeatured',$product->id)}}" title="Remove From Featured Products" > <i class="fas fa-ban "  style="color:green;padding-right: 5px"></i></a>
				@else
					<a href="{{route('products.addToFeatured',$product->id)}}" title="Add To Featured Products" > <i class="fas fa-circle" style="color:green;padding-right: 5px"></i></a>
				@endif

				<a href="{{route('products.show',$product->id)}}" title="View"> <i class="fas fa-th pr-1"></i></a>
				<a href="{{route('products.edit',$product->id)}}" title="Edit"> <i class="fas fa-pencil-alt fa-fw " style="color: #0b3e6f;padding-right: 5px"></i></a>
				<form action="{{route('products.destroy', $product->id)}}" method="POST" style="display:inline!important">
					@csrf
					@method('DELETE')
					<button type="submit" title="Delete" class="pl-0 py-0" style="background-color: transparent;border: none;cursor: pointer"><i class="fas fa-trash" style="color: red"></i></button>
				</form>
			</td>

		</tr>
	@endforeach
	</tbody>
	</table>
	</div>
	</div>
	<div class="card-footer small text-muted">
		Updated yesterday at 11:59 PM
	</div>
	</div>

	{{------------------------------create category modal- ------------------------}}
	<!-- Modal -->
	<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				{!! Form::open(['method'=>'POST', 'action'=>['ProductController@store'],'style'=>'display:inline;','files'=>true,]) !!}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
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
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" style="display: inline;">Add Product</button>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>




@endsection