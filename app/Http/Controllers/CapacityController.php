<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCapacity;
use App\Models\TNasabah;


class CapacityController extends Controller
{

    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id
        $capacity_nasabah = TCapacity::where('ID_NASABAH', $id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        return view('5capacity',[
            'capacity_nasabah' => $capacity_nasabah,
            'result' => "-",
            'nasabah' => $nasabah
        ]);
    }

    public function submitCapacity(Request $request){
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
