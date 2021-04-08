@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-body">
		<div class="row">
			<div class="col-md-8 ">
				<h5 class="font-weight-bold">Information & Policies</h5>
			</div>
			<div class="col-md-4">
				<a href="{{route('info_policy_edit')}}" class="btn btn-warning pull-right btn-sm" > Edit Trade Productions</a>
			</div>
			<div class="col-md-12">
				<hr>
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<th>Accepted Payment Currency by you</th>
							<td>@foreach($currencies as $currency)
								{{in_array($currency->curr_id,json_decode($inforPolicies->payment_curre) ) ? $currency->curr_name .',': ''}}
								@endforeach
							</td>
						</tr>
						<tr>
							<th>Accepted Delivery Terms by you</th>
							<td>@foreach($deliveryTerms as $deliveryTerm)
								{{in_array($deliveryTerm->dlvry_trms_id,json_decode($inforPolicies->delivery_terms) ) ? $deliveryTerm->shrt_name .',': ''}}
								@endforeach
							</td>
						</tr>
						<tr>
							<th>Payment Method</th>
							<td>@foreach($paymentMethods as $paymentMethod)
								{{in_array($paymentMethod->pay_md_id,json_decode($inforPolicies->payment_method) ) ? $paymentMethod->shrt_name .',': ''}}
								@endforeach
							</td>
						</tr>
						<tr>
							<th>Spoken Language</th>
							<td>@foreach($languages as $language)
								{{in_array($language->lang_id,json_decode($inforPolicies->spoken_lang) ) ? $language->lang_name .',': ''}}
								@endforeach
							</td>
						</tr>
						<tr>
							<th>Your Company Certification </th>
							<td>@foreach($certifications as $certification)
								{{in_array($certification->cert_id,json_decode($inforPolicies->certification) ) ? $certification->code .',': ''}}
								@endforeach</td>
						</tr>
						<tr>
							<th>Accept Escrow Services  </th>
							<td> {{$inforPolicies->escrow_service == 1 ? 'Yes' :'No' }} </td>
						</tr>
						<tr>
							<th>Company Policy</th>
							<td>{{$inforPolicies ? $inforPolicies->company_policy : ''}}</td>
						</tr>
						<tr>
							<th>Payment Terms</th>
							<td>{{$inforPolicies ? $inforPolicies->pay_terms_method : ''}}</td>
						</tr>
						<tr>
							<th>Terms Condition</th>
							<td>{{$inforPolicies ? $inforPolicies->terms_condition : ''}}</td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection
