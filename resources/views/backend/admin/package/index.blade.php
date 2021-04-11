@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header p-1">
        <h5 class="card-title">Member package</h5>
    </div><!-- card-header -->
    <div class="card-body table-responsive">
        
    	<table class="table table-bordered table-striped">
    		<thead>
    			<tr>
                    <th style="width: 6%;text-align: center;text-align: center;" class="first">Sr.No.</th>
                    <th style="width: 6%;text-align: center;">Package Name</th>
                    <th style="width: 5%;text-align: center;">Price</th>
                    <th style="width: 8%;text-align: center;">Valid Days</th>
                    <th style="width: 10%;text-align: center;">No. of Product Limit</th>
                    <th style="width: 10%;text-align: center;">No. of Classifed Limit</th>
                    <th style="width: 10%;text-align: center;">No. of Trade Leads Limit</th>
                    <th style="width: 10%;text-align: center;">Access buyer trade Leads</th>
                    <th style="width: 10%;text-align: center;">Access Sub-Domain</th>
                    <th style="width: 10%;text-align: center;">No. of Images</th>
                    <th style="width: 10%;text-align: center;">No. of Youtube Video</th>
                    <th style="text-align: center;" class="last">Action</th>
                </tr>
    		</thead>
    		<tbody id="tbody">
                @foreach($packages as $key => $package)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$package->pkg_name}}</td>
                        <td>{{$package->price}}</td>
                        <td>{{$package->valid_days}}</td>
                        <td>{{$package->prdt_limit}}</td>
                        <td>{{$package->classified_limit}}</td>
                        <td>{{$package->trade_ld_limit}}</td>
                        <td>{{$package->is_buyer_trade == '1' ? 'Yes' : 'No'}}</td>
                        <td>{{$package->is_subdomain == '1' ? 'Yes' : 'No'}}</td>
                        <td>{{$package->img_limit}}</td>
                        <td>{{$package->video_limit}}</td>
                        <td>
                            <a href="{{route('package.edit',$package->pkg_id)}}" class="bg-info text-white p-2 ml-2 rounded-circle" title="Edit"><i class="fa fa-edit"></i></a>  
                        </td>
                    </tr>
                @endforeach
    		</tbody>
    	</table>
    </div>
</div><!-- card -->

<div class="card ">
    <div class="card-header p-1">
        <h5 class="card-title">Package Service 
            <a href="{{route('package.create')}}" class="btn btn-sm btn-warning pull-right ">Add Package Service</a>
        </h5>
    </div><!-- card-header -->
    <div class="card-body table-responsive">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sr.No.</th>
                    <th>Service Name</th>
                    @foreach($packages as $key => $package)
                        <th>{{$package->pkg_name}}</th>
                    @endforeach
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tbody">
                @foreach($services as $key => $service)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$service->pkg_service_name}}</td>
                        @foreach($packages as $key => $pack)
                            <td>{{in_array($pack->pkg_id, (collect($service->packages)->pluck('pkg_id')->toArray())) ? (collect($service->packages)->where('pkg_id',$pack->pkg_id)->first()->status == '1' ? 'Yes' : 'No'): '' }}</td>
                        @endforeach
                        <td>
                            <a href="javascript:void(0)"  class="{{$service->status == '0' ? 'bg-secondary' : 'bg-success'}} text-white p-2 ml-2 rounded-circle approval" data-id="{{$service->pkg_service_id}}"><i class="fa fa-key" title="{{$service->status == '0' ? 'Unapprove' : 'Approve'}}" ></i></a> 

                            <a href="{{route('service_edit',$service->pkg_service_id)}}" class="bg-info text-white p-2 ml-2 rounded-circle" title="Edit"><i class="fa fa-edit"></i></a> 
                            <a href="{{route('service_delete',$service->pkg_service_id)}}" class="bg-danger text-white p-2 ml-2 rounded-circle" title="Edit"><i class="fa fa-trash"></i></a> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div><!-- card -->
<script>
    $(document).ready(function(){
        $(document).on('click','.approval',function(e){
            e.preventDefault();
            var service_id = $(this).data('id');
            $.ajax({
                type:'GET',
                url:"{{url('/service_approve')}}/"+service_id,
                success:function(res){
                    if(res.status == 'success'){
                        alert(res.message)
                        window.location.reload();
                    }
                }
            })


        });
    });
</script>
@endsection