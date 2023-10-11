<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TKuantitatif;
use App\Models\TNasabah;
use App\Models\TAgunan;
use App\Models\TResiko;

class AnKuanController extends Controller
{
    public function anKuanIndex($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $ankuan_nasabah = TKuantitatif::where('ID_NASABAH', $id)->first();
        return view('ankuan', [
            'nasabah' => $nasabah,
            'ankuan_nasabah' => $ankuan_nasabah,
            'resiko_nasabah' => TResiko::where('ID_NASABAH', $id)->first(),
            'data_tabel_agunan_asuransi' => TAgunan::where('ID_NASABAH', $id)->paginate(3),
        ]);
    }

    public function addAgunan(Request $request){
        TAgunan::insert([
            'ID_NASABAH' => $request->id,
            'KEPEMILIKAN' => $request->kepemilikan,
            'NILAI_AGUNAN' => $request->nilai_agunan,
            'PENGIKATAN' => $request->pengikatan,
            'MARKETABILITY' => $request->marketability,
            'PENGUASAAN' => $request->penguasaan,
            'ASURANSI' => $request->asuransi 
        ]);
    }

    public function editAgunan(Request $request, $id){
        TAgunan::where('ID_NASABAH', $id)->update([
            'ID_NASABAH' => $request->id,
            'KEPEMILIKAN' => $request->kepemilikan,
            'NILAI_AGUNAN' => $request->nilai_agunan,
            'PENGIKATAN' => $request->pengikatan,
            'MARKETABILITY' => $request->marketability,
            'PENGUASAAN' => $request->penguasaan,
            'ASURANSI' => $request->asuransi 
        ]);
    }

    public function addResiko(Request $request){
        dd($request);
        // TResiko::insert([
        //     'ID_NASABAH' => $request->id_nasabah,
        //     'RESIKO' => $request->resiko,
        //     'MITIGASI_RESIKO' => $request->mitigasi_resiko
        // ]);
    }
}
