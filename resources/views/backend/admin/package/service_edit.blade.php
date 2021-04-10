@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header p-1">
        <h5 class="card-title">Add Package Service
            <a href="{{route('package.index')}}" class="btn btn-sm btn-primary pull-right">{{__('Back')}}</a>
        </h5>
    </div><!-- card-header -->
    <div class="card-body">
    	@if($message = Session::get('success'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif
    	<form action="{{route('service_update',$service->pkg_service_id)}}" method="post" autocomplete="off">
    	@csrf 
        @method('patch')
    		<div class="row">
    			<div class="col-md-2 form-group">
    				<label>Service Name:</label>
    			</div>
    			<div class="col-md-6 form-group">
    				<input type="text" name="pkg_service_name" class="form-control" required="required" value="{{$service->pkg_service_name}}"> 
    			</div>
    		</div>
    		@foreach($packages as $package)
    			<div class="row">
	    			<div class="col-md-2 form-group">
	    				<label>{{$package->pkg_name}}:</label>
	    				<input type="hidden" name="pkg_id[]" value="{{$package->pkg_id}}">
	    			</div>
	    			<div class="col-md-6 form-group">
	    				<label class="mr-2">Yes</label><input type="radio" name="service_type_{{$package->pkg_id}}"  class="mr-2" value="1" {{in_array($package->pkg_id, (collect($service->packages)->pluck('pkg_id')->toArray())) ? (collect($service->packages)->where('pkg_id',$package->pkg_id)->first()->status == '1' ? 'checked="checked"' : 'No'): '' }}> 
	    				<label class="mr-2">No</label><input type="radio" name="service_type_{{$package->pkg_id}}"  class="mr-2" value="0" {{in_array($package->pkg_id, (collect($service->packages)->pluck('pkg_id')->toArray())) ? (collect($service->packages)->where('pkg_id',$package->pkg_id)->first()->status == '0' ? 'checked="checked"' : 'No'): '' }} > 
	    			</div>
	    		</div>
    		@endforeach
    		<div class="row">
    			<div class="col-md-12 form-group">
    				<button class="btn btn-sm btn-success">Submit</button>
    			</div>
    		</div>
    	</form>
    </div>
</div>
@endsection