@extends('main')

@section('title', "| new sale dashboard")

@section('content')

  <body>
    <div class="container">
      <div class="row">
        <div>
          <h1 style = "text-align: center">INVOICE REPORT</h1>
        </div>
      </div>
      <div class="row">
        
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              <h4>Medicine Name</h4>
            </th>
            <th>
              <h4>Quantity</h4>
            </th>
            <th>
              <h4>Rate/Price</h4>
            </th>
            <th>
              <h4>Sub Total</h4>
            </th>
          </tr>
        </thead>
        <tbody>

          @foreach($saleDashboard as $sd)
            <tr>
              <td> {{ $sd->medicine->name }} </td>
              <td> {{ $sd->quantity }} </td>
              <td> ${{ $sd->medicine->base_price }} </td>
              <td> ${{ $sd->total_price }} </td>
            </tr>

          @endforeach
         
        </tbody>
      </table>
      <div class="row text-right">
        <div class="col-xs-2 col-xs-offset-8">
          <p>
            <strong>
            Total Medicines: <br>
            Medicine Types: <br>
            Sub Total : <br>
            TAX : <br>
            Total : <br>
            </strong>
          </p>
        </div>
        <div class="col-xs-2">
          <strong>
          {{ $data['totalMedicines'] }} <br>
          {{ $data['medicineTypes'] }} <br>
          {{ $data['totalMoney'] }} <br>
          N/A <br>
          {{ $data['totalMoney'] }} <br>
          </strong>
        </div>
      </div>
  </body>

  <br/>

  <div class="form-group col-md-4 col-md-offset-5 ">

			<form method="GET" action="{{ route('newsale') }}" style="display: inline-block;">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" name="submit" value="Back" class="btn btn-primary">
			</form>

			<form method="POST" action="#" style="display: inline-block;">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" name="submit" value="Print" class="btn btn-default">
			</form>
	</div>

</div>


@endsection