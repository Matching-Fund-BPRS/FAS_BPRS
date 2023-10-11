<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TLimitkredit;
use App\Models\TNasabah;

class LimitKreditController extends Controller
{
    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        return view('limitkredit', [
            'nasabah' => $nasabah,
            'limit_kredit_nasabah' => TLimitKredit::where('ID_NASABAH', $id)->first(),
            'keputusan' => null
        ]);
    }

    public function addLimitKredit(Request $request){
        dd($request);
        // TLimitKredit::insert([
            // 'ID_NASABAH' => ,
            // 'LIMIT_KREDIT' => ,
            // 'JANGKA_WAKTU' => ,
            // 'OMSET' => , 
            // 'HPP' => ,
            // 'BIAYA_HIDUP' => ,
            // 'ANGS_BANK_LAIN' => ,
            // 'BUNGA KREDIT' => ,
            // 'ANGSURAN' => ,
            // 'PEND_LAIN' => ,
            // 'RPC' =>
            // 'JENIS' => ,
            // 'BIAYA_LAIN' => ,
        // ]);

        // return view('limitkredit', [

        // ]);
    }

    public function editLimitKredit(Request $request, $id){
        dd($request);
        // TLimitKredit::where('ID_NASABAH', $id)->update([
            // 'ID_NASABAH' => ,
            // 'LIMIT_KREDIT' => ,
            // 'JANGKA_WAKTU' => ,
            // 'OMSET' => , 
            // 'HPP' => ,
            // 'BIAYA_HIDUP' => ,
            // 'ANGS_BANK_LAIN' => ,
            // 'BUNGA KREDIT' => ,
            // 'ANGSURAN' => ,
            // 'PEND_LAIN' => ,
            // 'RPC' =>
            // 'JENIS' => ,
            // 'BIAYA_LAIN' => ,
        // ]);

        // return view('limitkredit', [

        // ]);
    }
}
