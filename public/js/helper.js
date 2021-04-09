
function fn_state(country_code,oldStateCode =''){
    if(country_code !='0'){
        $.ajax({
            type:'GET',
            url:"/get_states/"+country_code,
            success:function(res){
                $('#state').empty();
                $('#state').append('<option value="">Please Select State</option>');
                $.each(res,function(i,v){
                    $('#state').append('<option value="'+v.state_code+'" '+(oldStateCode == v.state_code ? 'selected' : '')+'> '+v.state_name+' </option>')
                })
            }
        });
    }else{
        $('#state').empty();
    }
}

function fn_city(state_code,oldCityCode =''){
    if(state_code !='0'){
        $.ajax({
            type:'GET',
            url:"/get_cities/"+state_code,
            success:function(res){
                $('#city').empty();
                $('#city').append('<option value="">Please Select City</option>');
                $.each(res,function(i,v){
                    $('#city').append('<option value="'+v.city_code+'" '+(oldCityCode == v.city_code ? 'selected' : '')+'> '+v.city_name+' </option>')
                })
            }
        });
    }else{
        $('#city').empty();
    }
   
}

function fn_user_approval(user_id){
    $.ajax({
        type:'GET',
        url:"/userApproval/"+user_id,
        success:function(res){
            if(res.status == 'success'){
                alert(res.message)
                window.location.reload();
            }
        }
    });
}