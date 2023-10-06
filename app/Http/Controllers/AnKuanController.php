<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TKuantitatif;
use App\Models\TAgunan;
use App\Models\TResiko;

class AnKuanController extends Controller
{
    public function anKuanIndex(){
        return view('ankuan',[
            'data_tabel_agunan_asuransi' => TAgunan::paginate(5)
        ]);
    }

    public function addResiko(Request $request){
        dd($request);
        // TResiko::insert([
        //     'ID_NASABAH' => $request->id_nasabah,
        //     'RESIKO' => $request->resiko,
        //     'MITIGASI_RESIKO' => $request->mitigasi_resiko
        // ]);
    }
}
