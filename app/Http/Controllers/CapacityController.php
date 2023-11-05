<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCapacity;
use App\Models\TNasabah;


class CapacityController extends Controller
{

    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id
        $result = null;
        $capacity_nasabah = TCapacity::where('ID_NASABAH', $id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        return view('5capacity',[
            'capacity_nasabah' => $capacity_nasabah,
            'result' => "-",
            'nasabah' => $nasabah,
            'result_message' => $result
        ]);
    }

    public function submitCapacity(Request $request){
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
        $result = "Berhasil menambahkan data!";

        $capacity_nasabah = TCapacity::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return view('5capacity',[
            'capacity_nasabah' => $capacity_nasabah,
            'nasabah' => $nasabah,
            'output' => $output,
            'result_message' => $result
        ]);
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
        //ini bikin conditional berdasarkan response dari API
        //kalo berhasil edit, result == berhasil
        //kalo gagal, result == gagal
        $result = "Berhasil memperbarui data";

        $capacity_nasabah = TCapacity::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return view('5capacity',[
            'capacity_nasabah' => $capacity_nasabah,
            'result' => $result,
            'nasabah' => $nasabah,
            'output' => $output,
            'result_message' =>  $result
        ]);
    }
}
