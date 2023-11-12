<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TNasabah;
use App\Models\TSyariah;
use App\Models\TScoring;

class SyariahController extends Controller
{
    public function index($id){
        $nasabah = TNasabah::where('ID_NASABAH', $id)->first();
        $syariah_nasabah = TSyariah::where('ID_NASABAH', $id)->first();
        $hasil_scoring = TScoring::where('ID_NASABAH',$id)->first();
        $hasil_scoring_syariah = $hasil_scoring->SYARIAH ?? 0;
        return view('5syariah',[
            'nasabah' => $nasabah,
            'scoring_syariah' => $hasil_scoring_syariah,
            'syariah_nasabah' => $syariah_nasabah
        ]);
    }

    public function submitSyariah(Request $request){

        if(TSyariah::where('ID_NASABAH', $request->id)->first() == null){
            TSyariah::insert([
                'SY_SERTIFIKASI_HALAL' => $request->sertifikasi,
                'SY_JUMLAH_HUTANG' => $request->jumlah_hutang,
                'SY_AKAD_USAHA' => $request->akad_usaha,
                'SY_JENIS_BARANG' => $request->jenis_barang_usaha,
                'SY_PRESENTASE_NON_SYARIAH' => $request->presentase,
                'ID_NASABAH' => $request->id
            ]);
        }else{
            TSyariah::where('ID_NASABAH', $request->id)->update([
                'SY_SERTIFIKASI_HALAL' => $request->sertifikasi,
                'SY_JUMLAH_HUTANG' => $request->jumlah_hutang,
                'SY_AKAD_USAHA' => $request->akad_usaha,
                'SY_JENIS_BARANG' => $request->jenis_barang_usaha,
                'SY_PRESENTASE_NON_SYARIAH' => $request->presentase,
            ]);
        }

        if($request->jumlah_hutang > 90 ){
            $jumlah_hutang = 1;
        }
        else if($request->jumlah_hutang > 60 ){
            $jumlah_hutang = 2;
        }
        else if($request->jumlah_hutang > 50 ){
            $jumlah_hutang = 3;
        }
        else if($request->jumlah_hutang > 40 ){
            $jumlah_hutang = 4;
        }
        else {
            $jumlah_hutang = 5;
        }

        if($request->presentase > 90 ){
            $non_syariah = 1;
        }
        else if($request->presentase > 60 ){
            $non_syariah = 2;
        }
        else if($request->presentase > 50 ){
            $non_syariah = 3;
        }
        else if($request->presentase > 40 ){
            $non_syariah = 4;
        }
        else {
            $non_syariah = 5;
        }

        $output = ($request->sertifikasi/2 * 2 / 10 ) + ($request->akad_usaha/2 * 2 / 10 ) + ($request->jenis_barang_usaha/2 * 2 / 10 ) + ($jumlah_hutang /5 * 2 / 10 ) + ($non_syariah /5 * 2 / 10 ); 

        $Tscoring = TScoring::where('ID_NASABAH', $request->id)->first();
        if($Tscoring == null){
            $scoring = $output * 5 /100;
            TScoring::insert([
                'ID_NASABAH' => $request->id,
                'CAPACITY' => 0,
                'CAPITAL' => 0,
                'CHARACTER' => 0,
                'COLLATERAL' => 0,
                'CONDITION' => 0,
                'SYARIAH' => $output,
                'SCORING' => $scoring
                
            ]);
        } else {
            $scoring = $output * 5 /100 + $Tscoring->CAPACITY * 2 /10+ $Tscoring->CHARACTER * 2 /10+ $Tscoring->CAPITAL * 2 /10+ $Tscoring->CONDITION * 15 /100 + $Tscoring->COLLATERAL * 2 /10;
            TScoring::where('ID_NASABAH', $request->id)->update([
                'SYARIAH' => $output,
                'SCORING' => $scoring
            ]);
        }

        return redirect()->back()->with('message', 'success');
    }
}
