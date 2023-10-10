<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TAngsuran;
use App\Models\TNasabah;

class AngsuranController extends Controller
{
    public function index($id){

        //TODO
        //ambil data angsuran berdasarkan nomor nasabah/nota
        $data_angsuran = TAngsuran::where('ID_NASABAH', $id)->paginate(5);

        //TODO
        //Siapin rumus untuk perhitungan plafond, margin, dan jangka waktu
        $plafond = 0;
        $margin = 0;
        $jangkaWaktu = 0;

        //TODO
        //Siapin rumus untuk ngitung total ini juga
        $total = 0;


        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        return view('daftarangsuran', [
            'nasabah' => $nasabah,
            'plafond' => $plafond,
            'margin' => $margin,
            'jangkaWaktu' => $jangkaWaktu,
            'data_angsuran' => $data_angsuran
        ]);
    }
}
