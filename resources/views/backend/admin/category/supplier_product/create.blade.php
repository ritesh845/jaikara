@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header">
        <h5 class="card-title">Add Suppliers & Products Category
        	<a href="{{route('supplier_product.index')}}" class="btn btn-sm btn-warning pull-right" id="addCategory">Back</a>
        </h5>
    </div><!-- card-header -->
    <div class="card-body">
    	@if($message = Session::get('success'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif
    	<form action="{{route('supplier_product.store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
    		@csrf
    		<div class="row">
    			<div class="col-md-12">
    				<h5>Category Information:</h5>
    				<hr>
    			</div>
    			<div class="col-md-6 form-group">
    				<label>Category Name</label>
    				<input type="text" name="catg_name" class="form-control" placeholder="Enter Category Name" value="{{old('catg_name')}}">
    				@error('catg_name')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
    			</div>
    			<div class="col-md-6 form-group">
    				<label>Select Category</label>
    				<select class="form-control" name="parent_id">
						<option value="">{{__('Root')}}</option>
						@foreach($categories as $category)
						<option class="root" value="{{$category->catg_id}}" {{old('parent_id') == $category->catg_id ? 'selected' : ''}} >{{$category->catg_name}}</option>
							
								@if($category->subcategories !=null)
									@include('backend.admin.category.supplier_product.subCategoryList',['subcategorie' => $category->subcategories, 'dataSpace' => 2])
								@endif
						@endforeach

					</select>			

    				{{-- <select class="form-control" name="parent_id">
    					<option value="">Root</option>
    					@foreach($categories as $category)
    						<option value="{{$category->catg_id}}" {{old('parent_id') == $category->catg_id ? 'selected="selected' : '' }}>{{$category->catg_name}}</option>
    					@endforeach
    				</select> --}}
    				@error('parent_id')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
    			</div>
    			<div class="col-md-6 form-group">
    				<label>Category Image</label>
    				<input type="file" name="catg_img" class="form-control" >
    				@error('catg_img')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
    			</div>

    		</div>
    		<div class="row">
    			<div class="col-md-12">
    				<h5>Seo Information:</h5>
    				<hr>
    			</div>
    			<div class="col-md-6 form-group">
    				<label>Meta Title</label>
    				<input type="text" name="meta_title" class="form-control" placeholder="Enter Category Name" value="{{old('meta_title')}}">
    				@error('meta_title')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
    			</div>
    			<div class="col-md-6 form-group">
    				<label>Meta Description</label>
    				<input type="text" name="meta_desc" class="form-control" placeholder="Enter Category Name" value="{{old('meta_desc')}}">
    				@error('meta_desc')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
    			</div>
    			<div class="col-md-6 form-group">
    				<label>Meta Keywords</label>
    				<input type="text" name="meta_keywords" class="form-control" placeholder="Enter Category Name" value="{{old('meta_keywords')}}">
    				@error('meta_keywords')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
    			</div>    			
    		</div>
    		<div class="row">
    			<div class="col-md-12 form-group">
    				<button class="btn btn-sm btn-success">Submit</button>
    			</div>
    		</div>
    	</form>
    </div>
</div>
@endsection