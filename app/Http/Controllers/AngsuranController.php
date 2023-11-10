<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TAngsuran;
use App\Models\TNasabah;
use App\Models\TRekomendasi;

class AngsuranController extends Controller
{
    public function index($id){

        //TODO
        //ambil data angsuran berdasarkan nomor nasabah/nota
        $data_angsuran = TAngsuran::where('ID_NASABAH', $id)->get();

        //TODO
        //Siapin rumus untuk perhitungan plafond, margin, dan jangka waktu
        $data_rekomendasi = TRekomendasi::where('ID_NASABAH', $id)->first();
        $plafond = $data_rekomendasi->LIMIT_KREDIT;
        $margin = $data_rekomendasi->BUNGA;
        $jangkaWaktu = $data_rekomendasi->JANGKA_WAKTU;

        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        if($data_rekomendasi == null){
            return redirect()->back()->with('message', 'Silahkan input data rekomendasi terlebih dahulu!');
        }else{
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
