<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\PersonalData;
use Illuminate\Support\Facades\Auth;

class PersonalDataController extends Controller
{
    public function intake( Request $request)
    {
        $datas = PersonalData::all();
        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'guardian_name' => ['string', 'max:255'],
            'bp' => ['required', 'integer', 'max:255'],
            'weight' => ['required', 'integer', 'max:255'],
            'menopause' => ['required', 'integer', 'max:255'],
            'history' => ['required', 'string', 'max:255'],
            'noofchildren' => ['required', 'integer', 'max:255'],
            'otherillness' => ['required', 'string', 'max:255'],
            'protectionused' => ['required', 'string', 'max:255'],
        ]);
        if ($validator->fails()) {
            
            return Redirect::back()->withErrors($validator);
        }
        else{
        $firstname = $request->get('firstname', null);
        $lastname = $request->get('lastname', null);
        $guardianname = $request->get('guardianname', null);
        $weight = $request->get('weight', null);
        $bp = $request->get('bp', null);
        $menopause = $request->get('menopause', null);
        $history = $request->get('history', null);
        $noofchildren = $request->get('noofchildren', null);
        $otherillness = $request->get('otherillness', null);
        $protectionused = $request->get('protectionused', null);

        PersonalData::insert(
            ['first_name' => $firstname, 'last_name' => $lastname,'guardian_name' => $guardianname, 'weight' => $weight,
            'bp' => $bp, 'menopause' => $menopause, 'history' => $history, 'no_of_children' => $noofchildren, 
            'other_illness' => $otherillness, 'protection_used' => $protectionused, 'taken_by' => Auth::user()->name ]
        );
        }

        return redirect()->route('dataviewroute', ['datas' => $datas]);

    }
}
