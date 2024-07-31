<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCapacity;
use App\Models\TNasabah;
use App\Models\TScoring;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class CapacityController extends Controller
{

    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id
        $result = null;
        $capacity_nasabah = TCapacity::where('ID_NASABAH', $id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $Tscoring = TScoring::where('ID_NASABAH', $id)->first();
        $output = $Tscoring->CAPACITY ?? 0;
        return view('5capacity',[
            'capacity_nasabah' => $capacity_nasabah,
            'output' => $output,
            'nasabah' => $nasabah,
            'result_message' => $result
        ]);
    }

    public function submitCapacity(Request $request){
        // Validasi untuk memastikan semua inputan tidak memiliki value 0
        $rules = [
            'teh_utilisasi' => 'required|integer|min:1',
            'teh_lama_usaha' => 'required|integer|min:1',
            'cb_manajemen_sdm' => 'required|integer|min:1',
            'cb_pengelolaan' => 'required|integer|min:1',
            'cb_dscr' => 'required|integer|min:1',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails() || false == true) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('result_message', 'Mohon lengkapi form');
        }

        TCapacity::insert([
            'TEH_UTILISASI' => $request->teh_utilisasi,
            'TEH_LAMA_USAHA' => $request->teh_lama_usaha,
            'CB_MANAJEMEN_SDM' => $request->cb_manajemen_sdm,
            'CB_PENGELOLAAN' => $request->cb_pengelolaan,
            'CB_DSCR' => $request->cb_dscr,
            'ID_NASABAH' => $request->id,
        ]);

        $response = Http::post('http://127.0.0.1:9000/capacity', [
            'teh_utilisasi' => intval($request->teh_utilisasi),
            'teh_lama_usaha' => intval($request->teh_lama_usaha),
            'cb_manajemen_sdm' => intval($request->cb_manajemen_sdm),
            'cb_pengelolaan' => intval($request->cb_pengelolaan),
            'cb_dscr' => intval($request->cb_dscr)
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output * 2 / 10;
            TScoring::insert([
                'ID_NASABAH' => $request->id,
                'CAPACITY' => $output,
                'CAPITAL' => 0,
                'CHARACTER' => 0,
                'COLLATERAL' => 0,
                'CONDITION' => 0,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = $output* 2 / 10 + $Tscoring->COLLATERAL* 2 / 10+ $Tscoring->CHARACTER* 2 / 10+ $Tscoring->CAPITAL* 2 / 10+ $Tscoring->CONDITION* 15 / 100 + $Tscoring->SYARIAH* 5 / 100;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'CAPACITY' => $output,
                'SCORING' => $scoring
            ]);
        }

        
        $result = "Berhasil menambahkan data!";

        $capacity_nasabah = TCapacity::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return view('5capacity',[
            'capacity_nasabah' => $capacity_nasabah,
            'nasabah' => $nasabah,
            'output' => $output,
            'result_message' => $result
        ]);
    }

    public function update(Request $request, $id){
        // Validasi untuk memastikan semua inputan tidak memiliki value 0
        $rules = [
            'teh_utilisasi' => 'required|integer|min:1',
            'teh_lama_usaha' => 'required|integer|min:1',
            'cb_manajemen_sdm' => 'required|integer|min:1',
            'cb_pengelolaan' => 'required|integer|min:1',
            'cb_dscr' => 'required|min:1',
        ];

        $validator = Validator::make($request->all(), $rules);
        //dd($validator, $request->all());
        if ($validator->fails() || false == true) {
            return redirect()->back()->with('result_message', 'Mohon lengkapi form');
        }

        TCapacity::where('ID_NASABAH', $id)->update([
            'TEH_UTILISASI' => $request->teh_utilisasi,
            'TEH_LAMA_USAHA' => $request->teh_lama_usaha,
            'CB_MANAJEMEN_SDM' => $request->cb_manajemen_sdm,
            'CB_PENGELOLAAN' => $request->cb_pengelolaan,
            'CB_DSCR' => $request->cb_dscr,
        ]);

        $response = Http::post('http://127.0.0.1:9000/capacity', [
            'teh_utilisasi' => intval($request->teh_utilisasi),
            'teh_lama_usaha' => intval($request->teh_lama_usaha),
            'cb_manajemen_sdm' => intval($request->cb_manajemen_sdm),
            'cb_pengelolaan' => intval($request->cb_pengelolaan),
            'cb_dscr' => intval($request->cb_dscr)
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output * 2 / 10;
            TScoring::insert([
                'ID_NASABAH' => $request->id,
                'CAPACITY' => $output,
                'CAPITAL' => 0,
                'CHARACTER' => 0,
                'COLLATERAL' => 0,
                'CONDITION' => 0,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = $output* 2 / 10 + $Tscoring->COLLATERAL* 2 / 10+ $Tscoring->CHARACTER* 2 / 10+ $Tscoring->CAPITAL* 2 / 10+ $Tscoring->CONDITION* 15 / 100 + $Tscoring->SYARIAH* 5 / 100;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'CAPACITY' => $output,
                'SCORING' => $scoring
            ]);
        }

        //ini bikin conditional berdasarkan response dari API
        //kalo berhasil edit, result == berhasil
        //kalo gagal, result == gagal
        $result = "Berhasil memperbarui data";

        $capacity_nasabah = TCapacity::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return view('5capacity',[
            'capacity_nasabah' => $capacity_nasabah,
            'result' => $result,
            'nasabah' => $nasabah,
            'output' => $output,
            'result_message' =>  $result
        ]);
    }
}
