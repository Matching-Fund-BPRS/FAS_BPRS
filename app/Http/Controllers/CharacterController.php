<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCharacter;
use App\Models\TNasabah;
use App\Models\TScoring;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
        // Validasi untuk memastikan semua inputan tidak memiliki value 0
        $validated = $request->validate([
            'man_kemauan' => 'required|integer|min:1',
            'man_kejujuran' => 'required|integer|min:1',
            'man_reputasi' => 'required|integer|min:1',
            'cw_tanggung' => 'required|integer|min:1',
            'cw_terbuka' => 'required|integer|min:1',
            'cw_disiplin' => 'required|integer|min:1',
            'cw_janji' => 'required|integer|min:1',
            'pu_integritas' => 'required|integer|min:1',
            'pu_account_behavior' => 'required|integer|min:1',
            'id' => 'required|integer|min:1',
        ]);

        if (!$validated) {
            return redirect()->back()->with('result_message', 'Mohon lengkapi form');
        }

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
        
        $response = Http::post('model/character', [
            'man_kemauan' => intval($request->man_kemauan),
            'man_kejujuran' => intval($request->man_kejujuran),
            'man_reputasi' => intval($request->man_reputasi),
            'cw_tanggung' => intval($request->cw_tanggung),
            'cw_terbuka' => intval($request->cw_terbuka),
            'cw_displin' => intval($request->cw_disiplin),
            'cw_janji' => intval($request->cw_janji),
            'pu_integritas' => intval($request->pu_integritas),
            'pu_account_behavior' => intval($request->pu_account_behavior),
        ]);
        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output * 2/ 10 ;
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
            $scoring = $output  * 2/ 10 + $Tscoring->COLLATERAL  * 2/ 10+ $Tscoring->CHARACTER  * 2/ 10+ $Tscoring->CAPITAL  * 2/ 10+ $Tscoring->CONDITION  * 2/ 10 + $Tscoring->SYARIAH * 5/100;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'CHARACTER' => $output,
                'SCORING' => $scoring
            ]);
        }

        $result = "Berhasil menambahkan data!";
        $character_nasabah =TCharacter::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return redirect()->back()->with('message', $result);
    }

    public function update(Request $request, $id){

        // Validasi untuk memastikan semua inputan tidak memiliki value 0
        $rules = [
            'man_kemauan' => 'required|integer|min:1',
            'man_kejujuran' => 'required|integer|min:1',
            'man_reputasi' => 'required|integer|min:1',
            'cw_tanggung' => 'required|integer|min:1',
            'cw_terbuka' => 'required|integer|min:1',
            'cw_disiplin' => 'required|integer|min:1',
            'cw_janji' => 'required|integer|min:1',
            'pu_integritas' => 'required|integer|min:1',
            'pu_account_behavior' => 'required|integer|min:1',
        ];
    
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            // If validation fails, redirect back with input and errors
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('result_message', 'Mohon lengkapi form');
        }
    
        

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
        $response = Http::post('model/character', [
            'man_kemauan' => intval($request->man_kemauan),
            'man_kejujuran' => intval($request->man_kejujuran),
            'man_reputasi' => intval($request->man_reputasi),
            'cw_tanggung' => intval($request->cw_tanggung),
            'cw_terbuka' => intval($request->cw_terbuka),
            'cw_displin' => intval($request->cw_disiplin),
            'cw_janji' => intval($request->cw_janji),
            'pu_integritas' => intval($request->pu_integritas),
            'pu_account_behavior' => intval($request->pu_account_behavior),
        ]);

        $output = $response->json()['data']['percentage'];
        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output * 2/ 10 ;
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
            $scoring = $output  * 2/ 10 + $Tscoring->COLLATERAL  * 2/ 10+ $Tscoring->CHARACTER  * 2/ 10+ $Tscoring->CAPITAL  * 2/ 10+ $Tscoring->CONDITION  * 2/ 10 + $Tscoring->SYARIAH * 5/100;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'CHARACTER' => $output,
                'SCORING' => $scoring
            ]);
        }

        $result = "Berhasil memperbarui data!";
        $character_nasabah =TCharacter::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return redirect()->back()->with('message', $result);
    }
}
