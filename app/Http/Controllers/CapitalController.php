<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TNasabah;
use App\Models\TCapital;

class CapitalController extends Controller
{
    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id
        $output = null;
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $capital_nasabah = TCapital::where('ID_NASABAH', $id)->first();
        $result = null;
        return view('5capital',[
            'output' => $output,
            'capital_nasabah' => $capital_nasabah,
            'nasabah' => $nasabah,
            'result_message' => $result
        ]);
    }

    public function submitCapital(Request $request){
        // ambil data dari request terus jadiin JSON terus post ke API
        // ambil response dari API terus masukin di variabel


        TCapital::insert([
            'CM_DAR' => $request->cm_dar,
            'CM_DER' => $request->cm_der,
            'CM_LDER' => $request->cm_lder,
            'PK_ASET' => $request->pk_asset,
            'PK_INCOME_SALES' => $request->pk_income_sales,
            'RPC' => $request->rpc,
            'PK_EBIT' => $request->pk_ebit,
            'ID_NASABAH' => $request->id
        ]);

        $output = null;
        $result = "Berhasil menambahkan data!";
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        $capital_nasabah = TCapital::where('ID_NASABAH',$request->id)->first();
        return view('5capital',[
            'capital_nasabah' => $capital_nasabah,
            'result' => $result,
            'output' => $output,
            'nasabah' => $nasabah,
            'result_message' => $result
        ]);
    }

    public function update(Request $request, $id){
        TCapital::where('ID_NASABAH', $id)->update([
            'CM_DAR' => $request->cm_dar,
            'CM_DER' => $request->cm_der,
            'CM_LDER' => $request->cm_lder,
            'PK_ASET' => $request->pk_asset,
            'PK_INCOME_SALES' => $request->pk_income_sales,
            'RPC' => $request->rpc,
            'PK_EBIT' => $request->pk_ebit,
        ]);

        $output = null;
        $result = "Berhasil memperbarui data!";
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $capital_nasabah = TCapital::where('ID_NASABAH', $id)->first();
        return view('5capital',[
            'capital_nasabah' => $capital_nasabah,
            'output' => $output,
            'nasabah' => $nasabah,
            'result_message' => $result
        ]);
    }
}
