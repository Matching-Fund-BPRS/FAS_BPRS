@extends ('partial.mainnota')

@section('container')

<form method="POST" action="/dashboard/neraca/tambah" id="neraca_form">
    @csrf
    <input type="hidden" name="id" value="{{ $nasabah->ID_NASABAH }}" >
    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full max-w-screen-xl py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden md:rounded-lg">
                    <div class="grid grid-cols-7 ">
                        <div class="px-2 py-3.5 bg-gray-300 text-sm font-bold text-center rtl:text-right text-black-500 border border-gray-200 ">
                            <p class="text-sm font-semibold text-center text-black">No.</p>
                        </div>
                        <div class="px-2 py-3.5 bg-gray-300 text-sm font-bold text-center rtl:text-right text-black-500 border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-black">Uraian</p>
                        </div>
                        <div class="px-2 py-3.5 bg-gray-300 text-sm font-bold text-center rtl:text-right text-black-500 border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-black">I</p>
                        </div>
                        <div class="px-2 py-3.5 bg-gray-300 text-sm font-bold text-center rtl:text-right text-black-500 border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-black">Kenaikan %</p>
                        </div>
                        <div class="px-2 py-3.5 bg-gray-300 text-sm font-bold text-center rtl:text-right text-black-500 border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-black">II</p>
                        </div>
                        <div class="px-2 py-3.5 bg-gray-300 text-sm font-bold text-center rtl:text-right text-black-500 border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-black">Kenaikan %</p>
                        </div>
                        <div class="px-2 py-3.5 bg-gray-300 text-sm font-bold text-center rtl:text-right text-black-500 border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-black">III</p>
                        </div>
                    </div>   

                    <div class="grid grid-cols-7 ">
                        <div class="col-span-2 border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">Tanggal</p>
                        </div>
                        <td class="px-4 py-1 whitespace-nowrap flex">
                            {{-- <input type="date" name="tgl_periode" class="text-sm font-normal text-center text-black border-none p-0 mx-auto"
                            value="{{ $neraca_nasabah ? $neraca_nasabah->TANGGAL_PERIODE->format('Y-m-d') : date('Y-m-d') }}" required> --}}
                        </td>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>

                        <div class="border border-gray-200 flex justify-center"> 
                            <p class="text-sm font-semibold text-center text-black">06/08/2015</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <p class="text-sm font-semibold text-center text-black">06/08/2015</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7">
                        <div class="col-span-2 border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">AKTIVA</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black" name="aktiva">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">1.</p>
                        </div >
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">Aktiva Lancar</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Kas</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="kas" value="{{ $neraca_nasabah->KAS ?? 0 }} " class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_kas_1" class="text-sm font-normal text-center text-black" value="10" >
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_kas_2" class="text-sm font-normal text-center text-black" value="10">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200 ">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Piutang Dagang</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="piutang_dagang" value="{{ $neraca_nasabah->PIUTANG_DAGANG ?? 0 }}" class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_piutang_dagang_1" class="text-sm font-normal text-center text-black" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_piutang_dagang_2" class="text-sm font-normal text-center text-black" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>  

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200 ">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Persediaan</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="persediaan" value="{{ $neraca_nasabah->PERSEDIAAN ?? 0 }}" class="text-sm font-normal text-center text-black">
                        </div>

                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_persediaan_1" class="text-sm font-normal text-center text-black" value="5">
                        </div>
                        
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>

                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_persediaan_2" class="text-sm font-normal text-center text-black" value="5">
                        </div>

                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>  

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">Subtotal</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black" name="sub_total_aktiva_lancar"">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200 ">
                            <p class="text-sm font-semibold text-center text-black">2.</p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">Aktiva Tetap</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200 ">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Tanah</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="tanah" value="{{ $neraca_nasabah->TANAH ?? 0 }}"class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_tanah_1" class="text-sm font-normal text-center text-black" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_tanah_2" class="text-sm font-normal text-center text-black" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200 ">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Gedung</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="gedung" value="{{ $neraca_nasabah->GEDUNG ?? 0 }}" class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_gedung_1" class="text-sm font-normal text-center text-black" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_gedung_2" class="text-sm font-normal text-center text-black" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>  

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200 ">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Penyusutan Gedung</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="penyusutan_gedung" value="{{ $neraca_nasabah->PENYUSUTAN_GED ?? 0 }}" class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_penyusutan_gedung_1" class="text-sm font-normal text-center text-black" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_penyusutan_gedung_2" class="text-sm font-normal text-center text-black" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>  

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200 ">
                            <p class="text-sm font-normal text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Peralatan</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="peralatan" value="{{ $neraca_nasabah->PERALATAN ?? 0 }}" class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_peralatan_1" class="text-sm font-normal text-center text-black" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_peralatan_2" class="text-sm font-normal text-center text-black" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200 ">
                            <p class="text-sm font-normal text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Penyusutan Peralatan</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="penyusutan_peralatan" value="{{ $neraca_nasabah->PENYUSUTAN_PERALATAN ?? 0 }}"class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_penyusutan_peralatan_1" class="text-sm font-normal text-center text-black" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_penyusutan_peralatan_2" class="text-sm font-normal text-center text-black" value="5">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200 ">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">Subtotal</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black" name="sub_total_aktiva_tetap">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                    </div>

                    <div class="grid grid-cols-7">
                        <div class=" col-span-2 border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">PASIVA</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black" name="pasiva">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                    </div>

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">1.</p>
                        </div >
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">Kewajiban</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                    </div>

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Hutang Jangka Pendek</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="hutang_jangka_pendek" value="{{ $neraca_nasabah->HUTANG_JANGKA_PENDEK ?? 0 }}" class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_hutang_jangka_pendek_1" class="text-sm font-normal text-center text-black" value="-25">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_hutang_jangka_pendek_2" class="text-sm font-normal text-center text-black" value="-25">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Hutang Jangka Panjang</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="hutang_jangka_panjang" value="{{ $neraca_nasabah->HUTANG_JANGKA_PANJANG ?? 0 }}" class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_hutang_jangka_panjang_1" class="text-sm font-normal text-center text-black" value="-25">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_hutang_jangka_panjang_2" class="text-sm font-normal text-center text-black" value="-25">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">Subtotal</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black" name="sub_total_kewajiban">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled  class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled  class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                    </div>

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">1.</p>
                        </div >
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">Modal</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled  class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                    </div>

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Modal / Saham</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input readonly name="modal" value="{{ $neraca_nasabah->MODAL ?? 0 }}"  class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_modal_1" class="text-sm font-normal text-center text-black" disabled>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_modal_1" class="text-sm font-normal text-center text-black" disabled>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Laba Ditahan</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="laba_ditahan" value="{{ $neraca_nasabah->LABA_DITAHAN ?? 0 }}"  class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_laba_ditahan_1" class="text-sm font-normal text-center text-black" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_laba_ditahan_2" class="text-sm font-normal text-center text-black" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input class="text-sm font-normal text-center text-black">
                        </div>
                    </div>

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-normal text-center text-black">Laba Berjalan</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input  name="laba_berjalan" value="{{ $neraca_nasabah->LABA_BERJALAN ?? 0 }}" class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_laba_berjalan_1" class="text-sm font-normal text-center text-black" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input name="kenaikan_laba_berjalan_2" class="text-sm font-normal text-center text-black" value="0">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-normal text-center text-black">
                        </div>
                    </div>

                    

                    <div class="grid grid-cols-7">
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black"></p>
                        </div>
                        <div class="border border-gray-200">
                            <p class="text-sm font-semibold text-center text-black">Subtotal</p>
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black" name="sub_total_modal">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
                        </div>
                        <div class="border border-gray-200 flex justify-center">
                            <input disabled class="text-sm font-semibold text-center text-black">
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