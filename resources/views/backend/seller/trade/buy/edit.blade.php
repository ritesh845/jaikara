@extends('backend.layouts.main')
@section('content')
<div class="card card-dashboard-seven">
    <div class="card-header p-2">
        <h5 class="card-title">Edit Trade lead Buy
        	<a href="{{route('buy_trade')}}" class="btn btn-sm btn-primary pull-right" >Back</a>
        </h5>
    </div><!-- card-header -->
    <div class="card-body">
    	<p class="mt-2">Your Remaining Products :- 29</p>
    	<form name="add_user" action="{{ route('buy_trade.update',$edit->buy_trd_id) }}" method="post" enctype="multipart/form-data" class="search_form general_form">
    		@csrf
    		@method('patch')
			<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Product:</strong></label>
					<input type="text" class="form-control" name="product" value="{{ $edit->product }}">
					@error('product')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label><strong>quantity : </strong></label>
					<input type="text" class="form-control" name="quantity"  value="{{ $edit->quantity }}">
					@error('quantity')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Price Range:</strong></label>
					<input type="number" class="form-control" name="price_range" value="{{ $edit->price_range }}">
					@error('price_range')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label><strong>Upload A Picture: </strong></label>
					<input type="file" class="form-control" name="picture">
					@error('picture')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 form-group">
					<label><strong>Details :</strong></label>
					<textarea class="form-control" rows="5" cols="54" name="detls">{{ $edit->detls }}</textarea>
					@error('detls')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-12 form-group">
					@if($edit->picture != '')
	              			<img src="{{asset('storage/'.$edit->picture) }}" style="height:100px;width:100px;">
	      			
	              	@endif
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Buyer Information</strong></label>
					<p>Company Name: {{Auth::user()->comp_name}}</p>
					<p>User Name: {{Auth::user()->name}}</p>
					<p>Email: {{Auth::user()->email}}</p>
					<p>Mobile: {{Auth::user()->mobile}}</p>
					</div>
				<div class="col-md-6 form-group">
					<label><strong>Location </strong></label>
					<p>Country: {{Auth::user()->country->country_name}}</p>
					<p>State: {{Auth::user()->state->state_name}}</p>
					<p>City: {{Auth::user()->city->city_name}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Search Keywords:</strong></label>
					<input type="text" class="form-control" name="keywords" value="{{ $edit->keywords }}">
					@error('keywords')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label><strong>Valid for Days:</strong></label>
					<select name="valid_for" class="form-control">
						@foreach(ValidDays as $key => $valid)
							<option value="{{$key}}" {{ ($edit->valid_for ?? old('valid_for')) == $key ? 'selected' : '' }}>{{$valid}}</option>
						@endforeach
					</select>	
					@error('valid_for')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-12 form-group">
					<label><strong>category : </strong></label><br>
					<strong>Buy Trade Lead</strong>
					<hr>
					
					<div class="row">
						@foreach($catgs as $cat)
						<div class="col-md-4 form-group">
                        <input type="radio" class="mr-2" name="catg_id" value="{{ $cat->catg_id }}" {{($cat->catg_id == (old('catg_id') ?? $edit->catg_id)) ? 'checked' : '' }}>{{ $cat->catg_name }}
						</div>
						@endforeach
						@error('catg_id')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
					</div>
				</div>
				<div class="col-md-12 form-group">
					<input name="submit" class="btn btn-danger" type="submit" value="Submit" />
				</div>
			</div>
				
		</form>
	</div>
</div>
@endsection