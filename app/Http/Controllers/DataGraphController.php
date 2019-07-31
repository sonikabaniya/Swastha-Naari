<?php

namespace App\Http\Controllers;

use App\PersonalData;

class DataGraphController extends Controller
{
    public function graph(){
        $originaldatas = PersonalData::all();
        $datas = $originaldatas->map(function($data){
            return $data->weight;
        });
        $datas = json_encode($datas);

        $peoples = $originaldatas->map(function($data){
            return $data->first_name;
        });
        $peoples = json_encode($peoples);
        
        
        return view('graph', compact('datas','peoples'));
    }
}