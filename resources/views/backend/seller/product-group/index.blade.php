<div class="row">
	<div class="col-md-12 form-group">
		<table class="table">
			<thead>
				<tr>
					<th>S.No.</th>
					<th>Primary Product</th>
					<th>Secondary Product </th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $count =1; ?>
				@foreach($productGroups as $productGroup)
				<tr>

					@if($productGroup->parent_id ==NULL)
					<td>{{ $count++ }}</td>
						<td>{{ $productGroup->grp_name }}</td>
						<td>-</td>
						<td><a href="{{ route('product-group.edit',$productGroup->prdt_grp_id) }}" class="btn btn-primary btn-sm">
						<i class="fa fa-pencil-square-o"></i></a>&nbsp;
							<form action="{{route('product-group.destroy',$productGroup->prdt_grp_id )}}" method="POST" id="form">
							@method('DELETE')
							@csrf
							<input type="hidden" name="parent_id" value="{{ $productGroup->parent_id }}">
							 <a href="#" onclick="document.getElementById('form').submit();"><i class="fa fa-trash-o btn-warning btn"></i></a>			           
						</form>
						</td>

					@else
					<td>({{ $count++ }})</td>
						<td>-</td>
						<td>{{ $productGroup->grp_name }}</td>
						<td><a href="{{ route('product-group.edit',$productGroup->prdt_grp_id) }}" class="btn btn-primary btn-sm">
						<i class="fa fa-pencil-square-o"></i></a>&nbsp;
			                <form action="{{route('product-group.destroy',$productGroup->prdt_grp_id )}}" method="POST" id="form1">
							@method('DELETE')
							@csrf
							<input type="hidden" name="parent_id" value="{{ $productGroup->parent_id }}">
							   <a href="#" onclick="document.getElementById('form1').submit(); "><i class="fa fa-trash-o btn-warning btn"></i></a>			           
							           
						</form>
						</td>
					@endif
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
</div>


