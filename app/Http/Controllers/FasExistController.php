<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TFa;
use App\Models\TBisid;

class FasExistController extends Controller
{

    // TODO
        // ini filter berdasarkan nota(?)
    public function fasIndex(){ 
        return view('fasilitasexisting',[
            'data_fasilitas_existing' => TFa::paginate(10)
        ]);
    }

    public function tambah_bisid(Request $request){
        dd($request);
        // TBisid::insert([
        //     'ID_NASABAH' => $request->id_nasabah,
        //     'SEKTOR_EKONOMI_BI' =>$request->sektor_ekonomi_bi ,
        //     'PENGGUNAAN_BI' => $request->penggunaan_bi,
        //     'GOL_DEB_BI' => $request->golongan_debitur_bi,
        //     'TUJUAN_BI' => $request->tujuan_penggunaan_bi,
        //     'GOL_PIUTANG_BI' => $request->golongan_piutang_bi,
        //     'SIFAT PLAFOND' => $request->sifat_plafond_bi,
        //     'SEK_EKO_SID' => $request->sektor_ekonomi_sid,
        //     'PENGGUNAAN_SID' => $request->penggunaan_sid,
        //     'PEMBIAYAAN_SID' => $request->pembiayaaan_sid, 
        // ]);
    }
}
