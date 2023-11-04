<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TNasabah;
use App\Models\TCapital;

class CapitalController extends Controller
{
    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $capital_nasabah = TCapital::where('ID_NASABAH', $id)->first();

        return view('5capacity',[
            'result' => "-",
            'capital_nasabah' => $capital_nasabah,
            'nasabah' => $nasabah
        ]);
    }

    public function submitCapital(Request $request){
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
