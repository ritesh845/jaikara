@php
	$suppliers = \App\Models\User::where(['role_id' => '4','status' => 'A'])->paginate(10);
@endphp

<div class="container-fluid pt-5 pb-5 bg-back-color">
	<div class="row">
		<div class="col-md-3 pr-0">
			<div class="card">
				<div class="card-header ">
					<h5 class="card-title">Filter</h5>
					
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<p class="f-14 font-weight-bold">Search By Area</p>
						</div>
						<div class="col-md-12 form-group">
							<select class="form-control f-14" id="country" name="country_code">
								<option value="">Select Country</option>
							</select>
						</div>
						<div class="col-md-12 form-group">
							<select class="form-control f-14" id="state" name="state_code">
								<option value="">Select State</option>
							</select>
						</div>
						<div class="col-md-12 form-group">
							<select class="form-control f-14" id="city" name="city_code">
								<option value="">Select City</option>
							</select>
						</div>
						<div class="col-md-12 form-group" >
							<button class="btn btn-sm btn-theme f-14 w-100">Search</button>
						</div>
					</div>
				</div>
				<hr>
				<div class="card-body ">
					<div class="row">
						<div class="col-md-12">
							<p class="f-14 font-weight-bold">Search By Catgeory</p>
						</div>
						<div class="col-md-12 form-group">
							<select class="form-control f-14" id="country" name="parent_catg">
								<option value="">Select Select</option>
							</select>
						</div>
						<div class="col-md-12 form-group">
							<select class="form-control f-14" id="state" name="state_code">
								<option value="">Select State</option>
							</select>
						</div>
						<div class="col-md-12 form-group">
							<select class="form-control f-14" id="city" name="city_code">
								<option value="">Select City</option>
							</select>
						</div>
						<div class="col-md-12 form-group" >
							<button class="btn btn-sm btn-theme f-14 w-100">Search</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			@foreach($suppliers as $supplier)
			<div class="card mb-2">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<h5 class="text-primary">{{$supplier->comp_name}}</h5>
						</div>
						<div class="col-md-5" style="border-right: 1px solid lightgray">
							<p class="f-14 mb-2"><span class="text-muted">Company Registered Year:</span> {{$supplier->reg_year}}</p>
							<p class="f-14 mb-2"><span class="text-muted">Seller Categories:</span> {{$supplier->categories !=null ? getArrayValueString($supplier->categories,'catg_name') : ''}}</p>
							<p class="f-14 mb-2"><span class="text-muted">Products & Services:</span>  </p>
							<p class="f-14 mb-2"><span class="text-muted">No. of Employee:</span> {{$supplier->personnel !=null ? $supplier->personnel : '0'}} People </p>
							<button class=" f-14 mb-2 btn btn-sm btn-theme"><i class="fa fa-info"></i> Send Inquirys</button>
						</div>
						<div class="col-md-4" style="border-right: 1px solid lightgray">
							<p class="f-14 mb-2"><span class="text-muted">Type:</span> Free</p>
							<p class="f-14 mb-2"><span class="text-muted">Supplier Country:</span> {{$supplier->country->country_name}}</p>
							<p class="f-14 mb-2"><span class="text-muted">Web Site:</span> {{$supplier->domain_url1}}</p>
							<p class="f-14 mb-2"><span class="text-muted">Mobile:</span> xxxxxxxxxxxxx</p>
							<p class="f-14 mb-2"><span class="text-muted">Visit Us:</span> {{$supplier->website_url}}</p>
						</div>
						<div class="col-md-3">
							<img src="{{asset($supplier->site_logo !='' ? 'storage/'.$supplier->site_logo : 'no-image.jpg')}}" width="200" height="150" class="mb-4" >
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

</div>