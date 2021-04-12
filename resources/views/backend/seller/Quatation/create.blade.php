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
			 <div class="col-md-9 form-group">
                <div class="row">
				<div class="col-md-12 form-group">
					<label><strong>Product/Services :</strong></label>
					<input type="text" class="form-control" name="prod_sevice" value="{{ old('prod_sevice') }}">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="row">
				<div class="col-md-12 form-group">
					<label><strong>Requirement in detail :</strong></label>
					<textarea class="form-control" rows="5" cols="54" name="req_delt">{{ old('req_delt') }}</textarea>
					@error('req_delt')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
			</div>
			<div class="row">
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
				</div>
				<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Expire Time in Days :</strong></label>
					<select name="expiry_time_in_day" class="form-control">
						<option value="">select</option>
					    <option value="7" {{ (old('expiry_time_in_day') == '7') ? 'selected' : '' }}>30 Days</option>
						<option value="14" {{ (old('expiry_time_in_day') == '14') ? 'selected' : '' }}>60 Days</option>
						<option value="30" {{ (old('expiry_time_in_day') == '30') ? 'selected' : '' }}>90 Days</option>
						<option value="60" {{ (old('expiry_time_in_day') == '60') ? 'selected' : '' }}>120 Days</option>
						<option value="90" {{ (old('expiry_time_in_day') == '90') ? 'selected' : '' }}>180 Days</option>
					</select>
					@error('expiry_time_in_day')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label><strong>Categories :</strong></label>
					<select name="catg_id" class="form-control">
						<option value="">select</option>
						@foreach($catgs as $cat)
						<option @if($cat->catg_id == old('catg_id')) selected  @endif value="{{ $cat->catg_id }}">{{ $cat->catg_name }}</option>
						{{-- <option @if($cli->id == old('client_id')) selected  @endif value="{{ $cli->id }}"
                >{{ $cli->name }}</option> --}}
						@endforeach
					</select>
					@error('catg_id')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<h4 class=""><small>Your Contact Details</small></h4>
				<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Email :</strong></label>
					<input type="text" class="form-control" name="keywords" value="{{ Auth::user()->email }}" readonly="">
					@error('keywords')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label><strong>Contact Person :</strong></label>
					<input type="text" class="form-control" name="keywords" value="{{ Auth::user()->name }}" readonly="">
					@error('valid_for')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Company :</strong></label>
					<input type="text" class="form-control" name="keywords" value="{{ Auth::user()->comp_name }}" readonly="">
					@error('keywords')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label><strong>Country :</strong></label>
					<input type="text" class="form-control" name="keywords" value="{{ Auth::user()->country->country_name }}" readonly="">
					@error('valid_for')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>state :</strong></label>
					<input type="text" class="form-control" name="keywords" value="{{ Auth::user()->state->state_name }}" readonly="">
					@error('keywords')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label><strong>City :</strong></label>
					<input type="text" class="form-control" name="keywords" value="{{ Auth::user()->city->city_name }}" readonly="">
					@error('valid_for')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Mobile No. :</strong></label>
					<input type="text" class="form-control" name="keywords" value="{{ Auth::user()->mobile }}" readonly="">
					@error('keywords')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label><strong>Image :</strong></label>
					<input type="file" class="form-control" name="image" value="{{ old('image') }}">
					@error('image')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Upload File. :<span class="text-warning">(Upload only PDF File)</span></strong></label>
					<input type="file" class="form-control" name="docu_upload" value="{{ old('docu_upload') }}">
					@error('docu_upload')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					
				</div>
				</div>
				<div class="col-md-12 form-group">
					<input name="submit" class="btn btn-success" type="submit" value="Get Quatation Now" />
				</div>
		</div>
			<div class="col-md-3 form-group">
				card space
			</div>
		</div>
		</div>
				
		</form>
	</div>
</div>
@endsection