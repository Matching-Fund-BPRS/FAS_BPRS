<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TRugilaba;
use App\Models\TNasabah;
use Carbon\Carbon;

class RugiLabaController extends Controller
{
    //TODO
    //Panggil data dari tabel t_rugilaba
    //filter berdasarkan periode
    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $rugi_laba_nasabah = TRugiLaba::where('ID_NASABAH', $id)->first();
        dump($rugi_laba_nasabah);
        return view('rugilaba', [
            'nasabah' => $nasabah,
            'rugi_laba_nasabah' => $rugi_laba_nasabah,
        ]);
    }

    
    public function addRugiLaba(Request $request){
        if(TRugiLaba::where('ID_NASABAH', $request->id)->first() == null){
            TRugiLaba::insert([
                'ID_NASABAH' => $request->id,
                'PERIODE' => 1,
                'TGL_PERIODE' => Carbon::createFromFormat('Y-m-d', $request->tgl_periode)->format('Y-m-d'),  
                'PENJUALAN_BERSIH' => $request->penjualan_bersih,
                'HPP' => $request->hpp,
                'BIAYA_PEGAWAI' => 0,
                'BIAYA_TRANSPORT'=> 0,
                'BIAYA_LISTRIK'=> 0,
                'BIAYA_TELPON'=> 0,
                'BIAYA_PAM'=> 0,
                'BIAYA_LAIN'=> $request->biaya_lain,
                'BIAYA_HIDUP' => $request->total_biaya_ops_non_ops,
                'PENYUSUTAN' => $request->angsuran_bank_lain,
                'PENDAPATAN_LAIN' => $request->pendapatan_lain,
                'BIAYA_PAJAK' => $request->biaya_pajak,
                'BIAYA_BUNGA' => $request->biaya_bunga,
                'SET_ASSET' => 0.05,
                'SET_BIAYA' => 0.05,
                'SET_HPP' => 0.75,
            ]);
        }else{
            TRugiLaba::where('ID_NASABAH', $request->id)->update([
                'PERIODE' => 1,
                'TGL_PERIODE' => Carbon::createFromFormat('Y-m-d', $request->tgl_periode)->format('Y-m-d'),  
                'PENJUALAN_BERSIH' => $request->penjualan_bersih,
                'HPP' => $request->hpp,
                'BIAYA_PEGAWAI' => 0,
                'BIAYA_TRANSPORT'=> 0,
                'BIAYA_LISTRIK'=> 0,
                'BIAYA_TELPON'=> 0,
                'BIAYA_PAM'=> 0,
                'BIAYA_LAIN'=> $request->biaya_lain,
                'BIAYA_HIDUP' => $request->total_biaya_ops_non_ops,
                'PENYUSUTAN' => $request->angsuran_bank_lain,
                'PENDAPATAN_LAIN' => $request->pendapatan_lain,
                'BIAYA_PAJAK' => $request->biaya_pajak,
                'BIAYA_BUNGA' => $request->biaya_bunga,
                'SET_ASSET' => 0.05,
                'SET_BIAYA' => 0.05,
                'SET_HPP' => 0.75,
            ]);
        }
        return redirect()->back()->with(',message', 'success');
    }
}
