<?php

namespace App\Http\Controllers;

use App\Models\TAngsuran;
use Illuminate\Http\Request;
use App\Models\TRekomendasi;
use App\Models\TNasabah;

class RekomendasiController extends Controller
{
    //TODO
    //Tangkap data dari view
    public function addRekomendasi(Request $request){
        $plafond = str_replace('.', '', $request->plafond);
        $angsuran_bulan = str_replace('.', '', $request->angsuran_bulan);
        $provinsi = str_replace('.', '', $request->provisi);
        $administrasi = str_replace('.', '', $request->administrasi);
        $biaya_lainnya = str_replace('.', '', $request->biaya_lainnya);
        $biaya_materai = str_replace('.', '', $request->biaya_materai);
        $biaya_notaris = str_replace('.', '', $request->biaya_notaris);
        $biaya_asuransi = str_replace('.', '', $request->biaya_asuransi);
        TRekomendasi::insert([
            'ID_NASABAH' => $request->id,
            'LIMIT_KREDIT' => $plafond,
            'SIFAT_KREDIT' => 1, //konvert dari string
            'JENIS_PERMOHONAN'  => 1, //konvert dari string
            'TUJUAN' => 1, // konvert dari string
            'JANGKA_WAKTU'  => $request->jangka_waktu,
            'BUNGA' => $request->margin,
            'ANGSURAN' => $angsuran_bulan,
            'JAMINAN' => null,
            'KETENTUAN' => null ,
            'PROVISI' => $provinsi,
            'ADMINISTRASI' => $administrasi,
            'LAINNYA' => $biaya_lainnya,
            'BAYAR_POKOK' => $request->bayar_pokok,
            'MATERAI' => $biaya_materai,
            'NOTARIS' => $biaya_notaris,
            'ASURANSI' => $biaya_asuransi,
            'MODAL' => 0,
            'BASIL_BANK' => $request->bagi_hasil_bank,
            'BASIL_DEB' => $request->bagi_hasil_mudharib,
        ]);

        $TAngsuran = TAngsuran::where('ID_NASABAH', $request->id)->get();
        foreach ($TAngsuran as $angsuran) {
            $angsuran->delete();
        }

        $angsuran = round($plafond / $request->jangka_waktu);

        for ($i=0; $i < $request->jangka_waktu ; $i++) { 
            TAngsuran::insert([
                'ID_NASABAH' => $request->id,
                'NO_ANGSURAN' => $i+1,
                'POKOK_PINJAMAN' => $plafond - ($angsuran * $i),
                'ANGS_POKOK' => $angsuran,
                'ANGS_BUNGA' => $plafond * $request->margin / 100
            ]);
        }
        return redirect()->back()->with('success-add', 'message');;
    }

    public function editRekomendasi(Request $request, $id){
        $plafond = str_replace('.', '', $request->plafond);
        $angsuran_bulan = str_replace('.', '', $request->angsuran_bulan);
        $provinsi = str_replace('.', '', $request->provisi);
        $administrasi = str_replace('.', '', $request->administrasi);
        $biaya_lainnya = str_replace('.', '', $request->biaya_lainnya);
        $biaya_materai = str_replace('.', '', $request->biaya_materai);
        $biaya_notaris = str_replace('.', '', $request->biaya_notaris);
        $biaya_asuransi = str_replace('.', '', $request->biaya_asuransi);
        TRekomendasi::where('ID_NASABAH', $request->id)->update([
            'LIMIT_KREDIT' => $plafond,
            'SIFAT_KREDIT' => 1, //konvert dari string
            'JENIS_PERMOHONAN'  => 1, //konvert dari string
            'TUJUAN' => 1, // konvert dari string
            'JANGKA_WAKTU'  => $request->jangka_waktu,
            'BUNGA' => $request->margin,
            'ANGSURAN' => $angsuran_bulan,
            'JAMINAN' => null,
            'KETENTUAN' => null ,
            'PROVISI' => $provinsi,
            'ADMINISTRASI' => $administrasi,
            'LAINNYA' => $biaya_lainnya,
            'BAYAR_POKOK' => $request->bayar_pokok,
            'MATERAI' => $biaya_materai,
            'NOTARIS' => $biaya_notaris,
            'ASURANSI' => $biaya_asuransi,
            'MODAL' => 0,
            'BASIL_BANK' => $request->bagi_hasil_bank,
            'BASIL_DEB' => $request->bagi_hasil_mudharib,
        ]);

        $TAngsuran = TAngsuran::where('ID_NASABAH', $request->id)->get();
        foreach ($TAngsuran as $angsuran) {
            $angsuran->delete();
        }

        $angsuran = round($plafond / $request->jangka_waktu);

        for ($i=0; $i < $request->jangka_waktu ; $i++) { 
            TAngsuran::insert([
                'ID_NASABAH' => $request->id,
                'NO_ANGSURAN' => $i+1,
                'POKOK_PINJAMAN' => $plafond - ($angsuran * $i),
                'ANGS_POKOK' => $angsuran,
                'ANGS_BUNGA' => $plafond * $request->margin / 100
            ]);
        }
        return redirect()->back()->with('success-edit', 'message');;
    }
    
    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $rekomendasi_nasabah =  TRekomendasi::where('ID_NASABAH', $id)->first();
        return view('rekomendasi',[
            'nasabah' => $nasabah,
            'rekomendasi_nasabah' => $rekomendasi_nasabah
        ]);
    }
}
