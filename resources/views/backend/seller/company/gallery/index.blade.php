@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
		<div class="col-md-12 ">
			<h5 class="font-weight-bold">Gallery Image</h5>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="col-md-4 form-group">
						<label for="fname">Image</label>
						<input type="file" class="form-control required" value="" name="gallery_img" maxlength="128">
					</div>
					<div class="col-md-4 form-group">
						<label for="fname" required="" class="clearfix">  </label>
						<input type="submit" name="submit" class="btn btn-warning" value="submit">
					</div>
				</form>
			</div>
		</div>
	</div>														
</div>	
<div class="card">
	<div class="card-header">
		<div class="col-md-12 ">
			<h5 class="font-weight-bold">Show Image</h5>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-sm-4 form-group">
				{{-- <a class="thumbnail img_a_height " rel="ligthbox" href="#/"> --}}
				{{-- <img class="img-responsive" alt="" src="http://www.b2bscriptdemo.com/images/gallery_image/1617778551.jpeg"> </a> --}}
				{{-- <div class="icon_load">  --}}
					{{-- <a class="btn btn-sm btn-danger deletecustomer" href="http://www.b2bscriptdemo.com/myaccount_gallery-71.html" data-customerid="33"> <i class="fa fa-trash"></i></a>  --}}
				{{-- </div> --}}
			</div>
		</div>
	</div>
</div>


@endsection
