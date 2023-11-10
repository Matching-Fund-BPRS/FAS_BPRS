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
        return view('rugilaba', [
            'nasabah' => $nasabah,
            'rugi_laba_nasabah' => $rugi_laba_nasabah,
        ]);
    }

    
    public function addRugiLaba(Request $request){

        $penjualan_bersih = str_replace('.', '', $request->penjualan_bersih);
        $hpp = str_replace('.', '', $request->hpp);
        $biaya_lain = str_replace('.', '', $request->biaya_lain);
        $total_biaya_ops_non_ops = str_replace('.', '', $request->total_biaya_ops_nonops);
        $angsuran_bank_lain = str_replace('.', '', $request->angsuran_bank_lain);
        $pendapatan_lain = str_replace('.', '', $request->pendapatan_lain);
        $biaya_pajak = str_replace('.', '', $request->biaya_pajak);
        $biaya_bunga = str_replace('.', '', $request->biaya_margin);

        if(TRugiLaba::where('ID_NASABAH', $request->id)->first() == null){
            TRugiLaba::insert([
                'ID_NASABAH' => $request->id,
                'PERIODE' => 1,
                'TGL_PERIODE' => Carbon::createFromFormat('Y-m-d', $request->tgl_periode)->format('Y-m-d'), 
                'PENJUALAN_BERSIH' => $penjualan_bersih,
                'HPP' => $hpp,
                'BIAYA_PEGAWAI' => 0,
                'BIAYA_TRANSPORT'=> 0,
                'BIAYA_LISTRIK'=> 0,
                'BIAYA_TELPON'=> 0,
                'BIAYA_PAM'=> 0,
                'BIAYA_LAIN'=> $biaya_lain,
                'BIAYA_HIDUP' => $total_biaya_ops_non_ops,
                'PENYUSUTAN' => $angsuran_bank_lain,
                'PENDAPATAN_LAIN' => $pendapatan_lain,
                'BIAYA_PAJAK' => $biaya_pajak,
                'BIAYA_BUNGA' => $biaya_bunga,
                'SET_ASSET' => 0.05,
                'SET_BIAYA' => 0.05,
                'SET_HPP' => 0.75,
            ]);
        }else{
            TRugiLaba::where('ID_NASABAH', $request->id)->update([
                'PERIODE' => 1,
                'TGL_PERIODE' => Carbon::createFromFormat('Y-m-d', $request->tgl_periode)->format('Y-m-d'), 
                'PENJUALAN_BERSIH' => $penjualan_bersih,
                'HPP' => $hpp,
                'BIAYA_PEGAWAI' => 0,
                'BIAYA_TRANSPORT'=> 0,
                'BIAYA_LISTRIK'=> 0,
                'BIAYA_TELPON'=> 0,
                'BIAYA_PAM'=> 0,
                'BIAYA_LAIN'=> $biaya_lain,
                'BIAYA_HIDUP' => $total_biaya_ops_non_ops,
                'PENYUSUTAN' => $angsuran_bank_lain,
                'PENDAPATAN_LAIN' => $pendapatan_lain,
                'BIAYA_PAJAK' => $biaya_pajak,
                'BIAYA_BUNGA' => $biaya_bunga,
                'SET_ASSET' => 0.05,
                'SET_BIAYA' => 0.05,
                'SET_HPP' => 0.75,
            ]);
        }
        return redirect()->back()->with(',message', 'success');
    }
}
