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

        TCapacity::insert([
            'TEH_UTILISASI' => $request->teh_utilisasi,
            'TEH_LAMA_USAHA' => $request->teh_lama_usaha,
            'CB_MANAJEMEN_SDM' => $request->cb_manajemen_sdm,
            'CB_PENGELOLAAN' => $request->cb_pengelolaan,
            'CB_DSCR' => $request->cb_dscr,
            'ID_NASABAH' => $request->id,
        ]);


        $output = null;
        $result = "-";

        $capacity_nasabah = TCapacity::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return view('5capacity',[
            'capacity_nasabah' => $capacity_nasabah,
            'result' => $result,
            'nasabah' => $nasabah,
            'output' => $output
        ])->with('message', $result);
    }

    public function update(Request $request, $id){
        TCapacity::where('ID_NASABAH', $id)->update([
            'TEH_UTILISASI' => $request->teh_utilisasi,
            'TEH_LAMA_USAHA' => $request->teh_lama_usaha,
            'CB_MANAJEMEN_SDM' => $request->cb_manajemen_sdm,
            'CB_PENGELOLAAN' => $request->cb_pengelolaan,
            'CB_DSCR' => $request->cb_dscr,
        ]);

        $output = null;
        $result = "-";

        $capacity_nasabah = TCapacity::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return view('5capacity',[
            'capacity_nasabah' => $capacity_nasabah,
            'result' => $result,
            'nasabah' => $nasabah,
            'output' => $output
        ])->with('message', $result);
    }
}
