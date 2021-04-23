@php 
$products = \App\Models\Products::where('user_id',session('user.id'))->orderBy('created_at','desc')->get();

@endphp

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
					@foreach($products as $product)
						<div class="col-md-3">
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