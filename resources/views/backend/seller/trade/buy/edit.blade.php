@extends('backend.layouts.main')
@section('content')
<div class="card card-dashboard-seven">
    <div class="card-header p-2">
        <h5 class="card-title">Edit Trade lead Buy</h5>
    </div><!-- card-header -->
    	<p class="mt-2">Your Remaining Products :- 29</p>
    <div class="card-body">
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
					<p>Company Name: Ritech</p>
					<p>User Name: Ritesh Panchal</p>
					<p>Email: riteshpanchal845@gmail.com</p>
					<p>Mobile: 7828773421</p>
					</div>
				<div class="col-md-6 form-group">
					<label><strong>Location </strong></label>
					<p>Country: India</p>
					<p>State: Madhya Pradesh</p>
					<p>City: Indore</p>
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
						<option value="30" {{ ($edit->valid_for == '30') ? 'selected' : '' }}>30 Days</option>
						<option value="60" {{ ($edit->valid_for == '60') ? 'selected' : '' }}>60 Days</option>
						<option value="90" {{ ($edit->valid_for == '90') ? 'selected' : '' }}>90 Days</option>
						<option value="120" {{ ($edit->valid_for == '120') ? 'selected' : '' }}>120 Days</option>
						<option value="180" {{ ($edit->valid_for == '180') ? 'selected' : '' }}>180 Days</option>
					</select>	
					@error('valid_for')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				</div>
				<div class="col-md-12 form-group">
					<label><strong>category : </strong></label><br>
					Sell Trade Lead
					<hr>
					@php 
					$t_cat = App\Models\SellTrade_cat::all();
					@endphp
					<div class="row">
						@foreach($t_cat as $cat)
						<div class="col-md-4 form-group">
                        <input type="radio" class="mr-2" name="trade_lead_catg" value="{{ $cat->trd_catg_id }}" {{($cat->trd_catg_id == $edit->trade_lead_catg) ? 'checked' : '' }}>{{ $cat->trd_catg_name }}
						</div>
						@endforeach
						@error('trade_lead_catg')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-12 form-group">
					<input name="submit" class="btn btn-danger" type="submit" value="Submit" />
				</div>
			</div>
				
		</form>
	</div>
</div>
@endsection