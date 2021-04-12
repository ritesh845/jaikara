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
						@foreach($products as $product)
						<tr>
							<td>{{ $product->name }}</td>
							<td>{{ $product->created_at }}</td>
							<td>{{ $product->price }}</td>
							<td><a href="{{ route('products.edit',$product->prdt_id) }}" class="btn btn-primary btn-sm">
							<i class="fa fa-pencil-square-o"></i></a>&nbsp;
			                <form action="{{route('products.destroy',$product->prdt_id )}}" method="POST" id="form1">
							@method('DELETE')
							@csrf
							   <a href="#" onclick="document.getElementById('form1').submit(); "><i class="fa fa-trash-o btn-warning btn"></i></a>			           
							           
						</form></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>														
</div>	


@endsection
