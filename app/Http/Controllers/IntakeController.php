<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Dataintake;


class IntakeController extends Controller
{
    public function intake( Request $request)
    {
        $datas = Dataintake::all();
        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'guardianname' => ['string', 'max:255'],
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

        DB::table('Dataintake')->insert(
            ['firstname' => $firstname, 'lastname' => $lastname,'guardianname' => $guardianname, 'weight' => $weight,
            'bp' => $bp, 'menopause' => $menopause, 'history' => $history, 'noofchildren' => $noofchildren, 
            'otherillness' => $otherillness, 'protectionuse' => $protectionused ]
        );
        }

        return redirect()->route('dataviewroute', ['datas' => $datas]);

    }
}
