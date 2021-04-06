@extends('frontend.layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row register-slider p-5" style="background: #ff7519 url('{{asset('slider/copy_icon.png')}}');">
        <div class="col-md-12 text-center">
            <h3 class="text-white font-weight-bold">Welcome To {{session('site_name')}}</h3>
            <p class="f-18  text-white"> Join Millions Trading On one of the world's Largest B2B E-Commerce Platform !</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 register-inner-body" >
            <div class="col-md-11 m-auto register-body">
                <div class="card">
                    <div class="card-body bg-white">
                        <form autocomplete="off" action="{{route('register')}}" method="post" id="example-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Account Type</label><br>
                                    <input type="radio" name="role_id" value="buyer"{{old('role_id') == 'buyer' ? 'checked="checked"' : 'checked="checked"'}}> <label>Buyer</label>
                                    <input type="radio" name="role_id" value="seller" {{old('role_id') == 'seller' ? 'checked="checked"' : ''}}> <label>Seller</label>
                                    <input type="radio" name="role_id" value="service" {{old('role_id') == 'service' ? 'checked="checked"' : ''}}> <label>Service Provider</label>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-12 form-group">
                                <hr>
                                    <h6 class="font-weight-bold f-14">Personal Information</h6>
                                </div>
                                 <div class="col-md-4 error-div form-group d-none" id="service" >
                                    <label>Service Provider Type: </label>
                                    <select class="form-control" name="service_type">
                                        <option value="">Select Service Provider</option>
                                        @foreach($services as $service)
                                            <option value="{{$service->service_id}}" {{old('service_type') == $service->service_id ? 'selected=selected' : ''}}>{{$service->service_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('service_type')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group error-div">
                                    <label>Name:</label>
                                   <input type="text" name="name"  placeholder="Enter Your Name" class="form-control required" value="{{old('name')}}">
                                   @error('name')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group error-div d-none" id="comp_name">
                                    <label>Company Name:</label>
                                    <input type="text" name="comp_name"  placeholder="Enter Company Name" class="form-control required" value="{{old('comp_name')}}">
                                    @error('comp_name')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group error-div">
                                    <label>Mobile Number:</label>
                                    <input type="text" name="mobile"  placeholder="Enter Your Mobile Number" class="form-control required" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="{{old('mobile')}}">
                                    @error('mobile')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-4 form-group error-div">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email"  placeholder="Enter Your Email Address" class="form-control required" id="email" value="{{old('email')}}">
                                    @error('email')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group error-div">
                                    <label>Confirm Email:</label>
                                    <input type="email" name="c_email"  placeholder="Enter Your Confirm Email Address" class="form-control required"  value="{{old('c_email')}}">
                                    @error('c_email')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>                                                   
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group error-div">
                                    <hr>
                                    <h6 class="font-weight-bold f-14">Address Information</h6>
                                </div>
                                <div class="col-md-4 form-group error-div">
                                    <label>Country: </label>
                                    <select class="form-control required" name="country_code" id="country">
                                        <option value="">Select Country</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->country_code}}" {{old('country_code') == $country->country_code ? 'selected=selected' : ''}}>{{$country->country_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('country_code')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group error-div">
                                    <label>State:</label>
                                    <select class="form-control required" name="state_code" id="state">
                                        <option value="">Please Select State</option>
                                    </select>
                                    @error('state_code')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group error-div">
                                    <label>City:</label>
                                    <select class="form-control required" name="city_code"  id="city">
                                        <option value="">Please Select City</option>
                                    </select>
                                    @error('city_code')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group error-div">
                                    <hr>
                                    <h6 class="font-weight-bold f-14">Security Information</h6>
                                </div>
                                <div class="col-md-6 form-group error-div">
                                    <label>Password:</label>
                                    <input type="password" name="password" class="form-control required" placeholder="Password" id="password">
                                    @error('password')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group error-div">
                                    <label>Confirm Password: </label>
                                    <input type="password" name="password_confirmation" class="form-control required" placeholder="Re-Type Password" >
                                    @error('password_confirmation')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group error-div">
                                   <label>Verification Code: </label>
                                    <input type="text" name="captcha" class="form-control required" placeholder="Enter Verification Code" required="required">
                                    @error('captcha')
                                        <span class="help-block text-danger font-size-12">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="col-md-12 form-group error-div">
                                    
                                    <span id="captcha">{!! captcha_img('math') !!}</span>

                                    <a href="javascript:void(0)" class="btn btn-sm btn-theme ml-3" id="btn-refresh"><i class="fa fa-refresh"></i></a>
                                </div>
                                <div class="col-md-12  form-group error-div">
                                    <input type="checkbox" name="is_terms"  {{old('is_terms') == 'on' ? 'checked="checked"' : ''}} > I have Accpeted All <a href="" class="theme-color">Terms & Condition</a> & <a href="" class="theme-color">Privacy Policy</a>
                                </div>
                                <div class="col-md-12 mt-4 form-group">
                                    <button class="btn btn-sm btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script >
    $(document).ready(function(){
        $('input[name="role_id"]').on('change',function(e){
            e.preventDefault();
            var role_id =$(this).val();
            roleChange(role_id);
        });

        $('#country').on('change',function(e){
            e.preventDefault();
            var countryCode = $(this).val();
            fn_state(countryCode);
        });
        $('#state').on('change',function(e){
            e.preventDefault();
            var stateCode = $(this).val();
            fn_city(stateCode);
        });

        var countryCode  = "{{old('country_code')}}";
        var stateCode  = "{{old('state_code')}}";
        if(stateCode !=null){
            fn_state(countryCode,stateCode)
        }

        var cityCode  = "{{old('city_code')}}";
        console.log(cityCode);
        if(cityCode !=null){
            fn_city(stateCode,cityCode)
        }





        function roleChange(role_id){
            if(role_id == 'seller'){
                $('#comp_name').removeClass('d-none');
                $('#service').addClass('d-none');
            }else if(role_id == 'buyer'){
                $('#comp_name').addClass('d-none');
                $('#service').addClass('d-none');
            }else if(role_id == 'service'){
                $('#comp_name').addClass('d-none');
                $('#service').removeClass('d-none');

            }
        }

        var role_id = "{{old('role_id')}}";
        if(role_id !=null){
            roleChange(role_id);
        }

        $("#btn-refresh").click(function(){

            $.ajax({
             type:'GET',
             url:'/refresh_captcha',
             success:function(data){
                $("#captcha").empty().html(data)
               
             }
            });

        });

        var form = $("#example-form");

        form.validate({   
            rules: {    
                'mobile' :{
                    minlength:10,
                    maxlength:10,
                },
                'password' :{
                    minlength:8,
                },
                'password_confirmation' : {
                    minlength : 8,
                    equalTo : "#password"
                },
                'c_email' : {
                    equalTo : "#email"
                }
            },
            errorElement: "em",
            errorPlacement: function errorPlacement(error, element) { 
                element.after(error);
                error.addClass( "help-block" );

             },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".error-div" ).addClass( "has-error" ).removeClass( "has-success" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).parents( ".error-div" ).addClass( "has-success" ).removeClass( "has-error" );
            },
        });

                           
        
    })
</script>
@endsection