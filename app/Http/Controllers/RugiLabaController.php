<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TRugilaba;

class RugiLabaController extends Controller
{
    //TODO
    //Panggil data dari tabel t_rugilaba
    //filter berdasarkan periode
    public function index(){
        return view('rugilaba', [

        ]);
    }
}
