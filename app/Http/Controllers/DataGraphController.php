<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataGraphController extends Controller
{
    public function graph(){
        $datas = DB::table('Dataintake')->get();
        $datas = $datas->map(function($data){
            return $data->weight;
        });
        $datas = json_encode($datas);
        
        return view('graph', compact('datas'));
    }
}