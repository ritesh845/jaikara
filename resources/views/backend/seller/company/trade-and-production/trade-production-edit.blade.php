@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
			<a href="{{route('trade_production_view')}}" class="pull-right btn btn-success">Back</a>
			<h5 >Trade & Production</h5>
	</div>
	@if($message = Session::get('success'))   
          <div class="alert alert-success">{{ $message }}</div>
    @endif
	<div class="card-body">
		<form method="post" action="{{route('trade_production_update')}}">
			@csrf
			<div class="row">
				<div class="col-md-4 form-group ">
					<label>Production Capacity <a class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="prdt_capacity" id="prdt_capacity" class="form-control" placeholder="Production Capacity" value="{{$tradeAndProduction ? $tradeAndProduction->prdt_capacity : ''}}">
					<input type="hidden" name="user_id" id="user_id" class="form-control" placeholder="Production Capacity" value="{{$tradeAndProduction ? $tradeAndProduction->user_id : ''}}">
				</div>
				<div class="col-md-4 form-group ">
					<label>Factory Size
					<a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="size_sqft" value="{{$tradeAndProduction ? $tradeAndProduction->size_sqft : ''}}" class="form-control" placeholder="Factory Size in sqft.">
				</div>
				<div class="col-md-4 form-group ">
					<label>Average Lead Time / Day(s)
					<a class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="lead_time_days" value="{{$tradeAndProduction ? $tradeAndProduction->lead_time_days : ''}}" class="form-control" placeholder="Average Lead Time / Day(s)">
				</div>
				<div class="col-md-4 form-group ">
					<label>Compliance Maintaining <a class="fa fa-question-circle"></a></label>
					<input type="text" name="maintaining" value="{{$tradeAndProduction ? $tradeAndProduction->maintaining : ''}}" class="form-control">
				</div>
				<div class="col-md-4 form-group">
					<label>Export Percentage
					<a class="fa fa-question-circle"></a></label>
					<select name="export_per" class="form-control">
					<option value="">Export Percentage</option>
					@foreach(ExportPer as $keyp => $value)
						<option value="{{$keyp}}">{{$value}}</option>
					@endforeach
					</select>
				</div>
				<div class="col-md-4 form-group">
					<label>Annual Sales Volume
					<a class="fa fa-question-circle"></a></label>
					<select name="sales_volume" class="form-control">
					<option value="">Annual Sales Volume</option>
					@foreach(AnnualSales as $keyp => $value)
						<option value="{{$keyp}}">{{$value}}</option>
					@endforeach
					</select>
				</div>
				<div class="col-md-12">
					<label>Packaging Details
					<a  class="fa fa-question-circle"></a></label>
					<textarea id="editor1" name="packaging_details" class="form-control">{{$tradeAndProduction ? $tradeAndProduction->packaging_details : ''}}</textarea>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mt-4">
					<h3 >Production Capacity &amp; Scope </h3>
					<hr>
				</div>
				<div class="col-md-4 form-group">
				<label>Office Size
				<a class="fa fa-question-circle"></a>
				</label>
				<select name="office_size" class="form-control">
					<option value=""> Office Size</option>
					@foreach(OfficeSize as $keyp => $value)
						<option value="{{$keyp}}">{{$value}}</option>
					@endforeach
				</select>
				</div>	
				<div class="col-md-4 form-group">
					<label>Main Export Markets (Country)
					<a class="fa fa-question-circle"></a>
					</label>
					<select name="export_market" class="form-control">
					<option value="">Main Export Markets</option>
					@foreach(MainExportMarkets as $keyp => $value)
						<option value="{{$keyp}}">{{$value}}</option>
					@endforeach
					</select>
				</div>	
				<div class="col-md-4 form-group">
					<label>Top Five Countries
					<a class="fa fa-question-circle"></a>
					</label>
					{{-- <span style="color: gray; ">(define each country to press enter)</span> --}}
					<input name="five_countries" type="text" value="{{$tradeAndProduction ? $tradeAndProduction->five_countries : ''}}" class="form-control" data-role="tagsinput">
				</div>
				<div class="col-md-4 form-group">
					<label>Factory Location
					<a  class="fa fa-question-circle"></a>
					</label>
					<input name="factory_loc" type="text" value="{{$tradeAndProduction ? $tradeAndProduction->factory_loc : ''}}" class="form-control" placeholder="Factory Locaion">
				</div>
				<div class="col-md-4 form-group">
					<label>Nearest Port
					<a  class="fa fa-question-circle"></a>
					</label>
					<input name="nearest_port" type="text" value="{{$tradeAndProduction ? $tradeAndProduction->nearest_port : ''}}" class="form-control" placeholder="Nearest Port">
				</div>	
				<div class="col-md-4 form-group">
					<p>Have you attended or planned to attend any trade shows?</p>
					<div class="radio radio-primary">
					<input type="radio" name="is_trade" value="1">
					<label for="radio6">Yes </label>
					  /    
					<input type="radio" name="is_trade" value="0">
					<label for="radio7">No </label>
					</div>
				</div>
			</div>
			<div class="row">
				<br>
				<div class="col-md-12">
				<label>Main Clients <a  class="fa fa-question-circle"></a>
				</label>
				<textarea name="clients" class="form-control">{{$tradeAndProduction ? $tradeAndProduction->clients : ''}}</textarea>
				</div>
			</div>		
		
			<br>
			<div class="row">
				<div class="col-md-6">
					<label>Major Product(s) you sell (For Sellers) <a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="major_prdt_sell" value="{{$tradeAndProduction ? $tradeAndProduction->major_prdt_sell : ''}}" class="form-control" placeholder="Major Product(s) you sell (For Sellers)">
				</div>
				<div class="col-md-6">
					<label>Major Product(s) you buy (For Buyers)
					<a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="major_prdt_buy" value="{{$tradeAndProduction ? $tradeAndProduction->major_prdt_buy : ''}}" class="form-control" placeholder="Major Product(s) you buy (For Buyers)">
				</div>
				<div class="col-md-3">
					<label>Main Products
					<a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="main_prdt" value="{{$tradeAndProduction ? $tradeAndProduction->main_prdt : ''}}" class="form-control" placeholder="Main Products">
				</div>
				<div class="col-md-3">
					<label>Main Products 1
					<a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="main_prdt1" value="{{$tradeAndProduction ? $tradeAndProduction->main_prdt1 : ''}}" class="form-control" placeholder="Main Product 1">
				</div>
				<div class="col-md-3">
					<label>Main Products 2
					<a class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="main_prdt2" value="{{$tradeAndProduction ? $tradeAndProduction->main_prdt2 : ''}}" class="form-control" placeholder="Main Product 2">
				</div>
				<div class="col-md-3">
					<label>Main Products 3
					<a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="main_prdt3" value="{{$tradeAndProduction ? $tradeAndProduction->main_prdt3 : ''}}" class="form-control" placeholder="Main Product 3">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<label>Other Products You Sell
					<a  class="fa fa-question-circle"></a>
					</label>
					<textarea id="editor2" name="product_you_sell" class="form-control"> {{$tradeAndProduction ? $tradeAndProduction->product_you_sell : ''}}</textarea>
					
				</div>
			</div>
			<div class="row mt-2 pull-right">
				<input type="submit"  class="btn btn-success  " name="submit" value="submit">
			</div>
		</form>
	</div>
			
	</div>
</div>

@endsection
