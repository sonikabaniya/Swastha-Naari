<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IntakeController extends Controller
{
    public function intake( Request $request)
    {
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

        return view('welcome');

    }
}
