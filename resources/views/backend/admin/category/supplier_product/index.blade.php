@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header">
        <h5 class="card-title">Suppliers & Products Category
        	<a href="{{route('supplier_product.create')}}" class="btn btn-sm btn-warning pull-right" id="addCategory">Add Category</a>
        </h5>
    </div><!-- card-header -->
    <div class="card-body">
    	{{-- <div class="row d-none" id="add"></div> --}}


    	<table class="table table-bordered table-striped">
    		<thead>
    			<tr>
    				<th>SR. NO.</th>
    				<th>Category</th>
    				<th>Category Image</th>
    				<th>Action</th>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach($categories as $key => $category)
    			<tr>
    				<td>{{$key + 1}}</td>
    				<td>
    					@if($category->level !=3)
	    					<a href="{{url('supplier_product/')}}?catg_id={{$category->catg_id}}">{{$category->catg_name}}</a>

    					@else
    						{{$category->catg_name}}
    					@endif

    				</td>
    				<td>
    					@if($category->catg_img !=null)
    						<img src="{{asset('storage/'.$category->catg_img)}}" width="50" height="50" />
    					@endif

    				</td>
    				<td>
    					<a href="javascript:void(0)"  class="{{$category->status == 'P' ? 'bg-secondary' : 'bg-success'}} text-white p-2 ml-2 rounded-circle approval" data-id="{{$category->catg_id}}"><i class="fa fa-key" title="{{$category->status == 'P' ? 'Unapprove' : 'Approve'}}" ></i></a> 

			            <a href="{{route('supplier_product.edit',$category->catg_id)}}" class="bg-info text-white p-2 ml-2 rounded-circle" title="Edit"><i class="fa fa-edit"></i></a>            
			            {{-- <a href="{{route('supplier_product.delete',$category->catg_id)}}" class="bg-danger text-white p-2 ml-2 rounded-circle" title="Delete" onclick="return confirm('Are you sure you want to delete category?');"><i class="fa fa-trash"></i></a> --}}
    				</td>
    			</tr>
    			@endforeach
    		</tbody>
    	</table>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(document).on('click','.approval',function(e){
            e.preventDefault();
            var user_id = $(this).data('id');
            fn_catg_approval(user_id);


        });
    });
</script>

@endsection