<div class="container-fluid pb-5 bg-back-color">
    <div class="row">
        <div class="col-md-12 mt-5">

			<div class="row">
				<div class="col-md-4 pr-0" >
					<div class="card">
						<div class="card-body">
							<div id="slider" class="flexslider">
			          <ul class="slides">
			          	@foreach($product->p_images as $img)
			            <li>
			  	    	    <img src="{{asset('storage/'.$img->doc_path)}}" style="height: 290px !important" />
			  	    		</li>
			  	    	@endforeach
			          </ul>
			        </div>
			        <div id="carousel" class="flexslider">
			          <ul class="slides">
			          	@foreach($product->p_images as $img)
			            	<li style="width: 0px !important">
			  	    	    <img src="{{asset('storage/'.$img->doc_path)}}" height="100" style="width: 150px !important" />
			  	    		</li>
			  	    	@endforeach
			            
			          </ul>
			        </div>
						</div>
					</div>
					
				</div>
				<div class="col-md-5 p-0">
					<div class="card mb-2">
						<div class="card-body p-2">
							<div class="row">
								<div class="col-md-12">
									<h6>{{$product->name}}</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="card ">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<h6 class="font-weight-bold">Price :{{$product->currency->curr_name}} {{$product->price}}</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="card bg-back-color">
						<div class="card-body">
							<h6><small>Payment Terms &amp; Method :</small> <span> N/A</span></h6>
							<h6><small>Delivery Terms :</small> <span>N/A </span></h6>
							<a href="#submit_inqury" class="btn btn-sm btn-theme"><i class="fa fa-envelope fa-1x"></i> Contact Supplier </a>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<table class="table table-bordered table-striped p-0 f-12">
										<tbody>
											<tr>
												<td class="with_td_auto">Brand Name</td>
												<td>{{$product->brand !=null ? $product->brand : 'N/A'}} </td>
											</tr>
											<tr>
												<td class="with_td_auto">Model number</td>
												<td>{{$product->model_no !=null ? $product->model_no : 'N/A'}} </td>
											</tr>
											<tr>
												<td class="with_td_auto">Shape</td>
												<td>{{$product->shape !=null ? $product->shape : 'N/A'}}
												</td>
											</tr>
											<tr>
												<td class="with_td_auto">Color</td>
												<td>N/A </td>
											</tr>
											<tr>
												<td class="with_td_auto">Material</td>
												<td>N/A </td>
											</tr>
											<tr>
												<td class="with_td_auto">Available certificates</td>
												<td>N/A </td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-md-6 col-xs-12 padd_left_none">
									<table class="table table-bordered table-striped f-12">
										<tbody>
											<tr>
												<td class="with_td_auto">Available size range</td>
												<td>N/A</td>
											</tr>
											<tr>
												<td class="with_td_auto">Thickness</td>
												<td>N/A </td>
											</tr>
											<tr>
												<td class="with_td_auto">Number of Pc per inner</td>
												<td>N/A </td>
											</tr>
											<tr>
												<td class="with_td_auto">Size inner</td>
												<td>N/A </td>
											</tr>
											<tr>
												<td class="with_td_auto">Type of inner packing</td>
												<td>N/A </td>
											</tr>
											<tr>
												<td class="with_td_auto">Type of outer packing</td>
												<td>N/A </td>
											</tr>
										</tbody>
									 </table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-header p-2">
							<h6>Company Information</h6>
						</div>
						<div class="card-body">
							<div class=""></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md-9 mt-2">
					<div class="card">
						<div class="card-body">
							<div class="card">
								<div class="card-header p-0 bg-white">

									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link btn btn-sm  f-14 active text-dark" href="#product" role="tab" data-toggle="tab">  Products Details</a>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-sm  f-14 text-dark" href="#imgVideo" role="tab" data-toggle="tab">  Images & Videos</a>
										</li>
										
									</ul>
								</div>
								<div class="card-body">
									<div class="tab-content">
									  <div role="tabpanel" class="tab-pane active" id="product">
									  		<div class="row">
												<div class="col-md-6 col-xs-12">
													<table class="table table-bordered table-striped p-0 f-12">
														<tbody>
															<tr>
																<td class="with_td_auto">Brand Name</td>
																<td>tes </td>
															</tr>
															<tr>
																<td class="with_td_auto">Model number</td>
																<td>N/A </td>
															</tr>
															<tr>
																<td class="with_td_auto">Shape</td>
																<td>N/A
																</td>
															</tr>
															<tr>
																<td class="with_td_auto">Color</td>
																<td>N/A </td>
															</tr>
															<tr>
																<td class="with_td_auto">Material</td>
																<td>N/A </td>
															</tr>
															<tr>
																<td class="with_td_auto">Available certificates</td>
																<td>N/A </td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="col-md-6 col-xs-12 padd_left_none">
													<table class="table table-bordered table-striped f-12">
														<tbody>
															<tr>
																<td class="with_td_auto">Available size range</td>
																<td>N/A</td>
															</tr>
															<tr>
																<td class="with_td_auto">Thickness</td>
																<td>N/A </td>
															</tr>
															<tr>
																<td class="with_td_auto">Number of Pc per inner</td>
																<td>N/A </td>
															</tr>
															<tr>
																<td class="with_td_auto">Size inner</td>
																<td>N/A </td>
															</tr>
															<tr>
																<td class="with_td_auto">Type of inner packing</td>
																<td>N/A </td>
															</tr>
															<tr>
																<td class="with_td_auto">Type of outer packing</td>
																<td>N/A </td>
															</tr>
														</tbody>
													 </table>
												</div>
												<div class="col-md-12">
												<hr>
													<h5>Product Description</h5>
													<div>
														{!! $product->desc !!}
													</div>
												</div>
												<div class="col-md-12">
												<hr>
													<h6>Product Short Description</h6>
													<div>
														{!! $product->shrt_desc !!}
													</div>
												</div>
											</div>

									  </div>
									  <div role="tabpanel" class="tab-pane fade" id="imgVideo">
								  		<div class="row">
								  			<div class="col-md-12">
								  				<h4>Images</h4>
								  			</div>
								  			@foreach($product->p_images as $img)
									  			<div class="col-md-3 form-group">
									  				<img src="{{asset('storage/'.$img->doc_path)}}" class="w-100" height="200">
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
      		
        </div>
    </div>
</div>
  <script type="text/javascript">
	$(window).on('load', function() { 
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});
  </script>