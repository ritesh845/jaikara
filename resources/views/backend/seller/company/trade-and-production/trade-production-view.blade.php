@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-body">
		<div class="row">
			<div class="col-md-8 ">
				<h5 class="font-weight-bold">Trade & Production</h5>
			</div>
			<div class="col-md-4">
				<a href="{{route('trade_production_edit')}}" class="btn btn-warning pull-right btn-sm" > Edit Trade Productions</a>
			</div>
			<div class="col-md-12">
				<hr>
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<th>Production Capacity</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->prdt_capacity : ''}}</td>
						</tr>
						<tr>
							<th>Factory Size</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->size_sqft : ''}}</td>
						</tr>
						<tr>
							<th>Average Lead Time / Day(s)</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->lead_time_days : ''}}</td>
						</tr>
						<tr>
							<th>Compliance Maintaining </th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->maintaining : ''}}</td>
						</tr>
						<tr>
							<th>Export Percentage </th>
							<td>{{$tradeAndProduction ? Arr::get(ExportPer,$tradeAndProduction->export_per ) : ''}}</td>
						</tr>
						<tr>
							<th>Annual Sales Volume </th>
							<td>{{$tradeAndProduction ? Arr::get(AnnualSales,$tradeAndProduction->sales_volume ) : ''}} </td>
						</tr>
						<tr>
							<th>Packaging Details</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->packg_dtl : ''}}</td>
						</tr>
						
					</tbody>
				</table>
			</div>
			<div class="col-md-12">
				<h5 class="font-weight-bold">Production Capacity & Scope</h5>
				<hr>
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<th>Office Size</th>
							<td>{{$tradeAndProduction ? Arr::get(OfficeSize,$tradeAndProduction->office_size) : ''}}</td>
						</tr>
						<tr>
							<th>Main Export Markets (Country)</th>
							<td>{{$tradeAndProduction ? Arr::get(MainExportMarkets,$tradeAndProduction->export_market) : ''}}</td>
						</tr>
						<tr>
							<th>Nearest Port</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->five_countries : ''}}</td>
						</tr>
						<tr>
							<th>Factory Location </th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->factory_loc : ''}}</td>
						</tr>
						<tr>
							<th>Major Product(s) you sell (For Sellers) </th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->major_prdt_sell : ''}}</td>
						</tr>
						<tr>
							<th>Main Products 1</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->main_prdt1 : ''}}</td>
						</tr>
						<tr>
							<th>Main Products 2</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->main_prdt2 : ''}}</td>
						</tr>
						<tr>
							<th>Main Products 3</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->main_prdt3 : ''}}</td>
						</tr>
						<tr>
							<th>Other Products You Sell</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->product_you_sell : ''}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</div>

@endsection
