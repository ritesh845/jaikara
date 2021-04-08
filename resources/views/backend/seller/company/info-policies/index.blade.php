@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-body">
		<div class="row">
			<div class="col-md-8 ">
				<h5 class="font-weight-bold">Information & Policies</h5>
			</div>
			<div class="col-md-4">
				<a href="{{route('info_policy_edit')}}" class="btn btn-warning pull-right btn-sm" > Edit Trade Productions</a>
			</div>
			<div class="col-md-12">
				<hr>
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<th>Accepted Payment Currency by you</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->prdt_capacity : ''}}</td>
						</tr>
						<tr>
							<th>Accepted Delivery Terms by you</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->size_sqft : ''}}</td>
						</tr>
						<tr>
							<th>Payment Method</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->lead_time_days : ''}}</td>
						</tr>
						<tr>
							<th>Spoken Language</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->maintaining : ''}}</td>
						</tr>
						<tr>
							<th>Your Company Certification </th>
							<td>{{Arr::get(ExportPer,$tradeAndProduction->export_per)}}</td>
						</tr>
						<tr>
							<th>Accept Escrow Services  </th>
							<td>{{Arr::get(AnnualSales,$tradeAndProduction->sales_volume)}} </td>
						</tr>
						<tr>
							<th>Company Policy</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->packg_dtl : ''}}</td>
						</tr>
						<tr>
							<th>Payment Terms</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->packg_dtl : ''}}</td>
						</tr>
						<tr>
							<th>Terms Condition</th>
							<td>{{$tradeAndProduction ? $tradeAndProduction->packg_dtl : ''}}</td>
						</tr>
						
					</tbody>
				</table>
			</div>
			
			</div>
		</div>
	</div>
</div>

@endsection
