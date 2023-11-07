<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TNasabah;
use App\Models\TSyariah;
use App\Models\TScoring;

class SyariahController extends Controller
{
    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $syariah_nasabah = TSyariah::where('ID_NASABAH', $id)->first();
        $hasil_scoring = TScoring::where('ID_NASABAH',$id)->first();
        return view('5syariah',[
            'nasabah' => $nasabah,
            'scoring_syariah' => $hasil_scoring->SYARIAH,
            'syariah_nasabah' => $syariah_nasabah
        ]);
    }

    public function submitSyariah(Request $request){
        if(TSyariah::where('ID_NASABAH', $request->id)->first() == null){
            TSyariah::insert([
                'SY_SERTIFIKASI_HALAL' => $request->sertifikasi,
                'SY_JUMLAH_HUTANG' => $request->jumlah_hutang,
                'SY_AKAD_USAHA' => $request->akad_usaha,
                'SY_JENIS_BARANG' => $request->jenis_barang_usaha,
                'SY_PRESENTASE_NON_SYARIAH' => $request->presentase,
                'ID_NASABAH' => $request->id
            ]);
        }else{
            TSyariah::where('ID_NASABAH', $request->id)->update([
                'SY_SERTIFIKASI_HALAL' => $request->sertifikasi,
                'SY_JUMLAH_HUTANG' => $request->jumlah_hutang,
                'SY_AKAD_USAHA' => $request->akad_usaha,
                'SY_JENIS_BARANG' => $request->jenis_barang_usaha,
                'SY_PRESENTASE_NON_SYARIAH' => $request->presentase,
            ]);
        }

        return redirect()->back()->with('message', 'success');
    }
}
