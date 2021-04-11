@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header p-2">
        <h5 class="card-title">Details of {{$user->name}}
        	<a href="{{route('userIndex')}}" class="btn btn-sm btn-primary pull-right">Back</a>
        </h5>
    </div><!-- card-header -->
    <div class="card-body table-responsive">
    	<table class="table table-bordered table-striped">
    		<tbody>
			<tr>
				<td width="30%">Name</td>
				<td>{{$user->name}}</td>
			</tr>
			<tr>
				<td width="30%">Email</td>
				<td>{{$user->email}}</td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td>{{$user->mobile}}</td>
			</tr>
			<tr>
				<td>City</td>
				<td>{{$user->city->city_name}}</td>
			</tr>
			<tr>
				<td>State</td>
				<td>{{$user->state->state_name}}</td>
			</tr>
			<tr>
				<td>Country</td>
				<td>{{$user->country->country_name}}</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>{{$user->address}}</td>
			</tr>
			<tr>
				<td>User Image</td>
				<td>N/A</td>
			</tr>
			</tbody>
    	</table>
    </div>
</div>
@endsection