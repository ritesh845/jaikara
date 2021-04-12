@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
    <div class="card-header">
        <h5 class="card-title">Buy trade leads <a class="pull-right btn btn-sm btn-warning" href="{{ route('buy_trade.create') }}">Add Trade lead Buy</a></h5>
    </div>
	<div class="card-body">
		<div class="row mt-4">
			<div class="col-md-12 table-responsive">
				
               
		    <table class="table table-bordered table-striped">
        		<thead>
        			<tr>
        				<th>#</th>
        				<th>Product</th>
        				<th>Category</th>
        				<th>Start At</th>
        				<th>Close At</th>
        				<th>Status</th>
        				<th>Action</th>
        			</tr>
        		</thead>
                @php $i = 1; @endphp
        		<tbody id="tbody">
                    @foreach($btl as $lit)
        			     <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $lit->product  }}</td>
                            <td>{{ $lit->category->catg_name  }}</td>
                            <td>{{date('d-m-Y',strtotime($lit->created_at))}}</td>
                            <td>{{date('d-m-Y',strtotime($lit->created_at."+".$lit->valid_for." days"))}}</td>
                            <td><strong>{{$lit->status == 'P' ? 'InActive' : 'Active' }}</strong></td>
                            <td>
                                <a href="{{ route('buy_trade.edit',$lit->buy_trd_id ) }}" class="bg-success text-white p-2 ml-2 rounded-circle"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('buy_trade.delete',$lit->buy_trd_id ) }}" class="bg-danger text-white p-2 ml-2 rounded-circle" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                            </td>         
                         </tr>
                    @endforeach
                <tbody>
        	</table>
			</div>
		</div>
	</div>
</div>
@endsection
