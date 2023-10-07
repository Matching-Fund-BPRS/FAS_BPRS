<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TKualitatif;

class AnKualController extends Controller
{
    public function addAnKual(Request $request){
        dd($request);
        TKualitatif::insert([
// ini id nasabah panggil darimana
            // 'ID_NASABAH' => $request->id_nasabah,

            'LEG_PEMOHON' => $request->legalitas_pemohon,
            'LEG_PEMOHON_NO' => $request->legalitas_pemohon_no,
            'TGL_PEMOHON' => $request->tanggal_masa_laku_pemohon,
            'LEG_USAHA' => $request->legalitas_usaha,
            'LEG_USAHA_NO' => $request->legalitas_usaha_nomor,
            'TGL_USAHA' => $request->tanggal_masa_laku_usaha,
            'LEG_PENDIRIAN' => $request->legalitas_pendirian_usaha,
            'LEG_PENDIRIAN_NO' => $request->legalitas_pendirian_usaha_no ,
            'TGL_PENDIRIAN' => $request->tanggal_terbit,

            'LEG_LAIN1' => $request->legalitas_lain,
            'LEG_LAIN1_NO' => $request->legalitas_lain_nomor,
            'TGL_LAIN1' => $request->tanggal_terbit_legalitas_lain,

//tambahin form untuk legalitas lain 
            // 'LEG_LAIN2' => ,
            // 'LEG_LAIN2_NO' => ,
            // 'TGL_LAIN2' => ,
            // 'LEG_LAIN3' => ,
            // 'LEG_LAIN3_NO' => ,
            // 'TGL_LAIN3' => ,

            'PEM_PESAING' => $request->jumlah_pesaing ,
            'PEM_USAHA' => $request->prospek_usaha,
            'PEM_REPUTASI' => $request->reputasi_pelanggan,
            'PEM_PELANGGAN' => $request->jumlah_pelanggan,
// di aspek manajemen tambahin Ketergantungan
            // 'PEM_KETERGANTUNGAN' => $request->,
            'PEM_KEBUTUHAN' => $request->kebutuhan_masyarakat,

            'MAN_KEJUJURAN' => $request->kejujuran,
            'MAN_KEMAUAN' => $request->kemauan_bekerja_keras,
            'MAN_REPUTASI' => $request->reputas_rekan_bisnis,

            'TEH_UTILISASI' => $request->utilitas_kapasitas_usaha,
            'TEH_KETERGANTUNGAN' => $request->ketergantungan_supplier,
            'TEH_PENGADAAN' => $request->pengadaan_bahan_baku,
            'TEH_REPUTASI' => $request->reputasi_supplier,
            'TEH_SPESIFIKASI' => $request->spesifikasi_produk,
            'TEH_LAMA_USAHA' => $request->lama_usaha,

// data2 dibawah ini diambil darimana kok di form gaada inputnya 
            // 'NPWP' => ,
            // 'NPWP_TGL' => ,
            // 'TDP' => ,
            // 'TDP_TGL'=> ,
            // 'SITU' => ,
            // 'SITU_TGL'=> ,
        ]);        
    }
}
