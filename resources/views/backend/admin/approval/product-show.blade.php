@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header ">
        <div class="row">
        	<div class="col-md-6">
        		<h5 class="card-title">Product details of {{$product->user->comp_name}}</h5>
        	</div>
        	<div class="col-md-6 text-right">
        		<a href="{{route('approval.product')}}" class="btn btn-sm btn-primary">Back</a>
        	</div>
        </div>
    </div><!-- card-header -->
    <div class="card-body table-responsive">
    	@if($message = Session::get('success'))
    		<div class="alert alert-success">
    			{{$message}}
    		</div>
    	@endif
        <table class="table table-striped table-bordered" id="table">
        	{{-- <thead>
        		<tr>
					<th>Sr.No.</th>
					<th>Company Name</th>
					<th>Email</th>
					<th>Images</th>
					<th>Entry Date</th>
					<th>Approve</th>
					<th>Action</th>
				</tr>
        	</thead> --}}
        	<tbody>
        		<tr>
					<th>Product Name</th>
					<td>{{$product->name}}</td>
        		</tr>
        		<tr>
					<th>Product Price</th>
					<td>{{$product->currency->curr_name}} {{$product->price}}</td>
        		</tr>
        		<tr>
					<th>Delivery Terms</th>
					<td></td>
        		</tr>
        		<tr>
					<th>Payment Terms & Method</th>
					<td></td>
        		</tr>
        		<tr>
					<th>Keywords</th>
					<td>{{$product->keywords}}</td>
        		</tr>
        		<tr>
					<th>Image</th>
					<td><img src="{{$product->p_images !=null ? asset('storage/'.$product->p_images[0]->doc_path) : ''}}" width="100" height="100" /></td>
        		</tr>

        	</tbody>
        </table>
    </div>
</div>
<script >

</script>
@endsection