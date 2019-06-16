<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShowController extends Controller
{
    public function show(){
        $datas = DB::table('Dataintake')->get();
        return view('dataview', ['datas' => $datas]);
    }
}
