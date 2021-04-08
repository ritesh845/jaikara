@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
		<a href="{{route('information_policies')}}" class="pull-right btn btn-success">Back</a>
		<h5 >Information & Policies</h5>
	</div>
	@if($message = Session::get('success'))   
          <div class="alert alert-success">{{ $message }}</div>
    @endif
	<div class="card-body">
		<form method="post" action="{{route('info_policy_update')}}">
			@csrf
			<div class="row">
				<input type="hidden" name="user_id" value="{{$inforPolicies ? $inforPolicies->user_id : ''}}">
				<div class="col-md-12 form-group">
					<label>Accepted Payment Currency <a  title="Accepted Payment Currency" class="fa fa-question-circle"></a></label><br>
					@foreach($currencies as $currencie)
					<input class="mr-2 ml-2" type="checkbox" name="payment_curre[]" value="{{$currencie->curr_id}}" {{in_array($currencie->curr_id,json_decode($inforPolicies->payment_curre) ) ? 'checked' : ''}} > <label for="1">{{$currencie->curr_name}}</label>
					@endforeach
				</div>
				<div class="col-md-12 form-group">
					<label>Accepted Delivery Terms  <a  title="Accepted Payment Currency" class="fa fa-question-circle"></a></label><br>
					@foreach($deliveryTerms as $deliveryTerm)
					<input class="mr-2 ml-2" type="checkbox" name="delivery_terms[]" value="{{$deliveryTerm->dlvry_trms_id}}" {{in_array($deliveryTerm->dlvry_trms_id,json_decode($inforPolicies->delivery_terms) ) ? 'checked' : ''}} > 
					<label for="82">{{$deliveryTerm->shrt_name}}</label>
					@endforeach
				</div>
				<div class="col-md-12 form-group">
					<label> Payment Method  <a  title="Accepted Payment Currency" class="fa fa-question-circle"></a></label><br>
					@foreach($paymentMethods as $paymentMethod)
					<input class="mr-2 ml-2" type="checkbox" name="payment_method[]" value="{{$paymentMethod->pay_md_id}}" {{in_array($paymentMethod->pay_md_id,json_decode($inforPolicies->payment_method) ) ? 'checked' : ''}}> 
					<label for="22">{{$paymentMethod->payment_method}}</label>
				@endforeach
				</div>
				<div class="col-md-12 form-group">
					<label>Spoken Language <a  title="Accepted Payment Currency" class="fa fa-question-circle"></a></label><br>
					@foreach($languages as $language)
					<input  class="mr-2 ml-2"  type="checkbox" name="spoken_lang[]" value="{{$language->lang_id}}" {{in_array($language->lang_id,json_decode($inforPolicies->spoken_lang) ) ? 'checked' : ''}}> 
					<label for="42">{{$language->lang_name}}</label>
					@endforeach
				</div>
				<div class="col-md-12 form-group">
					<label>Certification</label>
					<table width="100%" cellspacing="2" cellpadding="2" border="0">
						<tbody>
						@foreach($certifications as $certification)
							<tr>
								<td>
									<input class="mr-2 ml-2" type="checkbox" name="certification[]" value="{{$certification->cert_id}}" {{in_array($certification->cert_id,json_decode($inforPolicies->certification) ) ? 'checked' : ''}}>
								</td>
								<td>{{$certification->code}}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				<div class="col-md-12 form-group">
					<p>Do you Accept order through Escrow Service (escrow.com)</p>
					<input class="mr-2 ml-2" type="radio" name="escrow_service" value="1" {{$inforPolicies->escrow_service == 1 ? 'checked' :'' }}>
					<label for="radio">Yes </label>
					  /    
					<input type="radio" name="escrow_service" value="0" {{$inforPolicies->escrow_service == 0 ? 'checked' :'' }}>
					<label for="radio">No </label>
				</div>
				<div class="col-md-12 form-group">
					<label>Company Policy</label>
					<textarea   name="company_policy" class="form-control">{{$inforPolicies ? $inforPolicies->company_policy : ''}}</textarea>
				</div>
				<div class="col-md-12 form-group">
					<label>Payment Terms &amp; Method</label>
					<textarea name="pay_terms_method" class="form-control">{{$inforPolicies ? $inforPolicies->pay_terms_method : ''}}</textarea>
				</div>	
				<div class="col-md-12 form-group">
					<label>Terms And Conditions</label>
					<textarea  name="terms_condition" class="form-control">{{$inforPolicies ? $inforPolicies->terms_condition : ''}}</textarea>
				</div>

				<input type="submit" class="btn btn-success pull-right btn-sm" name="submit" value="submit">
				</div>
			</div>
		</form>
	</div>	
</div>

@endsection
