<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCollateral;
use App\Models\TNasabah;
use App\Models\TScoring;
use Illuminate\Support\Facades\Http;

class CollateralController extends Controller
{
    public function index($id){
        // request data 5c nasabah ke API dengan paramter $id

        $collateral_nasabah = TCollateral::where('ID_NASABAH', $id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $Tscoring = TScoring::where('ID_NASABAH', $id)->first();
        $output = $Tscoring->COLLATERAL ?? 0;
        return view('5collateral',[
            'result' => "-",
            'collateral_nasabah' => $collateral_nasabah,
            'nasabah' => $nasabah,
            'output' => $output
        ]);
    }

    public function submitCollateral(Request $request){
        // ambil data dari request terus jadiin JSON terus post ke API
        // ambil response dari API terus masukin di variabel


        TCollateral::insert([
            'CA_NILAI_AGUNAN' => $request->ca_nilai_agunan,
            'PA_DOKUMEN' =>$request->pa_dokumen,
            'LEG_USAHA' => $request->leg_usaha,
            'PENGIKATAN' => $request->pengikatan,
            'MARKETABILITY' => $request->marketability,
            'KEPEMILIKAN' => $request->kepemilikan,
            'PENGUASAAN' => $request->penguasaan,
            'ID_NASABAH' => $request->id_nasabah,
        ]);
        $response = Http::post('model:5000/collateral', [
            'ca_nilai_agunan' => $request->ca_nilai_agunan,
            'pa_dokumen' => $request->pa_dokumen,
            'leg_usaha' => $request->leg_usaha,
            'pengikatan' => $request->pengikatan,
            'marketability' => $request->marketability,
            'kepemilikan' => $request->kepemilikan,
            'penguasaan' => $request->penguasaan
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->ID_NASABAH)->first();
        if($Tscoring == null){
            $scoring = $output / 5;
            TScoring::insert([
                'ID_NASABAH' => $request->ID_NASABAH,
                'CAPACITY' => 0,
                'CAPITAL' => 0,
                'CHARACTER' => 0,
                'COLLATERAL' => $output,
                'CONDITION' => 0,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = ($output + $Tscoring->CAPACITY+ $Tscoring->CHARACTER+ $Tscoring->CAPITAL+ $Tscoring->CONDITION) / 5;
            TScoring::where('ID_NASABAH', $request->ID_NASABAH)->update([
                'COLLATERAL' => $output,
                'SCORING' => $scoring
            ]);
        }
        $result = "-";
        $nasabah = TCollateral::where('ID_NASABAH', $request->id);
        $collateral_nasabah = TCollateral::where('ID_NASABAH', $request->id)->first();
        return view('5collateral',[
            'result' => $result,
            'collateral_nasabah' => $collateral_nasabah,
            'nasabah' => $nasabah,
            'output' => $output

        ])->with('message', $result);
    }

    public function update(Request $request, $id){
        TCollateral::where('ID_NASABAH', $id)->update([
            'CA_NILAI_AGUNAN' => $request->ca_nilai_agunan,
            'PA_DOKUMEN' =>$request->pa_dokumen,
            'LEG_USAHA' => $request->leg_usaha,
            'PENGIKATAN' => $request->pengikatan,
            'MARKETABILITY' => $request->marketability,
            'KEPEMILIKAN' => $request->kepemilikan,
            'PENGUASAAN' => $request->penguasaan,
        ]);
        $response = Http::post('model:5000/collateral', [
            'ca_nilai_agunan' => intval($request->ca_nilai_agunan),
            'pa_dokumen' => intval($request->pa_dokumen),
            'leg_usaha' => intval($request->leg_usaha),
            'pengikatan' => intval($request->pengikatan),
            'marketability' => intval($request->marketability),
            'kepemilikan' => intval($request->kepemilikan),
            'penguasaan' => intval($request->penguasaan)
        ]);

        $output = $response->json()['data']['percentage'];
        
        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->ID_NASABAH)->first();
        if($Tscoring == null){
            $scoring = $output / 5;
            TScoring::insert([
                'ID_NASABAH' => $request->ID_NASABAH,
                'CAPACITY' => 0,
                'CAPITAL' => 0,
                'CHARACTER' => 0,
                'COLLATERAL' => $output,
                'CONDITION' => 0,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = ($output + $Tscoring->CAPACITY+ $Tscoring->CHARACTER+ $Tscoring->CAPITAL+ $Tscoring->CONDITION) / 5;
            TScoring::where('ID_NASABAH', $request->ID_NASABAH)->update([
                'COLLATERAL' => $output,
                'SCORING' => $scoring
            ]);
        }
        $result = "-";
        $nasabah = TCollateral::where('ID_NASABAH', $request->id)->first();
        $collateral_nasabah = TCollateral::where('ID_NASABAH', $id)->first();
        return view('5collateral',[
            'result' => $result,
            'collateral_nasabah' => $collateral_nasabah,
            'nasabah' => $nasabah,
            'output' => $output
        ])->with('message', $result);
    }
}
