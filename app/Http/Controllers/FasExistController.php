<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TFa;
use App\Models\TBisid;

class FasExistController extends Controller
{
    public function fasIndex(){ 
        return view('fasilitasexisting',[
            'data_fasilitas_existing' => TFa::paginate(10)
        ]);
    }

    public function tambah_bisid(Request $request){
        dd($request);
    }
}
