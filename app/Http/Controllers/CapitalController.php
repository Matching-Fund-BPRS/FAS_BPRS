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
        // Validasi untuk memastikan semua inputan tidak memiliki value 0
        if($request->cm_dar == 0 || $request->cm_der == 0 || $request->cm_lder == 0 || $request->pk_asset == 0 || $request->pk_income_sales == 0 || $request->rpc == 0 || $request->pk_ebit == 0 || $request->id <= 0){
            return redirect()->back()->with('result_message', 'Mohon lengkapi form');
        }

        TCapital::insert([
            'CM_DAR' => -1 * $request->cm_dar,
            'CM_DER' => -1 * $request->cm_der,
            'CM_LDER' => -1 * $request->cm_lder,
            'PK_ASET' => str_replace('.', '', $request->pk_asset),
            'PK_INCOME_SALES' => $request->pk_income_sales,
            'RPC' => -1 * $request->rpc,
            'PK_EBIT' => $request->pk_ebit,
            'ID_NASABAH' => $request->id
        ]);

        $response = Http::post('model:9000/capital', [
            'cm_dar' => -1 * floatval($request->cm_dar),
            'cm_der' =>  -1 * floatval($request->cm_der),
            'cm_lder' =>  -1 * floatval($request->cm_lder),
            'pk_income_sales' => floatval($request->pk_income_sales),
            'pk_asset' => floatval(str_replace('.', '', $request->pk_asset)),
            'rpc' => -1 * floatval($request->rpc),
            'pk_ebit' => floatval($request->pk_ebit),
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output * 2 /10;
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
            $scoring = $output * 2 /10 + $Tscoring->CAPACITY * 2 /10+ $Tscoring->CHARACTER * 2 /10+ $Tscoring->COLLATERAL * 2 /10+ $Tscoring->CONDITION * 2 /10 + $Tscoring->SYARIAH * 5 /100;
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
        // Validasi untuk memastikan semua inputan tidak memiliki value 0
        if($request->cm_dar == 0 || $request->cm_der == 0 || $request->cm_lder == 0 || $request->pk_asset == 0 || $request->pk_income_sales == 0 || $request->rpc == 0 || $request->pk_ebit == 0){
            return redirect()->back()->with('result_message', 'Mohon lengkapi form');
        }

        TCapital::where('ID_NASABAH', $id)->update([
            'CM_DAR' => -1 * $request->cm_dar,
            'CM_DER' => -1 * $request->cm_der,
            'CM_LDER' => -1 * $request->cm_lder,
            'PK_ASET' => str_replace('.', '', $request->pk_asset),
            'PK_INCOME_SALES' => $request->pk_income_sales,
            'RPC' => -1 * $request->rpc,
            'PK_EBIT' => $request->pk_ebit,
        ]);
        $response = Http::post('model:9000/capital', [
            'cm_dar' => -1 * floatval($request->cm_dar),
            'cm_der' =>  -1 * floatval($request->cm_der),
            'cm_lder' =>  -1 * floatval($request->cm_lder),
            'pk_income_sales' => floatval($request->pk_income_sales),
            'pk_asset' => floatval(str_replace('.', '', $request->pk_asset)),
            'rpc' => -1 * floatval($request->rpc),
            'pk_ebit' => floatval($request->pk_ebit),
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output * 2 /10;
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
            $scoring = $output * 2 /10 + $Tscoring->CAPACITY * 2 /10+ $Tscoring->CHARACTER * 2 /10+ $Tscoring->COLLATERAL * 2 /10+ $Tscoring->CONDITION * 2 /10 + $Tscoring->SYARIAH * 5 /100;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'CAPITAL' => $output,
                'SCORING' => $scoring
            ]);
        }
        $result = "Berhasil memperbarui data!";
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

