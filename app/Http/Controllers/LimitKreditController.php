<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TLimitkredit;

class LimitKreditController extends Controller
{
    public function index(){
        return view('limitkredit', [
            
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
}
