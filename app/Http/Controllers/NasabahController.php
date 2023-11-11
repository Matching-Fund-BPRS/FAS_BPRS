<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\TNasabah;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
            'all_nasabah' => TNasabah::all()
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
        if($request->tgl_berlaku_ktp == "on"){
            $tgl_berlaku_ktp = null;
        }else{
            $tgl_berlaku_ktp = Carbon::createFromFormat('m/d/Y', $request->tgl_berlaku_ktp)->format('Y-m-d');
        }
        TNasabah::insert([
            'ID_NASABAH' => $request->id_user,
            'ID_CABANG'  => 001, 
            'NO_SURVEY' => null, 
            'CIF' => $request->cif,
            'TGL_PERMOHONAN' => Carbon::createFromFormat('m/d/Y', $request->tgl_permohonan)->format('Y-m-d'),
            'TGL_ANALISA' => Carbon::createFromFormat('m/d/Y', $request->tgl_analisa)->format('Y-m-d'),
            'LIMIT_KREDIT' => $request->limit_kredit,
            'BUNGA' => $request->margin, 
            'JANGKA_WAKTU' => $request->jangka_waktu,
            'SIFAT' => $request->sifat,
            'JENIS_PERMOHONAN' => $request->jenis_permohonan,
            'TUJUAN' => $request->tujuan,
            'KET_TUJUAN' => $request->keterangan_tujuan,
            'BIDANG_USAHA' => $request->bidang_usaha,
            'SUB_USAHA' => $request->sektor_usaha,
            'TGL_MULAI_USAHA' => Carbon::createFromFormat('m/d/Y', $request->tgl_mulai_usaha)->format('Y-m-d'),
            'JUMLAH_KARY' => $request->jumlah_karyawan,
            'NAMA' => $request->nama_debitur,
            'NAMA_BADAN_USAHA' => $request->nama_badan_usaha,
            'ALAMAT_USAHA' => $request->alamat_usaha,
            'STATUS_PERKAWINAN' => $request->status_perkawinan,
            'TEMPAT_LAHIR' => $request->tempat_lahir,
            'TGL_LAHIR' => Carbon::createFromFormat('m/d/Y', $request->tgl_lahir)->format('Y-m-d'),
            'GENDER' => $request->gender,
            'NO_KTP'=>$request->no_ktp,
            'TGL_BERLAKU_KTP' => $tgl_berlaku_ktp,
            'ALAMAT' => $request->alamat_ktp,
            'NO_TELP' => $request->nomor_telepon,
            'NO_KANTOR' => $request->nomor_telepon_kantor,
            'STATUS_TEMPAT_TINGGAL' => $request->status_tempat_tinggal,
            'LAMA_TINGGAL' => $request->lama_tinggal,
            'TINGKAT_PENDIDIKAN' => $request->tingkat_pendidikan,
            'JUMLAH_TANGGUNGAN' => $request->jumlah_tanggungan,
            'NAMA_PASANGAN' => $request->nama_pasangan,
            'TEMPAT_LAHIR_PASANGAN' =>$request->tempat_lahir_pasangan,
            'TGL_LAHIR_PASANGAN' => Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir_pasangan)->format('Y-m-d'),
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
            'ID_CABANG'  => 001, 
            'NO_SURVEY' => null, 
            'CIF' => $request->cif,
            'TGL_PERMOHONAN' => Carbon::createFromFormat('m/d/Y', $request->tgl_permohonan)->format('Y-m-d'),
            'TGL_ANALISA' => Carbon::createFromFormat('m/d/Y', $request->tgl_analisa)->format('Y-m-d'),
            'LIMIT_KREDIT' => $request->limit_kredit,
            'BUNGA' => $request->margin, 
            'JANGKA_WAKTU' => $request->jangka_waktu,
            'SIFAT' => $request->sifat,
            'JENIS_PERMOHONAN' => $request->jenis_permohonan,
            'TUJUAN' => $request->tujuan,
            'KET_TUJUAN' => $request->keterangan_tujuan,
            'BIDANG_USAHA' => $request->bidang_usaha,
            'SUB_USAHA' => $request->sektor_usaha,
            'TGL_MULAI_USAHA' => Carbon::createFromFormat('m/d/Y', $request->tgl_mulai_usaha)->format('Y-m-d'),
            'JUMLAH_KARY' => $request->jumlah_karyawan,
            'NAMA' => $request->nama_debitur,
            'NAMA_BADAN_USAHA' => $request->nama_badan_usaha,
            'ALAMAT_USAHA' => $request->alamat_usaha,
            'STATUS_PERKAWINAN' => $request->status_perkawinan,
            'TEMPAT_LAHIR' => $request->tempat_lahir,
            'TGL_LAHIR' => Carbon::createFromFormat('m/d/Y', $request->tgl_lahir)->format('Y-m-d'),
            'GENDER' => $request->gender,
            'NO_KTP'=>$request->no_ktp,
            'TGL_BERLAKU_KTP' => Carbon::createFromFormat('m/d/Y', $request->tgl_berlaku_ktp)->format('Y-m-d'),
            'ALAMAT' => $request->alamat_ktp,
            'NO_TELP' => $request->nomor_telepon,
            'NO_KANTOR' => $request->nomor_telepon_kantor,
            'STATUS_TEMPAT_TINGGAL' => $request->status_tempat_tinggal,
            'LAMA_TINGGAL' => $request->lama_tinggal,
            'TINGKAT_PENDIDIKAN' => $request->tingkat_pendidikan,
            'JUMLAH_TANGGUNGAN' => $request->jumlah_tanggungan,
            'NAMA_PASANGAN' => $request->nama_pasangan,
            'TEMPAT_LAHIR_PASANGAN' =>$request->tempat_lahir_pasangan,
            'TGL_LAHIR_PASANGAN' => Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir_pasangan)->format('Y-m-d'),
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
