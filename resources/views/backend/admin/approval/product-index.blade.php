@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header ">
        <h5 class="card-title">Member package</h5>
    </div><!-- card-header -->
    <div class="card-body table-responsive">
    	@if($message = Session::get('success'))
    		<div class="alert alert-success">
    			{{$message}}
    		</div>
    	@endif
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
	        			<td>{{$product->name}}</td>
	        			<td>{{$product->user !=null ? $product->user->comp_name : ''}}</td>
	        			<td>{{$product->user !=null ? $product->user->email : ''}}</td>
	        			<td><img src="{{$product->p_images !=null ? asset('storage/'.$product->p_images[0]->doc_path) : ''}}" width="50" height="50" /> </td>
	        			<td>{{date('d-m-Y',strtotime($product->created_at))}}</td>
	        			<td>
	        				<a href="{{route('product-approval',$product->prdt_id)}}"  class=" text-white bg-primary p-2 ml-2 rounded-circle approval" ><i class="fa fa-thumbs-up" title="Approval" ></i></a>   
	        			</td>
	        			<td>
	        				 <a href="{{route('product-details',$product->prdt_id)}}" class="bg-warning text-white p-2 ml-2 rounded-circle" title="View"><i class="fa fa-eye"></i></a>            
            				<a href="" class="bg-danger text-white p-2 ml-2 rounded-circle" title="Delete" onclick="return confirm('Are you sure you want to delete user?');"><i class="fa fa-trash"></i></a>     
	        			</td>
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