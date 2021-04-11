@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header p-2">
        <h5 class="card-title">Staff User List</h5>
    </div><!-- card-header -->
    <div class="card-body">
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
    			@foreach($users as $key =>  $user)
    				<tr>
						<td>{{$key + 1}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}} </td>
						<td>{{$user->role !=null ? $user->role->display_name : ''}}</td>
						<td>{{$user->mobile}}</td>
						<td>{{date('d/m/Y',strtotime($user->created_at))}}</td>
						<td>
				            <a href="javascript:void(0)"  class="{{$user->status == 'P' ? 'bg-secondary' : 'bg-success'}} text-white p-2 ml-2 rounded-circle approval" data-id="{{$user->id}}"><i class="fa fa-key" title="{{$user->status == 'P' ? 'Unapprove' : 'Approve'}}" ></i></a>            
				            <a href="{{route('staff.edit',$user->id)}}" class="bg-info text-white p-2 ml-2 rounded-circle" title="Edit"><i class="fa fa-edit"></i></a>            
				            <a href="{{route('staff.show',$user->id)}}" class="bg-warning text-white p-2 ml-2 rounded-circle" title="View"><i class="fa fa-eye"></i></a>            
				            <a href="{{route('userDelete',$user->id)}}" class="bg-danger text-white p-2 ml-2 rounded-circle" title="Delete" onclick="return confirm('Are you sure you want to delete user?');"><i class="fa fa-trash"></i></a>            
				        </td>
					</tr>
    			@endforeach	
    		</tbody>
    	</table>
    </div>
</div>
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