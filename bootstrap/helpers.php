<?php


const GENDER = [
	'M'  => 'Male',
	'F'  => 'Female',
	'O'  => 'Other'	
];

const KeyPersonnel = [
    1=>'Less than 5 People',
    2=>'5-10 People',
    3=>'11-50 People', 
    4=>'51-100 People', 
    5=>'101-500 People', 
    6=>'501-1000 People', 
    7=>'Above 1000 People', 
];
const ExportPer =[
   1=> '1% - 10%',
   2=> '11% - 20%',
   3=> '21% - 30%',
   4=> '31% - 40%',
   5=> '41% - 50%',
   6=> '51% - 60%',
   7=> '61% - 70%',
   8=> '71% - 80%',
   9=> '81% - 90%',
   10=> '91% - 100%'
];
const AnnualSales =[
   1=> 'Below Us $1 Million',
   2=> 'Us $1 Million - Us $2 Million',
   3=> 'Us $3 Million - Us $4 Million'
];
const OfficeSize =[
   1=> '001-100 meters',
   2=> '100-200 meters',
   3=> '200-400 meters'
];
const MainExportMarkets =[
   1=> 'North America',
   2=> 'Europe',
   3=> 'Australia',
   4=> 'South America',
   5=> 'Asia',
   6=> 'Africa'
];
const OwnershipType =[
    1 => 'Corporation/Limited Liability Company',
    2 => 'Partnership',
    3 => 'LLC (Ltd Liability Corp)',
    4 => 'Individual (Sole proprietorship)',
    5 => 'Professional Association',
    6 => 'Others'
];

const CatgType =[
    'SP'  => 'Suppliers & Products Categories',
    'CC'  => 'Classified Categories',
    'ST'  => 'Sell Trade Categories',
    'BT'  => 'Buy Trade Categories',
];

const ValidDays = [
    '30' => '30 Days',
    '60' => '60 Days',
    '90' => '90 Days',
    '120' => '120 Days',
    '150' => '150 Days',
    '180' => '180 Days',
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
        return $data->address .', '. $data->city->city_name.', '.$data->state->state_name.', '.$data->country->country_name;
        // return $path;
    }
}

if (!function_exists('document_upload')) {
    function document_upload($file,$folder,$data = [],$fieldName=null){      
        if(!empty($data) !=0){
            if($data->$fieldName != null){
               Storage::delete('public/'.$data->$fieldName);
            }
        }
        $name =  time().'_'.$file->getClientOriginalName();
        $mime =  $file->getClientMimeType();
        $size =  $file->getSize();
        $file->storeAs('public/'.$folder, $name);
        $path = $folder.'/'.$name;

        return [
          'doc_name' => $name,
          'doc_mime' => $mime,
          'doc_size' => $size,
          'doc_path' => $path,
        ];
}
}
if (!function_exists('getArrayValueString')) {
    function getArrayValueString($datas,$fieldName){      
      $spec_string = '' ; 
      foreach($datas as $data) {
        if($data->$fieldName !=null){
          $spec_string .= $data->$fieldName.', ' ;
        }
      }
      return substr($spec_string,0,strlen($spec_string)-2);

    }
}


?>