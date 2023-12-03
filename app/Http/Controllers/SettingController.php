<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReffBank;
use App\Models\ReffSandiBi;
use App\Models\ReffSandiSid;

class SettingController extends Controller
{
    public function indexBI(){
        if(auth()->user()->level != 2){
            return redirect()->back();
        }

        $reff_bi = ReffSandiBi::paginate(50);
        return view('pengaturanBI',compact('reff_bi'));
    }

    public function postBI(Request $request){
        if(auth()->user()->level != 2){
            return redirect()->back();
        }

        $check_old_data = (
            ReffSandiBi::where('JENIS', $request->old_jenis)
                        ->where('SANDI', $request->old_sandi)
                        ->where('KETERANGAN', $request->old_keterangan)
                        ->first()
        );

        if($check_old_data == null){
            ReffSandiBi::insert([
                'JENIS' => $request->jenis,
                'SANDI' => $request->sandi,
                'KETERANGAN' => $request->keterangan
            ]);
            return redirect()->back()->with('success-add', 'message');
        }else{
            ReffSandiBi::where('JENIS', $request->old_jenis)
                        ->where('SANDI', $request->old_sandi)
                        ->where('KETERANGAN', $request->old_keterangan)
                        ->update([
                            'JENIS' => $request->jenis,
                            'SANDI' => $request->sandi,
                            'KETERANGAN' => $request->keterangan
                        ]);
            return redirect()->back()->with('success-edit', 'message');
        }
        return redirect()->back();
    }

    public function indexSID(){
        if(auth()->user()->level != 2){
            return redirect()->back();
        }
        $reff_sid = ReffSandiSid::paginate(50);
        return view('pengaturanSID',compact('reff_sid'));
    }

    public function postSID(Request $request){
        if(auth()->user()->level != 2){
            return redirect()->back();
        }

        $check_old_data = (
            ReffSandiSid::where('JENIS', $request->old_jenis)
                        ->where('SANDI', $request->old_sandi)
                        ->where('KETERANGAN', $request->old_keterangan)
                        ->first()
        );

        if($check_old_data == null){
            ReffSandiSid::insert([
                'JENIS' => $request->jenis,
                'SANDI' => $request->sandi,
                'KETERANGAN' => $request->keterangan
            ]);
            return redirect()->back()->with('success-add', 'message');
        }else{
            ReffSandiSid::where('JENIS', $request->old_jenis)
                        ->where('SANDI', $request->old_sandi)
                        ->where('KETERANGAN', $request->old_keterangan)
                        ->update([
                            'JENIS' => $request->jenis,
                            'SANDI' => $request->sandi,
                            'KETERANGAN' => $request->keterangan
                        ]);
            return redirect()->back()->with('success-edit', 'message');
        }
        return redirect()->back();
    }
    
    public function indexBank(){
        if(auth()->user()->level != 2){
            return redirect()->back();
        }
        $reff_bank = ReffBank::paginate(50);
        return view('pengaturanBank',compact('reff_bank'));
    }

    public function postBank(Request $request){
        if(auth()->user()->level != 2){
            return redirect()->back();
        }

        $check_old_data = (
            ReffBank::where('KODE', $request->kode)->first()
        );

        if($check_old_data == null){
            ReffBank::insert([
                'KODE' => $request->kode,
                'BANK' => $request->bank,
            ]);
            return redirect()->back()->with('success-add', 'message');
        }else{
            ReffBank::where('KODE', $request->kode)
                        ->update([
                            'KODE' => $request->kode,
                            'BANK' => $request->bank,
                        ]);
            return redirect()->back()->with('success-edit', 'message');
        }
        return redirect()->back();
    }
}
