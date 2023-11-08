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
        $ebit = null;
        $ois = null;

        if(TNeraca::where('ID_NASABAH', $request->id)->first() == null){
            TNeraca::insert([
                'ID_NASABAH' => $request->id,
                'PERIODE'=> 1,
                'TANGGAL_PERIODE' => Carbon::createFromFormat('Y-m-d', $request->tgl_periode)->format('Y-m-d'),  
                'KAS'=> $request->kas,
                'PIUTANG_DAGANG' =>$request->piutang_dagang,
                'PERSEDIAAN' => $request->persediaan, 
                'TANAH' => $request->tanah,
                'GEDUNG' =>$request->gedung,
                'PENYUSUTAN_GED' => $request->penyusutan_gedung,
                'PERALATAN' => $request->peralatan,
                'PENYUSUTAN_PERALATAN' => $request->penyusutan_peralatan,
                'HUTANG_JANGKA_PENDEK' => $request->hutang_jangka_pendek,
                'HUTANG_JANGKA_PANJANG' => $request->hutang_jangka_panjang,
                'MODAL' => $request->modal,
                'LABA_DITAHAN' => $request->laba_ditahan,
                'LABA_BERJALAN' => $request->laba_berjalan,
                'LABA_BERJALAN_2' => $request->laba_berjalan_2,
                'LABA_BERJALAN_3' => $request->laba_berjalan_3,
                'SET_ASSET' => 0.05,
                'EBIT' => $ebit, 
                'OIS' => $ois
            ]);
        }else{
            TNeraca::where('ID_NASABAH', $request->id)->update([
                'PERIODE'=> 1,
                'TANGGAL_PERIODE' => Carbon::createFromFormat('Y-m-d', $request->tgl_periode)->format('Y-m-d'),  
                'KAS'=> $request->kas,
                'PIUTANG_DAGANG' =>$request->piutang_dagang,
                'PERSEDIAAN' => $request->persediaan, 
                'TANAH' => $request->tanah,
                'GEDUNG' =>$request->gedung,
                'PENYUSUTAN_GED' => $request->penyusutan_gedung,
                'PERALATAN' => $request->peralatan,
                'PENYUSUTAN_PERALATAN' => $request->penyusutan_peralatan,
                'HUTANG_JANGKA_PENDEK' => $request->hutang_jangka_pendek,
                'HUTANG_JANGKA_PANJANG' => $request->hutang_jangka_panjang,
                'MODAL' => $request->modal,
                'LABA_DITAHAN' => $request->laba_ditahan,
                'LABA_BERJALAN' => $request->laba_berjalan,
                'LABA_BERJALAN_2' => $request->laba_berjalan_2,
                'LABA_BERJALAN_3' => $request->laba_berjalan_3,
                'SET_ASSET' => 0.05,
                'EBIT' => $ebit, 
                'OIS' => $ois
            ]);
        }
        $capital = TCapital::where('ID_NASABAH', $request->id)->first();
        $totalAset = $request->kas + $request->piutang_dagang + $request->persediaan + $request->tanah + $request->gedung + $request->peralatan - $request->penyusutan_gedung - $request->penyusutan_peralatan;
        $totalHutang = $request->hutang_jangka_pendek + $request->hutang_jangka_panjang;

        $modal = $request->tanah + $request->gedung + $request->peralatan - $request->penyusutan_gedung - $request->penyusutan_peralatan + $request->laba_ditahan + $request->laba_berjalan;


        $dar = -1 * ($totalHutang / $totalAset);
        $der = -1 * ($totalHutang / $modal);
        $lder = -1 * ($request->hutang_jangka_pendek / $modal);
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
