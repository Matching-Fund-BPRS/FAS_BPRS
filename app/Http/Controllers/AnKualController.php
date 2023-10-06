<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TKualitatif;

class AnKualController extends Controller
{
    public function addAnKual(Request $request){
        dd($request);
        // TKualitatif::insert([
        //     'ID_NASABAH' => $request->id_nasabah,

        //     'LEG_PEMOHON' => $request->legalitas_pemohon,
        //     'LEG_PEMOHON_NO' => $request->legalitas_pemohon_no,
        //     'TGL_PEMOHON' => $request->tanggal_masa_laku_pemohon,
        //     'LEG_USAHA' => ,
        //     'LEG_USAHA_NO' => ,
        //     'TGL_USAHA' => ,
        //     'LEG_PENDIRIAN' => ,
        //     'LEG_PENDIRIAN_NO' => ,
        //     'TGL_PENDIRIAN' => ,

        //     'LEG_LAIN1' => ,
        //     'LEG_LAIN1_NO' => ,
        //     'TGL_LAIN1' => ,
        //     'LEG_LAIN2' => ,
        //     'LEG_LAIN2_NO' => ,
        //     'TGL_LAIN2' => ,
        //     'LEG_LAIN3' => ,
        //     'LEG_LAIN3_NO' => ,
        //     'TGL_LAIN3' => ,

        //     'PEM_PESAING' => ,
        //     'PEM_USAHA' => ,
        //     'PEM_REPUTASI' => ,
        //     'PEM_PELANGGAN' => ,
        //     'PEM_KETERGANTUNGAN' => ,
        //     'PEM_KEBUTUHAN' => ,

        //     'MAN_KEJUJURAN' => ,
        //     'MAN_KEMAUAN' => ,
        //     'MAN_REPUTASI' => ,

        //     'TEH_UTILISASI' => ,
        //     'TEH_KETERGANTUNGAN' => ,
        //     'TEH_PENGADAAN' => ,
        //     'TEH_REPUTASI' => ,
        //     'TEH_SPESIFIKASI' => ,
        //     'TEH_LAMA_USAHA' => ,

        // ]);        
    }
}
