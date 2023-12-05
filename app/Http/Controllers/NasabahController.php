<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\TNasabah;
use App\Models\TPenguru;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class NasabahController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function data(Request $request)
    {
        if ($request->ajax()) {
            $nasabah = TNasabah::all();

            return DataTables::of($nasabah)->addIndexColumn()->make(true);
        }
    }
    public function searchNasabah(Request $request){
        // dd($request);
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
                'all_nasabah' => TNasabah::all(),
                'nasabah'=> null
            ]);
        }else{
            return view('danolisa',[
                'all_nasabah' => TNasabah::where('USER_ID', auth()->user()->username)->get(),
                'nasabah'=> null
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
            'nasabah' => TNasabah::where('ID_NASABAH', $id)->first(),
            'pengurus' => TPenguru::where('ID_NASABAH', $id)->get(),
            'id'=> $id
        ]);
    }

    public function tambah_nasabah(Request $request){
        // dd($request);
        
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

        if ($request->tgl_pendirian == null && $request->tgl_anggaran == null && $request->tgl_pengurus == null) {
            $tgl_pendirian = $tgl_anggaran = $tgl_pengurus = null;
        } else {
            $tgl_pendirian = $request->tgl_pendirian ? Carbon::createFromFormat('m/d/Y', $request->tgl_pendirian)->format('Y-m-d') : null;
            $tgl_anggaran = $request->tgl_anggaran ? Carbon::createFromFormat('m/d/Y', $request->tgl_anggaran)->format('Y-m-d') : null;
            $tgl_pengurus = $request->tgl_pengurus ? Carbon::createFromFormat('m/d/Y', $request->tgl_pengurus)->format('Y-m-d') : null;
        }
        
        
        $nextNasabah = TNasabah::where('USER_ID', $request->user_id);

        $new3digit = str_pad(Auth::user()->id, 3, '0', STR_PAD_LEFT);
        $new7digit = str_pad($nextNasabah->count() + 1, 7, '0', STR_PAD_LEFT);

        $newId = $new3digit.$new7digit;

        $dokumen_pendirian_img = 'Dokumen_Pendirian_'.$newId.'.'.$request->isi_pendirian->extension();
        $i=1;
        while(Storage::exists('public/upload/'.$dokumen_pendirian_img)){
            $dokumen_pendirian_img = 'Dokumen_Pendirian_'.$newId.'('.$i.')'.'.'.$request->isi_pendirian->extension();
            $i++;
        }
        Storage::disk('public')->put($dokumen_pendirian_img,  
            File::get($request->file('isi_pendirian')));
            Storage::move('public/'.$dokumen_pendirian_img,'public/upload/'.$dokumen_pendirian_img);

        if($request->id == 0){
            TNasabah::insert([
                'ID_NASABAH' => $newId,
                'ID_CABANG'  => 001, 
                'NO_SURVEY' => null, 
                'CIF' => $request->cif == 0 ? $newId : $request->cif,
                'USER_ID'=> $request->user_id,
                'TGL_PERMOHONAN' => Carbon::createFromFormat('m/d/Y', $request->tgl_permohonan)->format('Y-m-d'),
                'TGL_ANALISA' => Carbon::createFromFormat('m/d/Y', $request->tgl_analisa)->format('Y-m-d'),
                
                'LIMIT_KREDIT' => str_replace('.','',$request->limit_kredit),
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
                'JADI_NASABAH_SEJAK'=> Carbon::createFromFormat('m/d/Y', $request->menjadi_nasabah_sejak)->format('Y-m-d'),
    
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
                'ISI_PENDIRIAN' => $dokumen_pendirian_img,
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
            ->to('/dashboard/detaildataBU/' . $newId)
            ->with('success', 'Data Nasabah Berhasil');
        
        }else{
            TNasabah::where('ID_NASABAH' , $request->id)->update([
                'ID_CABANG'  => 001, 
                'NO_SURVEY' => null, 
                'CIF' => $request->cif,
                'USER_ID'=> $request->user_id,
                'TGL_PERMOHONAN' => Carbon::createFromFormat('m/d/Y', $request->tgl_permohonan)->format('Y-m-d'),
                'TGL_ANALISA' => Carbon::createFromFormat('m/d/Y', $request->tgl_analisa)->format('Y-m-d'),
                
                'LIMIT_KREDIT' => str_replace('.','',$request->limit_kredit),
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
                'JADI_NASABAH_SEJAK'=> Carbon::createFromFormat('m/d/Y', $request->menjadi_nasabah_sejak)->format('Y-m-d'),
    
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
                'ISI_PENDIRIAN' => $dokumen_pendirian_img,
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

        $dokumen_pendirian_img = 'Dokumen_Pendirian_'.$id.'.'.$request->isi_pendirian->extension();
        $i=1;
        while(Storage::exists('public/upload/'.$dokumen_pendirian_img)){
            $dokumen_pendirian_img = 'Dokumen_Pendirian_'.$id.'('.$i.')'.'.'.$request->isi_pendirian->extension();
            $i++;
        }
        Storage::disk('public')->put($dokumen_pendirian_img,  
            File::get($request->file('isi_pendirian')));
            Storage::move('public/'.$dokumen_pendirian_img,'public/upload/'.$dokumen_pendirian_img);

        TNasabah::where('ID_NASABAH' , $id)->update([
            'ID_CABANG'  => 001, 
            'NO_SURVEY' => null, 
            'CIF' => $request->cif,
            'USER_ID' => $request->user_id,
            'TGL_PERMOHONAN' => Carbon::createFromFormat('m/d/Y', $request->tgl_permohonan)->format('Y-m-d'),
            'TGL_ANALISA' => Carbon::createFromFormat('m/d/Y', $request->tgl_analisa)->format('Y-m-d'),
            
            'LIMIT_KREDIT' => str_replace('.','',$request->limit_kredit),
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
            'JADI_NASABAH_SEJAK'=> Carbon::createFromFormat('m/d/Y', $request->menjadi_nasabah_sejak)->format('Y-m-d'),

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

    public function tambah_pengurus(Request $request){
        $pengurus = TPenguru::insert([
            'ID_NASABAH' => $request->id,
            'NAMA' => $request->nama,
            'JABATAN' => $request->jabatan,
            'NO_TELP' => $request->no_telp,
            'TGL_LAHIR' => Carbon::createFromFormat('m/d/Y', $request->tgl_lahir)->format('Y-m-d'),
            'NO_KTP' => $request->no_ktp,
            'SAHAM' => $request->saham
        ]);

        return redirect()
            ->back()
            ->with('success-add-pengurus', 'Data nasabah berhasil diedit!');
    }

    public function edit_pengurus(Request $request, $id){
        $pengurus = TPenguru::where('ID', $id)->update([
            'NAMA' => $request->nama,
            'JABATAN' => $request->jabatan,
            'NO_TELP' => $request->no_telp,
            'TGL_LAHIR' => Carbon::createFromFormat('m/d/Y', $request->tgl_lahir)->format('Y-m-d'),
            'NO_KTP' => $request->no_ktp,
            'SAHAM' => $request->saham
        ]);

        return redirect()
            ->back()
            ->with('success-edit', 'Data nasabah berhasil diedit!');
    }
    
    public function delete_pengurus($id){
        $pengurus = TPenguru::where('ID', $id)->delete();
        return redirect()
            ->back()
            ->with('success-edit', 'Data nasabah berhasil dihapus!');
    }

}

