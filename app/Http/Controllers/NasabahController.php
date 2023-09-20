<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\TNasabah;

class NasabahController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        return view('danolisa',[
            'all_nasabah' => TNasabah::paginate(25)
        ]);
    }
}
