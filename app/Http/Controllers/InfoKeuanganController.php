<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TKeuangan;
use App\Models\TLimitkredit;
use App\Models\TNasabah;

class InfoKeuanganController extends Controller
{
    public function addInfoKeuangan(Request $request){
        $keuangan = TKeuangan::where('ID_NASABAH', $request->id)->first();
        $limitkredit = TLimitkredit::where('ID_NASABAH', $request->id)->first();
        if ($keuangan == null){
            TKeuangan::insert([
                'ID_NASABAH' => $request->id,
                'OMZET'=> $request->omset,
                'BIAYA_GAJI'=> $request->biaya_gaji,
                'BIAYA_BB'=> $request->biaya_bahan_baku,
                'BIAYA_STOK'=> $request->biaya_stok,
                'BIAYA_PRODUKSI'=> $request->biaya_produksi,
                'BIAYA_TRANSPORT'=> $request->biaya_transportasi,
                'BIAYA_USAHA_LAIN'=> $request->biaya_usaha_lain,
                'BIAYA_RT_LISTRIK'=> $request->biaya_rt_listrik,
                'BIAYA_RT_TRANSPORT'=> $request->biaya_rt_transportasi,
                'BIAYA_RT_SEKOLAH'=> $request->biaya_rt_sekolah,
                'BIAYA_RT_MAKAN'=> $request->biaya_rt_makan,
                'BIAYA_RT_PEMELIHARAAN'=> $request->biaya_rt_pemeliharaan,
                'BIAYA_PENUNJANG_USAHA'=> $request->biaya_rt_penunjang_usaha,
                'BIAYA_RT_LAIN'=> $request->biaya_rt_lain,
                'ANGS_BANK_UMUM'=> $request->angs_bank_umum,
                'ANGS_BPR'=> $request->angs_bpr,
                'ANGS_LEASING'=> $request->angs_leasing,
                'ANGS_KOPERASI'=> $request->angs_koperasi,
                'ANGS_LAIN'=> $request->angs_lain,
                'PENDAPATAN_LAIN'=> $request->pendapatan_lain,
                'BIAYA_LAIN' => $request->biaya_angsuran_lain,
            ]);
        }
        else{
            TKeuangan::where('ID_NASABAH', $request->id)->update([
                'OMZET'=> $request->omset,
                'BIAYA_GAJI'=> $request->biaya_gaji,
                'BIAYA_BB'=> $request->biaya_bahan_baku,
                'BIAYA_STOK'=> $request->biaya_stok,
                'BIAYA_PRODUKSI'=> $request->biaya_produksi,
                'BIAYA_TRANSPORT'=> $request->biaya_transportasi,
                'BIAYA_USAHA_LAIN'=> $request->biaya_usaha_lain,
                'BIAYA_RT_LISTRIK'=> $request->biaya_rt_listrik,
                'BIAYA_RT_TRANSPORT'=> $request->biaya_rt_transportasi,
                'BIAYA_RT_SEKOLAH'=> $request->biaya_rt_sekolah,
                'BIAYA_RT_MAKAN'=> $request->biaya_rt_makan,
                'BIAYA_RT_PEMELIHARAAN'=> $request->biaya_rt_pemeliharaan,
                'BIAYA_PENUNJANG_USAHA'=> $request->biaya_rt_penunjang_usaha,
                'BIAYA_RT_LAIN'=> $request->biaya_rt_lain,
                'ANGS_BANK_UMUM'=> $request->angs_bank_umum,
                'ANGS_BPR'=> $request->angs_bpr,
                'ANGS_LEASING'=> $request->angs_leasing,
                'ANGS_KOPERASI'=> $request->angs_koperasi,
                'ANGS_LAIN'=> $request->angs_lain,
                'PENDAPATAN_LAIN'=> $request->pendapatan_lain,
                'BIAYA_LAIN' => $request->biaya_angsuran_lain,
            ]);
        }

        if ($limitkredit == null){
            TLimitkredit::insert([
                'ID_NASABAH' => $request->id,
                'LIMIT_KREDIT' => 0,
                'JANGKA_WAKTU' => 0,
                'OMSET' => $request->omset,
                'HPP' => $request->total_biaya,
                'BIAYA_HIDUP' => $request->total_biaya_rt,
                'ANGS_BANK_LAIN' => $request->total_angsuran,
                'BUNGA_KREDIT' => 0,
                'ANGSURAN' => 0,
                'PEND_LAIN' => $request->pendapatan_lain,
                'RPC' => 0,
                'JENIS' => 0,
                'BIAYA_LAIN' => $request->biaya_angsuran_lain

            ]);
        }
        else{
            TLimitkredit::where('ID_NASABAH', $request->id)->update([
                'OMSET' => $request->omset,
                'HPP' => $request->total_biaya,
                'BIAYA_HIDUP' => $request->total_biaya_rt,
                'ANGS_BANK_LAIN' => $request->total_angsuran,
                'PEND_LAIN' => $request->pendapatan_lain,
                'BIAYA_LAIN' => $request->biaya_angsuran_lain
            ]);
        }
        
        return redirect()->back()->with('success-add', 'message');
    }

    public function editInfoKeuangan(Request $request, $id){
        TKeuangan::where('ID_NASABAH', $id)->update([
            'OMZET'=> $request->omset,
            'BIAYA_GAJI'=> $request->biaya_gaji,
            'BIAYA_BB'=> $request->biaya_bahan_baku,
            'BIAYA_STOK'=> $request->biaya_stok,
            'BIAYA_PRODUKSI'=> $request->biaya_produksi,
            'BIAYA_TRANSPORT'=> $request->biaya_transportasi,
            'BIAYA_USAHA_LAIN'=> $request->biaya_usaha_lain,
            'BIAYA_RT_LISTRIK'=> $request->biaya_rt_listrik,
            'BIAYA_RT_TRANSPORT'=> $request->biaya_rt_transportasi,
            'BIAYA_RT_SEKOLAH'=> $request->biaya_rt_sekolah,
            'BIAYA_RT_MAKAN'=> $request->biaya_rt_makan,
            'BIAYA_RT_PEMELIHARAAN'=> $request->biaya_rt_pemeliharaan,
            'BIAYA_PENUNJANG_USAHA'=> $request->biaya_rt_penunjang_usaha,
            'BIAYA_RT_LAIN'=> $request->biaya_rt_lain,
            'ANGS_BANK_UMUM'=> $request->angs_bank_umum,
            'ANGS_BPR'=> $request->angs_bpr,
            'ANGS_LEASING'=> $request->angs_leasing,
            'ANGS_KOPERASI'=> $request->angs_koperasi,
            'ANGS_LAIN'=> $request->angs_lain,
            'PENDAPATAN_LAIN'=> $request->pendapatan_lain,
            'BIAYA_LAIN' => $request->biaya_angsuran_lain,
        ]);
        return redirect()->back()->with('success-edit', 'message');
    }

    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $info_keuangan_nasabah = TKeuangan::where('ID_NASABAH', $id)->first();
        return view('infokeuangan', compact('info_keuangan_nasabah', 'nasabah'));

    }
}
