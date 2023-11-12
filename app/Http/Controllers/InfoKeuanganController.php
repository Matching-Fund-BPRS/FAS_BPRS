<?php

namespace App\Http\Controllers;

use App\Models\TCapacity;
use App\Models\TCapital;
use Illuminate\Http\Request;
use App\Models\TKeuangan;
use App\Models\TLimitkredit;
use App\Models\TNasabah;
use App\Models\TRugilaba;

class InfoKeuanganController extends Controller
{
    public function addInfoKeuangan(Request $request){
        $omset = str_replace('.', '', $request->omset);
        $biaya_gaji = str_replace('.', '', $request->biaya_gaji);
        $biaya_bahan_baku = str_replace('.', '', $request->biaya_bahan_baku);
        $biaya_produksi = str_replace('.', '', $request->biaya_produksi);
        $biaya_transportasi = str_replace('.', '', $request->biaya_transportasi);
        $biaya_usaha_lain = str_replace('.', '', $request->biaya_usaha_lain);
        $biaya_rt_listrik = str_replace('.', '', $request->biaya_rt_listrik);
        $biaya_rt_transportasi = str_replace('.', '', $request->biaya_rt_transportasi);
        $biaya_rt_sekolah = str_replace('.', '', $request->biaya_rt_sekolah);
        $biaya_rt_makan = str_replace('.', '', $request->biaya_rt_makan);
        $biaya_rt_pemeliharaan = str_replace('.', '', $request->biaya_rt_pemeliharaan);
        $biaya_rt_lain = str_replace('.', '', $request->biaya_rt_lain);
        $angs_bank_umum = str_replace('.', '', $request->angs_bank_umum);
        $angs_bpr = str_replace('.', '', $request->angs_bpr);
        $angs_leasing = str_replace('.', '', $request->angs_leasing);
        $angs_koperasi = str_replace('.', '', $request->angs_koperasi);
        $angs_lain = str_replace('.', '', $request->angs_lain);
        $pendapatan_lain = str_replace('.', '', $request->pendapatan_lain);
        $biaya_angsuran_lain = str_replace('.', '', $request->biaya_angsuran_lain);

        $keuangan = TKeuangan::where('ID_NASABAH', $request->id)->first();
        $limitkredit = TLimitkredit::where('ID_NASABAH', $request->id)->first();
        if ($keuangan == null){
            TKeuangan::insert([
                'ID_NASABAH' => $request->id,
                'OMZET'=> $omset,
                'BIAYA_GAJI'=> $biaya_gaji,
                'BIAYA_BB'=> $biaya_bahan_baku,
                'BIAYA_PRODUKSI'=> $biaya_produksi,
                'BIAYA_TRANSPORT'=> $biaya_transportasi,
                'BIAYA_USAHA_LAIN'=> $biaya_usaha_lain,
                'BIAYA_RT_LISTRIK'=> $biaya_rt_listrik,
                'BIAYA_RT_TRANSPORT'=> $biaya_rt_transportasi,
                'BIAYA_RT_SEKOLAH'=> $biaya_rt_sekolah,
                'BIAYA_RT_MAKAN'=> $biaya_rt_makan,
                'BIAYA_RT_PEMELIHARAAN'=> $biaya_rt_pemeliharaan,
                'BIAYA_RT_LAIN'=> $biaya_rt_lain,
                'ANGS_BANK_UMUM'=> $angs_bank_umum,
                'ANGS_BPR'=> $angs_bpr,
                'ANGS_LEASING'=> $angs_leasing,
                'ANGS_KOPERASI'=> $angs_koperasi,
                'ANGS_LAIN'=> $angs_lain,
                'PENDAPATAN_LAIN'=> $pendapatan_lain,
                'BIAYA_LAIN' => $biaya_angsuran_lain
            ]);
        }
        else{
            TKeuangan::where('ID_NASABAH', $request->id)->update([
                'OMZET'=> $omset,
                'BIAYA_GAJI'=> $biaya_gaji,
                'BIAYA_BB'=> $biaya_bahan_baku,
                'BIAYA_PRODUKSI'=> $biaya_produksi,
                'BIAYA_TRANSPORT'=> $biaya_transportasi,
                'BIAYA_USAHA_LAIN'=> $biaya_usaha_lain,
                'BIAYA_RT_LISTRIK'=> $biaya_rt_listrik,
                'BIAYA_RT_TRANSPORT'=> $biaya_rt_transportasi,
                'BIAYA_RT_SEKOLAH'=> $biaya_rt_sekolah,
                'BIAYA_RT_MAKAN'=> $biaya_rt_makan,
                'BIAYA_RT_PEMELIHARAAN'=> $biaya_rt_pemeliharaan,
                'BIAYA_RT_LAIN'=> $biaya_rt_lain,
                'ANGS_BANK_UMUM'=> $angs_bank_umum,
                'ANGS_BPR'=> $angs_bpr,
                'ANGS_LEASING'=> $angs_leasing,
                'ANGS_KOPERASI'=> $angs_koperasi,
                'ANGS_LAIN'=> $angs_lain,
                'PENDAPATAN_LAIN'=> $pendapatan_lain,
                'BIAYA_LAIN' => $biaya_angsuran_lain
            ]);
        }

        $hpp = str_replace('.', '', $request->total_biaya);
        $biaya_hidup = str_replace('.', '', $request->total_biaya_rt);
        $angs_bank_lain = str_replace('.', '', $request->total_angsuran);
        $pendapatan_lain = str_replace('.', '', $request->pendapatan_lain);
        $biaya_angsuran_lain = str_replace('.', '', $request->biaya_angsuran_lain);

        if ($limitkredit == null){
            TLimitkredit::insert([
                'ID_NASABAH' => $request->id,
                'LIMIT_KREDIT' => 0,
                'JANGKA_WAKTU' => 0,
                'OMSET' => $omset,
                'HPP' => $hpp,
                'BIAYA_HIDUP' => $biaya_hidup,
                'ANGS_BANK_LAIN' => $angs_bank_lain,
                'BUNGA_KREDIT' => 0,
                'ANGSURAN' => 0,
                'PEND_LAIN' => $pendapatan_lain,
                'RPC' => 0,
                'JENIS' => 0,
                'BIAYA_LAIN' => $biaya_angsuran_lain

            ]);
        }
        else{
            TLimitkredit::where('ID_NASABAH', $request->id)->update([
                'OMSET' => $omset,
                'HPP' => $hpp,
                'BIAYA_HIDUP' => $biaya_hidup,
                'ANGS_BANK_LAIN' => $angs_bank_lain,
                'PEND_LAIN' => $pendapatan_lain,
                'BIAYA_LAIN' => $biaya_angsuran_lain
            ]);
        }
        $nasabah = TNasabah::find($request->id);
        $biaya_bunga = $nasabah->LIMIT_KREDIT * $nasabah->BUNGA / 100;
        $rugilaba = TRugilaba::where('ID_NASABAH', $request->id)->first();
        if($rugilaba != null){
            $rugilaba->update([
                'PENJUALAN_BERSIH' => $omset,
                'HPP' => $hpp,
                'BIAYA_HIDUP' => $biaya_hidup,
                'PENDAPATAN_LAIN' => $pendapatan_lain,
                'BIAYA_LAIN' => $biaya_angsuran_lain,
                'PENYUSUTAN' => $angs_lain,
                'BIAYA_BUNGA' => $biaya_bunga
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
                 'BIAYA_PAJAK' => 0,
                 'SET_ASSET' => 0.05,
                 'SET_BIAYA' => 0.05,
                 'SET_HPP' => 0.75,
                 'BIAYA_HIDUP' => $biaya_hidup,
                 'PENDAPATAN_LAIN' => $pendapatan_lain,
                 'BIAYA_LAIN' => $biaya_angsuran_lain,
                 'PENYUSUTAN' => $angs_lain
             ]);
         }

         $capital = TCapital::where('ID_NASABAH', $request->id)->first();
         $capacity = TCapacity::where('ID_NASABAH', $request->id)->first();

         $dscr = ($omset - $hpp - $biaya_hidup - $angs_lain + $pendapatan_lain - $biaya_angsuran_lain) / (($nasabah->LIMIT_KREDIT / $nasabah->JANGKA_WAKTU) + ($nasabah->LIMIT_KREDIT * $nasabah->BUNGA / 100));
         $income_Sales = ($omset - $hpp) / $omset;
         $ebit_per_interest = ($omset - $hpp - $biaya_hidup - $angs_lain + $pendapatan_lain - $biaya_angsuran_lain) / ($nasabah->LIMIT_KREDIT * $nasabah->BUNGA / 100);
         $rpc = ($nasabah->LIMIT_KREDIT / $nasabah->JANGKA_WAKTU) / ($omset - $hpp - $biaya_hidup - $angs_lain + $pendapatan_lain - $biaya_angsuran_lain - ($nasabah->LIMIT_KREDIT / $nasabah->JANGKA_WAKTU));

         if($capital != null){
            $capital->update([

                'PK_INCOME_SALES' => $income_Sales,
                'RPC' => $rpc,
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
                'RPC' => $rpc,
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

        

        return redirect()->back()->with('success-add', 'message');
    }


    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $info_keuangan_nasabah = TKeuangan::where('ID_NASABAH', $id)->first();
        return view('infokeuangan', compact('info_keuangan_nasabah', 'nasabah'));

    }
}
