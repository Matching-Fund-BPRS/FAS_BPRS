@extends ('partial.mainnota')

@section('container')

<form method="POST" action="/dashboard/neraca/tambah" id="neraca_form">
    @csrf
    <input type="hidden" name="id" value="{{ $nasabah->ID_NASABAH }}" >
    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="border w-32 flex border-gray-200">
                            <p class="text-sm font-semibold text-center text-gray-600">No.</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-gray-600">Uraian</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-gray-600">I</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-gray-600">Kenaikan %</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-gray-600">II</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-gray-600">Kenaikan %</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-gray-600">III</p>
                        </div>
                    </div>   

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="col-span-2 border border-gray-200">
                            <p class="text-sm font-semibold text-center text-gray-600">Tanggal</p>
                        </div>
                        <td class="px-4 py-1 whitespace-nowrap flex">
                            <input type="date" name="tgl_periode" class="text-sm font-normal text-center text-gray-600 border-none p-0 mx-auto"
                            value="{{ $neraca_nasabah ? $neraca_nasabah->TANGGAL_PERIODE->format('Y-m-d') : date('Y-m-d') }}" required>
                        </td>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>

                        <div class="border border-gray-200 flex justify-center"> 
                            <p class="text-sm font-semibold text-center text-gray-600">06/08/2015</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-gray-600">06/08/2015</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="col-span-2 border border-gray-200">
                            <p class="text-sm font-semibold text-center text-gray-600">AKTIVA</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600" name="aktiva">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600">1.</p>
                        </div >
                        <div class="">
                            <p class="text-sm font-semibold text-center text-gray-600">Aktiva Lancar</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Kas</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="kas" value="{{ $neraca_nasabah->KAS ?? 0 }} " class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_kas_1" class="text-sm font-normal text-center text-gray-600" value="10" >
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_kas_2" class="text-sm font-normal text-center text-gray-600" value="10">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32 ">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Piutang Dagang</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="piutang_dagang" value="{{ $neraca_nasabah->PIUTANG_DAGANG ?? 0 }}" class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_piutang_dagang_1" class="text-sm font-normal text-center text-gray-600" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_piutang_dagang_2" class="text-sm font-normal text-center text-gray-600" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>  

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32 ">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Persediaan</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="persediaan" value="{{ $neraca_nasabah->PERSEDIAAN ?? 0 }}" class="text-sm font-normal text-center text-gray-600">
                        </div>

                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_persediaan_1" class="text-sm font-normal text-center text-gray-600" value="5">
                        </div>
                        
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>

                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_persediaan_2" class="text-sm font-normal text-center text-gray-600" value="5">
                        </div>

                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>  

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-semibold text-center text-gray-600">Subtotal</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600" name="sub_total_aktiva_lancar"">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32 ">
                            <p class="text-sm font-semibold text-center text-gray-600">2.</p>
                        </div>
                        <div class="">
                            <p class="text-sm font-semibold text-center text-gray-600">Aktiva Tetap</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32 ">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Tanah</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="tanah" value="{{ $neraca_nasabah->TANAH ?? 0 }}"class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_tanah_1" class="text-sm font-normal text-center text-gray-600" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_tanah_2" class="text-sm font-normal text-center text-gray-600" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32 ">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Gedung</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="gedung" value="{{ $neraca_nasabah->GEDUNG ?? 0 }}" class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_gedung_1" class="text-sm font-normal text-center text-gray-600" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_gedung_2" class="text-sm font-normal text-center text-gray-600" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>  

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32 ">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Penyusutan Gedung</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="penyusutan_gedung" value="{{ $neraca_nasabah->PENYUSUTAN_GED ?? 0 }}" class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_penyusutan_gedung_1" class="text-sm font-normal text-center text-gray-600" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_penyusutan_gedung_2" class="text-sm font-normal text-center text-gray-600" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>  

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32 ">
                            <p class="text-sm font-normal text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Peralatan</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="peralatan" value="{{ $neraca_nasabah->PERALATAN ?? 0 }}" class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_peralatan_1" class="text-sm font-normal text-center text-gray-600" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_peralatan_2" class="text-sm font-normal text-center text-gray-600" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32 ">
                            <p class="text-sm font-normal text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Penyusutan Peralatan</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="penyusutan_peralatan" value="{{ $neraca_nasabah->PENYUSUTAN_PERALATAN ?? 0 }}"class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_penyusutan_peralatan_1" class="text-sm font-normal text-center text-gray-600" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_penyusutan_peralatan_2" class="text-sm font-normal text-center text-gray-600" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32 ">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-semibold text-center text-gray-600">Subtotal</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600" name="sub_total_aktiva_tetap">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class=" col-span-2">
                            <p class="text-sm font-semibold text-center text-gray-600">PASIVA</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600" name="pasiva">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600">1.</p>
                        </div >
                        <div class="">
                            <p class="text-sm font-semibold text-center text-gray-600">Kewajiban</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Hutang Jangka Pendek</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="hutang_jangka_pendek" value="{{ $neraca_nasabah->HUTANG_JANGKA_PENDEK ?? 0 }}" class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_hutang_jangka_pendek_1" class="text-sm font-normal text-center text-gray-600" value="-25">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_hutang_jangka_pendek_2" class="text-sm font-normal text-center text-gray-600" value="-25">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Hutang Jangka Panjang</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="hutang_jangka_panjang" value="{{ $neraca_nasabah->HUTANG_JANGKA_PANJANG ?? 0 }}" class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_hutang_jangka_panjang_1" class="text-sm font-normal text-center text-gray-600" value="-25">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_hutang_jangka_panjang_2" class="text-sm font-normal text-center text-gray-600" value="-25">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-semibold text-center text-gray-600">Subtotal</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600" name="sub_total_kewajiban">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled  class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled  class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600">1.</p>
                        </div >
                        <div class="">
                            <p class="text-sm font-semibold text-center text-gray-600">Modal</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled  class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Modal / Saham</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input readonly name="modal" value="{{ $neraca_nasabah->MODAL ?? 0 }}"  class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_modal_1" class="text-sm font-normal text-center text-gray-600" disabled>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_modal_1" class="text-sm font-normal text-center text-gray-600" disabled>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Laba Ditahan</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="laba_ditahan" value="{{ $neraca_nasabah->LABA_DITAHAN ?? 0 }}"  class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_laba_ditahan_1" class="text-sm font-normal text-center text-gray-600" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_laba_ditahan_2" class="text-sm font-normal text-center text-gray-600" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-normal text-center text-gray-600">Laba Berjalan</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="laba_berjalan" value="{{ $neraca_nasabah->LABA_BERJALAN ?? 0 }}" class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_laba_berjalan_1" class="text-sm font-normal text-center text-gray-600" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_laba_berjalan_2" class="text-sm font-normal text-center text-gray-600" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-gray-600">
                        </div>
                    </div>

                    

                    <div class="grid grid-cols-7 border border-gray-200">
                        <div class="w-32">
                            <p class="text-sm font-semibold text-center text-gray-600"></p>
                        </div>
                        <div class="">
                            <p class="text-sm font-semibold text-center text-gray-600">Subtotal</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600" name="sub_total_modal">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-gray-600">
                        </div>
                    </div>

                </div>
                <br>
                    @if($neraca_nasabah == null)
                        <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 justify-items-end ml-auto">Simpan</button>
                    @else
                        <button type="submit" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 justify-items-end ml-auto">Simpan Perubahan</button>
                    @endif
            </div>
        </div>
    </div>
</form>

<script src="{{ asset('js/neraca.js') }}"></script>
@if(session('message'))
<script>
    alert('Berhasil menyimpan data!')
</script>
@endif

@endsection