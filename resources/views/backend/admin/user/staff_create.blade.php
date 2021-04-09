@extends('backend.layouts.main')
@section('content')
<div class="card card-dashboard-seven">
    <div class="card-header p-2">
        <h5 class="card-title">Add Staff User</h5>
    </div><!-- card-header -->
    <div class="card-body">
    	@if($message = Session::get('success'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif
 		<form action="{{route('staff.store')}}" method="post" autocomplete="off">
    		@csrf
			<div class="row">
				<div class="col-md-6 form-group">
					<label class="required"><strong>Email Address:</strong></label>
					<input type="email" class="form-control" name="email" value="{{old('email')}}">
					@error('email')
				        <span class="help-block mt-2 text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label class="required"><strong>Password:</strong></label>
					<input type="password" class="form-control" name="password" value="{{old('password')}}" required="required">
					@error('password')
				        <span class="help-block mt-2 text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label class="required"><strong>Name: </strong></label>
					<input type="text" class="form-control" name="name" value="{{old('name')}}">
					@error('name')
				        <span class="help-block mt-2 text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				
				<div class="col-md-6 form-group">
					<label class="required"><strong>Mobile No: </strong></label>
					<input type="text" class="form-control" name="mobile" value="{{old('mobile') }}" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" >
					@error('mobile')
				        <span class="help-block mt-2 text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 form-group">
					<label class="required"><strong>Country: </strong></label>
					<select name="country_code" id="country" class="form-control">
						<option value="">Select Country</option>
						@foreach($countries as $country)
							<option value="{{$country->country_code}}" {{old('country_code') == $country->country_code ? 'selected=selected' : ''}}>{{$country->country_name}}</option>
						@endforeach
					</select>
					@error('country_code')
				        <span class="help-block mt-2 text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group error-div">
				    <label class="required">State:</label>
				    <select class="form-control required" name="state_code" id="state">
				        <option value="">Please Select State</option>
				    </select>
				    @error('state_code')
				        <span class="help-block mt-2 text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group error-div">
				    <label class="required">City:</label>
				    <select class="form-control required" name="city_code"  id="city">
				        <option value="">Please Select City</option>
				    </select>
				    @error('city_code')
				        <span class="help-block mt-2 text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>

				<div class="col-md-12 form-group">
					<label class="required"><strong>Address: </strong></label>
					<textarea class="form-control" rows="5" cols="54" name="address">{{old('address')}}</textarea>
					@error('address')
				        <span class="help-block mt-2 text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-12 form-group">
					<input name="submit" class="btn btn-primary" type="submit" value="Submit" />
				</div>
			</div>
				
		</form>
	</div>
</div>
<script >
    $(document).ready(function(){
   		$('label.required').append('<span class="text-danger"> *</span>');
        $('#country').on('change',function(e){
            e.preventDefault();
            var countryCode = $(this).val();
            fn_state(countryCode);
        });
        $('#state').on('change',function(e){
            e.preventDefault();
            var stateCode = $(this).val();
            fn_city(stateCode);
        });

        var countryCode  = "{{old('country_code')}}";
        var stateCode  = "{{old('state_code')}}";
        if(stateCode !=null){
            fn_state(countryCode,stateCode)
        }

        var cityCode  = "{{old('city_code')}}";
        if(cityCode !=null){
            fn_city(stateCode,cityCode)
        }
    });
</script>
@endsection