@extends('backend.layouts.main')
@section('content')
<div class="card mb-2">
	<div class="card-body">
</div>
<div class="card mb-2">
	<div class="card-body">
		<div class="row mt-4">
			<div class="col-md-12">
				<h5 class="font-weight-bold">Buy trade leads <a class="pull-right btn btn-sm btn-warning" href="{{ route('buy_trade.create') }}"><span><i class="fa fa-plus"></i></span>Add Trade lead Buy</a></h5>
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
    				<th>Product</th>
    				<th>Category</th>
    				<th>Start At</th>
    				<th>Close At</th>
    				<th>Status</th>
    				<th>Action</th>
    			</tr>
    		</thead>
            @php $i = 1; @endphp
                @foreach($btl as $lit)
    		<tbody id="tbody">
    			<td>{{ $i++ }}</td>
    			<td>{{ $lit->product  }}</td>
    			<td>{{ $lit->getbtracat->trd_catg_name  }}</td>
    			<td>25-03-2021</td>
    			<td>24-04-2021</td>
    			<td>Active</td>
    			<td><a href="{{ route('buy_trade.edit',$lit->buy_trd_id) }}" class="btn btn-sm btn-info">Edit</a>
    			<a href="{{ route('buy_trade.delete',$lit->buy_trd_id) }}" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure?')">Delete</a></td>
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
