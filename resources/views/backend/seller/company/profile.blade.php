@extends('backend.layouts.main')
@section('content')
<div class="card mb-2">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-bar">
					<li class="ml-1"><a href="" class="btn btn-sm btn-success">Company Profile</a></li>
					<li class="ml-1"><a href="{{route('trade_production_view')}}" class="btn btn-sm btn-secondary">View Trade Productions</a></li>
					<li class="ml-1"><a href="" class="btn btn-sm btn-secondary">View Information Policies</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="card mb-2">
	<div class="card-body">
		<div class="row mt-4">
			<div class="col-md-7">
				<h5 class="font-weight-bold">Company Details</h5>
				<hr>
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<th>Name Of Your Store</th>
							<td>{{$user->comp_name}} </td>
						</tr>
						<tr>
							<th>Company Address</th>
							<td></td>
						</tr>
						<tr>
							<th>Meta Description</th>
							<td>{{$user->comp_name}} -{{$user->city->city_name .'-'.$user->state->state_name}} </td>
						</tr>
						<tr>
							<th>Meta Keywords </th>
							<td>{{$user->comp_name}} -{{$user->city->city_name.'-'.$user->state->state_name}}</td>
						</tr>
						<tr>
							<th>Business Category </th>
							<td>{{$user->role->display_name}}</td>
						</tr>
						<tr>
							<th>Nature of Business </th>
							<td>{{$user->role->display_name}} </td>
						</tr>
						<tr>
							<th>Year Company Registered </th>
							<td></td>
						</tr>
						<tr>
							<th>Key Personnel</th>
							<td></td>
						</tr>
						<tr>
							<th>Ownership Type </th>
							<td> </td>
						</tr>
						<tr>
							<th>Certification</th>
							<td></td>
						</tr>
					</tbody>
				</table>
				<ul class="nav nav-bar">
					<li class=""><a href="{{route('company_profile_edit')}}" class="btn btn-sm btn-warning">Update Company Profile</a></li>
				</ul>
			</div>
			<div class="col-md-5">
				<h5 class="font-weight-bold">Contact Person</h5>
				<hr>
				<div class="card">
					<div class="card-body text-center">
						<img src="{{asset('no-image.jpg')}}" width="200" height="200" >
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<th>Name</th>
									<td>{{$user->name}} </td>
								</tr>
								<tr>
									<th>Country</th>
									<td>{{$user->country->country_name}}</td>
								</tr>
								<tr>
									<th>State</th>
									<td>{{$user->state->state_name}}</td>
								</tr>
								<tr>
									<th>City</th>
									<td>{{$user->city->city_name}}</td>
								</tr>
								
								
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-8">
		<div class="card mb-2">
			<div class="card-body " style="min-height: 300px;">
				<h5>Description</h5>
				<hr>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card mb-2">
			<div class="card-body " style="min-height: 300px;">
				<p class="m-2"><i class="fa fa-envelope mr-2"></i>{{$user->email}}</p>
				<p class="m-2"><i class="fa fa-envelope mr-2"></i>{{$user->mobile}}</p>
			</div>
		</div>
	</div>
</div>
@endsection
