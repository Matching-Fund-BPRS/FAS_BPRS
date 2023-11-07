<?php

namespace App\Http\Controllers;

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
        return redirect()->back();
    }
}
