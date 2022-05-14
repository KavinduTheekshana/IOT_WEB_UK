<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;
use DB;

class DatasetController extends Controller
{

    public function dataset(Request $request)
    {
        $dataset = new Dataset();
        $dataset->rain = $request->rain;
        $dataset->temprature = $request->temprature;
        $dataset->huminity = $request->huminity;
        $dataset->gas = $request->gas;
        $data = array(
            'rain' => $dataset->rain,
            'temprature' => $dataset->temprature,
            'huminity' => $dataset->huminity,
            'gas' => $dataset->gas,
        );
        Dataset::where('id', '1')->update($data);
    }


    public function getdataset(Request $request)
    {
        $JsonArray=[];
       
            $dataset = DB::table('datasets')->where('id','=', '1')->first();  
            if($dataset!=null){
                    $JsonArray['dataset']=$dataset;
                    $JsonArray['code']='1';
                
            } else{
                $JsonArray['code']='0';
            }
       
  
        return json_encode($JsonArray);
    }
   

   

   
}
