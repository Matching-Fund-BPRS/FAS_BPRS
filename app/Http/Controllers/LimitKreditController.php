<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TLimitkredit;
use App\Models\TNasabah;

class LimitKreditController extends Controller
{
    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();

        if($nasabah != null){
            $angsuran = $nasabah->LIMIT_KREDIT * $nasabah->MARGIN;
        }
        return view('limitkredit', [
            'nasabah' => $nasabah,
            'limit_kredit_nasabah' => TLimitKredit::where('ID_NASABAH', $id)->first(),
            'keputusan' => '-'
        ]);
    }

    public function addLimitKredit(Request $request){
        $angsuran = $request->margin * $request->limit_kredit;
        $rpc = $request->angsuran / $request->lamabersih;
        TLimitKredit::insert([
            'ID_NASABAH' => $request->id ,
            'LIMIT_KREDIT' => $request->limit_kredit,
            'JANGKA_WAKTU' => $request->jangka_waktu,
            'OMSET' => $request->omset, 
            'HPP' => $request->hpp,
            'BIAYA_HIDUP' => null, //gatau drmn
            'ANGS_BANK_LAIN' => $request->angsuran_bank_lain,
            'BUNGA_KREDIT' => null, //gatau darimana
            'ANGSURAN' => $request->angsuran,
            'PEND_LAIN' => $request->pendapatan_lain,
            'RPC' => $rpc, 
            'JENIS' => 1, //konvert dari string ke angka sesuai nilainya
            'BIAYA_LAIN' => $request->biaya_lain,
        ]);

        return redirect()->back()->with('success-add', 'message');
    }

    public function editLimitKredit(Request $request, $id){
        TLimitKredit::where('ID_NASABAH', $id)->update([
            'LIMIT_KREDIT' => $request->limit_kredit,
            'JANGKA_WAKTU' => $request->jangka_waktu,
            'OMSET' => $request->omset, 
            'HPP' => $request->hpp,
            'BIAYA_HIDUP' => null, //gatau drmn
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
