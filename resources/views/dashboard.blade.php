@extends('main')

@section('title', '| Dashboard')

@section('content')
	
	<table class="table table-bordered table-hover">
	  <thead>
	    <tr>
	      <th>Product ID</th>
	      <th>Product Name</th>
	      <th>Supplier Name</th>
	      <th>Category</th>
	      <th>Quantity</th>
	      <th>Price Per Unit</th>
	    </tr>
	  </thead>

	 	@foreach($medicines as $medicine)
	  	<tr>
	  		<td>
	  			{{ $medicine->id }}
	  		</td>
	  		<td>
	  			{{ $medicine->name }}
	  		</td>
	  		<td>
	  			{{ $medicine->supplier->first_name }} {{ $medicine->supplier->last_name }}
	  		</td>
	  		<td>
	  			{{ $medicine->category->name }}
	  		</td>
	  		<td>
	  			{{ $medicine->total_quantity }}
	  		</td>
	  		<td>
	  			{{ $medicine->base_price }}
	  		</td>
	  	</tr>
	  	@endforeach

	  <tbody>
	   
	  </tbody>
</table>

@endsection
