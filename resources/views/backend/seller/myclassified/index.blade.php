@extends('backend.layouts.main')
@section('content')
<div class="card mb-2">
	<div class="card-body">
</div>
<div class="card mb-2">
	<div class="card-body">
		<div class="row mt-4">
			<div class="col-md-12">
				<h5 class="font-weight-bold">My Classifieds<a class="pull-right btn btn-sm btn-warning" href="{{ route('my_classified.create') }}"><span><i class="fa fa-plus"></i></span>Add Classifieds</a></h5>
				<hr>
                @if($message = Session::get('message'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif
				<table class="table table-bordered table-striped">
    		<thead>
    			<tr>
    				<th>#</th>
    				<th>Subject</th>
    				<th>Category</th>
    				<th>Start At</th>
    				<th>Action</th>
    			</tr>
    		</thead>
            @php $i = 1; @endphp
                @foreach($mycat as $lit)
    		<tbody id="tbody">
    			<td>{{ $i++ }}</td>
    			<td>{{ $lit->title }}</td>
    			<td>{{ $lit->category->catg_name }}</td>
    			<td>13-04-2021</td>
    			<td><a href="{{ route('my_classified.edit',$lit->mycl_id ) }}" class="btn btn-sm btn-info">Edit</a>
    			<a href="{{ route('my_classified.delete',$lit->mycl_id) }}" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure?')">Delete</a></td>
    		</tbody>
             @endforeach
    	</table>
				{{-- <ul class="nav nav-bar">
					<li class=""><a href="" class="btn btn-sm btn-success">Add Sell Trade</a></li>
				</ul> --}}
			</div>
		</div>
	</div>
</div>
@endsection
