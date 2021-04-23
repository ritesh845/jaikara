@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
				<h5 class="font-weight-bold"> My Products  </h5>
			</div>
			<div class="col-md-6 text-right">
				<a href="{{route('products.index')}}" class="btn btn-sm btn-primary">Back</a>
			</div>
		</div>
			
			@if($message = Session::get('success'))   
	          <div class="alert alert-success">{{ $message }}</div>
	    	@endif
		</div>
		<form method="post" action="{{route('products.store')}}" enctype="multipart/form-data" id="example-form" autocomplete="off">
		 @csrf
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 form-group error-div">
						<label>Product Name:</label><span class="text-danger">*</span><br>
						<input class="form-control required" type="text" name="name" value="{{old('name')}}" id="title" >
						<input type="hidden" name="sefriendly" id="sefriendly" value="">
						@error('name')
							<span class="help-block text-danger font-size-12">
								<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>
					<div class="col-md-6 form-group error-div">
						<label>Brand Name: </label><span class="text-danger">*</span><br>
						<input class="form-control required" type="text" name="brand" value="{{old('brand')}}" id="brand" >
						@error('brand')
							<span class="help-block text-danger font-size-12">
								<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>
					<div class="col-md-12 form-group error-div">
						<label> Categories Type:</label><br>
						<select name="catg_id[]" class="form-control select2" multiple="multiple" required="">
							@foreach($catgMasts as $catgMast)
								<option value="{{$catgMast->catg_id}}" {{old('catg_id') == $catgMast->catg_id ? 'selected=selected' : ''}}>{{$catgMast->catg_name}}</option>
							@endforeach		 
						 </select>
					</div>
					<div class="col-md-12 form-group error-div">
						<label>  Product Long Description</label><span class="text-danger">*</span><br>
						<textarea class="form-control required" name="desc" value="{{old('desc')}}"  cols="20" rows="10" required="required" id="editor"></textarea>
						@error('desc')
							<span class="help-block text-danger font-size-12">
								<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>
					<div class="col-md-12 form-group error-div">
						<label>  Product Short Description</label><span class="text-danger">*</span><br>
						<textarea class="form-control required" name="shrt_desc" value="{{old('shrt_desc')}}" ></textarea>
						@error('shrt_desc')
							<span class="help-block text-danger font-size-12">
								<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>
					<div class="col-md-12 form-group error-div">
						<label> Default Currency</label><br>
						 <select class="form-control" name="curr_id">
							<option value="">Select currency</option>
							@foreach($currencies as $currency)
								<option value="{{$currency->curr_id}}" {{old('curr_id') == $currency->catg_id ? 'selected=selected' : ''}}>{{$currency->curr_name}}</option>
							@endforeach		 
						 </select>
					</div>
					<div class="col-md-6 form-group error-div">
						<label>Product Price </label><span class="text-danger">*</span><br>
						<input class="form-control" type="number" name="price" value="{{old('price')}}" placeholder="Product price">
						@error('price')
							<span class="help-block text-danger font-size-12">
								<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>
					<div class="col-md-12 form-group error-div">
						<label>Delivery Terms</label><br>
						<select class="form-control" name="is_terms">
							<option value="">Select deliveryTerms</option>
							@foreach($deliveryTerms as $deliveryTerm)
								<option value="{{$deliveryTerm->dlvry_trms_id}}" {{old('is_terms')== $deliveryTerm->dlvry_trms_id ? 'selected=selected' : ''}}>{{$deliveryTerm->shrt_name}}</option>
							@endforeach		 
						 </select>
					</div>
					<div class="col-md-12 form-group error-div">
						<label>SKU No</label><br>
						<input class="form-control" type="text" name="sku_no" value="{{old('sku_no')}}" placeholder="Enter SKU Number">
					</div>
					{{-- <div class="col-md-12 form-group error-div">
						<label> Delivery Method </label><br>
						<input class="form-control" type="text" name="payment_curre[]" value="{{old('name')}}">
					</div> --}}
					<div class="col-md-12 form-group error-div">
						<label>  Payment Terms</label><br>
						<textarea class="form-control" name="pay_terms">{{old('pay_terms')}}</textarea>
					</div>

					<div class="col-md-12 form-group error-div">
						<label>Payment Method</label><br>
						<select class="form-control" name="pay_method">
							<option value="">Select payment Method</option>
							@foreach($paymentMethods as $paymentMethod)
								<option value="{{$paymentMethod->pay_md_id}}" {{old('pay_method') == $paymentMethod->pay_md_id ? 'selected=selected' : ''}}>{{$paymentMethod->pay_name}}</option>
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
		                    <label> ManufacturerCountry   </label><span class="text-danger">*</span>
		                    <select class="form-control required" name="country_code" id="country">
		                        <option value="{{old('name')}}">Select Country</option>
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
		                    <label> ManufacturerState  </label><span class="text-danger">*</span>
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
		                    <label> ManufacturerCity  </label><span class="text-danger">*</span>
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
							<input class="form-control" type="text" name="model_no" value="{{old('model_no')}}" placeholder="Enter Model numberr">
						</div>
						<div class="col-md-4 form-group">
							<label>Ean Code</label><br>
							<input class="form-control" type="text" name="ean_code" value="{{old('ean_code')}}" placeholder="Enter SKU Number">
						</div>
						<div class="col-md-4 form-group">
							<label>Size</label><br>
							<input class="form-control" type="text" name="size" value="{{old('size')}}" placeholder="Enter Ean Code">
						</div>
						<div class="col-md-4 form-group">
							<label>Net Weight</label><br>
							<input class="form-control" type="text" name="weight" value="{{old('weight')}}" placeholder="Enter Net Weight">
						</div>
						<div class="col-md-4 form-group">
							<label>Shape</label><br>
							<input class="form-control" type="text" name="shape" value="{{old('shape')}}" placeholder="Enter Shape">
						</div>
						<div class="col-md-4 form-group">
							<label>Color</label><br>
							<input class="form-control" type="text" name="color" value="{{old('color')}}" placeholder="Enter Color">
						</div>
						<div class="col-md-4 form-group">
							<label>Material</label><br>
							<select class="form-control" name="material">
								<option value="">Select material</option>
								@foreach($materialMasts as $materialMast)
									<option value="{{$materialMast->material_id}}" {{old('material') == $materialMast->material_id ? 'selected=selected' : ''}}>{{$materialMast->material_name}}</option>
								@endforeach		 
						 	</select>
						</div>
						<div class="col-md-4 form-group">
							<label>Thickness</label><br>
							<input class="form-control" type="text" name="thickness" value="{{old('thickness')}}" placeholder="Enter Thickness">
						</div>
						<div class="col-md-4 form-group">
							<label>Available size range</label><br>
							<input class="form-control" type="text" name="size_range" value="{{old('size_range')}}" placeholder="Enter size range">
						</div>
						<div class="col-md-4 form-group">
							<label> Type of packing product </label><br>
							<select class="form-control" name="packing_type">
								<option value="">Select packing product</option>
								@foreach($packingProducttMasts as $packingProducttMast)
									<option value="{{$packingProducttMast->packing_id}}" {{old('packing_type') ==$packingProducttMast->packing_id ? 'selected=selected' : ''}}>{{$packingProducttMast->packing_name}}</option>
								@endforeach		 
						 	</select>
						</div>
						<div class="col-md-4 form-group">
							<label> Number of Pc per inner </label><br>
							<input class="form-control" type="text" name="no_per_inner" value="{{old('no_per_inner')}}" placeholder="Enter number of Pc per inner">
						</div>
						<div class="col-md-4 form-group">
							<label>Size inner </label><br>
							<input class="form-control" type="text" name="size_inner" value="{{old('size_inner')}}" placeholder="Enter size inner">
						</div>
						<div class="col-md-4 form-group">
							<label>  Type of inner packing  </label><br>
							<select class="form-control" name="inner_packing">
								<option value="">Select packing</option>
								@foreach($paymentMethods as $paymentMethod)
									<option value="{{$paymentMethod->pay_md_id}}" {{old('inner_packing')==$paymentMethod->pay_md_id ? 'selected=selected' : ''}}>{{$paymentMethod->pay_name}}</option>
								@endforeach		 
						 	</select>
						</div>
						<div class="col-md-4 form-group">
							<label>  Number of Outer per inner  </label><br>
							<input class="form-control" type="text" name="no_per_outer" value="{{old('no_per_outer')}}" placeholder="Enter type of inner packing ">
						</div>
						<div class="col-md-4 form-group">
							<label>Type of outer packing</label><br>
							<input class="form-control" type="text" name="no_per_outer" value="{{old('no_per_outer')}}" placeholder="Enter type of outer packing">
						</div>
						<div class="col-md-4 form-group">
							<label>Size outer</label><br>
							<input class="form-control" type="text" name="size_outer" value="{{old('size_outer')}}" placeholder="Enter size outer">
						</div>
						<div class="col-md-4 form-group">
							<label>Number of masters per pallet</label><br>
							<input class="form-control" type="text" name="no_per_pallet" value="{{old('no_per_pallet')}}" placeholder="Enter number of masters per pallet">
						</div>
						<div class="col-md-4 form-group">
							<label>Type of pallet</label><br>
							<input class="form-control" type="text" name="pallet_type" value="{{old('pallet_type')}}" placeholder="Enter type of pallet">
						</div>
						<div class="col-md-4 form-group">
							<label>Available certificates</label><br>
							<input class="form-control" type="text" name="certificates" value="{{old('certificates')}}" placeholder="Enter  available certificates">
						</div>
						<div class="col-md-4 form-group">
							<label>Minimum Order Quantity :</label><br>
							<input class="form-control" type="text" name="order_qunt" value="{{old('order_qunt')}}" placeholder="Enter Minimum Order Quantity">
						</div>
						<div class="col-md-4 form-group">
							<label> Inco terms </label><br>
							<select class="form-control" name="pay_method">
								<option value="">Select payment Method</option>
								@foreach($paymentMethods as $paymentMethod)
									<option value="{{$paymentMethod->pay_md_id}}" {{old('pay_method')== $paymentMethod->pay_md_id ? 'selected=selected':''}}>{{$paymentMethod->pay_name}}</option>
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
						<label>  Select Primary Product   </label><span class="text-danger">*</span>l><br>
						<select class="form-control error-div" name="grp_prim_id" required="" id="grp_prim_id">
							<option value="">Select Primary Product</option>
							@foreach($productGroups as $productGroup)
								@if($productGroup->parent_id == NULL)
									<option value="{{$productGroup->prdt_grp_id}}"{{old('grp_prim_id')==$productGroup->prdt_grp_id ? 'selected=selected' :''}}>{{$productGroup->grp_name}}</option>
								@endif	
							@endforeach		 
						 </select>
						  @error('grp_prim_id')
	                        <span class="help-block text-danger font-size-12">
	                            <strong>{{ $message }}</strong>
	                        </span>
		                   @enderror
					</div>
					<div class="col-md-6 form-group error-div">
						<label>  Select Secondary Product  </label><br>
						<select class="form-control error-div" name="grp_sec_id" required="" id="grp_sec_id">
							{{-- <option value="">Select Secondary Product</option> --}}
							{{-- @foreach($productGroups as $paymentMethod)
								@if($productGroup->parent_id != NULL)
									<option value="{{$productGroup->prdt_grp_id}}" {{old('grp_sec_id')==$productGroup->prdt_grp_id ? 'selected=selected' : ''}}>{{$productGroup->grp_name}}</option>
								@endif	
							@endforeach	 --}}	 
						 </select>
						  @error('grp_sec_id')
	                        <span class="help-block text-danger font-size-12">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="col-md-12 ">
					<h5 class="font-weight-bold">Product Images Video Information  </h5><br><span class="text-danger">
					<h5 class="font-weight-bold">Don't Use Special Characters </h5>*</span>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 form-group error-div">
						<label> Upload Product Image No. 1 : </label><br>
						<input class="form-control required" type="file" name="image[]" value="{{old('image.0')}}" required="">

					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 1 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{old('image.1')}}" >
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 3 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{old('image.2')}}" >
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 4 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{old('image.3')}}" >
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 5 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{old('image.4')}}" >
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 6 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{old('image.5')}}" >
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 7 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{old('image.6')}}" >
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 8 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{old('image.7')}}" >
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 9 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{old('image.8')}}" >
					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 10 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{old('image.9')}}" >
					</div>
					<div class="col-md-6 form-group">
						<label> Youtube Video No. : </label><br>
						<input class="form-control" type="text" name="youtube_link" value="{{old('youtube_link')}}" placeholder="Enter Youtube Video No.">
					</div>
					<div class="col-md-6 form-group">
						<label> Youtube Video No. : </label><br>
						<input class="form-control" type="text" name="youtube_link1" value="{{old('youtube_link1')}}" placeholder="Enter Youtube Video No. 1">
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
						<textarea class="form-control" name="keywords" value={{old('keywords')}}></textarea>
						
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
$(document).ready(function(){

	CKEDITOR.replace('editor',{
		extraAllowedContent: 'style;*[id,rel](*){*}'
	});

	$('.select2').select2({
		placeholder: "Select Catgeory",
		allowClear: true
	});

	$('#title').blur(function(e){
        var text = document.getElementById("title").value;
        str = text.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
        str = str.replace(/^\s+|\s+$/gm,'');
        str = str.replace(/\s+/g, '-')+'.html';   
        $("#sefriendly").val(str); 
    });

	$("#grp_prim_id").on('change',function(){
 	var grp_prim_id = $('#grp_prim_id').val()
    var oldStateCode  = "{{old('grp_name')}}";

 	// alert(grp_prim_id);
       // if(grp_prim_id){
        $.ajax({
            type:'GET',
            url:"/get_grp_prim/"+grp_prim_id,
            success:function(res){
                $('#grp_sec_id').empty();
                $('#grp_sec_id').append('<option value="">Please Secondary Product</option>');
                $.each(res,function(i,v){
                    $('#grp_sec_id').append('<option value="'+v.prdt_grp_id+'" '+(oldStateCode == v.prdt_grp_id ? 'selected' : '')+'> '+v.grp_name+' </option>')
                })
            }
        });
    // }else{
    //     // $('#state').empty();
    // }

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

        var countryCode  = "{{old('country_code')}}";
        var stateCode  = "{{old('state_code')}}";
        if(stateCode !=''){
            fn_state(countryCode,stateCode)
        }

        var cityCode  = "{{old('city_code')}}";
        if(cityCode !=''){
            fn_city(stateCode,cityCode)
        }
        var form = $("#example-form");
        form.validate({   
            rules: {    
                'name' :{
                    required:true
                },
                 'brand' :{
                    required:true

                },
                'desc' :{
                    required:true
                },
                'shrt_desc' :{
                    required:true
                },
                'price' :{
                    required:true
                },
    			'country_code' :{
                    required:true
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
})
</script>
@endsection
