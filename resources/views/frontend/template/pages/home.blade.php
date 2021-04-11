<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="card mb-3">
				<div class="card-body p-3">
					<h5 class="font-weight-bold">Categories</h5>
					<div class="row">
						<div class="col-md-12">
							
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card-body p-3">
					<h5 class="font-weight-bold">Contact Details</h5>
					<p class="m-2">{{session('user.comp_name')}}</p>
					<p class="m-2"> <b><i class="fa fa-mobile"></i> Mobile:</b> {{session('user.mobile')}}</p>
					<p class="m-2"><b><i class="fa fa-map-marker"></i>Address:</b> {{session('user.city.city_name').', '.session('user.state.state_name').', '.session('user.country.country_name')}}</p>
					<p class="m-2"> <b><i class="fa fa-envelope"></i> Email:</b> {{session('user.email')}}</p>
					<p class="m-2"> <b><i class="fa fa-globe"></i> Website Url:</b> {{session('user.website_url')}}</p>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card-body p-3">
					<h5 class="font-weight-bold">Social Media</h5>
					<div class="row">
						<div class="col-md-12">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8"></div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h5 class="font-weight-bold">{{session('user.comp_name')}}</h5>
					<a  class="  btn btn-sm btn-success text-white btn-rounded-circle"><i class="fa fa-clock-o"></i> {{date('D M d Y',strtotime(session('user.joining_date')))}}</a>
						
					<a  class=" ml-3  btn btn-sm btn-success text-white btn-rounded-circle"><i class="fa fa-map-marker"></i> {{session('user.city.city_name')}}</a>
					<div  class="row">
						<div class="col-md-7">
					<h4 class="font-weight-bold mt-3 mb-3">Contact Details:</h4>
							<table class="table table-bordered table-striped f-14">
								<tbody>
									<tr>
										<td>Name of Your Store</td>
										<td>{{session('user.comp_name')}}</td>
									</tr>
									<tr>
										<td>Contact Person</td>
										<td></td>
									</tr>
									<tr>
										<td>Accepted Currencies</td>
										<td></td>
									</tr>
									<tr>
										<td>Accept Escrow Services</td>
										<td></td>
									</tr>
									<tr>
										<td>Number of Employee</td>
										<td></td>
									</tr>
									<tr>
										<td>Year of Establishment</td>
										<td></td>
									</tr>
									<tr>
										<td>Language & Communication</td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-5">
							<h5 class="font-weight-bold">Contact Person</h5>
							<div class="card">
								<div class="card-body text-center">
									<img src="{{asset(session('user.site_logo') !='' ? 'storage/'.session('user.site_logo') : 'no-image.jpg')}}" class="mb-4" width="200" height="150">
									<table class="table table-bordered table-striped f-14">
										<tbody>
											<tr>
												<th>Name</th>
												<td>{{session('user.name')}} </td>
											</tr>
											<tr>
												<th>Country</th>
												<td>{{session('user.country.country_name')}}</td>
											</tr>
											<tr>
												<th>State</th>
												<td>{{session('user.state.state_name')}}</td>
											</tr>
											<tr>
												<th>City</th>
												<td>{{session('user.city.city_name')}}</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-md-8 mt-2">
			<div class="card">
				<div class="card-body">
					<div class="card">
						<div class="card-header p-0 bg-white">

							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link btn btn-sm  f-11 active text-dark" href="#company" role="tab" data-toggle="tab"> <i class="fa fa-check-square" aria-hidden="true"></i> Company Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link btn btn-sm  f-11 text-dark" href="#trade" role="tab" data-toggle="tab"> <i class="fa fa-check-square" aria-hidden="true"></i> View Trade Productions</a>
								</li>
								<li class="nav-item">
									<a class="nav-link btn btn-sm  f-11 text-dark"  href="#infor" role="tab" data-toggle="tab"> <i class="fa fa-gavel" aria-hidden="true" ></i> View Informarion Policies</a>
								</li>
								<li class="nav-item">
									<a class="nav-link btn btn-sm  f-11 text-dark"  href="#img" role="tab" data-toggle="tab"> <i class="fa fa-camera" aria-hidden="true"></i> Image Gallery</a>
								</li>
								<li class="nav-item">
									<a class="nav-link btn btn-sm  f-11 text-dark"  href="#cert" role="tab" data-toggle="tab"> <i class="fa fa-certificate" aria-hidden="true"></i> Certification Achieved</a>
								</li>

							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content">
							  <div role="tabpanel" class="tab-pane active" id="company">
							  	<table class="table table-bordered table-striped f-12">
										<tbody>
											<tr>
												<th>Name Of Your Store</th>
												<td>{{session('user.comp_name')}} </td>
											</tr>
											<tr>
												<th>Company Address</th>
												<td>{{getFullAddress(session('user'))}}</td>
											</tr>
											<tr>
												<th>Meta Title</th>
												<td>{{session('user.meta_title')}} </td>
											</tr>
											<tr>
												<th>Meta Description</th>
												<td>{{session('user.meta_desc')}} </td>
											</tr>
											<tr>
												<th>Meta Keywords </th>
												<td>{{session('user.meta_keywords')}}</td>
											</tr>
											<tr>
												<th>Business Category </th>
												<td>{{session('user.role.display_name')}}</td>
											</tr>
											<tr>
												<th>Nature of Business </th>
												<td>{{session('user.role.display_name')}} </td>
											</tr>
											<tr>
												<th>Year Company Registered </th>
												<td>{{session('user.reg_year')}}</td>
											</tr>
											<tr>
												<th>Key Personnel</th>
												<td>{{session('user.personnel') !=null ? Arr::get(KeyPersonnel,session('user.personnel')) : ''}}</td>
											</tr>
											<tr>
												<th>Ownership Type </th>
												<td> {{session('user.own_type') !=null ? Arr::get(OwnershipType,session('user.own_type')) : ''}}</td>
											</tr>
											<tr>
												<th>Certification</th>
												<td>
												    {{session('user.certifications') !=null ? getArrayValueString(session('user.certifications'),'code') : ''}}
												</td>

											</tr>
										</tbody>
									</table>


							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="trade">
							  	<table class="table table-bordered table-striped f-12">
									<tbody>
										<tr>
											<th>Production Capacity</th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.prdt_capacity') : ''}}</td>
										</tr>
										<tr>
											<th>Factory Size</th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.size_sqft') : ''}}</td>
										</tr>
										<tr>
											<th>Average Lead Time / Day(s)</th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.lead_time_days') : ''}}</td>
										</tr>
										<tr>
											<th>Compliance Maintaining </th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.maintaining') : ''}}</td>
										</tr>
										<tr>
											<th>Export Percentage </th>
											<td>{{session('user.tradeProduction') !=null ? Arr::get(ExportPer,session('user.tradeProduction.export_per') )  : ''}}</td>
										</tr>
										<tr>
											<th>Annual Sales Volume </th>
											<td> {{session('user.tradeProduction') !=null ? Arr::get(AnnualSales,session('user.tradeProduction.sales_volume') )  : ''}}</td>
										</tr>
										<tr>
											<th>Packaging Details</th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.packg_dtl') : ''}}</td>
										</tr>
										<tr>
											<th>Office Size</th>
											<td>{{session('user.tradeProduction') !=null ? Arr::get(OfficeSize,session('user.tradeProduction.office_size')) : ''}}</td>
										</tr>
										<tr>
											<th>Main Export Markets (Country)</th>
											<td>{{session('user.tradeProduction') !=null ? Arr::get(MainExportMarkets,session('user.tradeProduction.export_market'))  : ''}}</td>
										</tr>
										<tr>
											<th>Nearest Port</th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.five_countries') : ''}}</td>
										</tr>
										<tr>
											<th>Factory Location </th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.factory_loc') : ''}}</td>
										</tr>
										<tr>
											<th>Major Product(s) you sell (For Sellers) </th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.major_prdt_sell') : ''}}</td>
										</tr>
										<tr>
											<th>Main Products 1</th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.main_prdt1') : ''}}</td>
										</tr>
										<tr>
											<th>Main Products 2</th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.main_prdt2') : ''}}</td>
										</tr>
										<tr>
											<th>Main Products 3</th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.main_prdt3') : ''}}</td>
										</tr>
										<tr>
											<th>Other Products You Sell</th>
											<td>{{session('user.tradeProduction') !=null ? session('user.tradeProduction.product_you_sell') : ''}}</td>
										</tr>
									</tbody>
								</table>


							  </div>

							  <div role="tabpanel" class="tab-pane fade" id="infor">
							  	<table class="table table-bordered table-striped f-12">
									<tbody>
										<tr>
											<th>Company Policy</th>
											<td>{{session('user.inforPolicies') !=null  ? session('user.inforPolicies.company_policy') : ''}}</td>
										</tr>
										<tr>
											<th>Payment Terms</th>
											<td>{{session('user.inforPolicies') ? session('user.inforPolicies.pay_terms_method') : ''}}</td>
										</tr>
										<tr>
											<th>Terms Condition</th>
											<td>{{session('user.inforPolicies') ? session('user.inforPolicies.terms_condition') : ''}}</td>
										</tr>
										
									</tbody>
								</table>
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="img">
							  	<h5 class="font-weight-bold">Image Gallery</h5>
							  	<div class="row">
							  	@foreach(session('user.imageGalleries') as $imageGallery)
							  		<div class="col-md-3">
							  			<img src="{{asset('storage/'.$imageGallery->doc_path)}}" width="150" height="150" />
							  			
							  		</div>
							  	@endforeach
							  	</div>

							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="cert">asdasd</div>

							</div>
							
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
