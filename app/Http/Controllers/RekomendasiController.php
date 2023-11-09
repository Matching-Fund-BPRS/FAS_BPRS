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
        TRekomendasi::insert([
            'ID_NASABAH' => $request->id,
            'LIMIT_KREDIT' => $request->plafond,
            'SIFAT_KREDIT' => 1, //konvert dari string
            'JENIS_PERMOHONAN'  => 1, //konvert dari string
            'TUJUAN' => 1, // konvert dari string
            'JANGKA_WAKTU'  => $request->jangka_waktu,
            'BUNGA' => $request->margin,
            'ANGSURAN' => $request->angsuran_bulan,
            'JAMINAN' => null,
            'KETENTUAN' => null ,
            'PROVISI' => $request->provisi,
            'ADMINISTRASI' => $request->administrasi,
            'LAINNYA' => $request->biaya_lainnya,
            'BAYAR_POKOK' => $request->bayar_pokok,
            'MATERAI' => $request->biaya_materai,
            'NOTARIS' => $request->biaya_notaris,
            'ASURANSI' => $request->biaya_asuransi,
            'MODAL' => 0,
            'BASIL_BANK' => $request->bagi_hasil_bank,
            'BASIL_DEB' => $request->bagi_hasil_mudharib,
        ]);

        $TAngsuran = TAngsuran::where('ID_NASABAH', $request->id)->get();
        foreach ($TAngsuran as $angsuran) {
            $angsuran->delete();
        }

        for ($i=0; $i < $request->jangka_waktu ; $i++) { 
            TAngsuran::insert([
                'ID_NASABAH' => $request->id,
                'NO_ANGSURAN' => $i+1,
                'POKOK_PINJAMAN' => $request->plafond - ($request->angsuran_bulan * $i),
                'ANGS_POKOK' => $request->angsuran_bulan,
                'ANGS_BUNGA' => $request->plafond * $request->margin / 100
            ]);
        }
        return redirect()->back()->with('success-add', 'message');;
    }

    public function editRekomendasi(Request $request, $id){
        TRekomendasi::where('ID_NASABAH', $id)->update([
            'LIMIT_KREDIT' => $request->plafond,
            'SIFAT_KREDIT' => 1,
            'JENIS_PERMOHONAN'  => 1,
            'TUJUAN' => $request->tujuan_penggunaan,
            'JANGKA_WAKTU'  => $request->jangka_waktu,
            'BUNGA' => $request->margin,
            'ANGSURAN' => $request->angsuran_bulan,
            'JAMINAN' => null,
            'KETENTUAN' => null ,
            'PROVISI' => $request->provisi,
            'ADMINISTRASI' => $request->administrasi,
            'LAINNYA' => $request->biaya_lainnya,
            'BAYAR_POKOK' => $request->bayar_pokok,
            'MATERAI' => $request->biaya_materai,
            'NOTARIS' => $request->biaya_notaris,
            'ASURANSI' => $request->biaya_asuransi,
            'MODAL' => 0,
            'BASIL_BANK' => $request->bagi_hasil_bank,
            'BASIL_DEB' => $request->bagi_hasil_mudharib,
        ]);
        
        $TAngsuran = TAngsuran::where('ID_NASABAH', $request->id)->get();
        foreach ($TAngsuran as $angsuran) {
            $angsuran->delete();
        }

        for ($i=0; $i < $request->jangka_waktu ; $i++) { 
            TAngsuran::insert([
                'ID_NASABAH' => $request->id,
                'NO_ANGSURAN' => $i+1,
                'POKOK_PINJAMAN' => $request->plafond - ($request->angsuran_bulan * $i),
                'ANGS_POKOK' => $request->angsuran_bulan,
                'ANGS_BUNGA' => $request->plafond * $request->margin / 100
            ]);
        }
        return redirect()->back()->with('success-edit', 'message');;
    }
    
    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        return view('rekomendasi',[
            'nasabah' => $nasabah,
            'rekomendasi_nasabah' => TRekomendasi::where('ID_NASABAH', $id)->first()
        ]);
    }
}
