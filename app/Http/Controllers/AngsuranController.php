<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TAngsuran;

class AngsuranController extends Controller
{
    public function index(){

        //TODO
        //ambil data angsuran berdasarkan nomor nasabah/nota
        $data_angsuran = TAngsuran::paginate(10);

        //TODO
        //Siapin rumus untuk perhitungan plafond, margin, dan jangka waktu
        $plafond = 0;
        $margin = 0;
        $jangkaWaktu = 0;

        //TODO
        //Siapin rumus untuk ngitung total ini juga
        $total = 0;



        return view('daftarangsuran', [
            'plafond' => $plafond,
            'margin' => $margin,
            'jangkaWaktu' => $jangkaWaktu,
            'data_angsuran' => $data_angsuran
        ]);
    }
}
