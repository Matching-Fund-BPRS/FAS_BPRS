<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCollateral;
use App\Models\TNasabah;
use App\Models\TAgunan;
use App\Models\TResiko;

class CollateralController extends Controller
{
    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id

        $collateral_nasabah = TCollateral::where('ID_NASABAH', $id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $resiko_nasabah = TResiko::where('ID_NASABAH', $id)->first();
        return view('5collateral',[
            'result' => "-",
            'collateral_nasabah' => $collateral_nasabah,
            'nasabah' => $nasabah,
            'resiko_nasabah' => $resiko_nasabah
        ]);
    }

    public function submitCollateral(Request $request){
        // ambil data dari request terus jadiin JSON terus post ke API
        // ambil response dari API terus masukin di variabel


        TCollateral::insert([
            'CA_NILAI_AGUNAN' => $request->ca_nilai_agunan,
            'PA_DOKUMEN' =>$request->pa_dokumen,
            'LEG_USAHA' => $request->leg_usaha,
            'PENGIKATAN' => $request->pengikatan,
            'MARKETABILITY' => $request->marketability,
            'KEPEMILIKAN' => $request->kepemilikan,
            'PENGUASAAN' => $request->penguasaan,
            'ID_NASABAH' => $request->id_nasabah,
        ]);


        $output = null;
        $result = "-";
        $nasabah = TCollateral::where('ID_NASABAH', $request->id);
        $collateral_nasabah = TCollateral::where('ID_NASABAH', $request->id)->first();
        return view('5collateral',[
            'result' => $result,
            'collateral_nasabah' => $collateral_nasabah,
            'nasabah' => $nasabah

        ])->with('message', $result);
    }

    public function update(Request $request, $id){
        TCollateral::where('ID_NASABAH', $id)->update([
            'CA_NILAI_AGUNAN' => $request->ca_nilai_agunan,
            'PA_DOKUMEN' =>$request->pa_dokumen,
            'LEG_USAHA' => $request->leg_usaha,
            'PENGIKATAN' => $request->pengikatan,
            'MARKETABILITY' => $request->marketability,
            'KEPEMILIKAN' => $request->kepemilikan,
            'PENGUASAAN' => $request->penguasaan,
        ]);
        
        $output = null;
        $result = "-";
        $nasabah = TCollateral::where('ID_NASABAH', $request->id)->first();
        $collateral_nasabah = TCollateral::where('ID_NASABAH', $id)->first();
        return view('5collateral',[
            'result' => $result,
            'collateral_nasabah' => $collateral_nasabah,
            'nasabah' => $nasabah

        ])->with('message', $result);
    }

    public function addResiko(Request $request){
        TResiko::insert([
            'ID_NASABAH' => $request->id,
            'RESIKO' => $request->resiko,
            'MITIGASI_RESIKO' => $request->mitigasi_resiko
        ]);
        return redirect()->back()->with('success-add-risk', 'message');
    }

    public function editResiko(Request $request, $id){
        TResiko::where('ID_NASABAH', $id)->update([
            'RESIKO' => $request->resiko,
            'MITIGASI_RESIKO' => $request->mitigasi_resiko
        ]);
        return redirect()->back()->with('success-edit-risk', 'message');
    }
}
