<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TRekomendasi;

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
}
