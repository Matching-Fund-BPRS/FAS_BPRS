<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TKeuangan;
use App\Models\TNasabah;

class InfoKeuanganController extends Controller
{
    public function addInfoKeuangan(Request $request){
        dd($request);
    }

    public function editInfoKeuangan(Request $request, $id){
        TKeuangan::where('ID_NASABAH', $id)->update([

        ]);
    }

    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        return view('infokeuangan',[
            'info_keuangan_nasabah' => TKeuangan::where('ID_NASABAH', $id)->first(),
            'nasabah' => $nasabah
        ]);
    }
}
