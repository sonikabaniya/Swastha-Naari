<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PersonalData;


class ShowController extends Controller
{
    public function show(){
        $datas = PersonalData::all();
        return view('dataview', ['datas' => $datas ]);
    }

    public function matchquery(Request $request){
        $name = $request->get('searchname');
        
        $datas = PersonalData:: where('first_name','like', '%' .$name. '%')->get();
        return view('dataview', ['datas' => $datas ]);

    }
}
