@extends('backend.layouts.main')
@section('content')
<div class="card card-dashboard-seven">
    <div class="card-header p-2">
        <h5 class="card-title">Show User</h5>
    </div><!-- card-header -->
    <div class="card-body">
    	<table class="table table-bordered table-striped">
    		<thead>
    			<tr>
    				<th>#</th>
    				<th>Name</th>
    				<th>Email</th>
    				<th>Type</th>
    				<th>Mobile No.</th>
    				<th>Join Date</th>
    				<th>Action</th>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach($users as $user)
    			<tr>
    				<td></td>
    				<td>{{$user->name}}</td>
    				<td>{{$user->email}}</td>
    				<td>{{$user->role !=null ? $user->role->name : ''}}</td>
    				<td>{{$user->mobile}}</td>
    				<td>{{date('d-m-Y',strtotime($user->created_at))}}</td>
    				<td></td>
    			</tr>
    			@endforeach
    		</tbody>
    	</table>
    </div>
</div><!-- card -->
@endsection