<?php

namespace App\Http\Controllers\superAdmin;

use App\HealthCenterData;
use App\Http\Controllers\Controller;

class orgListController extends Controller
{
    public function orgList(){
        $healthcenters = HealthCenterData::all();

        return view('superAdmin.orgList',compact('healthcenters'));
    }
}