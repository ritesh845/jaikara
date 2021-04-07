@include('backend.template.partials.header')

<div class="card">
	<div class=" card-body">
		<div class="clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form id="" action="edit_company_profile.html" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-5 form-group col-xs-12">
							<label> Company Name </label>
							<input type="text" class="form-control"  name="comp_name" value="{{$user->comp_name}}" readonly="readonly"  >
						</div>
						<div class="col-md-4 form-group col-xs-12">
							<label>Company Sub-Domain Name <a data-toggle="tooltip" data-placement="bottom" title="Please select your micro website subdomain name. You can not edit this later!" class="fa fa-question-circle"></a></label>

							<input type="text" class="form-control"  name="comp_sub_domain" value="{{$user->comp_sub_domain}}" readonly="readonly"  >
						</div>
						
						<div class="col-md-3 pt-4 form-group col-xs-12">
							<a href="javascript:void(0)" class="btn btn-sm btn-danger">Check Availability</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group col-xs-12">
							<label> Mobile</label>
							<input type="text" class="form-control" name="ph_no" value="7828773421" readonly="1">
						</div>
						<div class="col-md-6 form-group col-xs-12">
							<label> Email</label>
							<input type="text"  class="form-control" name="email" value="riteshpanchal845@gmail.com" readonly="1">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group col-xs-12">
							<label>Logo</label>
							<input name="logo_new" type="file" class="form-control">
							<input type="hidden" name="logo" value="">
						</div>
						<div class="col-md-6 form-group col-xs-12">
							<label>Website Url</label>
							<input type="text" size="25" class="form-control" name="site_url" value="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-12 form-group">
							<label>Description</label>
							<textarea rows="5" cols="40" name="detail" class="form-control"></textarea>
							<div id="detail" style="color:#FF0000;"></div>
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
							<textarea rows="3" cols="19" class="form-control" name="address"></textarea>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-12 col-lg-12 form-group">
							<h2 class="font-weight-bold">Seo Information</h2>
						<hr>
						</div>
						<div class="col-md-4 form-group  col-xs-12">
							<label>Meta Title </label>
							<input type="text" size="25" class="form-control" name="meta_title" value="Ritech -Indore-Madhya Pradesh">
						</div>
						<div class="col-md-4 form-group col-xs-12">
							<label>Meta Description</label>
							<input type="text" size="25" class="form-control" name="meta_desc" value="Ritech -Indore-Madhya Pradesh">
						</div>
						<div class="col-md-4 form-group col-xs-12">
							<label>Meta Keywords</label>
							<input type="text" size="25" class="form-control" name="meta_keywords" value="Ritech -Indore-Madhya Pradesh">
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
							<select name="cat[]" class="form-control">
										
							</select>
						</div>
						
						<div class="col-md-4 form-group col-xs-12">
							<label>Year Company Registered</label>
							<select name="reg_yrs" class="form-control">
								<option value="" selected="selected">Please Select</option>		
								@foreach(range(date('Y'), 1900) as $year)
									<option value="{{$year}}">{{$year}}</option>
								@endforeach						
							</select> 
						</div>
						<div class="col-md-4 form-group col-xs-12">
							<label>Key Personnel</label>
							<select name="emp_det" class="form-control">
								<option value="" selected="selected">Please Select</option>		
								@foreach(KeyPersonnel as $keyp =>  $valuep)
									<option value="{{$keyp}}">{{$valuep}}</option>
								@endforeach							
							</select> 
						</div>
						<div class="col-md-4 form-group col-xs-12">
							<label>Ownership Type</label>
							<select name="own_type" class="form-control">
								<option value="" selected="selected">Please Select</option>
								
							</select> 
						</div>
						<div class="col-md-12 form-group col-lg-12">
							<label> Certification</label>
							<table width="100%" cellspacing="2" cellpadding="2" border="0">
								<tbody>
								<tr>
									<td><input type="checkbox" name="certification[]" value="0" checked="0"></td>
									<td>HACCP</td>
								</tr>
									
								</table> <br>
							<div id="alert" style="color:#FF0000;"></div>
						</div>
						<div class="col-md-12 col-lg-12 form-group">
							<input name="id" type="hidden" value="{{$user->id}}">
							<input name="submit" class="btn btn-danger" type="submit" value="submit">
							<input type="hidden" value="1" name="count_cats" id="count_cats">
						</div>
					</div>
				</form>
			</div>
		</div>
</div>


@include('backend.template.partials.footer')
