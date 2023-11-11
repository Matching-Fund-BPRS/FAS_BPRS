<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TFa;
use App\Models\TBisid;
use App\Models\TNasabah;

class FasExistController extends Controller
{

    // TODO
        // ini filter berdasarkan nota(?)
    public function fasIndex($id){ 
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        return view('fasilitasexisting',[
            'data_bisid_nasabah' => TBisid::where('ID_NASABAH', $id)->first(),
            'nasabah' => $nasabah,
            'data_fasilitas_existing' => TFa::where('ID_NASABAH', $id)->paginate(5),
        ]);
    }

    public function tambah_bisid(Request $request){
        TBisid::insert([
            'ID_NASABAH' => $request->id,
            'SEKTOR_EKONOMI_BI' =>$request->sektor_ekonomi_bi ,
            'PENGGUNAAN_BI' => $request->penggunaan_bi,
            'GOL_DEB_BI' => $request->golongan_debitur_bi,
            'SIFAT_BI' => $request->sifat_bi,
            'GOL_PENJAMIN_BI' => $request->golongan_penjamin_bi,
            'TUJUAN_BI' => $request->tujuan_penggunaan_bi,
            'GOL_PIUTANG_BI' => $request->golongan_piutang_bi,
            'SIFAT_PLAFOND' => $request->sifat_plafond_bi,
            'SEK_EKO_SID' => $request->sektor_ekonomi_sid,
            'PENGGUNAAN_SID' => $request->penggunaan_sid,
            'PEMBIAYAAN_SID' => $request->pembiayaan_sid, 
        ]);
        return redirect()
                ->back()
                ->with('success-add', 'message');
    }

    public function edit_bisid(Request $request, $id){  
        TBisid::where('ID_NASABAH' , $id)->update([
            'ID_NASABAH' => $id,
            'SEKTOR_EKONOMI_BI' =>$request->sektor_ekonomi_bi ,
            'PENGGUNAAN_BI' => $request->penggunaan_bi,
            'GOL_DEB_BI' => $request->golongan_debitur_bi,
            'SIFAT_BI' => $request->sifat_bi,
            'GOL_PENJAMIN_BI' => $request->golongan_penjamin_bi,
            'TUJUAN_BI' => $request->tujuan_penggunaan_bi,
            'GOL_PIUTANG_BI' => $request->golongan_piutang_bi,
            'SIFAT_PLAFOND' => $request->sifat_plafond_bi,
            'SEK_EKO_SID' => $request->sektor_ekonomi_sid,
            'PENGGUNAAN_SID' => $request->penggunaan_sid,
            'PEMBIAYAAN_SID' => $request->pembiayaan_sid, 
        ]);
        return redirect()->back()->with('success-edit', 'message');
    }

    public function store(Request $request){
        TFa::insert([
            'ID_NASABAH' => $request->id,
            'KODE' => 1,
            'BANK' => $request->bank,
            'JENIS_KREDIT' => $request->jenis_kredit,
            'PLAFOND' => str_replace('.', '', $request->plafond),
            'BAKI_DEBET' => str_replace('.', '', $request->baki_debet),
            'TGL_JATUH_TEMPO' => $request->tgl_jatuh_tempo,
            'KOL' => $request->kol,
            'TUNGGAKAN' => str_replace('.', '', $request->tunggakan),
            'LAMA_TUNGGAKAN' => $request->lama_tunggakan,
            'KET' => null
        ]);
        return redirect()->back()->with('success-add', 'message');
    }

    public function edit_existing(Request $request, $id){
        TFa::where('ID', $id)->update([
            'KODE' => 1,
            'BANK' => $request->bank,
            'JENIS_KREDIT' => $request->jenis_kredit,
            'PLAFOND' => str_replace('.', '', $request->plafond),
            'BAKI_DEBET' => str_replace('.', '', $request->baki_debet),
            'TGL_JATUH_TEMPO' => $request->tgl_jatuh_tempo,
            'KOL' => $request->kol,
            'TUNGGAKAN' => str_replace('.', '', $request->tunggakan),
            'LAMA_TUNGGAKAN' => $request->lama_tunggakan,
            'KET' => null
        ]);
        return redirect()->back()->with('success-edit', 'message');
    }

    public function delete_existing($id){
        TFa::where('ID', $id)->delete();
        return redirect()->back()->with('success-delete', 'message');
    }
}
