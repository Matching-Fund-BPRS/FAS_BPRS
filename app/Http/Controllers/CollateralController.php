<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCollateral;
use App\Models\TNasabah;

class CollateralController extends Controller
{
    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id

        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        return view('5collateral',[
            'result' => "-",
            'nasabah' => $nasabah
        ]);
    }

    public function submitCollateral(Request $request){
        dd($request);
        // ambil data dari request terus jadiin JSON terus post ke API
        // ambil response dari API terus masukin di variabel

        $output = null;
        $result = "-";
        $nasabah = null;
        return view('5collateral',[
            'result' => $result,
            'nasabah' => $nasabah

        ])->with('message', $result);
    }
}
