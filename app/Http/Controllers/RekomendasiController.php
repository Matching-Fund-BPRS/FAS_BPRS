<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TRekomendasi;
use App\Models\TNasabah;

class RekomendasiController extends Controller
{
    //TODO
    //Tangkap data dari view
    //outputnya gatau gimana apakah disimpan di database aja atau gmn
    public function addRekomendasi(Request $request){
        dd($request);
        TRekomendasi::insert([

        ]);
    }
    
    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        return view('rekomendasi',[
            'nasabah' => $nasabah,
            'rekomendasi_nasabah' => TRekomendasi::where('ID_NASABAH', $id)->first()
        ]);
    }
}
