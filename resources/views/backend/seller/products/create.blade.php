@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
		<div class="col-md-12 ">
			<h5 class="font-weight-bold"> My Products  </h5>
		</div>
		@if($message = Session::get('success'))   
          <div class="alert alert-success">{{ $message }}</div>
    	@endif
	</div>
	<div class="card-body">
		<form method="post" action="{{route('info_policy_update')}}">
			@csrf
			<div class="row">
				<div class="col-md-6 form-group">
					<label>Product Name:*</label><br>
					<input class="form-control" type="text" name="payment_curre[]" value="">
				</div>
				<div class="col-md-6 form-group">
					<label>Brand Name: *</label><br>
					<input class="form-control" type="text" name="payment_curre[]" value="">
				</div>
				<div class="col-md-6 form-group">
					<label> Categories Type:</label><br>
					<input class="form-control" type="text" name="payment_curre[]" value="">
				</div>
				<div class="col-md-12 form-group">
					<label>  Product Short Description*</label><br>
					<textarea class="form-control"></textarea>
				</div>
				<div class="col-md-6 form-group">
					<label> Default Currency</label><br>
					<input class="form-control" type="text" name="payment_curre[]" value="">
				</div>
				<div class="col-md-6 form-group">
					<label>Product Price *</label><br>
					<input class="form-control" type="text" name="payment_curre[]" value="">
				</div>
				<div class="col-md-12 form-group">
					<label>Delivery Terms</label><br>
					<input class="form-control" type="text" name="payment_curre[]" value="">
				</div>
				<div class="col-md-12 form-group">
					<label>SKU No</label><br>
					<input class="form-control" type="text" name="payment_curre[]" value="">
				</div>
				<div class="col-md-12 form-group">
					<label> Delivery Method </label><br>
					<input class="form-control" type="text" name="payment_curre[]" value="">
				</div>
				<div class="col-md-12 form-group">
					<label>  Payment Terms</label><br>
					<textarea class="form-control"></textarea>
				</div>
			</div>
		</form>
	</div>														
</div>	


@endsection
