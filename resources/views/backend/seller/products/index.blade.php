@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
		<div class="col-md-12 ">
			<h5 class="font-weight-bold"> My Products  </h5>
			<a href="{{route('products.create')}}" ><i class="fa fa-plus btn btn-success pull-right btn-sm">Add Product</i></a>
		</div>
		@if($message = Session::get('success'))   
          <div class="alert alert-success">{{ $message }}</div>
    	@endif
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12 form-group">
				<table class="table">
					<thead>
						<tr>
							<th>Product Information	</th>
							<th>Date</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>														
</div>	


@endsection
