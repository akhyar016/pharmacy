@extends('main')

@section('title', "| Company ")

@section('content')

<div class="page-header"><h2 style="text-align: center; color: blue">Company Information</h2></div>

	<form method="POST" action="{{ route('company.create') }}">
		  <div class="form-group col-md-4 col-md-offset-4">
		    <input type="text" class="form-control" name="companyName" placeholder="Company Name">
		  </div>
		  <div class="form-group">
		  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="submit" value="Insert" class="btn btn-primary">
		  </div>
	</form>

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Created at</th>
				<th>Updated at</th>
				<th>Actions</th>
			</tr>
		</thead>

		@foreach($companies as $company)
	  	<tr>
	  		<td>
	  			{{ $company->name }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($company->created_at)) }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($company->updated_at)) }}
	  		</td>

	  		<td>
		  		<div>
		              <form method="GET" action="{{ route('company.edit', $company->id) }}" style="display: inline-block;">
		              	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		                  <input type="submit" value="Update" role="button" class="btn btn-warning btn-xs">
		              </form>
		        </div>
	        </td>
	  	</tr>
	  	@endforeach
	</table>

@endsection