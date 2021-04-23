<div class="container-fluid mb-5">
	<div class="row">
		<div class="col-md-12 text-center">
			<h4 class="mb-4">Contact Now</h4>
		</div>
		<div class="col-md-8 m-auto">
			<div class="card">
				<div class="card-body">
					@if($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{$message}}
                        </div>
                    @endif
					<form action="{{route('contactStore')}}" method="post" autocomplete="off">
						@csrf
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Your Name</label>
								<input type="text" class="form-control" name="name" value="{{old('name')}}">
								@error('name')
                                    <span class="help-block text-danger font-size-12">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-6 form-group">
								<label>Your Email Address</label>
								<input type="email" class="form-control" name="email" value="{{old('email')}}">
								@error('email')
                                    <span class="help-block text-danger font-size-12">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-6 form-group">
								<label>Mobile Number</label>
								<input type="text" class="form-control" name="mobile" value="{{old('mobile')}}" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
								@error('mobile')
                                    <span class="help-block text-danger font-size-12">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-6 form-group">
								<label>Subject</label>
								<input type="text" class="form-control" name="subject" value="{{old('subject')}}">
								@error('subject')
                                    <span class="help-block text-danger font-size-12">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-12 form-group">
								<label>Message</label>
								<textarea class="form-control" name="message">{{old('message')}}</textarea>
								@error('message')
                                    <span class="help-block text-danger font-size-12">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-4 form-group">
								<label>Enter Verfication Code</label>
								<input type="text" class="form-control" name="captcha" value="{{old('captcha')}}" id="captcha">
								@error('captcha')
                                    <span class="help-block text-danger font-size-12">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-12 form-group">
								<span id="spancaptcha">{!! captcha_img('math') !!}</span>
								 <a href="javascript:void(0)" class="btn btn-sm btn-theme ml-3" id="btn-refresh"><i class="fa fa-refresh"></i></a>
							</div>
							<div class="col-md-8 form-group">
								<button class="btn btn-sm btn-success">Submit</button>
							</div>	
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script >
    $(document).ready(function(){
    	$("#btn-refresh").click(function(){
    		$('#captcha').val('');
            $.ajax({
             type:'GET',
             url:'/refresh_captcha',
             success:function(data){
                $("#spancaptcha").empty().html(data)
               
             }
            });

        });
    });
</script>
