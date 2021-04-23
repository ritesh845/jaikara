@php 
$products = \App\Models\Products::where('user_id',session('user.id'))->orderBy('created_at','desc')->get()->take(3);
$productgroups = \App\Models\ProductGroup::where(['user_id' => session('user.id'),'parent_id' => null])->orderBy('created_at','desc')->get();

@endphp

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="card mb-3">
				<div class="card-body p-3">
					<h5 class="font-weight-bold">Categories</h5>
					<div class="row">
						<div class="col-md-12">
							<ul>
								@foreach($productgroups as $productgroup)
									<li>{{$productgroup->grp_name}}</li>
								@endforeach
							</ul>
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
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12 ">
					<div class="card">
						<div class="card-body">
							<div class="row">
								@foreach($products as $product)
									<div class="col-md-4">
										<div class="card">
											<div class="card-header bg-white">
												<a href="{{url(session('domain_name').'/product-category/'.$product->sefriendly)}}">
													<img src="{{asset('storage/'.$product->p_images[0]->doc_path)}}" class="w-100" height="200">
												</a>
											</div>
											<div class="card-body">
												<h5>{{$product->name}}</h5>
												<p>{{$product->currency !=null ? $product->currency->curr_name : ''}} {{$product->price}}</p>
											</div>
										</div>
									</div>
								@endforeach
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	@include('frontend.template.pages.company_profile')
