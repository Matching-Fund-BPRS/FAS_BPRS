<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCondition;
use App\Models\TNasabah;
use App\Models\TScoring;
use Illuminate\Support\Facades\Http;

class ConditionController extends Controller
{

    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id

        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $condition_nasabah = TCondition::where('ID_NASABAH', $id)->first();
        $Tscoring = TScoring::where('ID_NASABAH', $id)->first();
        $output = $Tscoring->CONDITION ?? 0;
        $result = null;
        return view('5condition',[
            'result_message' => $result,
            'condition_nasabah' => $condition_nasabah,
            'nasabah' => $nasabah,
            'output' => $output
        ]);
    }

    public function update(Request $request, $id){
        TCondition::where('ID_NASABAH', $id)->update([
            'CU_PASOKAN' => $request->cu_pasokan,
            'CU_KONSUMEN' => $request->cu_konsumen,
            'PEM_KETERGANTUNGAN' => $request->pem_ketergantungan,
            'PEM_KEBUTUHAN'=> $request->pem_kebutuhan,
            'CU_KECAKAPAN' => $request->cu_kecakapan, 
            'CU_EKSTERNAL' => $request->cu_eksternal,
            'ID_NASABAH' => $request->id
        ]);

        $response = Http::post('model:8000/condition', [
            'cu_pasokan' => intval($request->cu_pasokan),
            'cu_konsumen' => intval($request->cu_konsumen),
            'pem_ketergantungan' => intval($request->pem_ketergantungan),
            'pem_kebutuhan' => intval($request->pem_kebutuhan),
            'cu_kecakapan' => intval($request->cu_kecakapan),
            'cu_eksternal' => intval($request->cu_eksternal),
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $id)->first();
        if($Tscoring == null){
            $scoring = $output / 5;
            TScoring::insert([
                'ID_NASABAH' => $id,
                'CAPACITY' => 0,
                'CAPITAL' => 0,
                'CHARACTER' => 0,
                'COLLATERAL' => 0,
                'CONDITION' => $output,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = ($output + $Tscoring->CAPACITY+ $Tscoring->CHARACTER+ $Tscoring->COLLATERAL+ $Tscoring->CAPITAL) / 5;
            TScoring::where('ID_NASABAH', $id)->update([
                'CONDITION' => $output,
                'SCORING' => $scoring
            ]);
        }
        $result = "Berhasil memperbarui data!";
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        $condition_nasabah = TCondition::where('ID_NASABAH', $id)->first();

        return view('5condition',[
            'result_message' => $result,
            'nasabah' => $nasabah,
            'condition_nasabah' => $condition_nasabah,
            'output' => $output
        ])->with('message-edit', $result);
    }

    public function submitCondition(Request $request){
        // ambil data dari request terus jadiin JSON terus post ke API
        // ambil response dari API terus masukin di variabel

        TCondition::insert([
            'CU_PASOKAN' => $request->cu_pasokan,
            'CU_KONSUMEN' => $request->cu_konsumen,
            'PEM_KETERGANTUNGAN' => $request->pem_ketergantungan,
            'PEM_KEBUTUHAN'=> $request->pem_kebutuhan,
            'CU_KECAKAPAN' => $request->cu_kecakapan, 
            'CU_EKSTERNAL' => $request->cu_eksternal,
            'ID_NASABAH' => $request->id
        ]);

        $response = Http::post('model:8000/condition', [
            'cu_pasokan' => intval($request->cu_pasokan),
            'cu_konsumen' => intval($request->cu_konsumen),
            'pem_ketergantungan' => intval($request->pem_ketergantungan),
            'pem_kebutuhan' => intval($request->pem_kebutuhan),
            'cu_kecakapan' => intval($request->cu_kecakapan),
            'cu_eksternal' => intval($request->cu_eksternal),
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output / 5;
            TScoring::insert([
                'ID_NASABAH' => $request->id,
                'CAPACITY' => 0,
                'CAPITAL' => 0,
                'CHARACTER' => 0,
                'COLLATERAL' => 0,
                'CONDITION' => $output,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = ($output + $Tscoring->CAPACITY+ $Tscoring->CHARACTER+ $Tscoring->COLLATERAL+ $Tscoring->CAPITAL) / 5;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'CONDITION' => $output,
                'SCORING' => $scoring
            ]);
        }
        $result = "-";
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        $condition_nasabah = TCondition::where('ID_NASABAH', $request->id)->first();

        return view('5condition',[
            'result_message' => $result,
            'nasabah' => $nasabah,
            'condition_nasabah' => $condition_nasabah,
            'output' => $output
        ])->with('message-add', $result);
    }
}
