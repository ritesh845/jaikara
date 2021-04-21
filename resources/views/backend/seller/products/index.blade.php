@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 ">
				<h5 class="font-weight-bold"> My Products  </h5>
				
			</div>
			<div class="col-md-6">
				<a href="{{route('products.create')}}"  class=" btn btn-warning pull-right btn-sm">Add Product</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		@if($message = Session::get('success'))   
          <div class="alert alert-success">{{ $message }}</div>
    	@endif
		<div class="row">
			<div class="col-md-12 form-group">
				<table class="table table-bordered table-striped" id="table">
					<thead>
						<tr>
							<th>S.No</th>
							<th>Product Name</th>
							<th>Date</th>
							<th>Price</th>
							<th>Is Approved</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $key => $product)
						<tr>
							<td>{{ $key + 1 }}</td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->created_at }}</td>
							<td>{{ $product->price }}</td>
							<td>{{ $product->is_approve == '1' ? 'Approved' : 'Pending' }}</td>
							<td>
								<a href="{{ route('products.edit',$product->prdt_id) }}" class="">
								<i class="text-primary  f-15 btn-sm fa fa-pencil-square-o"></i></a>
							   <a href="#" onclick="document.getElementById('form1').submit(); "><i class="text-danger fa fa-trash-o f-15  btn-sm"></i></a>			           

				                <form action="{{route('products.destroy',$product->prdt_id )}}" method="POST" id="form1">
								@method('DELETE')
								@csrf
							           
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>														
</div>	
<script >
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>

@endsection
