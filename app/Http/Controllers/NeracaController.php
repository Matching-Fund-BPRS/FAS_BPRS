<?php

namespace App\Http\Controllers;

use App\Models\TCapital;
use Illuminate\Http\Request;
use App\Models\TNeraca;
use App\Models\TNasabah;
use Carbon\Carbon;

class NeracaController extends Controller
{
    public function index($id){
        $neraca_nasabah = TNeraca::where('ID_NASABAH', $id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();

        return view('neraca', [
            'nasabah' => $nasabah,
            'neraca_nasabah' => $neraca_nasabah
        ]);
    }

    public function addNeraca(Request $request){
        //tambahin formula di variabel ebit + ois
        //format 1.000.000 to 1000000
        $kas = str_replace('.', '', $request->kas);
        $piutang_dagang = str_replace('.', '', $request->piutang_dagang);
        $persediaan = str_replace('.', '', $request->persediaan);
        $tanah = str_replace('.', '', $request->tanah);
        $gedung = str_replace('.', '', $request->gedung);
        $penyusutan_gedung = str_replace('.', '', $request->penyusutan_gedung);
        $peralatan = str_replace('.', '', $request->peralatan);
        $penyusutan_peralatan = str_replace('.', '', $request->penyusutan_peralatan);
        $hutang_jangka_pendek = str_replace('.', '', $request->hutang_jangka_pendek);
        $hutang_jangka_panjang = str_replace('.', '', $request->hutang_jangka_panjang);
        $modal = str_replace('.', '', $request->modal);
        $laba_ditahan = str_replace('.', '', $request->laba_ditahan);
        $laba_berjalan = str_replace('.', '', $request->laba_berjalan);
        $ebit = 0 ;
        $ois = 0;


        if(TNeraca::where('ID_NASABAH', $request->id)->first() == null){
            TNeraca::insert([
                'ID_NASABAH' => $request->id,
                'PERIODE'=> 1,
                'TANGGAL_PERIODE' => Carbon::createFromFormat('Y-m-d', $request->tgl_periode)->format('Y-m-d'),  
                'KAS'=> $kas,
                'PIUTANG_DAGANG' =>$piutang_dagang,
                'PERSEDIAAN' => $persediaan,
                'TANAH' => $tanah,
                'GEDUNG' => $gedung,
                'PENYUSUTAN_GED' => $penyusutan_gedung,
                'PERALATAN' => $peralatan,
                'PENYUSUTAN_PERALATAN' => $penyusutan_peralatan,
                'HUTANG_JANGKA_PENDEK' => $hutang_jangka_pendek,
                'HUTANG_JANGKA_PANJANG' => $hutang_jangka_panjang,
                'MODAL' => $modal,
                'LABA_DITAHAN' => $laba_ditahan,
                'LABA_BERJALAN' => $laba_berjalan,
                'LABA_BERJALAN_2' => 0,
                'LABA_BERJALAN_3' => 0,
                'SET_ASSET' => 0.05,
                'EBIT' => $ebit, 
                'OIS' => $ois
            ]);
        }else{
            TNeraca::where('ID_NASABAH', $request->id)->update([
                'PERIODE'=> 1,
                'TANGGAL_PERIODE' => Carbon::createFromFormat('Y-m-d', $request->tgl_periode)->format('Y-m-d'),  
                'KAS'=> $kas,
                'PIUTANG_DAGANG' =>$piutang_dagang,
                'PERSEDIAAN' => $persediaan,
                'TANAH' => $tanah,
                'GEDUNG' => $gedung,
                'PENYUSUTAN_GED' => $penyusutan_gedung,
                'PERALATAN' => $peralatan,
                'PENYUSUTAN_PERALATAN' => $penyusutan_peralatan,
                'HUTANG_JANGKA_PENDEK' => $hutang_jangka_pendek,
                'HUTANG_JANGKA_PANJANG' => $hutang_jangka_panjang,
                'MODAL' => $modal,
                'LABA_DITAHAN' => $laba_ditahan,
                'LABA_BERJALAN' => $laba_berjalan,
                'LABA_BERJALAN_2' => 0,
                'LABA_BERJALAN_3' => 0,
                'SET_ASSET' => 0.05,
                'EBIT' => $ebit,
                'OIS' => $ois
            ]);
        }
        $capital = TCapital::where('ID_NASABAH', $request->id)->first();
        $totalAset = $kas + $piutang_dagang + $persediaan + $tanah + $gedung + $peralatan - $penyusutan_gedung - $penyusutan_peralatan;
        $totalHutang = $hutang_jangka_panjang + $hutang_jangka_pendek;

        $dar = -1 * ($totalHutang / $totalAset);
        $der = -1 * ($totalHutang / $modal);
        $lder = -1 * ($hutang_jangka_pendek / $modal);


        if($capital != null){
            $capital->update([
                'CM_DAR' => $dar,
                'CM_DER' => $der,
                'CM_LDER' => $lder,
                'PK_ASET' => $totalAset,
            ]);
        } 
        else {
            TCapital::insert([
                'ID_NASABAH' => $request->id,
                'CM_DAR' => $dar,
                'CM_DER' => $der,
                'CM_LDER' => $lder,
                'PK_ASET' => $totalAset,
                'PK_INCOME_SALES' => 0,
                'RPC' => 0,
                'PK_EBIT' => 0
            ]);
        }
        return redirect()->back()->with('message', 'success');
    }
}
