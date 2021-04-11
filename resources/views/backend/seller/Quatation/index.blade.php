@extends('backend.layouts.main')
@section('content')
<div class="card mb-2">
	<div class="card-body">
</div>
<div class="card mb-2">
	<div class="card-body">
		<div class="row mt-4">
			<div class="col-md-12">
				<h5 class="font-weight-bold">My Requirement <a class="pull-right btn btn-sm btn-warning" href="{{ route('my_posted_rfq.create') }}"><span><i class="fa fa-plus"></i></span>Post New Requirement</a></h5>
				<hr>
                @if($message = Session::get('message'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif
				<table class="table table-bordered table-striped">
    		<thead>
    			<tr>
    				<th>#</th>
    				<th>Product/Services</th>
    				<th>Qty</th>
    				<th>Listing Expiried In</th>
    				<th>Total Recivied Quotes</th>
    				<th>Rfq Status</th>
    				<th>Action</th>
    			</tr>
    		</thead>
            @php $i = 1; @endphp
                @foreach($rfq as $lit)
    		<tbody id="tbody">
    			<td>{{ $i++ }}</td>
    			<td>{{ $lit->prod_sevice }}</td>
    			<td>{{ $lit->estim_qty }}</td>
    			<td>{{ $lit->expiry_time_in_day }}</td>
    			<td></td>
    			<td>Active</td>
    			<td><a href="{{  route('my_posted_rfq.edit',$lit->qua_id) }}" class="btn btn-sm btn-info">Edit</a>
    			<a href="{{  route('my_posted_rfq.delete',$lit->qua_id) }}" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure?')">Delete</a></td>
    		</tbody>
             @endforeach
    	</table>
				{{-- <ul class="nav nav-bar">
					<li class=""><a href="" class="btn btn-sm btn-success">Add Sell Trade</a></li>
				</ul> --}}
			</div>
		</div>
	</div>
</div>
@endsection
