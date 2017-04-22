@extends('main')

@section('title', "| Medicine ")

@section('content')

<div class="page-header"><h2 style="text-align: center; color: blue"> Medicine Edit </h2></div>

	<form method="POST" action="{{ route('medicine.update', $medicineId) }}">
		  <div class="form-group col-xs-2">
		    <input type="text" class="form-control" name="name" value="{{ $md->name }}" required="true">
		  </div>

		  <div class="form-group col-xs-2">
			  <select class="form-control" name="category_id">
				    @foreach($categories as $category)
					    <option name="category_id" value="{{ $category->id }}">{{ $category->name }}</option>
				    @endforeach
			   </select>
		   </div>

		   <div class="form-group col-xs-2">
			  <select class="form-control" name="supplier_id">
				    @foreach($suppliers as $supplier)
					    <option name="supplier_id" value="{{ $supplier->id }}"> {{ $supplier->first_name}}</option>
				    @endforeach
			   </select>
		   </div>

		  <div class="form-group col-xs-2">
		    <input type="text" class="form-control" name="quantity" value="{{ $md->total_quantity }}">
		  </div>


		  <div class="form-group col-xs-2">
		    <input type="text" class="form-control" name="base_price" value="{{ $md->base_price }}" >
		  </div>


		  <div class="form-group col-md-2">
		  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="submit" value="Update" class="btn btn-success">
		  </div>
	</form>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Category</th>
				<th>Supplier</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Created at</th>
				<th>Updated at</th>
				<th>Actions</th>
			</tr>
		</thead>

		@foreach($medicines as $medicine)
	  	<tr>
	  		<td>
	  			{{ $medicine->name }}
	  		</td>
	  		<td>
	  			{{ $medicine->category->name }}
	  		</td>
	  		<td>
	  			{{ $medicine->supplier->first_name }}
	  		</td>
	  		<td>
	  			{{ $medicine->total_quantity }}
	  		</td>
	  		<td>
	  			{{ $medicine->base_price }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($medicine->created_at)) }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($medicine->updated_at)) }}
	  		</td>

	  		<td>
		  		<div>
		              <form method="GET" action="{{ route('medicine.edit', $medicine->id) }}" style="display: inline-block;">
		              <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                  <input type="submit" value="Update" role="button" class="btn btn-warning btn-xs">
		              </form>
		       
		              <form method="POST" action="{{ route('medicine.delete', $medicine->id)}}" style="display: inline-block;">
		              <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                  <input type="submit" value="Delete" role="button" class="btn btn-danger btn-xs">
		              </form>
		        </div>
	        </td>
	  	</tr>
	  	@endforeach
	</table>

@endsection