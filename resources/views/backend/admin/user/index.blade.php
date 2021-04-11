@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header p-2">
        <h5 class="card-title">Users List</h5>
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
    				<th>#</th>
    				<th>Name</th>
    				<th>Email</th>
    				<th>Type</th>
    				<th>Mobile No.</th>
    				<th>Join Date</th>
    				<th>Action</th>
    			</tr>
    		</thead>
    		<tbody id="tbody">
    			@include('backend.admin.user.table')
    		</tbody>
    	</table>
    </div>
</div><!-- card -->
<script>
    $(document).ready(function(){
        $(document).on('click','.approval',function(e){
            e.preventDefault();
            var user_id = $(this).data('id');
            fn_user_approval(user_id);


        });
    });
</script>
@endsection