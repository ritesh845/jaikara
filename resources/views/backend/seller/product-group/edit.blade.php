@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
		<div class="col-md-12 ">
			<h5 class="font-weight-bold"> Add Product Group   </h5>
			<a href="{{ route('product-group.create') }}" class="btn btn-success btn-sm pull-right"></a>
		</div>
		@if($message = Session::get('success'))   
          <div class="alert alert-success">{{ $message }}</div>
    	@endif
	</div>
	<div class="card-body">
		<form method="post" action="{{route('product-group.update',$productGroups->prdt_grp_id)}}">
			@csrf
			@method('PUT')
			<div class="row">
				<h2>Primary Product Group</h2>
				<div class="col-md-12 form-group">
					<label>Primary Product Group</label><br>
					<input class="form-control" type="text" name="grp_name" value="{{ $productGroups->parent_id == NULL ? $productGroups->grp_name : $data->grp_name}}"  placeholder="Primary ProductGroup Name">
				</div>
			
				<div class="form-group">
					<input type="submit" name="Submit" value="Update" class="form-control btn btn-success btn-sm"></input>
				</div>
			</div>
		</form>
	</div>	
	<div class="card-body">
		<form method="post" action="{{route('product-group.update',$productGroups->prdt_grp_id)}}">
			@method('PUT')

			@csrf
			<div class="row">
				<h2>Secondary ProductGroup</h2>
				<div class="col-md-12 form-group">
					<label> Select Primary ProductGroup*: </label><br>
					<select class="form-control"  name="parent_id">
						<option value="0">Select product group</option>
						@foreach($productGroups1 as $productGroup1)
							<option value="{{ $productGroup1->prdt_grp_id }}" {{ $productGroup1->prdt_grp_id == $productGroups->parent_id ? 'selected=selected': '' }}>{{ $productGroup1->grp_name }}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-12 form-group">
					<label> Secondary Product*:</label><br>
					<input class="form-control" type="text" name="grp_name" value="{{ $productGroups->grp_name }}" placeholder="Secondary Product Added SuccessfullyGroup Name">
				</div>
			
				<div class="form-group">
					<input type="submit" name="Submit" value="Update" class="form-control btn btn-success btn-sm"></input>
				</div>
			</div>
		</form>
	</div>		
	{{-- <div class="card-body">
		<h2>My Products</h2>
		@include('backend.seller.product-group.index')
	</div>	 --}}													
</div>	


@endsection
