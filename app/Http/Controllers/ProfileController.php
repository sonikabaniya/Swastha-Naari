<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileshow($id){
        $datas= DB::table('Dataintake')->select()->where('id','=',$id)->first();
        return view('profile',["datas" => $datas]);
    }
}