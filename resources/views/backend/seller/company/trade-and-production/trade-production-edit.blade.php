@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
			<a href="{{route('trade_production_view')}}" class="pull-right btn btn-success">Back</a>
			<h5 >Trade & Production</h5>
		</div>
	<div class="card-body">
		<form method="post" action="">
			<div class="row">
				<div class="col-md-4 form-group ">
					<label>Production Capacity <a class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="prdt_capacity" id="prdt_capacity" class="form-control" placeholder="Production Capacity" value="">
				</div>
				<div class="col-md-4 form-group ">
					<label>Factory Size
					<a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="size_sqft" value="" class="form-control" placeholder="Factory Size in sqft.">
				</div>
				<div class="col-md-4 form-group ">
					<label>Average Lead Time / Day(s)
					<a class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="lead_time_days" value="" class="form-control" placeholder="Average Lead Time / Day(s)">
				</div>
				<div class="col-md-4 form-group ">
					<label>Compliance Maintaining <a class="fa fa-question-circle"></a></label>
					<input type="text" name="maintaining" value="" class="form-control">
				</div>
				<div class="col-md-4 form-group">
					<label>Export Percentage
					<a class="fa fa-question-circle"></a></label>
					<select name="export_per" class="form-control">
					<option>Export Percentage</option>
					<option value="1% - 10%">1% - 10%</option>
					<option value="11% - 20%">11% - 20%</option>
					<option value="21% - 30%">21% - 30%</option>
					<option value="31% - 40%">31% - 40%</option>
					<option value="41% - 50%">41% - 50%</option>
					<option value="51% - 60%">51% - 60%</option>
					<option value="61% - 70%">61% - 70%</option>
					<option value="71% - 80%">71% - 80%</option>
					<option value="81% - 90%">81% - 90%</option>
					<option value="91% - 100%">91% - 100%</option>
					</select>
				</div>
				<div class="col-md-4 form-group">
					<label>Annual Sales Volume
					<a class="fa fa-question-circle"></a></label>
					<select name="sales_volume" class="form-control">
					<option>Annual Sales Volume</option>
					<option value="Below Us $1 Million">Below Us $1 Million</option>
					<option value="Us $1 Million - Us $2 Million">Us $1 Million - Us $2 Million</option>
					<option value="Us $3 Million - Us $4 Million">Us $3 Million - Us $4 Million</option>
					</select>
				</div>
				<div class="col-md-12">
					<label>Packaging Details
					<a  class="fa fa-question-circle"></a></label>
					<textarea id="editor1" name="packaging_details" class="form-control"></textarea>
					
				</div>
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
					<option>Office Size</option>
					<option value="001-100">001-100 meters</option>
					<option value="100-200">100-200 meters</option>
					<option value="200-400">200-400 meters</option>
				</select>
				</div>	
				<div class="col-md-4 form-group">
					<label>Main Export Markets (Country)
					<a class="fa fa-question-circle"></a>
					</label>
					<select name="export_market" class="form-control">
					<option>Main Export Markets</option>
					<option value="North America">North America</option>
					<option value="Europe">Europe</option>
					<option value="Australia">Australia</option>
					<option value=" South America"> South America</option>
					 <option value="Asia">Asia</option>
					<option value="Antarctica">Antarctica</option>
					<option value="Africa">Africa</option>
					</select>
				</div>	
				<div class="col-md-4 form-group">
					<label>Top Five Countries
					<a class="fa fa-question-circle"></a>
					</label>
					{{-- <span style="color: gray; ">(define each country to press enter)</span> --}}
					<input name="five_countries" type="text" value="" class="form-control" data-role="tagsinput">
				</div>
				<div class="col-md-4 form-group">
					<label>Factory Location
					<a  class="fa fa-question-circle"></a>
					</label>
					<input name="factory_loc" type="text" value="" class="form-control" placeholder="Factory Locaion">
				</div>
				<div class="col-md-4 form-group">
					<label>Nearest Port
					<a  class="fa fa-question-circle"></a>
					</label>
					<input name="nearest_port" type="text" value="" class="form-control" placeholder="Nearest Port">
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
				<textarea name="clients" class="form-control"></textarea>
				</div>
			</div>		
		
			<br>
			<div class="row">
				<div class="col-md-6">
					<label>Major Product(s) you sell (For Sellers) <a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="major_prdt_sell" value="" class="form-control" placeholder="Major Product(s) you sell (For Sellers)">
				</div>
				<div class="col-md-6">
					<label>Major Product(s) you buy (For Buyers)
					<a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="major_prdt_buy" value="" class="form-control" placeholder="Major Product(s) you buy (For Buyers)">
				</div>
				<div class="col-md-3">
					<label>Main Products
					<a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="main_prdt" value="" class="form-control" placeholder="Main Products">
				</div>
				<div class="col-md-3">
					<label>Main Products 1
					<a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="main_prdt1" value="" class="form-control" placeholder="Main Product 1">
				</div>
				<div class="col-md-3">
					<label>Main Products 2
					<a class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="main_prdt2" value="" class="form-control" placeholder="Main Product 2">
				</div>
				<div class="col-md-3">
					<label>Main Products 3
					<a  class="fa fa-question-circle"></a>
					</label>
					<input type="text" name="main_prdt3" value="" class="form-control" placeholder="Main Product 3">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<label>Other Products You Sell
					<a  class="fa fa-question-circle"></a>
					</label>
					<textarea id="editor2" name="product_you_sell" class="form-control"></textarea>
					
				</div>
			</div>
			<div class="row mt-2 pull-right">
				<input type="submit"  class="btn btn-success  " name="submit" value="submit">
			</div>
		</form>
			
	</div>
</div>

@endsection
