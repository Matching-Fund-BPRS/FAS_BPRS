<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCharacter;
use App\Models\TNasabah;
use App\Models\TScoring;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{
    public function index($id){
        $character_nasabah =TCharacter::where('ID_NASABAH', $id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $result = null;
        $Tscoring = TScoring::where('ID_NASABAH', $id)->first();
        $output = $Tscoring->CHARACTER ?? 0;
        return view('5character',[
            'result' => "-",
            'output' => $output,
            'nasabah' => $nasabah,
            'character_nasabah' => $character_nasabah,
            'result_message' => $result,
        ]);
    }

    public function submitCharacter(Request $request){
        // ambil data dari request terus jadiin JSON terus post ke API
        TCharacter::insert([
            'MAN_KEMAUAN' => $request->man_kemauan,
            'MAN_KEJUJURAN' => $request->man_kejujuran,
            'MAN_REPUTASI' => $request->man_reputasi,
            'CW_TANGGUNG' => $request->cw_tanggung,
            'CW_TERBUKA' => $request->cw_terbuka,
            'CW_DISIPLIN' => $request->cw_disiplin,
            'CW_JANJI' => $request->cw_janji,
            'PU_INTEGRITAS' => $request->pu_integritas,
            'PU_ACCOUNT_BEHAVIOR' => $request->pu_account_behavior,
            'ID_NASABAH' => $request->id
        ]);
        
        // ambil response dari API terus masukin di variabel
        $response = Http::post('model:8000/character', [
            'man_kemauan' => intval($request->man_kemauan),
            'man_kejujuran' => intval($request->man_kejujuran),
            'man_reputasi' => intval($request->man_reputasi),
            'cw_tanggung' => intval($request->cw_tanggung),
            'cw_terbuka' => intval($request->cw_terbuka),
            'cw_displin' => intval($request->cw_displin),
            'cw_janji' => intval($request->cw_janji),
            'pu_integritas' => intval($request->pu_integritas),
            'pu_account_behaviour' => intval($request->pu_account_behaviour),
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output / 5;
            TScoring::insert([
                'ID_NASABAH' => $request->id,
                'CAPACITY' => 0,
                'CAPITAL' => 0,
                'CHARACTER' => $output,
                'COLLATERAL' => 0,
                'CONDITION' => 0,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = ($output + $Tscoring->COLLATERAL+ $Tscoring->CHARACTER+ $Tscoring->CAPITAL+ $Tscoring->CONDITION) / 5;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'CHARACTER' => $output,
                'SCORING' => $scoring
            ]);
        }

        $result = "Berhasil menambahkan data!";
        $character_nasabah =TCharacter::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return view('5character',[
            'output' => $output,
            'nasabah' => $nasabah,
            'character_nasabah' => $character_nasabah,
            'result_message' => $result,
        ]);
    }

    public function update(Request $request, $id){
        TCharacter::where('ID_NASABAH', $id)->update([
            'MAN_KEMAUAN' => $request->man_kemauan,
            'MAN_KEJUJURAN' => $request->man_kejujuran,
            'MAN_REPUTASI' => $request->man_reputasi,
            'CW_TANGGUNG' => $request->cw_tanggung,
            'CW_TERBUKA' => $request->cw_terbuka,
            'CW_DISIPLIN' => $request->cw_disiplin,
            'CW_JANJI' => $request->cw_janji,
            'PU_INTEGRITAS' => $request->pu_integritas,
            'PU_ACCOUNT_BEHAVIOR' => $request->pu_account_behavior,
        ]);
        $response = Http::post('model:8000/character', [
            'man_kemauan' => intval($request->man_kemauan),
            'man_kejujuran' => intval($request->man_kejujuran),
            'man_reputasi' => intval($request->man_reputasi),
            'cw_tanggung' => intval($request->cw_tanggung),
            'cw_terbuka' => intval($request->cw_terbuka),
            'cw_displin' => intval($request->cw_displin),
            'cw_janji' => intval($request->cw_janji),
            'pu_integritas' => intval($request->pu_integritas),
            'pu_account_behavior' => intval($request->pu_account_behavior),
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output / 5;
            TScoring::insert([
                'ID_NASABAH' => $request->id,
                'CAPACITY' => 0,
                'CAPITAL' => 0,
                'CHARACTER' => $output,
                'COLLATERAL' => 0,
                'CONDITION' => 0,
                'SYARIAH' => 0,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = ($output + $Tscoring->COLLATERAL+ $Tscoring->CHARACTER+ $Tscoring->CAPITAL+ $Tscoring->CONDITION) / 5;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'CHARACTER' => $output,
                'SCORING' => $scoring
            ]);
        }

        $result = "Berhasil memperbarui data!";
        $character_nasabah =TCharacter::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return view('5character',[
            'result' => $result,
            'output' => $output,
            'nasabah' => $nasabah,
            'character_nasabah' => $character_nasabah,
            'result_message' => $result,
        ]);
    }
}
