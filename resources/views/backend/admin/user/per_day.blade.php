@extends('backend.layouts.main')
@section('content')
<div class="card ">
    <div class="card-header p-2">
        <h5 class="card-title">Users</h5>
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
    				<th>Join Date</th>
    				<th>No Of Join</th>
    				<th>Action</th>
    			</tr>
    		</thead>
    		<tbody >
                @foreach($users as $key => $user)
    			<tr>
                    <td>{{$key +1}}</td>         
                    <td>{{$user->joining_date}}</td>         
                    <td>{{$user->user_count}}</td>         
                    <td>
                        <a href="{{url('userIndex/')}}?joining_date={{$user->joining_date}}" class="bg-warning text-white p-2 ml-2 rounded-circle" title="View"><i class="fa fa-eye"></i></a>       
                    </td>         
                </tr>
                @endforeach
    		</tbody>
    	</table>
    </div>
</div><!-- card -->
@endsection