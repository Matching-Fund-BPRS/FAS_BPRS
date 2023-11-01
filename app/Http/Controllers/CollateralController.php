<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollateralController extends Controller
{
    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id


        $nasabah = null;
        return view('/dashboard/5character',[
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
        return view('/dashboard/5character',[
            'result' => $result,
            'nasabah' => $nasabah

        ])->with('message', $result);
    }
}
