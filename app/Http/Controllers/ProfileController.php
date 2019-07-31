<?php

namespace App\Http\Controllers;

use App\PersonalData;
use App\User;

class ProfileController extends Controller
{
    public function profileshow($id){
        $datas= PersonalData::select()->where('id','=',$id)->first();
        return view('profile',["datas" => $datas]);
    }

    public function userprofileshow($id){
        $datas= User::select()->where('id','=',$id)->first();
        return view('userprofile',["datas" => $datas]);
    }
}