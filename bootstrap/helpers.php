<?php


const GENDER = [
	'M'  => 'Male',
	'F'  => 'Female',
	'O'  => 'Other'	
];

const KeyPersonnel = [
    'Less than 5 People',
    '5-10 People',
    '11-50 People', 
    '51-100 People', 
    '101-500 People', 
    '501-1000 People', 
    'Above 1000 People', 
];


if (!function_exists('file_upload')) {
    function file_upload($file,$folder,$data = [],$fieldName=null){      
        if(!empty($data) !=0){
            if($data->$fieldName != null){
               Storage::delete('public/'.$data->$fieldName);
            }
        }
        $name =  time().'_'.$file->getClientOriginalName();
        $file->storeAs('public/'.$folder, $name);
        $path = $folder.'/'.$name;
        return $path;
    }
}

if (!function_exists('getFullAddress')) {
    function getFullAddress($data){      
        return $data->addr1 .', '. ($data->addr2 !=null ? ($data->addr2 .', ') : '') . $data->city->city_name.', '.$data->state->state_name.', '.'India'.', '.$data->pin_code;
        // return $path;
    }
}

?>