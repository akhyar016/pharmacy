@extends('main')

@section('title', "| Supp ")

@section('content')

<div class="page-header"><h2 style="text-align: center; color: blue">Supplier Information Edit</h2></div>

		<form method="POST" action="{{ route('supplier.update', $spID )}}">
			<div class="form-group col-xs-2">
		    	<input type="text" class="form-control" name="first_name" value="{{ $sp->first_name }}">
		  	</div>
		  	<div class="form-group col-xs-2">
		    	<input type="text" class="form-control" name="last_name" value="{{ $sp->last_name }}">
		  	</div>
		  	<div class="form-group col-xs-3">
		    	<input type="text" class="form-control" name="email" value="{{ $sp->email }}">
		  	</div>
		  	<div class="form-group col-xs-2">
		    	<input type="text" class="form-control" name="mobile" value="{{ $sp->mobile }}">
		  	</div>
		  	<div class="form-group col-xs-2">
			  <select class="form-control" name="company_id">
				    @foreach($companies as $company)
					    <option name="company_id" value="{{ $company->id }}">{{ $company->name }}</option>
				    @endforeach
			   </select>
		   </div>
			<div class="form-group">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="submit" value="Update" class="btn btn-success">
			</div>
		</form>

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Company</th>
				<th>Created at</th>
				<th>Updated at</th>
				<th>Actions</th>
			</tr>
		</thead>

		<?php $i = 0; ?>

		@foreach($suppliers as $supplier)
	  	<tr>
	  		<td>
	  			<?php echo ++$i; ?>
	  		</td>
	  		<td>
	  			{{ $supplier->first_name }}
	  		</td>

	  		<td>
	  			{{ $supplier->last_name }}
	  		</td>

	  		<td>
	  			{{ $supplier->email }}
	  		</td>

	  		<td>
	  			{{ $supplier->mobile }}
	  		</td>

	  		<td>
	  			{{ $supplier->company->name }}
	  		</td>

	  		<td>
	  			{{ date('M j, Y', strtotime($supplier->created_at)) }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($supplier->updated_at)) }}
	  		</td>

	  		<td>
		  		<div>
		              <form method="GET" action="{{ route('supplier.edit', $supplier->id) }}" style="display: inline-block;">
		              <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                  <input type="submit" value="Update" role="button" class="btn btn-warning btn-xs">
		              </form>
		       
		              <form method="POST" action="{{ route('supplier.delete', $supplier->id) }}" style="display: inline-block;">
		              <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                  <input type="submit" value="Delete" role="button" class="btn btn-danger btn-xs">
		              </form>
		        </div>
	        </td>
	  	</tr>
	  	@endforeach
	</table>

@endsection