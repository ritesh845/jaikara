@extends('backend.layouts.main')
@section('content')
<div class="card card-dashboard-seven">
    <div class="card-header p-2">
        <h5 class="card-title">Request for Quotation</h5>
        <p>One Request, Multiple Quotes</p>
    </div><!-- card-header -->
    	<h1 class="mt-2">Tell us your Buy Requirement</h1>
    	<p>Complete Your RFQ</p>
    	<p>The more specific your information, the more accurately we can match your request to the right suppliers</p>
    <div class="card-body">
    	<form name="add_user" action="{{ route('my_posted_rfq.store') }}" method="post" enctype="multipart/form-data" class="search_form general_form">
    		@csrf
                <div class="row">
				<div class="col-md-4 form-group">
					<label><strong>Add Title <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="title" value="{{ old('title') }}">
					@error('title')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group">
					<label><strong>Price $  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="price" value="{{ old('price') }}">
					@error('price')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>

				<div class="col-md-4 form-group">
					<label><strong>Condition  <span class="text-danger">*</span> :</strong></label>
					<select name="condition_" class="form-control">
						<option value="">select</option>
						<option value="">New</option>
						<option value="">Used</option>
						<option value="">Service</option>
						<option value="">Rent</option>
					</select>	
					@error('condition_')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="row">
				<div class="col-md-4 form-group">
					<label><strong>Select Category <span class="text-danger">*</span> :</strong></label>
					<select name="catg_id" class="form-control">
						<option value="">select</option>
						<option value="">New</option>
					</select>	
					@error('catg_id')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group">
					<label><strong>Select Sub Category  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="sub_catg_id" value="{{ old('sub_catg_id') }}">
					@error('sub_catg_id')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>

				<div class="col-md-4 form-group">
					<label><strong>Select Type  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="type" value="{{ old('type') }}">
					@error('type')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="row">
				<div class="col-md-12 form-group">
					<label><strong>Add Description <span class="text-danger">*</span> :</strong></label>
					<textarea class="form-control" rows="5" cols="54" name="description">{{ old('description') }}</textarea>
					@error('description')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 form-group">
					<label><strong>Image 1</strong></label>
					<input type="file" class="form-control" name="prod_sevice" value="{{ old('prod_sevice') }}">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group">
					<label><strong>Image 2</strong></label>
					<input type="file" class="form-control" name="prod_sevice" value="{{ old('prod_sevice') }}">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>

				<div class="col-md-4 form-group">
					<label><strong>Image 3</strong></label>
					<input type="file" class="form-control" name="prod_sevice" value="{{ old('prod_sevice') }}">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="row">
				<div class="col-md-4 form-group">
					<label><strong>Image 4</strong></label>
					<input type="file" class="form-control" name="prod_sevice" value="{{ old('prod_sevice') }}">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group">
					<label><strong>Image 5</strong></label>
					<input type="file" class="form-control" name="prod_sevice" value="{{ old('prod_sevice') }}">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>

				<div class="col-md-4 form-group">
					<label><strong>Image 6</strong></label>
					<input type="file" class="form-control" name="prod_sevice" value="{{ old('prod_sevice') }}">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="row">
				<div class="col-md-4 form-group">
					<label><strong>Name  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="prod_sevice" value="{{ old('prod_sevice') }}">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group">
					<label><strong>Email  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="prod_sevice" value="{{ old('prod_sevice') }}">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>

				<div class="col-md-4 form-group">
					<label><strong>Mobile No.  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="prod_sevice" value="{{ old('prod_sevice') }}">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="row">
				<div class="col-md-4 form-group">
					<label><strong>Country  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="country_code" value="{{ old('country_code') }}">
					@error('country_code')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group">
					<label><strong>State  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="state_code" value="{{ old('state_code') }}">
					@error('state_code')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>

				<div class="col-md-4 form-group">
					<label><strong>City  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="city_code" value="{{ old('city_code') }}">
					@error('city_code')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="row">
				<div class="col-md-12 form-group">
					<label><strong>Address  <span class="text-danger">*</span> :</strong></label>
					<textarea class="form-control" rows="5" cols="54" name="address">{{ old('address') }}</textarea>
					@error('address')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
			{{-- <div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Estimated Quantity :</strong></label>
					<input type="number" class="form-control" name="estim_qty" value="{{ old('estim_qty') }}">
					@error('estim_qty')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label><strong>Type :</strong></label>
					<select name="qty_type" class="form-control">
						<option value="">select</option>
						<option value="units" {{ (old('qty_type') == 'units') ? 'selected' : '' }}>Units</option>
						<option value="tones" {{ (old('qty_type') == 'tones') ? 'selected' : '' }}>Tones</option>
						<option value="pices" {{ (old('qty_type') == 'pices') ? 'selected' : '' }}>Pices</option>
					</select>	
					@error('qty_type')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div> --}}
				
				

				<div class="col-md-12 form-group">
					<input name="submit" class="btn btn-success" type="submit" value="Get Quatation Now" />
				</div>
		</div>
		</div>
				
		</form>
	</div>
</div>
@endsection