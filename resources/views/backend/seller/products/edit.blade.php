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
		<form method="post" action="{{route('products.update',$product->prdt_id)}}" enctype="multipart/form-data" id="example-form">
		 @csrf
		 @method('PUT')
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 form-group error-div">
						<label>Product Name:*</label><br>
						<input class="form-control" type="text" name="name" value="{{ $product->name }}" id="title" >
						<input type="hidden" name="sefriendly" id="sefriendly" value="{{$product->sefriendly}}">
						@error('name')
							<span class="help-block text-danger font-size-12">
								<strong>{{$message}}</strong>
							</span>
						@enderror
						
					</div>
					<div class="col-md-6 form-group error-div">
						<label>Brand Name: *</label><br>
						<input class="form-control required" type="text" name="brand" value="{{ $product->brand }}" required="">
					</div>
					<div class="col-md-6 form-group error-div">
						<label> Categories Type:</label><br>
						 <select class="form-control required" name="catg_id" required="">
							<option value="">Select Categories</option>
							@foreach($catgMasts as $catgMast)
								<option value="{{$catgMast->catg_id}}" {{ $catgMast->catg_id ==$product->catg_id ? 'selected=selected' :'' }}>{{$catgMast->catg_name}}</option>
							@endforeach		 
						 </select>
					</div>
					<div class="col-md-12 form-group error-div">
						<label>  Product Long Description</label><span class="text-danger">*</span><br>
						<textarea class="form-control required" name="desc" value="{{old('desc')}}" id="description" style="width:300px; height:150px;" required="">{{$product->desc}}</textarea>
						@error('desc')
							<span class="help-block text-danger font-size-12">
								<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>
					<div class="col-md-6 form-group error-div">
						<label>  Product Short Description*</label><br>
						<textarea class="form-control required " name="shrt_desc" required="">{{$product->shrt_desc}}</textarea>
					</div>
					<div class="col-md-6 form-group error-div">
						<label> Default Currency</label><br>
						 <select class="form-control" name="curr_id">
							<option value="">Select currency</option>
							@foreach($currencies as $currency)
								<option value="{{$currency->curr_id}}" {{$currency->curr_id == $product->curr_id ? 'selected=selected' : ''}}>{{$currency->curr_name}}</option>
							@endforeach		 
						 </select>
					</div>
					<div class="col-md-6 form-group error-div ">
						<label>Product Price *</label><br>
						<input class="form-control required" type="number" name="price" value="{{$product->price}}" placeholder="Product price" required="">
					</div>
					<div class="col-md-6 form-group error-div">
						<label>Delivery Terms</label><br>
						<select class="form-control" name="is_terms">
							<option value="">Select deliveryTerms</option>
							@foreach($deliveryTerms as $deliveryTerm)
								<option value="{{$deliveryTerm->dlvry_trms_id}}" {{$deliveryTerm->dlvry_trms_id == $product->is_terms ? 'selected=selected' : ''}}>{{$deliveryTerm->shrt_name}}</option>
							@endforeach		 
						 </select>
					</div>
					<div class="col-md-6 form-group error-div">
						<label>SKU No</label><br>
						<input class="form-control" type="text" name="sku_no" value="{{ $product->sku_no }}" placeholder="Enter SKU Number">
					</div>
					{{-- <div class="col-md-12 form-group error-div">
						<label> Delivery Method </label><br>
						<input class="form-control" type="text" name="payment_curre[]" value="">
					</div> --}}
					<div class="col-md-6 form-group error-div">
						<label>  Payment Terms</label><br>
						<textarea class="form-control" name="pay_terms"> {{ $product->pay_terms }}</textarea>
					</div>

					<div class="col-md-6 form-group error-div">
						<label>Payment Method</label><br>
						<select class="form-control" name="pay_method">
							<option value="">Select payment Method</option>
							@foreach($paymentMethods as $paymentMethod)
								<option value="{{$paymentMethod->pay_md_id}}" {{$paymentMethod->pay_md_id == $product->pay_method ? 'selected=selected' :''}}>{{$paymentMethod->pay_name}}</option>
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
		                   <select name="country_code" id="country" class="form-control">
								<option value="">Select Country</option>
								@foreach($countries as $country)
									<option value="{{$country->country_code}}" {{(old('country_code') ?? $product->country_code) == $country->country_code ? 'selected=selected' : ''}}>{{$country->country_name}}</option>
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
		                    <select class="form-control required" name="state_code" id="state" required="">
		                        <option value="" >Please Select State</option>
		                         
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
							<input class="form-control" type="text" name="model_no" value="{{ $product->model_no }}" placeholder="Enter Model numberr">
						</div>
						<div class="col-md-4 form-group">
							<label>Ean Code</label><br>
							<input class="form-control" type="text" name="ean_code" value="{{ $product->ean_code }}" placeholder="Enter ean code">
						</div>
						<div class="col-md-4 form-group">
							<label>Size</label><br>
							<input class="form-control" type="text" name="size" value="{{ $product->size }}" placeholder="Enter Size">
						</div>
						<div class="col-md-4 form-group">
							<label>Net Weight</label><br>
							<input class="form-control" type="text" name="weight" value="{{ $product->weight }}" placeholder="Enter Net Weight">
						</div>
						<div class="col-md-4 form-group">
							<label>Shape</label><br>
							<input class="form-control" type="text" name="shape" value="{{ $product->shape }}" placeholder="Enter Shape">
						</div>
						<div class="col-md-4 form-group">
							<label>Color</label><br>
							<input class="form-control" type="text" name="color" value="{{ $product->color }}" placeholder="Enter Color">
						</div>
						<div class="col-md-4 form-group">
							<label>Material</label><br>
							<select class="form-control" name="material">
								<option value="">Select material</option>
								@foreach($materialMasts as $materialMast)
									<option value="{{$materialMast->material_id}}" {{$materialMast->material_id == $product->material ? 'selected=selected' : ''}}>{{$materialMast->material_name}}</option>
								@endforeach		 
						 	</select>
						</div>
						<div class="col-md-4 form-group">
							<label>Thickness</label><br>
							<input class="form-control" type="text" name="thickness" value="{{ $product->thickness }}" placeholder="Enter Thickness">
						</div>
						<div class="col-md-4 form-group">
							<label>Available size range</label><br>
							<input class="form-control" type="text" name="size_range" value="{{ $product->size_range }}" placeholder="Enter size range">
						</div>
						<div class="col-md-4 form-group">
							<label> Type of packing product </label><br>
							<select class="form-control" name="packing_type">
								<option value="">Select packing product</option>
								@foreach($packingProducttMasts as $packingProducttMast)
								@if($packingProducttMast->packing_type =='O')
									<option value="{{$packingProducttMast->packing_id}}" {{$packingProducttMast->packing_id == $product->packing_type ? 'selected=selected' : ''}}>{{$packingProducttMast->packing_name}}</option>
								@endif
								@endforeach		 
						 	</select>
						</div>
						<div class="col-md-4 form-group">
							<label> Number of Pc per inner </label><br>
							<input class="form-control" type="text" name="no_per_inner" value="{{ $product->no_per_inner }}" placeholder="Enter number of Pc per inner">
						</div>
						<div class="col-md-4 form-group">
							<label>Size inner </label><br>
							<input class="form-control" type="text" name="size_inner" value="{{ $product->size_inner }}" placeholder="Enter size inner">
						</div>
						<div class="col-md-4 form-group">
							<label>  Type of inner packing  </label><br>
							<select class="form-control" name="inner_packing">
								<option value="">Select inner packing product</option>
								@foreach($packingProducttMasts as $packingProducttMast)
								@if($packingProducttMast->packing_type =='O')
									<option value="{{$packingProducttMast->packing_id}}" {{$packingProducttMast->packing_id == $product->inner_packing ? 'selected=selected' : ''}}>{{$packingProducttMast->packing_name}}</option>
								}
								}
								@endif	
								@endforeach		 
						 	</select>
						</div>
						<div class="col-md-4 form-group">
							<label>  Number of Outer per inner  </label><br>
							<input class="form-control" type="text" name="inner_packing" value="{{ $product->inner_packing }}" placeholder="Enter type of inner packing ">
						</div>
						<div class="col-md-4 form-group">
							<label>Type of outer packing</label><br>
							<input class="form-control" type="text" name="no_per_outer" value="{{ $product->no_per_outer }}" placeholder="Enter type of outer packing">
						</div>
						<div class="col-md-4 form-group">
							<label>Size outer</label><br>
							<input class="form-control" type="text" name="size_outer" value="{{ $product->size_range }}" placeholder="Enter size outer">
						</div>
						<div class="col-md-4 form-group">
							<label>Number of masters per pallet</label><br>
							<input class="form-control" type="text" name="no_per_pallet" value="{{ $product->no_per_pallet }}" placeholder="Enter number of masters per pallet">
						</div>
						<div class="col-md-4 form-group">
							<label>Type of pallet</label><br>
							<input class="form-control" type="text" name="pallet_type" value="{{ $product->pallet_type }}" placeholder="Enter type of pallet">
						</div>
						<div class="col-md-4 form-group">
							<label>Available certificates</label><br>
							<input class="form-control" type="text" name="certificates" value="{{ $product->certificates }}" placeholder="Enter  available certificates">
						</div>
						<div class="col-md-4 form-group">
							<label>Minimum Order Quantity :</label><br>
							<input class="form-control" type="text" name="order_qunt" value="{{ $product->order_qunt }}" placeholder="Enter Minimum Order Quantity">
						</div>
						<div class="col-md-4 form-group">
							<label> Inco terms </label><br>
							<select class="form-control" name="incoterms">
							<option value="">Select Inco terms</option>
								@foreach($paymentMethods as $paymentMethod)
									<option value="{{$paymentMethod->pay_md_id}}" {{$paymentMethod->pay_md_id == $product->pay_method ? 'selected=selected' : ''}}>{{$paymentMethod->pay_name}}</option>
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
						<select class="form-control required" name="grp_prim_id" required="">
							<option value="">Select Primary Product</option>
							@foreach($productGroups as $productGroup)
								@if($productGroup->parent_id == NULL)
									<option value="{{$productGroup->prdt_grp_id}}" {{$productGroup->prdt_grp_id == $product->grp_prim_id ? 'selected' : ''}}>{{$productGroup->grp_name}}</option>
								@endif	
							@endforeach		 
						 </select>
					</div>
					<div class="col-md-6 form-group error-div">
						<label>  Select Secondary Product  </label><br>
						<select class="form-control" name="grp_sec_id">
							<option value="">Select pSecondary Product</option>
							@foreach($productGroups as $productGroup)
								@if($productGroup->parent_id != NULL)
									<option value="{{$productGroup->prdt_grp_id}}" {{$productGroup->prdt_grp_id == $product->grp_sec_id ? 'selected' : ''}}>{{$productGroup->grp_name}}</option>
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
					<div class="col-md-6 form-group error-div">
						<label> Upload Product Image No. 1 : </label><br>
						<input class="form-control " type="file" name="image[]" value="{{ @$product->p_images[0]->doc_name }}" >
						<a href="{{ asset('storage'.'/'.@$product->p_images[0]->doc_path) }}" target="_blank">{{ @$product->p_images[0]->doc_name }}</a>
						<input class="form-control" type="hidden" name="doc_id[]" value="{{ @$product->p_images[0]->doc_id }}">

					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 1 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{ @$product->p_images[1]->doc_name }}" >
						<a href="{{ asset('storage'.'/'.@$product->p_images[1]->doc_path) }}" target="_blank">{{ @$product->p_images[1]->doc_name }}</a>
						<input class="form-control" type="hidden" name="doc_id[]" value="{{ @$product->p_images[1]->doc_id }}">


					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 3 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{ @$product->p_images[2]->doc_name }}" >
						<a href="{{ asset('storage'.'/'.@$product->p_images[2]->doc_path) }}" target="_blank">{{ @$product->p_images[2]->doc_name }}</a>
						<input class="form-control" type="hidden" name="doc_id[]" value="{{ @$product->p_images[2]->doc_id }}">


					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 4 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{ @$product->p_images[3]->doc_name }}">
						<a href="{{ asset('storage'.'/'.@$product->p_images[3]->doc_path) }}" target="_blank">{{ @$product->p_images[3]->doc_name }}</a>
						<input class="form-control" type="hidden" name="doc_id[]" value="{{ @$product->p_images[3]->doc_id }}">
						


					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 5 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{ @$product->p_images[4]->doc_name }}">
						<a href="{{ asset('storage'.'/'.@$product->p_images[4]->doc_path) }}" target="_blank">{{ @$product->p_images[4]->doc_name }}</a>
						<input class="form-control" type="hidden" name="doc_id[]" value="{{ @$product->p_images[4]->doc_id }}">


					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 6 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{ @$product->p_images[5]->doc_name }}" placeholder="Enter SKU Number">
						<a href="{{ asset('storage'.'/'.@$product->p_images[5]->doc_path) }}" target="_blank">{{ @$product->p_images[5]->doc_name }}</a>
						<input class="form-control" type="hidden" name="doc_id[]" value="{{ @$product->p_images[5]->doc_id }}">

					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 7 : </label><br>
						<input class="form-control" type="file" name="image[]" value="{{ @$product->p_images[6]->doc_name }}" >
						<a href="{{ asset('storage'.'/'.@$product->p_images[6]->doc_path) }}" target="_blank">{{ @$product->p_images[6]->doc_name }}</a>
						<input class="form-control" type="hidden" name="doc_id[]" value="{{ @$product->p_images[6]->doc_id }}">

					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 8 : </label><br>
						<input class="form-control" type="hidden" name="doc_id[]" value="{{ @$product->p_images[7]->doc_id }}">

						<input class="form-control" type="file" name="image[]" value="{{ @$product->p_images[7]->doc_name }}" >
						<a href="{{ asset('storage'.'/'.@$product->p_images[7]->doc_path) }}" target="_blank">{{ @$product->p_images[7]->doc_name }}</a>

					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 9 : </label><br>
						
						<input class="form-control" type="file" name="image[]" value="{{ @$product->p_images[8]->doc_name }}" placeholder="Enter SKU Number">
						<a href="{{ asset('storage'.'/'.@$product->p_images[8]->doc_path) }}" target="_blank">{{ @$product->p_images[8]->doc_name }}</a>
						<input class="form-control" type="hidden" name="doc_id[]" value="{{ @$product->p_images[8]->doc_id }}">

					</div>
					<div class="col-md-6 form-group">
						<label> Upload Product Image No. 10 : </label><br>
						<input class="form-control" type="hidden" name="doc_id[]" value="{{ @$product->p_images[9]->doc_id }}">
						<input class="form-control" type="file" name="image[]" value="{{ @$product->p_images[9]->doc_name }}" >
						<a href="{{ asset('storage'.'/'.@$product->p_images[8]->doc_path) }}" target="_blank">{{ @$product->p_images[9]->doc_name }}</a>

					</div>
					<div class="col-md-6 form-group">
						<label> Youtube Video No. 1 : </label><br>
						<input class="form-control" type="text" name="youtube_link" value="{{ @$product->youtube_link }}" placeholder="Enter Youtube Video url">

					</div>
					<div class="col-md-6 form-group">
						<label> Youtube Video No. 1 : </label><br>
						<input class="form-control" type="text" name="youtube_link1" value="{{ @$product->youtube_link1 }}" placeholder="Enter Youtube Video url">
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
						<textarea class="form-control" name="keywords">{{ $product->keywords}}</textarea>
						
					</div>
				</div>
				<div class=" form-group">
					<input type="submit" name="submit" value="Update" class="form-control btn btn-success" >
				</div>
			</div>
		</div>	
	</form>
</div>	
{{-- test --}}
<script type="text/javascript">

 ClassicEditor
    .create( document.querySelector( '#description' ) )
    .catch( error => {
        console.error( error );
    } );


	$(document).ready(function(){
		$('#title').blur(function(e){
	        var text = document.getElementById("title").value;
	        str = text.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
	        str = str.replace(/^\s+|\s+$/gm,'');
	        str = str.replace(/\s+/g, '-')+'.html';   
	        $("#sefriendly").val(str); 
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

        var countryCode  = "{{old('country_code') ?? $product->country_code}}";
        var stateCode  = "{{old('state_code') ?? $product->state_code}}";
        if(stateCode !=''){
            fn_state(countryCode,stateCode)
        }

        var cityCode  = "{{old('city_code') ?? $product->city_code}}";
        // alert(cityCode)
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
	})
</script>
@endsection
