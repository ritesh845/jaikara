@extends('backend.layouts.main')
@section('content')
<div class="card card-dashboard-seven">
    <div class="card-header p-2">
        <h5 class="card-title">Add Trade lead Sell</h5>
    </div><!-- card-header -->
    	<p class="mt-2">Your Remaining Products :- 29</p>
    <div class="card-body">
    	<form name="add_user" action="{{ route('sell_trade.store') }}" method="post" enctype="multipart/form-data" class="search_form general_form">
    		@csrf
			<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Subject:</strong></label>
					<input type="text" class="form-control" name="subject" value="">
					@error('subject')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label><strong>Upload A Picture : </strong></label>
					<input type="file" class="form-control" name="picture" >
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
					<textarea class="form-control" rows="5" cols="54" name="detls"></textarea>
					@error('detls')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 form-group">
					<label><strong>Search Keywords : </strong></label>
					<input type="text" class="form-control" name="keywords" value="">
					@error('keywords')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-12 form-group">
					<label><strong>category : </strong></label><br>
					Sell Trade Lead
					<hr>
					<div class="row">
						@foreach($t_cat as $cat)
						<div class="col-md-4 form-group">
                        <input type="radio" class="mr-2" name="trade_lead_catg" value="{{ $cat->trd_catg_id }}">{{ $cat->trd_catg_name }}
						</div>
						@endforeach
						@error('trade_lead_catg')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="row">
				<div class="col-md-12 form-group">
					<label><strong>Valid for Days</strong></label>
					<select name="valid_for" class="form-control">
						<option value="30">30 Days</option>
						<option value="60">60 Days</option>
						<option value="90">90 Days</option>
						<option value="120">120 Days</option>
						<option value="180">180 Days</option>
					</select>	
					@error('valid_for')
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