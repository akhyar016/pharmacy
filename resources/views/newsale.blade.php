@extends('main')

@section('title', "| new sale ")

@section('content')

<div class="page-header"><h2 style="text-align: center; color: blue">Create a Sell</h2></div>

	<form method="POST" action="{{ route('newsale.insert') }}">

      <div class="form-group col-md-3 col-md-offset-3">
			  <select class="form-control" name="medicine_id">
              <option disabled selected value> Select a medicine </option>
			  @foreach($medicines as $md)
					    <option name="medicine_id" value="{{ $md->id }}">{{ $md->name }}</option>
			  @endforeach
			   </select>
		   </div>


       <div class="form-group col-md-3">
		    <input type="text" class="form-control" name="quantity" placeholder="Quantity">
		  </div>


		  <div class="form-group">
		  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="submit" value="Insert" class="btn btn-primary">
		  </div>
	</form>

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Medicine Name</th>
				<th>Quantity</th>
				<th>Base Price</th>
				<th>Total</th>
				<th>Action</th>
			</tr>
		</thead>

		@foreach($salerecord as $sr)

		<tr>
			<td>
				#
			</td>

			<td>
				{{ $sr->medicine->name }}
			</td>

			<td>
				{{ $sr->quantity }}
			</td>

			<td>
				{{ $sr->medicine->base_price }}
			</td>

			<td>
				{{ $sr->total_price }}
			</td>

			<td>
		  		<div>
		              <form method="POST" action="{{ route('newsale.delete', $sr->id) }}" style="display: inline-block;">
		              	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		                  <input type="submit" value="Delete" role="button" class="btn btn-danger btn-sm">
		              </form>
		        </div>
	        </td>

		</tr>
		@endforeach
		
	</table>

	<div class="form-group col-md-5 col-md-offset-7 ">

			<form method="POST" action="{{ route('newsale.save') }}" style="display: inline-block;">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" name="submit" value="Confirm Sale" class="btn btn-success">
			</form>

			<form method="POST" action="{{ route('newsale.clear') }}" style="display: inline-block;">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" name="submit" value="Clear sell record" class="btn btn-danger">
			</form>
	</div>

</div>

@endsection