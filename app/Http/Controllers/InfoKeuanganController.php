<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TKeuangan;
use App\Models\TLimitkredit;
use App\Models\TNasabah;

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
        
        return redirect()->back()->with('success-add', 'message');
    }


    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $info_keuangan_nasabah = TKeuangan::where('ID_NASABAH', $id)->first();
        return view('infokeuangan', compact('info_keuangan_nasabah', 'nasabah'));

    }
}
