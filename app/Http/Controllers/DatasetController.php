<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;

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

   

   

   
}
