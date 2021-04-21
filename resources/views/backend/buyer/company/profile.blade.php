@extends('backend.layouts.main')
@section('content')
<div class="card mb-2">
	<div class="card-header">
		<h5 class="card-title">Edit Company Profile
			<a href="{{route('company_profile')}}" class="btn btn-sm btn-primary pull-right">Back</a>
		</h5>
	</div>
</div>
<div class="card">
	<div class=" card-body">
		<div class="clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				@if($message = Session::get('success'))
		            <div class="alert alert-success">
		                {{$message}}
		            </div>
		        @endif
				<form  action="{{route('buyer_cmp_pro_update',$user->id)}}" method="post" enctype="multipart/form-data" autocomplete="off">
					@method('patch')
					@csrf
					<div class="row">
						<div class="col-md-6 form-group col-xs-12">
							<label> Company Name dwe</label>
							<input type="text" class="form-control"  name="comp_name" value="{{$user->comp_name}}" readonly="readonly"  >
						</div>
					{{-- 	<div class="col-md-4 form-group col-xs-12">
							<label>Company Sub-Domain Name <a data-toggle="tooltip" data-placement="bottom" title="Please select your micro website subdomain name. You can not edit this later!" class="fa fa-question-circle" ></a></label>

							<input type="text" class="form-control"  name="comp_sub_domain" value="{{$user->comp_sub_domain ??  old('comp_sub_domain')}}" oninput="this.value = this.value.replace(/[^a-z|-]/g,'')" >
							@error('comp_sub_domain')
						        <span class="help-block text-danger font-size-12">
						            <strong>{{ $message }}</strong>
						        </span>
						    @enderror
						    <span class="d-none domain_error text-danger font-weight-bold">Domain is not available</span>
						</div>
						
						<div class="col-md-3 pt-4 form-group col-xs-12">
							<a href="javascript:void(0)" class="btn btn-sm btn-danger checkBtn">Check Availability</a>
						</div> --}}
					
						<div class="col-md-6 form-group col-xs-12">
							<label> Mobile</label>
							<input type="text" class="form-control" name="mobile" value="{{$user->mobile }}" readonly="readonly">
							
						</div>
						<div class="col-md-6 form-group col-xs-12">
							<label> Email</label>
							<input type="text"  class="form-control" name="email" value="{{$user->email}}" readonly="readonly">
							
						</div>
					
						<div class="col-md-6 form-group col-xs-12">
							<label>Logo</label>
							<input name="file" type="file" class="form-control" >
						</div>
						<div class="col-md-6 form-group col-xs-12">
							<label>Website Url</label>
							<input type="text" size="25" class="form-control" name="website_url" value="{{$user->website_url}}">
							@error('website_url')
						        <span class="help-block text-danger font-size-12">
						            <strong>{{ $message }}</strong>
						        </span>
						    @enderror
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-12 form-group">
							<label>Description</label>
							<textarea rows="5" cols="40" name="description" class="form-control">{{$user->description}}</textarea>
							@error('description')
						        <span class="help-block text-danger font-size-12">
						            <strong>{{ $message }}</strong>
						        </span>
						    @enderror
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 form-group  col-xs-12">
							<label>Country</label>
							<input type="text" size="25" class="form-control" name="country" value="{{$user->country->country_name}}" readonly="readonly">
						</div>
						<div class="col-md-4 form-group  col-xs-12">
							<label>State</label>
							<input type="text" size="25" class="form-control" name="state" value="{{$user->state->state_name}}" readonly="readonly">
						</div>
						<div class="col-md-4 form-group  col-xs-12 ">
							<label>City</label>
							<input type="text" size="25" class="form-control" name="city" value="{{$user->city->city_name}}" readonly="readonly">
						</div>
						<div class="col-md-12 col-lg-12 form-group">
							<label>Street</label>
							<textarea rows="3" cols="19" class="form-control" name="address">{{$user->address}}</textarea>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-12 col-lg-12 form-group">
							<h2 class="font-weight-bold">Seo Information</h2>
						<hr>
						</div>
						<div class="col-md-4 form-group  col-xs-12">
							<label>Meta Title </label>
							<input type="text" size="25" class="form-control" name="meta_title" value="{{$user->meta_title}}">
							@error('meta_title')
						        <span class="help-block text-danger font-size-12">
						            <strong>{{ $message }}</strong>
						        </span>
						    @enderror
						</div>
						<div class="col-md-4 form-group col-xs-12">
							<label>Meta Description</label>
							<input type="text" size="25" class="form-control" name="meta_desc" value="{{$user->meta_desc}}">
							@error('meta_desc')
						        <span class="help-block text-danger font-size-12">
						            <strong>{{ $message }}</strong>
						        </span>
						    @enderror
						</div>
						<div class="col-md-4 form-group col-xs-12">
							<label>Meta Keywords</label>
							<input type="text" size="25" class="form-control" name="meta_keywords" value="{{$user->meta_keywords}}">
							@error('meta_keywords')
						        <span class="help-block text-danger font-size-12">
						            <strong>{{ $message }}</strong>
						        </span>
						    @enderror
						</div>

					</div>
					<div class="row">
						<div class="col-md-12 col-lg-12 form-group">
							<label class="font-weight-bold">Nature of Business {{$user->role->display_name}}</label>
						</div>
						<div class="col-md-12 form-group col-lg-12">
							<label>Business Category </label>
							<input type="radio" name="type" checked="checked">
						</div>
						<div class="col-md-12 form-group">
							<label>Seller Categories</label>
							<select name="catg_id[]" class="form-control select2" multiple="multiple">
								@foreach($catgs as $catg)
									<option value="{{$catg->catg_id}}" {{in_array($catg->catg_id,(collect($user->categories)->pluck('catg_id'))->toArray()) ? 'selected="selected"' : ''}}>{{$catg->catg_name}}</option>
								@endforeach	
							</select>

						</div>
						
						<div class="col-md-4 form-group col-xs-12">
							<label>Year Company Registered</label>
							<select name="reg_year" class="form-control">
								<option value="" selected="selected">Please Select</option>		
								@foreach(range(date('Y'), 1900) as  $year)
									<option value="{{$year}}" {{$user->reg_year == $year ? 'selected' : ''}}>{{$year}}</option>
								@endforeach						
							</select> 
						</div>
						<div class="col-md-4 form-group col-xs-12">
							<label>Key Personnel</label>
							<select name="personnel" class="form-control">
								<option value="" selected="selected">Please Select</option>		
								@foreach(KeyPersonnel as $keyp =>  $valuep)
									<option value="{{$keyp}}" {{$user->personnel == $keyp ? 'selected' : ''}}>{{$valuep}}</option>
								@endforeach							
							</select> 
						</div>
						<div class="col-md-4 form-group col-xs-12">
							<label>Ownership Type</label>
							<select name="own_type" class="form-control">
								<option value="" selected="selected">Please Select</option>
								@foreach(OwnershipType as $keyo =>  $valueo)
									<option value="{{$keyo}}" {{$user->own_type == $keyo ? 'selected' : ''}}>{{$valueo}}</option>
								@endforeach	
							</select> 
						</div>
						<div class="col-md-12 form-group col-lg-12">
							<label> Certification</label>
							<table width="100%" cellspacing="2" cellpadding="2" border="0">
								<tbody>
								@foreach($certifications as $certification)
								<tr>
									<td><input type="checkbox" name="cert_id[]" value="{{$certification->cert_id}}" {{in_array($certification->cert_id,(collect($user->certifications)->pluck('cert_id'))->toArray()) ? 'checked="checked"' : ''}}></td>
									<td>{{$certification->code}}</td>
								</tr>
								@endforeach	
									
								</table> <br>
							<div id="alert" style="color:#FF0000;"></div>
						</div>
						<div class="col-md-12 col-lg-12 form-group">
							<input name="submit" class="btn btn-danger" type="submit" value="submit">
						</div>
					</div>
				</form>
			</div>
		</div>
</div>
<script>
	$(document).ready(function(){
		$('.select2').select2({
			 placeholder: "Select Catgeory",
    		allowClear: true
		});

		$('.checkBtn').on('click',function(e){
			e.preventDefault();
			var domain_name = $('input[name="comp_sub_domain"]').val();
			if(domain_name !=''){
				$.ajax({
					type:'GET',
					url:"{{url('domain-check')}}/"+domain_name,
					success:function(res){
						if(res == 'true'){
							alert('domain is available.');
						}else{
							alert('domain is not available.');
						}
					}
				});
			}else{
				alert('Enter sub domain name');
			}

		});
	})
</script>
@endsection

