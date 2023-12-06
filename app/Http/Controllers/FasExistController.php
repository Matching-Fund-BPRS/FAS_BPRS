<?php

namespace App\Http\Controllers;

use App\Models\ReffBank;
use App\Models\ReffSandiBi;
use App\Models\ReffSandiSid;
use Illuminate\Http\Request;
use App\Models\TFa;
use App\Models\TBisid;
use App\Models\TNasabah;
use App\Models\TBmpd;

class FasExistController extends Controller
{
    function extractTextBeforeHyphen($inputString) {
        $parts = explode(' - ', $inputString, 2);
        return isset($parts[0]) ? $parts[0] : '';
    }

    public function fasIndex($id){ 
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $ref_bi = ReffSandiBi::all();
        $ref_sid = ReffSandiSid::all();
        $ref_bank = ReffBank::all();
        $bmpd = TBmpd::where('ID_NASABAH', $id)->first();
        $data_bisid_nasabah = TBisid::where('ID_NASABAH', $id)->first();
        return view('fasilitasexisting',[
            'data_bisid_nasabah' => $data_bisid_nasabah,
            'nasabah' => $nasabah,
            'data_fasilitas_existing' => TFa::where('ID_NASABAH', $id)->paginate(5),
            'ref_bi' => $ref_bi,
            'ref_sid' => $ref_sid,
            'ref_bank' => $ref_bank,
            'bmpd' => $bmpd
        ]);
    }

    public function tambah_bisid(Request $request){
        TBisid::insert([
            'ID_NASABAH' => $request->id,
            'SEKTOR_EKONOMI_BI' =>$this->extractTextBeforeHyphen($request->sektor_ekonomi_bi) ,
            'PENGGUNAAN_BI' => $this->extractTextBeforeHyphen($request->penggunaan_bi) ,
            'GOL_DEB_BI' => $this->extractTextBeforeHyphen($request->golongan_debitur_bi) ,
            'SIFAT_BI' => $this->extractTextBeforeHyphen($request->sifat_bi) ,
            'GOL_PENJAMIN_BI' => $this->extractTextBeforeHyphen($request->golongan_penjamin_bi) ,
            'TUJUAN_BI' => $this->extractTextBeforeHyphen($request->tujuan_penggunaan_bi) ,
            'GOL_PIUTANG_BI' => $this->extractTextBeforeHyphen($request->golongan_piutang_bi) ,
            'SIFAT_PLAFOND' => $this->extractTextBeforeHyphen($request->sifat_plafond_bi) ,
            'SEK_EKO_SID' => $this->extractTextBeforeHyphen($request->sektor_ekonomi_sid) ,
            'PENGGUNAAN_SID' => $this->extractTextBeforeHyphen($request->penggunaan_sid) ,
            'PEMBIAYAAN_SID' => $this->extractTextBeforeHyphen($request->pembiayaan_sid) , 
        ]);

        TBmpd::insert([
            'ID_NASABAH' => $request->id,
            'MODAL_INTI_CAB' => $request->modal_inti_cab,
            'MODAL_INTI_PUSAT' => $request->modal_inti_pusat,
            'MODAL_PELENGKAP_CAB' => $request->modal_pelengkap_cab,
            'MODAL_PELENGKAP_PUSAT' => $request->modal_pelengkap_pusat,
            'BMPD_PERORG_CAB' => $request->bmpd_perorg_cab,
            'BMPD_PERORG_PUSAT' => $request->bmpd_perorg_pusat,
            'BMPD_KEL_CAB' => $request->bmpd_kel_cab,
            'BMPD_KEL_PUSAT' => $request->bmpd_kel_pusat,
            'BMPD_TERKAIT_CAB' => $request->bmpd_terkait_cab,
            'BMPD_TERKAIT_PUSAT' => $request->bmpd_terkait_pusat,
            'PLAFOND_CAB' => $request->plafond_cab,
            'PLAFOND_PUSAT' => $request->plafond_pusat,
        ]);

        return redirect()
                ->back()
                ->with('success-add', 'message');
    }

    public function edit_bisid(Request $request, $id){  
        TBisid::where('ID_NASABAH' , $id)->update([
            'ID_NASABAH' => $id,
            'SEKTOR_EKONOMI_BI' => $this->extractTextBeforeHyphen($request->sektor_ekonomi_bi ) ,
            'PENGGUNAAN_BI' => $this->extractTextBeforeHyphen( $request->penggunaan_bi) ,
            'GOL_DEB_BI' => $this->extractTextBeforeHyphen( $request->golongan_debitur_bi) ,
            'SIFAT_BI' => $this->extractTextBeforeHyphen( $request->sifat_bi) ,
            'GOL_PENJAMIN_BI' => $this->extractTextBeforeHyphen( $request->golongan_penjamin_bi) ,
            'TUJUAN_BI' => $this->extractTextBeforeHyphen( $request->tujuan_penggunaan_bi) ,
            'GOL_PIUTANG_BI' => $this->extractTextBeforeHyphen( $request->golongan_piutang_bi) ,
            'SIFAT_PLAFOND' => $this->extractTextBeforeHyphen( $request->sifat_plafond_bi) ,
            'SEK_EKO_SID' => $this->extractTextBeforeHyphen( $request->sektor_ekonomi_sid) ,
            'PENGGUNAAN_SID' => $this->extractTextBeforeHyphen( $request->penggunaan_sid) ,
            'PEMBIAYAAN_SID' => $this->extractTextBeforeHyphen( $request->pembiayaan_sid) , 
        ]);

        TBmpd::where('ID_NASABAH', $id)->update([
            'MODAL_INTI_CAB' => $request->modal_inti_cab,
            'MODAL_INTI_PUSAT' => $request->modal_inti_pusat,
            'MODAL_PELENGKAP_CAB' => $request->modal_pelengkap_cab,
            'MODAL_PELENGKAP_PUSAT' => $request->modal_pelengkap_pusat,
            'BMPD_PERORG_CAB' => $request->bmpd_perorg_cab,
            'BMPD_PERORG_PUSAT' => $request->bmpd_perorg_pusat,
            'BMPD_KEL_CAB' => $request->bmpd_kel_cab,
            'BMPD_KEL_PUSAT' => $request->bmpd_kel_pusat,
            'BMPD_TERKAIT_CAB' => $request->bmpd_terkait_cab,
            'BMPD_TERKAIT_PUSAT' => $request->bmpd_terkait_pusat,
            'PLAFOND_CAB' => $request->plafond_cab,
            'PLAFOND_PUSAT' => $request->plafond_pusat,
        ]);
        return redirect()->back()->with('success-edit', 'message');
    }

    public function store(Request $request){
        TFa::insert([
            'ID_NASABAH' => $request->id,
            'KODE' => $request->bank,
            'BANK' => ReffBank::where('KODE', $request->bank)->first()->BANK,
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
            'KODE' => $request->bank,
            'BANK' => ReffBank::where('KODE', $request->bank)->first()->BANK,
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
