<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TAngsuran;

class AngsuranController extends Controller
{
    public function index(){

        $data_angsuran = TAngsuran::paginate(10);
        $plafond = 0;
        $margin = 0;
        $jangkaWaktu = 0;
        $total = 0;

        return view('daftarangsuran', [
            'plafond' => $plafond,
            'margin' => $margin,
            'jangkaWaktu' => $jangkaWaktu,
            'data_angsuran' => $data_angsuran
        ]);
    }
}
