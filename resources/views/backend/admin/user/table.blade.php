@foreach($users as $key => $user)
	<tr>
		<td>{{$key + 1}}</td>
		<td>{{$user->name}}</td>
		<td>{{$user->email}} <span class="{{$user->email_verified_at !=null ? 'bg-success' : 'bg-warning'}} text-white p-1 rounded f-11 pull-right">{{$user->email_verified_at !=null ? 'Verified' : 'Not Verify'}}</span></td>
		<td>{{$user->role !=null ? $user->role->name : ''}}</td>
		<td>{{$user->mobile}}</td>
		<td>{{date('d/m/Y',strtotime($user->created_at))}}</td>
		<td>
            <a href="javascript:void(0)"  class="{{$user->status == 'P' ? 'bg-secondary' : 'bg-success'}} text-white p-2 ml-2 rounded-circle approval" data-id="{{$user->id}}"><i class="fa fa-key" title="{{$user->status == 'P' ? 'Unapprove' : 'Approve'}}" ></i></a>            
            <a href="{{route('userEdit',$user->id)}}" class="bg-info text-white p-2 ml-2 rounded-circle" title="Edit"><i class="fa fa-edit"></i></a>            
            <a href="{{route('userShow',$user->id)}}" class="bg-warning text-white p-2 ml-2 rounded-circle" title="View"><i class="fa fa-eye"></i></a>            
            <a href="{{route('userDelete',$user->id)}}" class="bg-danger text-white p-2 ml-2 rounded-circle" title="Delete" onclick="return confirm('Are you sure you want to delete user?');"><i class="fa fa-trash"></i></a>            
        </td>
	</tr>
@endforeach