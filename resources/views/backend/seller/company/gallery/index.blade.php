@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
		<div class="col-md-12 ">
			<h5 class="font-weight-bold">Gallery Image</h5>
		</div>
		@if($message = Session::get('success'))   
          <div class="alert alert-success">{{ $message }}</div>
    	@endif
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('image_gallery_add')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="col-md-4 form-group">
						<label for="image">Image</label>
						<input type="file" class="form-control required" name="image">
						<input type="hidden" class="form-control required" name="doc_type" value="image_gallery">
						@error('image')
							<span class="text-danger">
							<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>
					<div class="col-md-4 form-group">
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
			@foreach($documents as $document)
				<div class="col-sm-4 form-group">
					<a class="pull-right" href="{{ route('image_gallery_delt', ['id' => $document->doc_id]) }}"> <i class="fa fa-trash"></i></a> 
					<img src="{{asset($document->doc_path !=null ? 'storage/'.$document->doc_path : 'img/student_demo.png')}}" >
				</div>
			@endforeach
		</div>
	</div>
</div>


@endsection
