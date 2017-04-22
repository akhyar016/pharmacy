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
          <tr>
            <td>Article</td>
            <td><a href="#">Title of your article here</a></td>
            <td class="text-right">-</td>
            <td class="text-right">$200.00</td>
          </tr>
         
        </tbody>
      </table>
      <div class="row text-right">
        <div class="col-xs-2 col-xs-offset-8">
          <p>
            <strong>
            Sub Total : <br>
            TAX : <br>
            Total : <br>
            </strong>
          </p>
        </div>
        <div class="col-xs-2">
          <strong>
          $1200.00 <br>
          N/A <br>
          $1200.00 <br>
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