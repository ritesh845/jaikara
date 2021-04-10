@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header p-2">
        <h5 class="card-title">Edit User
        	<a href="{{route('userIndex')}}" class="btn btn-sm btn-primary pull-right">Back</a>
        </h5>
    </div><!-- card-header -->
    <div class="card-body">
    	<form action="{{route('userUpdate',$user->id)}}" method="post" autocomplete="off">
    		@method('patch')
    		@csrf
			<div class="row">
				<div class="col-md-6 form-group">
					<label><strong>Email Address:</strong></label>
					<input type="email" class="form-control" name="email" value="{{$user->email ?? old('email')}}">
					@error('email')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-6 form-group">
					<label><strong>Name: </strong></label>
					<input type="text" class="form-control" name="name" value="{{$user->name ?? old('name')}}">
					@error('name')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				
				<div class="col-md-6 form-group">
					<label><strong>Mobile No: </strong></label>
					<input type="text" class="form-control" name="mobile" value="{{old('mobile') ?? $user->mobile}}">
					@error('mobile')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 form-group">
					<label><strong>Country: </strong></label>
					<select name="country_code" id="country" class="form-control">
						<option value="">Select Country</option>
						@foreach($countries as $country)
							<option value="{{$country->country_code}}" {{(old('country_code') ?? $user->country_code) == $country->country_code ? 'selected=selected' : ''}}>{{$country->country_name}}</option>
						@endforeach
					</select>
					@error('country_code')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group error-div">
				    <label>State:</label>
				    <select class="form-control required" name="state_code" id="state">
				        <option value="">Please Select State</option>
				    </select>
				    @error('state_code')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group error-div">
				    <label>City:</label>
				    <select class="form-control required" name="city_code"  id="city">
				        <option value="">Please Select City</option>
				    </select>
				    @error('city_code')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>

				<div class="col-md-12 form-group">
					<label><strong>Address: <span class="star">*</span></strong></label>
					<textarea class="form-control" rows="5" cols="54" name="address">{{old('address') ?? $user->address}}</textarea>
					@error('address')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-12 form-group">
					<input name="id" type="hidden" value="{{$user->id}}">
					<input name="submit" class="btn btn-primary" type="submit" value="Update" />
				</div>
			</div>
				
		</form>
	</div>
</div>
<script >
    $(document).ready(function(){
        $('input[name="role_id"]').on('change',function(e){
            e.preventDefault();
            var role_id =$(this).val();
            roleChange(role_id);
        });

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

        var countryCode  = "{{old('country_code') ?? $user->country_code}}";
        var stateCode  = "{{old('state_code') ?? $user->state_code}}";
        if(stateCode !=null){
            fn_state(countryCode,stateCode)
        }

        var cityCode  = "{{old('city_code') ?? $user->city_code}}";
        if(cityCode !=null){
            fn_city(stateCode,cityCode)
        }
    });
</script>
@endsection