<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TKuantitatif;
use App\Models\TAgunan;

class AnKuanController extends Controller
{
    public function anKuanIndex(){
        return view('ankuan',[
            'data_tabel_agunan_asuransi' => TAgunan::paginate(5)
        ]);
    }
}
