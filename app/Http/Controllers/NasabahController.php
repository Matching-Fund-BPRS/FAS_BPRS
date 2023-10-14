<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\TNasabah;
use Illuminate\Http\Request;

class NasabahController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function searchNasabah(Request $request){
        if($request->has('id')){
            $nasabah = TNasabah::where('ID_NASABAH', $request->id)->first();
            if($nasabah == null){
                return view('dashboardnota',[
                    'nasabah' => $nasabah,
                    'state' => "not-found"
                ]);
            }else{
                return view('dashboardnota',[
                    'nasabah' => $nasabah,
                    'state' => "success"
                ]);
            }
        }else{
            return view('dashboardnota',[
                'nasabah' => null,
                'state' => "empty"
            ]);
        }
    }

    public function index(){
        return view('danolisa',[
            'all_nasabah' => TNasabah::paginate(25)
        ]);
    }

    public function data_nasabah($id){
        return view('detaildataentry', [
            'nasabah' => TNasabah::where('ID_NASABAH', $id)->first()
        ]);
    }

    public function data_usaha_nasabah($id){
        return view('detaildataentryBU', [
            'nasabah' => TNasabah::where('ID_NASABAH', $id)->first()
        ]);
    }

    public function tambah_nasabah(Request $request){
        TNasabah::insert([
            'ID_NASABAH' => $request->id_user,
            'ID_CABANG'  => 005, 
            'NO_SURVEY' => null, //sementara di nullin 
            'CIF' => $request->cif,
            // 'TGL_PERMOHONAN' => $request->tgl_permohonan,
            // 'TGL_ANALISA' => $request->tgl_analisa,
            'LIMIT_KREDIT' => $request->limit_kredit,
            'BUNGA' => $request->margin, 
            'JANGKA_WAKTU' => $request->jangka_waktu,
            'SIFAT' => 1,
            'JENIS_PERMOHONAN' => 1,
            'TUJUAN' => 1,
            'KET_TUJUAN' => $request->keterangan_tujuan,
            'BIDANG_USAHA' => $request->bidang_usaha,
            'SUB_USAHA' => $request->sektor_usaha,
            // 'TGL_MULAI_USAHA' => $request->tgl_mulai_usaha,
            'JUMLAH_KARY' => $request->jumlah_karyawan,
            'NAMA' => $request->nama_debitur,
            'NAMA_BADAN_USAHA' => $request->nama_badan_usaha,
            'ALAMAT_USAHA' => $request->alamat_usaha,
            'STATUS_PERKAWINAN' => 1,
            'TEMPAT_LAHIR' => $request->tempat_lahir,
            // 'TGL_LAHIR' => $request->tgl_lahir,
            'GENDER' => $request->gender,
            'NO_KTP'=>$request->no_ktp,
            // 'TGL_BERLAKU_KTP' => $request->tgl_berlaku_ktp,
            'ALAMAT' => $request->alamat,
            'NO_TELP' => $request->nomor_telepon,
            'NO_KANTOR' => $request->nomor_telepon_kantor,
            'STATUS_TEMPAT_TINGGAL' => 1,
            'LAMA_TINGGAL' => $request->lama_tinggal,
            'TINGKAT_PENDIDIKAN' => 1,
            'JUMLAH_TANGGUNGAN' => $request->jumlah_tanggungan,
            'NAMA_PASANGAN' => $request->nama_pasangan,
            'TEMPAT_LAHIR_PASANGAN' =>$request->tempat_lahir_pasangan,
            // 'TGL_LAHIR_PASANGAN' => $request->tanggal_lahir_pasangan,
            'ALAMAT_PASANGAN' => $request->alamat_ktp_pasangan,
            'PROFESI_PASANGAN' =>$request->profesi_pasangan,
            'NO_TELP_PASANGAN' =>$request->nomor_telepon_pasangan,
            'NAMA_EC' => $request->nama_kontak_darurat,
            'HUB_EC' =>$request->hubungan_keluarga,
            'ALAMAT_EC' => $request->alamat_ktp_kontak_darurat,
            'NO_TELP_EC' => $request->nomor_telepon_kontak_darurat,
        ]);

        return redirect()
                ->back()
                ->with('success-add', 'message');
    }

    public function edit_data_nasabah(Request $request, $id){
        TNasabah::where('ID_NASABAH' , $id)->update([
            'ID_CABANG'  => 005, 
            'NO_SURVEY' => null, //sementara di nullin 
            'CIF' => $request->cif,
            // 'TGL_PERMOHONAN' => $request->tgl_permohonan,
            // 'TGL_ANALISA' => $request->tgl_analisa,
            'LIMIT_KREDIT' => $request->limit_kredit,
            'BUNGA' => $request->margin, 
            'JANGKA_WAKTU' => $request->jangka_waktu,
            'SIFAT' => 1,
            'JENIS_PERMOHONAN' => 1,
            'TUJUAN' => 1,
            'KET_TUJUAN' => $request->keterangan_tujuan,
            'BIDANG_USAHA' => $request->bidang_usaha,
            'SUB_USAHA' => $request->sektor_usaha,
            // 'TGL_MULAI_USAHA' => $request->tgl_mulai_usaha,
            'JUMLAH_KARY' => $request->jumlah_karyawan,
            'NAMA' => $request->nama_debitur,
            'NAMA_BADAN_USAHA' => $request->nama_badan_usaha,
            'ALAMAT_USAHA' => $request->alamat_usaha,
            'STATUS_PERKAWINAN' => 1,
            'TEMPAT_LAHIR' => $request->tempat_lahir,
            // 'TGL_LAHIR' => $request->tgl_lahir,
            'GENDER' => $request->gender,
            'NO_KTP'=>$request->no_ktp,
            // 'TGL_BERLAKU_KTP' => $request->tgl_berlaku_ktp,
            'ALAMAT' => $request->alamat_ktp,
            'NO_TELP' => $request->nomor_telepon,
            'NO_KANTOR' => $request->nomor_telepon_kantor,
            'STATUS_TEMPAT_TINGGAL' => 1,
            'LAMA_TINGGAL' => $request->lama_tinggal,
            'TINGKAT_PENDIDIKAN' => 1,
            'JUMLAH_TANGGUNGAN' => $request->jumlah_tanggungan,
            'NAMA_PASANGAN' => $request->nama_pasangan,
            'TEMPAT_LAHIR_PASANGAN' =>$request->tempat_lahir_pasangan,
            // 'TGL_LAHIR_PASANGAN' => $request->tanggal_lahir_pasangan,
            'ALAMAT_PASANGAN' => $request->alamat_ktp_pasangan,
            'PROFESI_PASANGAN' =>$request->profesi_pasangan,
            'NO_TELP_PASANGAN' =>$request->nomor_telepon_pasangan,
            'NAMA_EC' => $request->nama_kontak_darurat,
            'HUB_EC' =>$request->hubungan_keluarga,
            'ALAMAT_EC' => $request->alamat_ktp_kontak_darurat,
            'NO_TELP_EC' => $request->nomor_telepon_kontak_darurat,
        ]);

        return redirect()
            ->back()
            ->with('success-edit', 'Data nasabah berhasil diedit!');
    }
}
