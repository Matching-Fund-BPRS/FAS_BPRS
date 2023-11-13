<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\TNasabah;
use App\Models\TPengurus;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


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
        if(auth()->user()->level == 1){
            return view('danolisa',[
                'all_nasabah' => TNasabah::all()
            ]);
        }else{
            return view('danolisa',[
                'all_nasabah' => TNasabah::where('USER_ID', auth()->user()->NAME)->get()
            ]);
        }
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
        if($request->tgl_berlaku_ktp == "on" || $request->tgl_berlaku_ktp == null){
            $tgl_berlaku_ktp = null;
        }else{
            $tgl_berlaku_ktp = Carbon::createFromFormat('m/d/Y', $request->tgl_berlaku_ktp)->format('Y-m-d');
        }

        if($request->tanggal_lahir_pasangan == null){
            $tgl_lahir_pasangan = null;
        }else{
            $tgl_lahir_pasangan =Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir_pasangan)->format('Y-m-d');
        }

        if($request->tgl_pendirian == null && $request->tgl_anggaran == null && $request->tgl_pengurus == null){
            $tgl_pendirian = null;
            $tgl_anggaran = null;
            $tgl_pengurus = null;
        }else{
            $tgl_pendirian = Carbon::createFromFormat('m/d/Y', $request->tgl_pendirian)->format('Y-m-d');
            $tgl_anggaran = Carbon::createFromFormat('m/d/Y', $request->tgl_anggaran)->format('Y-m-d');
            $tgl_pengurus = Carbon::createFromFormat('m/d/Y', $request->tgl_pengurus)->format('Y-m-d');
        }

        if($request->id == "null"){
            TNasabah::insert([
                'ID_NASABAH' => TNasabah::max('ID_NASABAH') + 1,
                'ID_CABANG'  => 001, 
                'NO_SURVEY' => null, 
                'CIF' => $request->cif,
                'USER_ID'=> $request->user_id,
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
                'TGL_MULAI_USAHA' => Carbon::createFromFormat('m/d/Y', $request->tgl_mulai_usaha)->format('Y-m-d') ,
                'JUMLAH_KARY' => $request->jumlah_karyawan,
                'ALAMAT_USAHA' => $request->alamat_usaha,
                'NAMA_BADAN_USAHA' => $request->nama_badan_usaha,
                'BENTUK_BADAN_USAHA' => $request->bentuk_badan_usaha,
                'STATUS_TEMPAT_USAHA'=> $request->status_tempat_usaha,
                'NO_TELP_USAHA' =>$request->no_kantor,
                'JUMLAH_KARY' => $request->jumlah_karyawan,
                'JADI_NASABAH_SEJAK'=> Carbon::createFromFormat('m/d/Y', $request->jadi_nasabah_sejak)->format('Y-m-d'),
    
                'NAMA' => $request->nama_debitur,
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
                'TGL_LAHIR_PASANGAN' => $tgl_lahir_pasangan ,
                'ALAMAT_PASANGAN' => $request->alamat_ktp_pasangan,
                'PROFESI_PASANGAN' =>$request->profesi_pasangan,
                'NO_TELP_PASANGAN' =>$request->nomor_telepon_pasangan,
                'NAMA_EC' => $request->nama_kontak_darurat,
                'HUB_EC' =>$request->hubungan_keluarga,
                'ALAMAT_EC' => $request->alamat_ktp_kontak_darurat,
                'NO_TELP_EC' => $request->nomor_telepon_kontak_darurat,
                
                'NO_PENDIRIAN' => $request->no_pendirian,
                'TGL_PENDIRIAN' => $tgl_pendirian,
                'ISI_PENDIRIAN' => $request->isi_pendirian,
                'KONDISI_PENDIRIAN' => $request->kondisi_pendirian,
    
                'ANGGARAN' => $request->no_anggaran,
                'ISI_ANGGARAN' => $request->isi_anggaran,
                'TGL_ANGGARAN' => $tgl_anggaran,
                'KONDISI_ANGGARAN' => $request->kondisi_anggaran,
    
                'PENGURUS' => $request->no_pengurus,
                'KONDISI_PENGURUS' => $request->kondisi_pengurus, 
                'ISI_PENGURUS' => $request->isi_pengurus,
                'TGL_PENGURUS'=> $tgl_pengurus,         
            ]);
    
            return redirect()
            ->back()
            ->with('success-add', 'message');
        }else{
            TNasabah::where('ID_NASABAH' , $request->id)->update([
                'ID_CABANG'  => 001, 
                'NO_SURVEY' => null, 
                'CIF' => $request->cif,
                'USER_ID'=> null,
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
                'TGL_MULAI_USAHA' => Carbon::createFromFormat('m/d/Y', $request->tgl_mulai_usaha)->format('Y-m-d') ,
                'JUMLAH_KARY' => $request->jumlah_karyawan,
                'ALAMAT_USAHA' => $request->alamat_usaha,
                'NAMA_BADAN_USAHA' => $request->nama_badan_usaha,
                'BENTUK_BADAN_USAHA' => $request->bentuk_badan_usaha,
                'STATUS_TEMPAT_USAHA'=> $request->status_tempat_usaha,
                'NO_TELP_USAHA' =>$request->no_kantor,
                'JUMLAH_KARY' => $request->jumlah_karyawan,
                'JADI_NASABAH_SEJAK'=> Carbon::createFromFormat('m/d/Y', $request->jadi_nasabah_sejak)->format('Y-m-d'),
    
                'NAMA' => $request->nama_debitur,
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
                'TGL_LAHIR_PASANGAN' => $tgl_lahir_pasangan ,
                'ALAMAT_PASANGAN' => $request->alamat_ktp_pasangan,
                'PROFESI_PASANGAN' =>$request->profesi_pasangan,
                'NO_TELP_PASANGAN' =>$request->nomor_telepon_pasangan,
                'NAMA_EC' => $request->nama_kontak_darurat,
                'HUB_EC' =>$request->hubungan_keluarga,
                'ALAMAT_EC' => $request->alamat_ktp_kontak_darurat,
                'NO_TELP_EC' => $request->nomor_telepon_kontak_darurat,
                
                'NO_PENDIRIAN' => $request->no_pendirian,
                'TGL_PENDIRIAN' => $tgl_pendirian,
                'ISI_PENDIRIAN' => $request->isi_pendirian,
                'KONDISI_PENDIRIAN' => $request->kondisi_pendirian,
    
                'ANGGARAN' => $request->no_anggaran,
                'ISI_ANGGARAN' => $request->isi_anggaran,
                'TGL_ANGGARAN' => $tgl_anggaran,
                'KONDISI_ANGGARAN' => $request->kondisi_anggaran,
    
                'PENGURUS' => $request->no_pengurus,
                'KONDISI_PENGURUS' => $request->kondisi_pengurus, 
                'ISI_PENGURUS' => $request->isi_pengurus,
                'TGL_PENGURUS'=> $tgl_pengurus,  
            ]);
    
            return redirect()
                ->back()
                ->with('success-edit', 'Data nasabah berhasil diedit!');
        }
    }
        

    public function edit_data_nasabah(Request $request, $id){
        if($request->tgl_berlaku_ktp == "on" || $request->tgl_berlaku_ktp == null){
            $tgl_berlaku_ktp = null;
        }else{
            $tgl_berlaku_ktp = Carbon::createFromFormat('m/d/Y', $request->tgl_berlaku_ktp)->format('Y-m-d');
        }

        if($request->tanggal_lahir_pasangan == null){
            $tgl_lahir_pasangan = null;
        }else{
            $tgl_lahir_pasangan =Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir_pasangan)->format('Y-m-d');
        }

        if($request->tgl_pendirian == null && $request->tgl_anggaran == null && $request->tgl_pengurus == null){
            $tgl_pendirian = null;
            $tgl_anggaran = null;
            $tgl_pengurus = null;
        }else{
            $tgl_pendirian = Carbon::createFromFormat('m/d/Y', $request->tgl_pendirian)->format('Y-m-d');
            $tgl_anggaran = Carbon::createFromFormat('m/d/Y', $request->tgl_anggaran)->format('Y-m-d');
            $tgl_pengurus = Carbon::createFromFormat('m/d/Y', $request->tgl_pengurus)->format('Y-m-d');
        }


        TNasabah::where('ID_NASABAH' , $id)->update([
            'ID_CABANG'  => 001, 
            'NO_SURVEY' => null, 
            'CIF' => $request->cif,
            'USER_ID' => $request->user_id,
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
            'ALAMAT_USAHA' => $request->alamat_usaha,
            'NAMA_BADAN_USAHA' => $request->nama_badan_usaha,
            'BENTUK_BADAN_USAHA' => $request->bentuk_badan_usaha,
            'STATUS_TEMPAT_USAHA'=> $request->status_tempat_usaha,
            'NO_TELP_USAHA' =>$request->no_kantor,
            'JUMLAH_KARY' => $request->jumlah_karyawan,
            'JADI_NASABAH_SEJAK'=> $request->jadi_nasabah_sejak,

            'NAMA' => $request->nama_debitur,
            'STATUS_PERKAWINAN' => $request->status_perkawinan,
            'TEMPAT_LAHIR' => $request->tempat_lahir,
            'TGL_LAHIR' => Carbon::createFromFormat('m/d/Y', $request->tgl_lahir)->format('Y-m-d'),
            'GENDER' => $request->gender,
            'NO_KTP'=>$request->no_ktp,
            'TGL_BERLAKU_KTP'=> $tgl_berlaku_ktp,
            'ALAMAT' => $request->alamat_ktp,
            'NO_TELP' => $request->nomor_telepon,
            'NO_KANTOR' => $request->nomor_telepon_kantor,
            'STATUS_TEMPAT_TINGGAL' => $request->status_tempat_tinggal,
            'LAMA_TINGGAL' => $request->lama_tinggal,
            'TINGKAT_PENDIDIKAN' => $request->tingkat_pendidikan,
            'JUMLAH_TANGGUNGAN' => $request->jumlah_tanggungan,
            
            'NAMA_PASANGAN' => $request->nama_pasangan,
            'TEMPAT_LAHIR_PASANGAN' =>$request->tempat_lahir_pasangan,
            'TGL_LAHIR_PASANGAN' => $tgl_lahir_pasangan,
            'ALAMAT_PASANGAN' => $request->alamat_ktp_pasangan,
            'PROFESI_PASANGAN' =>$request->profesi_pasangan,
            'NO_TELP_PASANGAN' =>$request->nomor_telepon_pasangan,
            'NAMA_EC' => $request->nama_kontak_darurat,
            'HUB_EC' =>$request->hubungan_keluarga,
            'ALAMAT_EC' => $request->alamat_ktp_kontak_darurat,
            'NO_TELP_EC' => $request->nomor_telepon_kontak_darurat,
            
            'NO_PENDIRIAN' => $request->no_pendirian,
            'TGL_PENDIRIAN' =>  $tgl_pendirian,
            'ISI_PENDIRIAN' => $request->isi_pendirian,
            'KONDISI_PENDIRIAN' => $request->kondisi_pendirian,

            'ANGGARAN' => $request->no_anggaran,
            'ISI_ANGGARAN' => $request->isi_anggaran,
            'TGL_ANGGARAN' => $tgl_anggaran,
            'KONDISI_ANGGARAN' => $request->kondisi_anggaran,

            'PENGURUS' => $request->no_pengurus,
            'KONDISI_PENGURUS' => $request->kondisi_pengurus, 
            'ISI_PENGURUS' => $request->isi_pengurus,
            'TGL_PENGURUS'=> $tgl_pengurus,
        ]);

        return redirect()
            ->back()
            ->with('success-edit', 'Data nasabah berhasil diedit!');
    }
}
