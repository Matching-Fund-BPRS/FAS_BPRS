<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TCharacter;
use App\Models\TNasabah;

class CharacterController extends Controller
{
    public function index($id){
        $character_nasabah =TCharacter::where('ID_NASABAH', $id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        return view('5character',[
            'result' => "-",
            'nasabah' => $nasabah,
            'character_nasabah' => $character_nasabah
        ]);
    }

    public function submitCharacter(Request $request){
        dd($request);
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
        $output = null;
        $result = "-";
        $character_nasabah =TCharacter::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return view('5character',[
            'result' => $result,
            'nasabah' => $nasabah,
            'character_nasabah' => $character_nasabah
        ])->with('message', $result);
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

        $output = null;
        $result = "-";
        $character_nasabah =TCharacter::where('ID_NASABAH', $request->id)->first();
        $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
        return view('5character',[
            'result' => $result,
            'nasabah' => $nasabah,
            'character_nasabah' => $character_nasabah
        ])->with('message', $result);
    }
}
