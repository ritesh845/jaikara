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
		<form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
		 @csrf
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 form-group error-div">
						<label>Product Name:*</label><br>
						<input class="form-control" type="text" name="name" value="">
					</div>
					<div class="col-md-6 form-group error-div">
						<label>Brand Name: *</label><br>
						<input class="form-control" type="text" name="brand" value="">
					</div>
					<div class="col-md-6 form-group error-div">
						<label> Categories Type:</label><br>
						 <select class="form-control" name="catg_id">
							<option value="0">Select Categories</option>
							@foreach($catgMasts as $catgMast)
								<option value="{{$catgMast->catg_id}}">{{$catgMast->catg_name}}</option>
							@endforeach		 
						 </select>
					</div>
					<div class="col-md-12 form-group error-div">
						<label>  Product Short Description*</label><br>
						<textarea class="form-control" name="desc"></textarea>
					</div>
					<div class="col-md-6 form-group error-div">
						<label> Default Currency</label><br>
						 <select class="form-control" name="curr_id">
							<option value="0">Select currency</option>
							@foreach($currencies as $currency)
								<option value="{{$currency->curr_id}}">{{$currency->curr_name}}</option>
							@endforeach		 
						 </select>
					</div>
					<div class="col-md-6 form-group error-div">
						<label>Product Price *</label><br>
						<input class="form-control" type="number" name="price" value="" placeholder="Product price">
					</div>
					<div class="col-md-12 form-group error-div">
						<label>Delivery Terms</label><br>
						<select class="form-control" name="is_terms">
							<option value="0">Select deliveryTerms</option>
							@foreach($deliveryTerms as $deliveryTerm)
								<option value="{{$deliveryTerm->dlvry_trms_id}}">{{$deliveryTerm->shrt_name}}</option>
							@endforeach		 
						 </select>
					</div>
					<div class="col-md-12 form-group error-div">
						<label>SKU No</label><br>
						<input class="form-control" type="text" name="sku_no" value="" placeholder="Enter SKU Number">
					</div>
					{{-- <div class="col-md-12 form-group error-div">
						<label> Delivery Method </label><br>
						<input class="form-control" type="text" name="payment_curre[]" value="">
					</div> --}}
					<div class="col-md-12 form-group error-div">
						<label>  Payment Terms</label><br>
						<textarea class="form-control" name="pay_terms"></textarea>
					</div>

					<div class="col-md-12 form-group error-div">
						<label>Payment Method</label><br>
						<select class="form-control" name="pay_method">
							<option value="0">Select payment Method</option>
							@foreach($paymentMethods as $paymentMethod)
								<option value="{{$paymentMethod->pay_md_id}}">{{$paymentMethod->pay_name}}</option>
							@endforeach		 
						 </select>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<div class="col-md-12 ">
						<h5 class="font-weight-bold"> Product Details  </h5>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
		                <div class="col-md-4 form-group error-div">
		                    <label> ManufacturerCountry *  </label>
		                    <select class="form-control required" name="country_code" id="country">
		                        <option value="">Select Country</option>
		                        @foreach($countries as $country)
		                            <option value="{{$country->country_code}}" {{old('country_code') == $country->country_code ? 'selected=selected' : ''}}>{{$country->country_name}}</option>
		                        @endforeach
		                    </select>
		                    @error('country_code')
		                        <span class="help-block text-danger font-size-12">
		                            <strong>{{ $message }}</strong>
		                        </span>
		                    @enderror
		                </div>
		                <div class="col-md-4 form-group error-div">
		                    <label> ManufacturerState * </label>
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
		                    <label> ManufacturerCity * </label>
		                    <select class="form-control required" name="city_code"  id="city">
		                        <option value="">Please Select City</option>
		                    </select>
		                    @error('city_code')
		                        <span class="help-block text-danger font-size-12">
		                            <strong>{{ $message }}</strong>
		                        </span>
		                    @enderror
		                </div>
		                <div class="col-md-4 form-group">
							<label>Model number</label><br>
							<input class="form-control" type="text" name="model_no" value="" placeholder="Enter Model numberr">
						</div>
						<div class="col-md-4 form-group">
							<label>Ean Code</label><br>
							<input class="form-control" type="text" name="ean_code" value="" placeholder="Enter SKU Number">
						</div>
						<div class="col-md-4 form-group">
							<label>Size</label><br>
							<input class="form-control" type="text" name="size" value="" placeholder="Enter Ean Code">
						</div>
						<div class="col-md-4 form-group">
							<label>Net Weight</label><br>
							<input class="form-control" type="text" name="weight" value="" placeholder="Enter Net Weight">
						</div>
						<div class="col-md-4 form-group">
							<label>Shape</label><br>
							<input class="form-control" type="text" name="shape" value="" placeholder="Enter Shape">
						</div>
						<div class="col-md-4 form-group">
							<label>Color</label><br>
							<input class="form-control" type="text" name="color" value="" placeholder="Enter Color">
						</div>
						<div class="col-md-4 form-group">
							<label>Material</label><br>
							<select class="form-control" name="material">
								<option value="0">Select material</option>
								@foreach($materialMasts as $materialMast)
									<option value="{{$materialMast->material_id}}">{{$materialMast->material_name}}</option>
								@endforeach		 
						 	</select>
						</div>
						<div class="col-md-4 form-group">
							<label>Thickness</label><br>
							<input class="form-control" type="text" name="thickness" value="" placeholder="Enter Thickness">
						</div>
						<div class="col-md-4 form-group">
							<label>Available size range</label><br>
							<input class="form-control" type="text" name="size_range" value="" placeholder="Enter size range">
						</div>
						<div class="col-md-4 form-group">
							<label> Type of packing product </label><br>
							<select class="form-control" name="packing_type">
								<option value="0">Select packing product</option>
								@foreach($packingProducttMasts as $packingProducttMast)
									<option value="{{$packingProducttMast->packing_id}}">{{$packingProducttMast->packing_name}}</option>
								@endforeach		 
						 	</select>
						</div>
						<div class="col-md-4 form-group">
							<label> Number of Pc per inner </label><br>
							<input class="form-control" type="text" name="no_per_inner" value="" placeholder="Enter number of Pc per inner">
						</div>
						<div class="col-md-4 form-group">
							<label>Size inner </label><br>
							<input class="form-control" type="text" name="size_inner" value="" placeholder="Enter size inner">
						</div>
						<div class="col-md-4 form-group">
							<label>  Type of inner packing  </label><br>
							<select class="form-control" name="inner_packing">
								<option value="0">Select packing</option>
								@foreach($paymentMethods as $paymentMethod)
									<option value="{{$paymentMethod->pay_md_id}}">{{$paymentMethod->pay_name}}</option>
								@endforeach		 
						 	</select>
						</div>
						<div class="col-md-4 form-group">
							<label>  Number of Outer per inner  </label><br>
							<input class="form-control" type="text" name="no_per_outer" value="" placeholder="Enter type of inner packing ">
						</div>
						<div class="col-md-4 form-group">
							<label>Type of outer packing</label><br>
							<input class="form-control" type="text" name="no_per_outer" value="" placeholder="Enter type of outer packing">
						</div>
						<div class="col-md-4 form-group">
							<label>Size outer</label><br>
							<input class="form-control" type="text" name="size_outer" value="" placeholder="Enter size outer">
						</div>
						<div class="col-md-4 form-group">
							<label>Number of masters per pallet</label><br>
							<input class="form-control" type="text" name="no_per_pallet" value="" placeholder="Enter number of masters per pallet">
						</div>
						<div class="col-md-4 form-group">
							<label>Type of pallet</label><br>
							<input class="form-control" type="text" name="pallet_type" value="" placeholder="Enter type of pallet">
						</div>
						<div class="col-md-4 form-group">
							<label>Available certificates</label><br>
							<input class="form-control" type="text" name="certificates" value="" placeholder="Enter  available certificates">
						</div>
						<div class="col-md-4 form-group">
							<label>Minimum Order Quantity :</label><br>
							<input class="form-control" type="text" name="order_qunt" value="" placeholder="Enter Minimum Order Quantity">
						</div>
						<div class="col-md-4 form-group">
							<label> Inco terms </label><br>
							<select class="form-control" name="pay_method">
							<option value="0">Select payment Method</option>
							@foreach($paymentMethods as $paymentMethod)
								<option value="{{$paymentMethod->pay_md_id}}">{{$paymentMethod->pay_name}}</option>
							@endforeach		 
						 </select>
						</div>
				</div>
			</div>															
		</div>
		<div class="card">
			<div class="card-header">
				<div class="col-md-12 ">
					<h5 class="font-weight-bold">  Product Group Setup  </h5>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 form-group error-div">
						<label>  Select Primary Product *  </label><br>
						<select class="form-control" name="grp_prim_id">
							<option value="0">Select payment Method</option>
							@foreach($productGroups as $productGroup)
								@if($productGroup->parent_id == NULL)
									<option value="{{$productGroup->prdt_grp_id}}">{{$productGroup->grp_name}}</option>
								@endif	
							@endforeach		 
						 </select>
					</div>
					<div class="col-md-6 form-group error-div">
						<label>  Select Secondary Product  </label><br>
						<select class="form-control" name="grp_sec_id">
							<option value="0">Select payment Method</option>
							@foreach($productGroups as $paymentMethod)
								@if($productGroup->parent_id != NULL)
									<option value="{{$productGroup->prdt_grp_id}}">{{$productGroup->grp_name}}</option>
								@endif	
							@endforeach		 
						 </select>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="col-md-12 ">
					<h5 class="font-weight-bold">   Product Images Video Information *   </h5><br>
					<h5 class="font-weight-bold">    Don't Use Special Characters    </h5>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 1 : </label><br>
						<input class="form-control" type="file" name="image[]" value="" placeholder="Enter SKU Number">
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 1 : </label><br>
						<input class="form-control" type="file" name="image[]" value="" placeholder="Enter SKU Number">
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 3 : </label><br>
						<input class="form-control" type="file" name="image[]" value="" placeholder="Enter SKU Number">
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 4 : </label><br>
						<input class="form-control" type="file" name="image[]" value="" placeholder="Enter SKU Number">
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 5 : </label><br>
						<input class="form-control" type="file" name="image[]" value="" placeholder="Enter SKU Number">
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 6 : </label><br>
						<input class="form-control" type="file" name="image[]" value="" placeholder="Enter SKU Number">
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 7 : </label><br>
						<input class="form-control" type="file" name="image[]" value="" placeholder="Enter SKU Number">
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 8 : </label><br>
						<input class="form-control" type="file" name="image[]" value="" placeholder="Enter SKU Number">
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 9 : </label><br>
						<input class="form-control" type="file" name="image[]" value="" placeholder="Enter SKU Number">
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 10 : </label><br>
						<input class="form-control" type="file" name="image[]" value="" placeholder="Enter SKU Number">
					</div>
					<div class="col-md-6 form-group">
						<label> Youtube Video No. 1 : </label><br>
						<input class="form-control" type="text" name="youtube_link" value="" placeholder="Enter SKU Number">
					</div>
				</div>
			</div>
		</div>			
		<div class="card">
			<div class="card-header">
				<div class="col-md-12 ">
					<h5 class="font-weight-bold">   Search Information   </h5><br>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 form-group">
						<label> Search Keywords </label><br>
						<textarea class="form-control" name="keywords"></textarea>
						
					</div>
				</div>
				<div class=" form-group">
					<input type="submit" name="submit" value="Submit" class="form-control btn btn-success" >
				</div>
			</div>
		</div>	
	</form>
</div>	

<script type="text/javascript">
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
        console.log(cityCode);
        if(cityCode !=null){
            fn_city(stateCode,cityCode)
        }
         var form = $("#example-form");

        form.validate({   
            rules: {    
                'mobile' :{
                    minlength:10,
                    maxlength:10,
                },
                'password' :{
                    minlength:8,
                },
                'password_confirmation' : {
                    minlength : 8,
                    equalTo : "#password"
                },
                'c_email' : {
                    equalTo : "#email"
                }
            },
            errorElement: "em",
            errorPlacement: function errorPlacement(error, element) { 
                element.after(error);
                error.addClass( "help-block" );

             },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".error-div" ).addClass( "has-error" ).removeClass( "has-success" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).parents( ".error-div" ).addClass( "has-success" ).removeClass( "has-error" );
            },
        });
</script>
@endsection
