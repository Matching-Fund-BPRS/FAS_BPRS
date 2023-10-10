<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TRugilaba;
use App\Models\TNasabah;

class RugiLabaController extends Controller
{
    //TODO
    //Panggil data dari tabel t_rugilaba
    //filter berdasarkan periode
    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        return view('rugilaba', [
            'nasabah' => $nasabah,
            'rugi_laba_nasabah' => TRugiLaba::where('ID_NASABAH', $id)->first()
        ]);
    }
}
