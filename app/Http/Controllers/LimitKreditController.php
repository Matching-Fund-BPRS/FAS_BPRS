<?php

namespace App\Http\Controllers;

use App\Models\TCapacity;
use App\Models\TCapital;
use Illuminate\Http\Request;
use App\Models\TLimitkredit;
use App\Models\TNasabah;
use App\Models\TRugilaba;

class LimitKreditController extends Controller
{
    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();

        if($nasabah != null){
            $angsuran = $nasabah->LIMIT_KREDIT * $nasabah->MARGIN;
        }
        $limit_kredit_nasabah = TLimitKredit::where('ID_NASABAH', $id)->first();
        $rugi_laba_nasabah = TRugiLaba::where('ID_NASABAH', $id)->first();
        return view('limitkredit', [
            'rugi_laba_nasabah' => $rugi_laba_nasabah,
            'nasabah' => $nasabah,
            'limit_kredit_nasabah' => $limit_kredit_nasabah,
            'keputusan' => '-'
        ]);
    }

    public function addLimitKredit(Request $request){
        $TLimitKredit = TLimitKredit::where('ID_NASABAH', $request->id)->first();
        $TLabaRugi = TRugilaba::where('ID_NASABAH', $request->id)->first();
        $capital = TCapital::where('ID_NASABAH', $request->id)->first();
        $capacity = TCapacity::where('ID_NASABAH', $request->id)->first();

        $omset = str_replace('.', '', $request->omset);
        $hpp = str_replace('.', '', $request->hpp);
        $total_biaya_ops_nonops = str_replace('.', '', $request->total_biaya_ops_nonops);
        $angsuran_bank_lain = str_replace('.', '', $request->angsuran_bank_lain);
        $pendapatan_lain = str_replace('.', '', $request->pendapatan_lain);
        $biaya_lain = str_replace('.', '', $request->biaya_lain);
        $limit_kredit = str_replace('.', '', $request->limit_kredit);
        $angsuran = str_replace('.', '', $request->angsuran);
        $jangka_waktu = $request->jangka_waktu;
        $margin = $request->margin;
        $rpc = $request->rpc;

        $dscr = ($omset - $hpp - $total_biaya_ops_nonops - $angsuran_bank_lain + $pendapatan_lain - $biaya_lain) / (($limit_kredit / $jangka_waktu) + ($limit_kredit * ($margin / 100)));
        $income_Sales = ($omset - $hpp) / $omset;
        $ebit_per_interest = ($omset - $hpp - $total_biaya_ops_nonops - $angsuran_bank_lain + $pendapatan_lain - $biaya_lain) / ($limit_kredit * ($margin / 100));
        $biaya_bunga = $limit_kredit * ($margin / 100);
        if($capital != null){
            $capital->update([
                'PK_INCOME_SALES' => $income_Sales,
                'RPC' => -1* $rpc,
                'PK_EBIT' => $ebit_per_interest
            ]);
        } 
        else {
            TCapital::insert([
                'ID_NASABAH' => $request->id,
                'CM_DAR' => 0,
                'CM_DER' => 0,
                'CM_LDER' => 0,
                'PK_ASET' => 0,
                'PK_INCOME_SALES' => $income_Sales,
                'RPC' => -1* $rpc,
                'PK_EBIT' => $ebit_per_interest
            ]);
        }

        if($capacity != null){
            $capacity->update([
                'CB_DSCR' => $dscr
            ]);
        }
        else {
            TCapacity::insert([
                'ID_NASABAH' => $request->id,
                'TEH_UTILISASI' => 0,
                'TEH_LAMA_USAHA' => 0,
                'CB_MANAJEMEN_SDM' => 0,
                'CB_PENGELOLAAN' => 0,
                'CB_DSCR' => $dscr
            ]);
        }
        if($TLabaRugi != null){
           $TLabaRugi->update([
               'PENJUALAN_BERSIH' => $omset,
               'HPP' => $hpp,
               'BIAYA_HIDUP' => $total_biaya_ops_nonops,
               'PENDAPATAN_LAIN' => $pendapatan_lain,
               'BIAYA_LAIN' => $biaya_lain,
               'PENYUSUTAN' => $angsuran_bank_lain,
               'BIAYA_BUNGA' => $biaya_bunga,
               'BIAYA_PAJAK' => $request->biaya_pajak,
           ]); 
        }
        else {
            TRugilaba::insert([
                'ID_NASABAH' => $request->id,
                'PERIODE' => 1,
                'TGL_PERIODE' => date('Y-m-d'),
                'PENJUALAN_BERSIH' => $omset,
                'HPP' => $hpp,
                'BIAYA_PEGAWAI' => 0,
                'BIAYA_TRANSPORT' => 0,
                'BIAYA_LISTRIK' => 0,
                'BIAYA_TELPON' => 0,
                'BIAYA_PAM' => 0,
                'BIAYA_BUNGA' => $biaya_bunga,
                'BIAYA_PAJAK' => $request->biaya_pajak,
                'SET_ASSET' => 0.05,
                'SET_BIAYA' => 0.05,
                'SET_HPP' => 0.75,
                'BIAYA_HIDUP' => $total_biaya_ops_nonops,
                'PENDAPATAN_LAIN' => $pendapatan_lain,
                'BIAYA_LAIN' => $biaya_lain,
                'PENYUSUTAN' => $angsuran_bank_lain
            ]);
        }

        if($TLimitKredit != null){
            $TLimitKredit->update([
                'LIMIT_KREDIT' => $limit_kredit,
                'JANGKA_WAKTU' => $jangka_waktu,
                'OMSET' => $omset, 
                'HPP' => $hpp,
                'BIAYA_HIDUP' => $total_biaya_ops_nonops,
                'ANGS_BANK_LAIN' => $angsuran_bank_lain,
                'BUNGA_KREDIT' => $margin,
                'ANGSURAN' => $angsuran,
                'PEND_LAIN' => $pendapatan_lain,
                'RPC' => $rpc,
                'JENIS' => $request->sifat,
                'BIAYA_LAIN' => $biaya_lain,
            ]);
            return redirect()->back()->with('success-add', 'message');
        } 
        else {
        TLimitKredit::insert([
            'ID_NASABAH' => $request->id ,
            'LIMIT_KREDIT' => $limit_kredit,
            'JANGKA_WAKTU' => $jangka_waktu,
            'OMSET' => $omset, 
            'HPP' => $hpp,
            'BIAYA_HIDUP' => $total_biaya_ops_nonops,
            'ANGS_BANK_LAIN' => $angsuran_bank_lain,
            'BUNGA_KREDIT' => $margin,
            'ANGSURAN' => $angsuran,
            'PEND_LAIN' => $pendapatan_lain,
            'RPC' => $rpc,
            'JENIS' => $request->sifat,
            'BIAYA_LAIN' => $biaya_lain,
        ]);
        return redirect()->back()->with('success-edit', 'message');
        }
        
    }

    public function editLimitKredit(Request $request, $id){
        TLimitKredit::where('ID_NASABAH', $id)->update([
            'LIMIT_KREDIT' => $request->limit_kredit,
            'JANGKA_WAKTU' => $request->jangka_waktu,
            'OMSET' => $request->omset, 
            'HPP' => $request->hpp,
            'BIAYA_HIDUP' => null, 
            'ANGS_BANK_LAIN' => $request->angsuran_bank_lain,
            'BUNGA_KREDIT' => null, //gatau darimana
            'ANGSURAN' => $request->angsuran,
            'PEND_LAIN' => $request->pendapatan_lain,
            'RPC' => $request->rpc, 
            'JENIS' => 1, //konvert dari string ke angka sesuai nilainya
            'BIAYA_LAIN' => $request->biaya_lain,
        ]);

        return redirect()->back()->with('success-edit', 'message');
    }
}
