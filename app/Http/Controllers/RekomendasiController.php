<?php

namespace App\Http\Controllers;

use App\Models\TAngsuran;
use App\Models\TCapital;
use Illuminate\Http\Request;
use App\Models\TRekomendasi;
use App\Models\TNasabah;
use App\Models\TRugilaba;
use App\Models\TScoring;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class RekomendasiController extends Controller
{
    function PMT($interest,$num_of_payments,$PV,$FV = 0.00, $Type = 0){
        $xp=pow((1+$interest),$num_of_payments);
        return
            ($PV* $interest*$xp/($xp-1)+$interest/($xp-1)*$FV)*
            ($Type==0 ? 1 : 1/($interest+1));
    }
    //TODO
    //Tangkap data dari view
    public function addRekomendasi(Request $request){
        $validator = Validator::make($request->all(), [
            'plafond' => 'required',
            'angsuran_bulan' => 'required',
            'provisi' => 'required',
            'administrasi' => 'required',
            'biaya_lainnya' => 'required',
            'biaya_materai' => 'required',
            'biaya_notaris' => 'required',
            'biaya_asuransi' => 'required',
            'jangka_waktu' => 'required',
            'margin' => 'required',
            'bagi_hasil_bank' => 'required',
            'bagi_hasil_mudharib' => 'required',
            'id' => 'required'
        ]);

        if ($validator->fails() || false == true) {
            return back()->with('result_message', 'Mohon lengkapi form');
        }

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

        if($request->tipe_angsuran == 1){
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
        }
        else{
            $pmt_angsuran = $this->PMT($request->margin / 100, $request->jangka_waktu, $plafond);
            dd($pmt_angsuran);
            $TAngsuran = TAngsuran::where('ID_NASABAH', $request->id)->get();
            foreach ($TAngsuran as $angsuran) {
                $angsuran->delete();
            }


        }

        

        
        return redirect()->back()->with('success-add', 'message');;
    }

    public function editRekomendasi(Request $request, $id){
        // $validator = Validator::make($request->all(), [
        //     'plafond' => 'required',
        //     'angsuran_bulan' => 'required',
        //     'provisi' => 'required',
        //     'administrasi' => 'required',
        //     'biaya_lainnya' => 'required',
        //     'biaya_materai' => 'required',
        //     'biaya_notaris' => 'required',
        //     'biaya_asuransi' => 'required',
        //     'jangka_waktu' => 'required',
        //     'margin' => 'required',
        //     'sifat' => 'required',
        //     'jenis_permohonan' => 'required',
        //     'tujuan_penggunaan' => 'required',
        //     'bagi_hasil_bank' => 'required',
        //     'bagi_hasil_mudharib' => 'required',
        //     'id' => 'required'
        // ]);

        // if ($validator->fails() || false == true) {
        //     return back()->with('result_message', 'Mohon lengkapi form');
        // }

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
            'SIFAT_KREDIT' => $request->sifat,
            'JENIS_PERMOHONAN'  => $request->jenis_permohonan,
            'TUJUAN' => $request->tujuan_penggunaan,
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
        if($request->tipe_angsuran == 1){
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
        }
        else{
            $TAngsuran = TAngsuran::where('ID_NASABAH', $request->id)->get();
            foreach ($TAngsuran as $angsuran) {
                $angsuran->delete();
            }
            $pmt_angsuran = $this->PMT($request->margin / 100, $request->jangka_waktu, $plafond);
            $pokok = $plafond;
            for ($i=0; $i < $request->jangka_waktu ; $i++) {
                $bunga = $pokok * $request->margin / 100;
                $angs_pokok = $pmt_angsuran - $bunga;
                TAngsuran::insert([
                    'ID_NASABAH' => $request->id,
                    'NO_ANGSURAN' => $i+1,
                    'POKOK_PINJAMAN' => $pokok,
                    'ANGS_POKOK' => $angs_pokok,
                    'ANGS_BUNGA' => $bunga
                ]);
                $pokok = $pokok - $angs_pokok;
            }


        }return redirect()->back()->with('success-edit', 'message');;
    }
    
    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $rekomendasi_nasabah =  TRekomendasi::where('ID_NASABAH', $id)->first();
        $scoring = TScoring::where('ID_NASABAH', $id)->first();

        $analisis = TCapital::where('t_capital.ID_NASABAH', $id)
            ->leftJoin('t_capacity', 't_capital.ID_NASABAH', '=', 't_capacity.ID_NASABAH')
            ->leftJoin('t_collateral', 't_capital.ID_NASABAH', '=', 't_collateral.ID_NASABAH')
            ->leftJoin('t_condition', 't_capital.ID_NASABAH', '=', 't_condition.ID_NASABAH')
            ->leftJoin('t_character', 't_capital.ID_NASABAH', '=', 't_character.ID_NASABAH')
            ->leftJoin('t_syariah', 't_capital.ID_NASABAH', '=', 't_syariah.ID_NASABAH')
            ->leftJoin('t_limitkredit', 't_capital.ID_NASABAH', '=', 't_limitkredit.ID_NASABAH')
            ->leftJoin('t_rekomendasi', 't_capital.ID_NASABAH', '=', 't_rekomendasi.ID_NASABAH')
            ->first();
        //dd($analisis);
        $response = Http::post('http://127.0.0.1:8000/kolektabilitas', [
            'PEM_REPUTASI' => $analisis->CU_EKSTERNAL,
            'PEM_PELANGGAN' => $analisis->CU_KONSUMEN,
            'PEM_KETERGANTUNGAN' => $analisis->PEM_KETERGANTUNGAN,
            'TEH_SPESIFIKASI' => $analisis->SY_JENIS_BARANG,
            'LIMIT_KREDIT' => $analisis->LIMIT_KREDIT,
            'PENGIKATAN' => $analisis->PENGIKATAN,
            'MAN_REPUTASI' => $analisis->MAN_REPUTASI,
            'MARKETABILITY' => $analisis->MARKETABILITY,
            'PEM_KEBUTUHAN' => $analisis->PEM_KEBUTUHAN,
            'TES_REPUTASI' => $analisis->MAN_REPUTASI,
            'JANGKA_WAKTU' => $analisis->JANGKA_WAKTU,
            'TEH_UTILISASI' => $analisis->TEH_UTILISASI,
            'TEH_PENGADAAN' => $analisis->CU_PASOKAN,
            'TEH_KETERGANTUNGAN' => $analisis->PEM_KETERGANTUNGAN,
            'ASURANSI' => $analisis->PA_DOKUMEN,
            'ANGS_BANK_LAIN' => $analisis->ANGS_BANK_LAIN,
            'BIAYA_HIDUP' => $analisis->BIAYA_HIDUP,
            'MAN_KEJUJURAN' => $analisis->MAN_KEJUJURAN,
            'OMSET' => $analisis->OMSET,
            'HPP' => $analisis->HPP,
            'PENGUASAAN' => $analisis->PENGUASAAN,
            'PEM_PESAING' => $analisis->CU_EKSTERNAL,
            'NILAI_AGUNAN' => $analisis->CA_NILAI_AGUNAN,
            'TEH_LAMA_USAHA' => $analisis->TEH_LAMA_USAHA,
            'KEPEMILIKAN' => $analisis->KEPEMILIKAN,
            'MAN_KEMAUAN' => $analisis->MAN_KEMAUAN
        ]);
        //dd($response);

        $predicted = $response->json()['data']['predicted_classes'];
        // $hasilAnalisis = $response->json()['data']['percentage'];
        //dd($analisis);
        $rugilaba = TRugilaba::where('ID_NASABAH', $id)->first();
        
        if ($rugilaba->count() > 0) {
            $ebit = $rugilaba->PENJUALAN_BERSIH - $rugilaba->HPP - $rugilaba->BIAYA_HIDUP - $rugilaba->PENYUSUTAN + $rugilaba->PENDAPATAN_LAIN - $rugilaba->BIAYA_LAIN;
        } else {
            $ebit = 0;
        }
        
        return view('rekomendasi',[
            'nasabah' => $nasabah,
            'ebit' => $ebit,
            'rekomendasi_nasabah' => $rekomendasi_nasabah,
            'scoring' => $scoring,
            'predicted' => $predicted,
        ]);
    }
}
