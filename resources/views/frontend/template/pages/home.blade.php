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

</div>
@include('frontend.template.pages.company_profile')
