<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TAngsuran;
use App\Models\TNasabah;
use App\Models\TRekomendasi;

class AngsuranController extends Controller
{
    public function index($id){
        $data_rekomendasi = TRekomendasi::where('ID_NASABAH', $id)->first();

        
        $data_angsuran = TAngsuran::where('ID_NASABAH', $id)->get();
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        if($data_rekomendasi == null){
            return redirect()->back()->with('message', 'Silahkan input data rekomendasi terlebih dahulu!');
        }else{
            
            $plafond = $data_rekomendasi->LIMIT_KREDIT;
            $margin = $data_rekomendasi->BUNGA;
            $jangkaWaktu = $data_rekomendasi->JANGKA_WAKTU;
            return view('daftarangsuran', [
                'nasabah' => $nasabah,
                'plafond' => $plafond,
                'margin' => $margin,
                'jangkaWaktu' => $jangkaWaktu,
                'data_angsuran' => $data_angsuran
            ]);
        }
    }
}
