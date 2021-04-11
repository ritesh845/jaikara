@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
		<div class="col-md-12 ">
			<h5 class="font-weight-bold"> Add Product Group   </h5>
		</div>
		@if($message = Session::get('success'))   
          <div class="alert alert-success">{{ $message }}</div>
    	@endif
	</div>
	<div class="card-body">
		<form method="post" action="{{route('product-group.store')}}">
			@csrf
			<div class="row">
				<div>Primary Product Group</div>
				<div class="col-md-12 form-group">
					<label>Primary Product Group</label><br>
					<input class="form-control" type="text" name="grp_name" value="" placeholder="Primary ProductGroup Name">
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<input type="submit" name="Submit" value="Submit" class="form-control btn btn-success"></input>
				</div>
			</div>
		</form>
	</div>	
	<div class="card-body">
		<form method="post" action="{{route('product-group.store')}}">
			@csrf
			<div class="row">
				<div>Secondary ProductGroup</div>

				<div class="col-md-12 form-group">
					<label> Select Primary ProductGroup*: </label><br>
					<select class="form-control"  name="parent_id">
						<option value="0">Select product group</option>
						@foreach($productGroups as $productGroup)
						@if($productGroup->parent_id ==null)
							<option value="{{ $productGroup->parent_id ==null ? $productGroup->prdt_grp_id : '' }}">{{ $productGroup->parent_id ==null ? $productGroup->grp_name : '' }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="col-md-12 form-group">
					<label> Secondary Product*:</label><br>
					<input class="form-control" type="text" name="grp_name" value="" placeholder="Secondary Product Added SuccessfullyGroup Name">
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<input type="submit" name="Submit" value="Submit" class="form-control btn btn-success"></input>
				</div>
			</div>
		</form>
	</div>		
	<div class="card-body">
		<div>My Products</div>
		@include('backend.seller.product-group.index')
	</div>														
</div>	


@endsection
