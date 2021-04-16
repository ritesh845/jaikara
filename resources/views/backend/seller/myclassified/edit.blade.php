@extends('backend.layouts.main')
@section('content')
<div class="card card-dashboard-seven">
    <div class="card-header p-2">
        <h5 class="card-title">Edit Classified</h5>
        
    </div><!-- card-header -->
    	
    <div class="card-body">
    	<form name="add_user" action="{{ route('my_classified.update',$edit->mycl_id) }}" method="post" enctype="multipart/form-data" class="search_form general_form">
    		@csrf
    		@method('patch')
                <div class="row">
				<div class="col-md-4 form-group">
					<label><strong>Add Title <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="title" value="{{ $edit->title }}">
					@error('title')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group">
					<label><strong>Price $  <span class="text-danger">*</span> :</strong></label>
					<input type="number" class="form-control" name="price" value="{{ $edit->price }}">
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
						<option value="new" {{ ($edit->condition_ == 'new') ? 'selected' : '' }}>New</option>
						<option value="used" {{ ($edit->condition_ == 'used') ? 'selected' : '' }}>Used</option>
						<option value="service" {{ ($edit->condition_ == 'service') ? 'selected' : '' }}>Service</option>
						<option value="rent" {{ ($edit->condition_ == 'rent') ? 'selected' : '' }}>Rent</option>
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
					@php 
					$catg = App\Models\CatgMast::all();
					@endphp
					<select name="catg_id" class="form-control" id="catg_id">
						<option value="">select</option>
						@foreach($catg as $cg)
						<option value="{{ $cg->catg_id }}" {{ ($edit->catg_id == $cg->catg_id) ? 'selected' : '' }}>{{ $cg->catg_name }}</option>
						@endforeach
					</select>	
					@error('catg_id')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group">
					<label><strong>Select Sub Category  <span class="text-danger">*</span> :</strong></label>
					<select name="sub_catg_id" class="form-control" id="sub_catg_id">
						<option value="">select</option>
					</select>
					@error('sub_catg_id')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>

				<div class="col-md-4 form-group">
					<label><strong>Select Type  <span class="text-danger">*</span> :</strong></label>
					<select name="type" class="form-control" id="type">
						<option value="">select</option>
					</select>
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
					<textarea class="form-control" rows="5" cols="54" name="description">{{ $edit->description }}</textarea>
					@error('description')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
			</div>
			<div class="row">
				@foreach(range(1,6) as $key=>$image)
				<div class="col-md-3 form-group">
					<label><strong>Image {{ $image }}</strong></label>
					<input type="file" class="form-control" name="image_{{$image}}" >
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-1 form-group">
					<label><strong>Image :</strong></label>
					@if(isset($images[$key]) != '')
                  			<img src="{{asset('storage/'.$images[$key]->doc_path) }}" style="height:50px;width:100%;">
					        <input type="hidden" class="form-control" name="doc_id[]" value="{{$images[$key]->doc_id}}">
					        <input type="hidden" class="form-control img_{{$image}}" name="img[]" value="{{$images[$key]->doc_path}}">
          			
                  	@else
        				N/A
        				<input type="hidden" class="form-control" name="doc_id[]" value="">
        				<input type="hidden" class="form-control img_{{$image}}" name="img[]" value="">
                  	@endif
				</div>
				@endforeach
				</div>
				<div class="row">
				<div class="col-md-4 form-group">
					<label><strong>Name  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="prod_sevice" value="{{ $atz->name }}" readonly="">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group">
					<label><strong>Email  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="prod_sevice" value="{{ $atz->email }}" readonly="">
					@error('prod_sevice')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>

				<div class="col-md-4 form-group">
					<label><strong>Mobile No.  <span class="text-danger">*</span> :</strong></label>
					<input type="text" class="form-control" name="prod_sevice" value="{{ $atz->mobile }}" readonly="">
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
					@php
					$cnty = App\Models\Country::all();
					@endphp
					<select name="country_code" id="country" class="form-control">
						<option value="">select</option>
						@foreach( $cnty as $cot)
						<option value="{{ $cot->country_code }}" {{ ($edit->country_code == $cot->country_code) ? 'selected' : '' }}>{{ $cot->country_name }}</option>
						@endforeach
					</select>	
					@error('country_code')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>
				<div class="col-md-4 form-group">
					<label><strong>State<span class="text-danger">*</span> :</strong></label>
					<select name="state_code" class="form-control" id="state">
						<option value="">select</option>
					</select>	
					@error('state_code')
				        <span class="help-block text-danger font-size-12">
				            <strong>{{ $message }}</strong>
				        </span>
				    @enderror
				</div>

				<div class="col-md-4 form-group">
					<label><strong>City<span class="text-danger">*</span> :</strong></label>
					<select name="city_code" class="form-control" id="city">
						<option value="">select</option>
					</select>
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
					<textarea class="form-control" rows="5" cols="54" name="address">{{ $edit->address }}</textarea>
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
 <script>
      $(document).ready(function (){
      	 $('.file').change(function(e) {
                var id = $(this).data('id');
                $('.img_'+id).val('');
  
         });	


        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
  });
       $("#catg_id").on("change",function(){
       var catg_id = $(this).val();
      	 fn_catgfetch(catg_id)
       });

       var subcat_id = "{{ old('sub_catg_id') ?? $edit->sub_catg_id }}";
       var catg_id = "{{ old('catg_id') ?? $edit->catg_id }}";
       if(catg_id !=''){
       		fn_catgfetch(catg_id, subcat_id);
       }
       function fn_catgfetch(catg_id, oldSubCatgId =null){
			$.ajax({
				type: "GET",
				url: "{{ route('my_classified.getsubcatg') }}?id="+catg_id,
				success: function(res){
					$.each(res,function(index, recev){
						$("#sub_catg_id").append('<option value="'+recev.catg_id+'" '+(recev.catg_id == oldSubCatgId ? 'selected="selected"' : '')+'  >'+recev.catg_name+'</option>');
					});			    
				}
			});	
       }
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

        var countryCode  = "{{old('country_code') ?? $edit->country_code }}";
        var stateCode  = "{{old('state_code') ?? $edit->state_code }}";
        if(stateCode !=''){
            fn_state(countryCode,stateCode)
        }
        var cityCode  = "{{old('city_code') ?? $edit->city_code }}";
        if(cityCode !=''){
            fn_city(stateCode,cityCode)
        }
    });

    </script>
@endsection