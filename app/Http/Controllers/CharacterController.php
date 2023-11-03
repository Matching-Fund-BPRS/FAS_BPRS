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
        return view('/dashboard/5character',[
            'result' => "-",
            'nasabah' => $nasabah
        ]);
    }

    public function submitCharacter(Request $request){
        dd($request);
        // ambil data dari request terus jadiin JSON terus post ke API
        // ambil response dari API terus masukin di variabel


        TCharacter::insert([
            
        ]);

        $output = null;
        $result = "-";
        $nasabah = null;
        return view('/dashboard/5character',[
            'result' => $result,
            'nasabah' => $nasabah

        ])->with('message', $result);
    }

}
