<div class="container-fluid pb-5">
    <div class="row">
        <div class="col-md-12 mt-3">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-5 pr-0" >
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
						<div class="col-md-7 pl-0">
							<div class="card">
								<div class="card-body p-2">
									<div class="row">
										<div class="col-md-12">
											<h6>{{$product->name}}</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="card bg-back-color">
								<div class="card-body f-13">
									{!! $product->shrt_desc !!}
								</div>
							</div>
							<div class="card ">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<h6 class="font-weight-bold">Price: {{$product->currency !=null ? $product->currency->curr_name : ''}} {{$product->price}}</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="card bg-back-color">
								<div class="card-body">
									<h6 class="f-14"><small>Payment Terms &amp; Method :</small> <span> N/A</span></h6>
									<h6 class="f-14"><small>Delivery Terms :</small> <span>N/A </span></h6>
									{{-- <a href="#submit_inqury" class="btn btn-sm btn-theme"><i class="fa fa-envelope fa-1x"></i> Contact Supplier </a> --}}
								</div>
							</div>
							<div class="card" style="height:300px; overflow-y: scroll;  ">
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
					</div>
					<div class="row">
						<div class="col-md-12">
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
				<div class="col-md-3 pl-0">
					<div class="card">
						<div class="card-header p-2">
							<h6 class="theme-color">Send Your Message To The Supplier</h6>
						</div>
						<div class="card-body">
							@if($message = Session::get('success'))
				                <div class="alert alert-success">
				                    {{$message}}
				                </div>
				            @endif
							<form action="{{route('contactStore')}}" method="post" autocomplete="off">
								@csrf
							<div class="row f-14">
								<div class="col-md-12">
									<h6  class="f-15 font-weight-bold">Leave a Reply</h6>
								</div>
								<div class="col-md-12 form-group">
									<label for="name">Name</label>
									<input type="text" name="name" class="form-control" placeholder="Enter Your Name" id="name" value="{{old('mobile')}}">
									@error('name')
				                        <span class="help-block text-danger font-size-12">
				                            <strong>{{ $message }}</strong>
				                        </span>
				                    @enderror
								</div>
								<div class="col-md-12 form-group">
									<label for="mobile">Mobile Number</label>
									<input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" id="mobile" value="{{old('mobile')}}"  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
									@error('mobile')
				                        <span class="help-block text-danger font-size-12">
				                            <strong>{{ $message }}</strong>
				                        </span>
				                    @enderror
								</div>
								<div class="col-md-12 form-group">
									<label for="email">Email Address</label>
									<input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" id="email" value="{{old('email')}}">
									@error('email')
				                        <span class="help-block text-danger font-size-12">
				                            <strong>{{ $message }}</strong>
				                        </span>
				                    @enderror
								</div>
								<div class="form-group col-md-12">
									<label for="subject">Subject</label>
									<input type="text" name="subject" class="form-control" placeholder="Enter subject" id="subject" value="{{old('subject') ?? $product->name}}">
									@error('subject')
				                        <span class="help-block text-danger font-size-12">
				                            <strong>{{ $message }}</strong>
				                        </span>
				                    @enderror
								</div>
								<div class="col-md-12 form-group">
									<label id="message">Message</label>
									<textarea name="message" class="form-control" rows="5" cols="10">{{old('message')}}</textarea>
									@error('message')
				                        <span class="help-block text-danger font-size-12">
				                            <strong>{{ $message }}</strong>
				                        </span>
				                    @enderror
								</div>
								<div class="col-md-12 form-group">
									<label>Enter Verfication Code</label>
									<input type="text" class="form-control" name="captcha" value="{{old('captcha')}}" id="captcha">
									@error('captcha')
				                        <span class="help-block text-danger font-size-12">
				                            <strong>{{ $message }}</strong>
				                        </span>
				                    @enderror
								</div>
								<div class="col-md-12 form-group">
									<span id="spancaptcha">{!! captcha_img('math') !!}</span>
									 <a href="javascript:void(0)" class="btn btn-sm btn-theme ml-3" id="btn-refresh"><i class="fa fa-refresh"></i></a>
								</div>

								<div class="col-md-12 form-group">
									<button class="btn btn-sm btn-success">Submit</button>
								</div>
							</div>
						</form>
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

	 $(document).ready(function(){
    	$("#btn-refresh").click(function(){
    		$('#captcha').val('');
            $.ajax({
             type:'GET',
             url:'/refresh_captcha',
             success:function(data){
                $("#spancaptcha").empty().html(data)
               
             }
            });

        });
    });
  </script>