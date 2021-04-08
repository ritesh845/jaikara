@extends('backend.layouts.main')
@section('content')

<div class="card mb-2">
	<div class="card-header">
			<a href="{{route('trade_production_view')}}" class="pull-right btn btn-success">Back</a>
			<h5 >Information & Policies</h5>
	</div>
	@if($message = Session::get('success'))   
          <div class="alert alert-success">{{ $message }}</div>
    @endif
	<div class="card-body">
		<form method="post" action="{{route('trade_production_update')}}">
			@csrf
			<div class="row">
					<form method="post" action=" " enctype="multipart/form-data">
						<div class="">
							<div class="checkbox">
								<label>Accepted Payment Currency <a  title="Accepted Payment Currency" class="fa fa-question-circle"></a></label>
								
								<div class="checkbox">
									<input id="1" type="checkbox" name="accepted_payment_currency[]" value="USD"> <label for="1">USD</label>
								
									<input id="2" type="checkbox" name="accepted_payment_currency[]" value="EUR"> <label for="2">EUR</label>
								
									<input id="4" type="checkbox" name="accepted_payment_currency[]" value="CAD"> <label for="4">CAD</label>
								
									<input id="5" type="checkbox" name="accepted_payment_currency[]" value="AUD"> <label for="5">AUD</label>
								
									<input id="6" type="checkbox" name="accepted_payment_currency[]" value="HKD"> <label for="6">HKD</label>
								
									<input id="7" type="checkbox" name="accepted_payment_currency[]" value="GBP"> <label for="7">GBP</label>
								
									<input id="8" type="checkbox" name="accepted_payment_currency[]" value="CNY"> <label for="8">CNY</label>
								
									<input id="9" type="checkbox" name="accepted_payment_currency[]" value="CHF"> <label for="9">CHF</label>
								</div>
									
								<label>Accepted Delivery Terms<a  title="" class="fa fa-question-circle"></a></label>
								
								<div class="checkbox">
									<input id="82" type="checkbox" name="accepted_delivery_terms[]" value="FOB"> <label for="82">FOB</label>
									<input id="83" type="checkbox" name="accepted_delivery_terms[]" value="CFR"> <label for="83">CFR</label>
									<input id="84" type="checkbox" name="accepted_delivery_terms[]" value="CIF"> <label for="84">CIF</label>
									<input id="85" type="checkbox" name="accepted_delivery_terms[]" value="EXW"> <label for="85">EXW</label>
									<input id="86" type="checkbox" name="accepted_delivery_terms[]" value="FAS"> <label for="86">FAS</label>
									<input id="87" type="checkbox" name="accepted_delivery_terms[]" value="CIP"> <label for="87">CIP</label>
									<input id="88" type="checkbox" name="accepted_delivery_terms[]" value="FCA"> <label for="88">FCA</label>
									<input id="89" type="checkbox" name="accepted_delivery_terms[]" value="CPT"> <label for="89">CPT</label>
									<input id="90" type="checkbox" name="accepted_delivery_terms[]" value="DBQ"> <label for="90">DBQ</label>
									<input id="91" type="checkbox" name="accepted_delivery_terms[]" value="DDP"> <label for="91">DDP</label>
									<input id="92" type="checkbox" name="accepted_delivery_terms[]" value="DDU"> <label for="92">DDU</label>
									<input id="93" type="checkbox" name="accepted_delivery_terms[]" value="DAF"> <label for="93">DAF</label>
									<input id="94" type="checkbox" name="accepted_delivery_terms[]" value="ED"> <label for="94">ED</label>
									<input id="95" type="checkbox" name="accepted_delivery_terms[]" value="DES"> <label for="95">DES</label>
								</div>
							</div>
					<div class="">
						<label>Payment Method <a  title="Delivery Method" class="fa fa-question-circle"></a></label>
						<div class="checkbox">
							<input id="22" type="checkbox" name="payment_method[]" value="T/T"> <label for="22">T/T</label>
							<input id="23" type="checkbox" name="payment_method[]" value="L/C"> <label for="23">L/C</label>
							<input id="24" type="checkbox" name="payment_method[]" value="CC"> <label for="24">CC</label>
							<input id="25" type="checkbox" name="payment_method[]" value="Escrow"> <label for="25">Escrow</label>
							<input id="26" type="checkbox" name="payment_method[]" value="D/P"> <label for="26">D/P</label>
							<input id="27" type="checkbox" name="payment_method[]" value="WU"> <label for="27">WU</label>
							<input id="28" type="checkbox" name="payment_method[]" value="MG"> <label for="28">MG</label>
							<input id="29" type="checkbox" name="payment_method[]" value="Paypal"> <label for="29">Paypal</label>
							<input id="30" type="checkbox" name="payment_method[]" value="cash/cheque"> <label for="30">cash/cheque</label>
					</div>
					<label>Spoken Language <a  title="Spoken Language" class="fa fa-question-circle"></a></label>
						
					<div class="checkbox">
						<input id="42" type="checkbox" name="spoken_language[]" value="English"> <label for="42">English</label>

						<input id="43" type="checkbox" name="spoken_language[]" value="Hindi"> <label for="43">Hindi</label>

						<input id="44" type="checkbox" name="spoken_language[]" value="Chinese"> <label for="44">Chinese</label>

						<input id="45" type="checkbox" name="spoken_language[]" value="Spanish"> <label for="45">Spanish</label>

						<input id="46" type="checkbox" name="spoken_language[]" value="Japanese"> <label for="46">Japanese</label>

						<input id="47" type="checkbox" name="spoken_language[]" value="Portuguese"> <label for="47">Portuguese</label>

						<input id="48" type="checkbox" name="spoken_language[]" value="German"> <label for="48">German</label>

						<input id="49" type="checkbox" name="spoken_language[]" value="Arabic"> <label for="49">Arabic</label>

						<input id="50" type="checkbox" name="spoken_language[]" value="French"> <label for="50">French</label>

						<input id="51" type="checkbox" name="spoken_language[]" value="Russian"> <label for="51">Russian</label>

						<input id="52" type="checkbox" name="spoken_language[]" value="Korean"> <label for="52">Korean</label>

						<input id="53" type="checkbox" name="spoken_language[]" value="Italian"> <label for="53">Italian</label>
					</div>
							
					</div>
					<div class="">
						<label>Certification</label>
							<table width="100%" cellspacing="2" cellpadding="2" border="0">
								<tbody>
									<tr>
										<td>
											<input type="checkbox" name="company_certification[]" value="0">
										</td>
										<td>HACCP</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="company_certification[]" value="1">
										</td>
										<td>ISO 9001:2000</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="company_certification[]" value="2"></td>
											<td>ISO 9001:2008</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="company_certification[]" value="3">
										</td>
										<td>QS-9000</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="company_certification[]" value="4">
										</td>
										<td>ISO 14001:2004</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="company_certification[]" value="5">
										</td>
										<td>ISO/TS 16949</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="company_certification[]" value="6">
										</td>
										<td>SA8000</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="company_certification[]" value="7">
										</td>
										<td>ISO 17799</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="company_certification[]" value="8">
										</td>
										<td>OHSAS 18001</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="company_certification[]" value="9">
										</td>
										<td>TL 9000</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="company_certification[]" value="10">
										</td>
										<td>Others</td>
									</tr>
								</tbody>
							</table>
							<div class="row">
								<div class="col-md-6 form-group">
									<p>Do you Accept order through Escrow Service (escrow.com)</p>
										<div class="radio radio-primary">
											<input type="radio" name="escrow_service" id="radio4" value="Y">
											<label for="radio4">Yes </label>
											  /    
											<input type="radio" name="escrow_service" id="radio5" value="N">
											<label for="radio5">No </label>
										</div>
									</div>
								<div class="col-md-12 form-group">
									<label>Company Policy</label>
									<textarea id="editor6" name="company_policy" class="form-control"></textarea>
								</div>
								<div class="col-md-12 form-group">
									<label>Payment Terms &amp; Method</label>
									<textarea id="editor7" name="payment_terms" class="form-control"></textarea>
									
								</div>
								<div class="col-md-12 form-group">
									<label>Terms And Conditions</label>
									<textarea id="editor8" name="trams_condition" class="form-control"></textarea>
									
								</div>
							</div>
						</div>
					<div class="">
					<input type="submit" class="btn btn-success pull-right btn-sm" name="submit" value="submit">
					</div>
					</div>
				</div>	
			</div>
		</form>
	</div>
</div>

@endsection
