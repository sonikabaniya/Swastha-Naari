<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dataintake;


class ShowController extends Controller
{
    public function show(){
        $datas = Dataintake::all();
        return view('dataview', ['datas' => $datas ]);
    }

    public function matchquery(Request $request){
        $name = $request->get('searchname');
        
        $datas = Dataintake:: where('firstname','like', '%' .$name. '%')->get();
        return view('dataview', ['datas' => $datas ]);

    }
}
