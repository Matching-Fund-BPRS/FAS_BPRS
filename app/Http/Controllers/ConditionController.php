<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCondition;
use App\Models\TNasabah;
use Illuminate\Support\Facades\Http;

class ConditionController extends Controller
{

    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id

        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $condition_nasabah = TCondition::where('ID_NASABAH', $id)->first();
        $result = null;
        $output = null;
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

        $response = Http::post('model:5000/condition', [
            'cu_pasokan' => intval($request->cu_pasokan),
            'cu_konsumen' => intval($request->cu_konsumen),
            'pem_ketergantungan' => intval($request->pem_ketergantungan),
            'pem_kebutuhan' => intval($request->pem_kebutuhan),
            'cu_kecakapan' => intval($request->cu_kecakapan),
            'cu_eksternal' => intval($request->cu_eksternal),
        ]);

        $output = $response->json()['data']['percentage'];
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

        $response = Http::post('model:5000/condition', [
            'cu_pasokan' => intval($request->cu_pasokan),
            'cu_konsumen' => intval($request->cu_konsumen),
            'pem_ketergantungan' => intval($request->pem_ketergantungan),
            'pem_kebutuhan' => intval($request->pem_kebutuhan),
            'cu_kecakapan' => intval($request->cu_kecakapan),
            'cu_eksternal' => intval($request->cu_eksternal),
        ]);

        $output = $response->json()['data']['percentage'];
        $result = "Berhasil menambahkan data!";
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
