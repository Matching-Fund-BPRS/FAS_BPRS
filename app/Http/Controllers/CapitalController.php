<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TNasabah;
use App\Models\TCapital;
use App\Models\TScoring;
use Illuminate\Support\Facades\Http;

class CapitalController extends Controller
{
    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id
        $output = null;
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $capital_nasabah = TCapital::where('ID_NASABAH', $id)->first();
        $Tscoring = TScoring::where('ID_NASABAH', $id)->first();
        $output = $Tscoring->CAPITAL ?? 0;
        $result = null;
        return view('5capital',[
            'capital_nasabah' => $capital_nasabah,
            'nasabah' => $nasabah,
            'output' => $output,
            'result_message' => $result
        ]);
    }

    public function submitCapital(Request $request){
        // ambil data dari request terus jadiin JSON terus post ke API
        // ambil response dari API terus masukin di variabel


        TCapital::insert([
            'CM_DAR' => -1 * $request->cm_dar,
            'CM_DER' => -1 * $request->cm_der,
            'CM_LDER' => -1 * $request->cm_lder,
            'PK_ASET' => str_replace('.', '', $request->pk_asset),
            'PK_INCOME_SALES' => $request->pk_income_sales,
            'RPC' => $request->rpc,
            'PK_EBIT' => $request->pk_ebit,
            'ID_NASABAH' => $request->id
        ]);

        $response = Http::post('model:8000/capital', [
            'cm_dar' => -1 * floatval($request->cm_dar),
            'cm_der' =>  -1 * floatval($request->cm_der),
            'cm_lder' =>  -1 * floatval($request->cm_lder),
            'pk_income_sales' => floatval($request->pk_income_sales),
            'rpc' => -1 * floatval($request->rpc),
            'pk_ebit' => floatval($request->pk_ebit),
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output / 5;
            TScoring::insert([
                'ID_NASABAH' => $request->id,
                'CAPACITY' => 0,
                'CAPITAL' => $output,
                'CHARACTER' => 0,
                'COLLATERAL' => 0,
                'CONDITION' => 0,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = ($output + $Tscoring->CAPACITY+ $Tscoring->CHARACTER+ $Tscoring->COLLATERAL+ $Tscoring->CONDITION) / 5;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'CAPITAL' => $output,
                'SCORING' => $scoring
            ]);
        }

        $result = "Berhasil menambahkan data!";
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        $capital_nasabah = TCapital::where('ID_NASABAH',$request->id)->first();
        return view('5capital',[
            'capital_nasabah' => $capital_nasabah,
            'output' => $output,
            'nasabah' => $nasabah,
            'output' => $output,
            'result_message' => $result
        ]);
    }

    public function update(Request $request, $id){
        TCapital::where('ID_NASABAH', $id)->update([
            'CM_DAR' => -1 * $request->cm_dar,
            'CM_DER' => -1 * $request->cm_der,
            'CM_LDER' => -1 * $request->cm_lder,
            'PK_ASET' => str_replace('.', '', $request->pk_asset),
            'PK_INCOME_SALES' => $request->pk_income_sales,
            'RPC' => $request->rpc,
            'PK_EBIT' => $request->pk_ebit,
        ]);
        $response = Http::post('model:8000/capital', [
            'cm_dar' => -1 * floatval($request->cm_dar),
            'cm_der' =>  -1 * floatval($request->cm_der),
            'cm_lder' =>  -1 * floatval($request->cm_lder),
            'pk_income_sales' => floatval($request->pk_income_sales),
            'rpc' => -1 * floatval($request->rpc),
        'pk_ebit' => floatval($request->pk_ebit),
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output / 5;
            TScoring::insert([
                'ID_NASABAH' => $request->id,
                'CAPACITY' => 0,
                'CAPITAL' => $output,
                'CHARACTER' => 0,
                'COLLATERAL' => 0,
                'CONDITION' => 0,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = ($output + $Tscoring->CAPACITY+ $Tscoring->CHARACTER+ $Tscoring->COLLATERAL+ $Tscoring->CONDITION) / 5;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'CAPITAL' => $output,
                'SCORING' => $scoring
            ]);
        }
        $result = "-";
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $capital_nasabah = TCapital::where('ID_NASABAH', $id)->first();

        return view('5capital',[
            'capital_nasabah' => $capital_nasabah,
            'result_message' => $result,
            'nasabah' => $nasabah,
            'output'=>$output
        ])->with('message', "Berhasil memperbarui data!");
    }
}
