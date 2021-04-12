@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header ">
        <h5 class="card-title">Member package</h5>
    </div><!-- card-header -->
    <div class="card-body table-responsive">
        <table class="table table-striped table-bordered" id="table">
        	<thead>
        		<tr>
					<th>Sr.No.</th>
					<th>Product Name</th>
					<th>Company Name</th>
					<th>Email</th>
					<th>Images</th>
					<th>Entry Date</th>
					<th>Approve</th>
					<th>Action</th>
				</tr>
        	</thead>
        	<tbody>
        		@foreach($products as $key => $product)
	        		<tr>
	        			<td>{{$key + 1}}</td>
	        			<td></td>
	        			<td></td>
	        			<td></td>
	        			<td></td>
	        			<td></td>
	        			<td></td>
	        			<td></td>
	        		</tr>
        		@endforeach
        	</tbody>
        </table>
    </div>
</div>
<script >
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>
@endsection