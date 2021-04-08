@extends('backend.layouts.main')
@section('content')
<div class="card mb-2">
	<div class="card-body">
</div>
<div class="card mb-2">
	<div class="card-body">
		<div class="row mt-4">
			<div class="col-md-12">
				<h5 class="font-weight-bold">Sell trade leads <a style="float: right" href="{{ route('sell_trade.create') }}"><span><i class="fa fa-plus"></i></span>Add Trade lead Sell</a></h5>
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
    				<th>Subject</th>
    				<th>Category</th>
    				<th>Start At</th>
    				<th>Close At</th>
    				<th>Status</th>
    				<th>Action</th>
    			</tr>
    		</thead>
            @php $i = 1; @endphp
                @foreach($stl as $lit)
    		<tbody id="tbody">
    			<td>{{ $i++ }}</td>
    			<td>{{ $lit->subject }}</td>
    			<td>Food & Beverages</td>
    			<td>25-03-2021</td>
    			<td>24-04-2021</td>
    			<td>Active</td>
    			<td><a href="" class="btn btn-sm btn-info">Edit</a>
    			<a href="" class="btn btn-sm btn-warning">Delete</a></td>
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
