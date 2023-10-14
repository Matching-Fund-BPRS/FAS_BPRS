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
        TKuantitatif::insert([
            'ID_NASABAH' => $request->id,
            'KEPEMILIKAN' => $request->kepemilikan,
            'NILAI_AGUNAN' => $request->nilai_agunan,
            'PENGIKATAN' => $request->pengikatan,
            'MARKETABILITY' => $request->marketability,
            'PENGUASAAN' => $request->penguasaan,
            'ASURANSI' => $request->asuransi 
        ]);

        return redirect()->back();
    }

    public function editAgunan(Request $request, $id){
        TKuantitatif::where('ID_NASABAH', $id)->update([
            'KEPEMILIKAN' => $request->kepemilikan,
            'NILAI_AGUNAN' => $request->nilai_agunan,
            'PENGIKATAN' => $request->pengikatan,
            'MARKETABILITY' => $request->marketability,
            'PENGUASAAN' => $request->penguasaan,
            'ASURANSI' => $request->asuransi 
        ]);

        return redirect()->back()->with('success-edit', 'Data berhasil diupdate!');
    }

    public function addResiko(Request $request){
        TResiko::insert([
            'ID_NASABAH' => $request->id,
            'RESIKO' => $request->resiko,
            'MITIGASI_RESIKO' => $request->mitigasi_resiko
        ]);
        return redirect()->back()->with('success-add-risk', 'Data resiko berhasil disimpan!');
    }

    public function editResiko(Request $request, $id){
        TResiko::where('ID_NASABAH', $id)->update([
            'RESIKO' => $request->resiko,
            'MITIGASI_RESIKO' => $request->mitigasi_resiko
        ]);
        return redirect()->back()->with('success-edit-risk', 'Data resiko berhasil diperbarui!');
    }
}
