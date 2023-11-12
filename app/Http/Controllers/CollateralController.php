<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCollateral;
use App\Models\TNasabah;
use App\Models\TScoring;
use Illuminate\Support\Facades\Http;
use App\Models\TAgunan;
use App\Models\TResiko;

class CollateralController extends Controller
{
    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id

        $collateral_nasabah = TCollateral::where('ID_NASABAH', $id)->first();
        $agunan_nasabah = TAgunan::where('ID_NASABAH', $id)->get();
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $Tscoring = TScoring::where('ID_NASABAH', $id)->first();
        $output = $Tscoring->COLLATERAL ?? 0;
        $resiko_nasabah = TResiko::where('ID_NASABAH', $id)->first();
        $result = null;
        return view('5collateral',[
            'collateral_nasabah' => $collateral_nasabah,
            'nasabah' => $nasabah,
            'agunan_nasabah' => $agunan_nasabah,
            'resiko_nasabah' => $resiko_nasabah,
            'result_message' => $result,
            'output' => $output
        ]);
    }

    public function submitCollateral(Request $request){
        // ambil data dari request terus jadiin JSON terus post ke API
        // ambil response dari API terus masukin di variabel
        $leg_usaha = $request->leg_usaha != 1 ? 1 : 0;
        TCollateral::insert([
            'CA_NILAI_AGUNAN' => $request->ca_nilai_agunan,
            'PA_DOKUMEN' =>$request->pa_dokumen,
            'LEG_USAHA' => $request->leg_usaha,
            'PENGIKATAN' => $request->pengikatan,
            'MARKETABILITY' => $request->marketability,
            'KEPEMILIKAN' => $request->kepemilikan,
            'PENGUASAAN' => $request->penguasaan,
            'ID_NASABAH' => $request->id,
        ]);
        $response = Http::post('model:8000/collateral', [
            'ca_nilai_agunan' => intval($request->ca_nilai_agunan),
            'pa_dokumen' => intval($request->pa_dokumen),
            'leg_usaha' => intval($leg_usaha),
            'pengikatan' => intval($request->pengikatan),
            'marketability' => intval($request->marketability),
            'kepemilikan' => intval($request->kepemilikan),
            'penguasaan' => intval($request->penguasaan)
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output / 5;
            TScoring::insert([
                'ID_NASABAH' => $request->id,
                'CAPACITY' => 0,
                'CAPITAL' => 0,
                'CHARACTER' => 0,
                'COLLATERAL' => $output,
                'CONDITION' => 0,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = ($output + $Tscoring->CAPACITY+ $Tscoring->CHARACTER+ $Tscoring->CAPITAL+ $Tscoring->CONDITION) / 5;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'COLLATERAL' => $output,
                'SCORING' => $scoring
            ]);
        }
        $result = "-";
        $nasabah = TCollateral::where('ID_NASABAH', $request->id);
        $output = null;
        $result = "Berhasil menambahkan data!";
        $nasabah = TCollateral::where('ID_NASABAH', $request->id)->first();
        $resiko_nasabah = TResiko::where('ID_NASABAH', $request->id)->first();
        $collateral_nasabah = TCollateral::where('ID_NASABAH', $request->id)->first();
        return redirect()->back()->with('message', $result);
    }

    public function update(Request $request, $id){
        $leg_usaha = $request->leg_usaha != 1 ? 1 : 0;
        TCollateral::where('ID_NASABAH', $id)->update([
            'CA_NILAI_AGUNAN' => $request->ca_nilai_agunan,
            'PA_DOKUMEN' =>$request->pa_dokumen,
            'LEG_USAHA' => $request->leg_usaha,
            'PENGIKATAN' => $request->pengikatan,
            'MARKETABILITY' => $request->marketability,
            'KEPEMILIKAN' => $request->kepemilikan,
            'PENGUASAAN' => $request->penguasaan,
        ]);
        $response = Http::post('model:8000/collateral', [
            'ca_nilai_agunan' => intval($request->ca_nilai_agunan),
            'pa_dokumen' => intval($request->pa_dokumen),
            'leg_usaha' => intval($leg_usaha),
            'pengikatan' => intval($request->pengikatan),
            'marketability' => intval($request->marketability),
            'kepemilikan' => intval($request->kepemilikan),
            'penguasaan' => intval($request->penguasaan)
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output / 5;
            TScoring::insert([
                'ID_NASABAH' => $request->id,
                'CAPACITY' => 0,
                'CAPITAL' => 0,
                'CHARACTER' => 0,
                'COLLATERAL' => $output,
                'CONDITION' => 0,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = ($output + $Tscoring->CAPACITY+ $Tscoring->CHARACTER+ $Tscoring->CAPITAL+ $Tscoring->CONDITION) / 5;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'COLLATERAL' => $output,
                'SCORING' => $scoring
            ]);
        }
        $result = "-";
        $result = "Berhasil memperbarui data!";
        $nasabah = TCollateral::where('ID_NASABAH', $request->id)->first();
        $resiko_nasabah = TResiko::where('ID_NASABAH', $request->id)->first();
        $collateral_nasabah = TCollateral::where('ID_NASABAH', $id)->first();
        return redirect()->back()->with('message', $result);
    }

    public function addResiko(Request $request){
        $result = "Berhasil menambahkan data resiko!!";
        TResiko::insert([
            'ID_NASABAH' => $request->id,
            'RESIKO' => $request->resiko,
            'MITIGASI_RESIKO' => $request->mitigasi_resiko
        ]);
        $output = null;
        $result = "Berhasil menambahkan data resiko!";
        $nasabah = TCollateral::where('ID_NASABAH', $request->id)->first();
        $resiko_nasabah = TResiko::where('ID_NASABAH', $request->id)->first();
        $collateral_nasabah = TCollateral::where('ID_NASABAH', $request->id)->first();
        
        return redirect()->back()->with('message', 'success');
    }

    public function editResiko(Request $request, $id){
        TResiko::where('ID_NASABAH', $id)->update([
            'RESIKO' => $request->resiko,
            'MITIGASI_RESIKO' => $request->mitigasi_resiko
        ]);
        $output = null;
        $result = "Berhasil memperbarui data resiko!";
        $nasabah = TCollateral::where('ID_NASABAH', $request->id)->first();
        $resiko_nasabah = TResiko::where('ID_NASABAH', $request->id)->first();
        $collateral_nasabah = TCollateral::where('ID_NASABAH', $id)->first();
        return redirect()->back()->with('message', 'success');
    }

    public function addAgunan(Request $request){
        TAgunan::insert([
            'ID_NASABAH' => $request->id,
            'JENIS' => $request->jenis,
            'BUKTI_MILIK' => $request->bukti_milik,
            'MERK' => $request->merk,
            'TAHUN' => $request->tahun,
            'NO_BPKB' => $request->no_bpkb,
            'NOPOL' => $request->nopol,
            'NO_MESIN' => $request->no_mesin,
            'NO_RANGKA' => $request->no_rangka,
            'WARNA' => $request->warna,
            'ATAS_NAMA' => $request->atas_nama,
            'ALAMAT' => $request->alamat,
            'TGL_BERLAKU' => $request->tgl_berlaku,
            'NO_AGUNAN' => $request->no_agunan,
            'NAMA_PEMILIK' => $request->nama_pemilik,
            'LOKASI' => $request->lokasi,
            'NILAI' => str_replace('.', '', $request->nilai),
            'JENIS_PENGIKATAN' => $request->jenis_pengikatan,
            'ASURANSI' => $request->asuransi,
            'KET' => $request->ket,
            'LUAS_TANAH' => $request->luas_tanah,
            'LUAS_BANGUNAN' => $request->luas_bangunan,
            'NO_DEP' => $request->no_dep,
            'DEP_BANK' => $request->dep_bank,
            'SAVE_MARGIN' => str_replace('.', '', $request->safety_margin),
            'JENIS_BANGUNAN' => $request->jenis_bangunan
        ]);

        $result = "Berhasil menambahkan data agunan!";
        return redirect()->back()->with('message', 'success');
    }
    public function editAgunan(Request $request, $id){
        TAgunan::where('ID', $id)->update([
            'JENIS' => $request->jenis,
                'BUKTI_MILIK' => $request->bukti_milik,
                'MERK' => $request->merk,
                'TAHUN' => $request->tahun,
                'NO_BPKB' => $request->no_bpkb,
                'NOPOL' => $request->nopol,
                'NO_MESIN' => $request->no_mesin,
                'NO_RANGKA' => $request->no_rangka,
                'WARNA' => $request->warna,
                'ATAS_NAMA' => $request->atas_nama,
                'ALAMAT' => $request->alamat,
                'TGL_BERLAKU' => $request->tgl_berlaku,
                'NO_AGUNAN' => $request->no_agunan,
                'NAMA_PEMILIK' => $request->nama_pemilik,
                'LOKASI' => $request->lokasi,
                'NILAI' => str_replace('.', '', $request->nilai),
                'JENIS_PENGIKATAN' => $request->jenis_pengikatan,
                'ASURANSI' => $request->asuransi,
                'KET' => $request->ket,
                'LUAS_TANAH' => $request->luas_tanah,
                'LUAS_BANGUNAN' => $request->luas_bangunan,
                'NO_DEP' => $request->no_dep,
                'DEP_BANK' => $request->dep_bank,
                'SAVE_MARGIN' => str_replace('.', '', $request->safety_margin),
                'JENIS_BANGUNAN' => $request->jenis_bangunan
        ]);
    
        $result = "Berhasil memperbarui data agunan!";
        return redirect()->back()->with('message', 'success');
    }

    public function deleteAgunan($id){
        TAgunan::where('ID', $id)->delete();
        $result = "Berhasil menghapus data agunan!";
        return redirect()->back()->with('message', 'success');
    }
}




