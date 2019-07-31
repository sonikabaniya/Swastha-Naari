<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dataintake;


class ShowController extends Controller
{
    public function show(){
        $datas = DB::table('Dataintake')->get();
        return view('dataview', ['datas' => $datas ]);
    }

    public function matchquery(Request $request){

        $alldata = DB::table('Dataintake')->get();
        $query = $request->get('query');
        $name = $request->get('searchname');
        
        $datas = DB::table('Dataintake')-> where('firstname','like', '%' .$name. '%')->get();
        return view('dataview', ['datas' => $datas ]);

    }
}
