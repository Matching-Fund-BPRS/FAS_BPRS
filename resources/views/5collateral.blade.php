@extends ('partial.mainnota')

@section('container')
<section class="my-4">
    <div class="py-4 flex justify-between items-center">
        <p class="text-base font-semibold text-gray-900">
            Tabel Agunan dan Asuransi
        </p>
    </div>

        <div class="w-full">
            <div class="inline-block w-full max-w-screen-xl py-2 align-middle">
                <div class="overflow-hidden border border-gray-200 md:rounded-lg w-full">
    
                    <table class="w-full divide-y divide-gray-20 table-auto overflow-auto whitespace-normal">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Jenis
                                </th>
    
                                <th scope="col" class="px-4 py-3.5 w-80 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Bukti Milik
                                </th>
    
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Keterangan
                                </th>
    
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Nilai
                                </th>
    
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500">
                                    Save Margin
                                </th>
    
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-20">
                            @php
                                $count = 1
                            @endphp
                            @foreach ($agunan_nasabah as $agunan)
                                <tr onclick="
                                document.getElementById('openPopup{{ $agunan->ID }}').click()
                                showForm({{ $count++ }});
                                " class="cursor-pointer" >
                                    <button type="button" class="hidden" data-modal-target="defaultModal{{ $agunan->ID }}" data-modal-toggle="defaultModal{{ $agunan->ID }}" id="openPopup{{ $agunan->ID }}" ></button>
                                    <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-bold text-center text-gray-600">{{ $agunan->JENIS }}</p>
                                    </td>
                                    
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">{{ $agunan->BUKTI_MILIK }}</p>
                                    </td>
                                    
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">{{ $agunan->KETERANGAN }}</p>
                                    </td>
                                    
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">{{ number_format($agunan->NILAI, 0, ',', '.') }}</p>
                                    </td>
                                    
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">{{ number_format($agunan->SAVE_MARGIN, 0, ',', '.') }}</p>
                                    </td>  
                            @endforeach
                                <tr>    
                                    <td class="px-4 py-4 whitespace-nowrap" colspan="3">
                                        <p class="text-sm font-bold text-center text-gray-600">Total</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-normal text-center text-gray-600">{{ number_format($agunan_nasabah->sum('NILAI'), 0, ',', '.') }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-normal text-center text-gray-600">{{ number_format($agunan_nasabah->sum('SAVE_MARGIN'), 0, ',', '.') }}</p>
                                    </td>
                        </tbody>

                    </table>
    
                </div>
            </div>
        </div>
    <div style="float:right">
        <button type="submit" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Tambah Agunan</button>
    </div>
</section>
@if($collateral_nasabah == null)
{{-- Tabel Agunan dan Asuransi --}}

<form method="post" action="{{ route('postCollateral') }}">
    @csrf
    <section id="collateral" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Collateral
        </p>
        <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
            <div class= "min-w-xl">
                <label for="ca_nilai_agunan" class="block mb-2 text-xs font-medium text-gray-900">Nilai Agunan</label>
                <select name="ca_nilai_agunan" id="ca_nilai_agunan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Nilai Jual Agunan Lebih Rendah Dari Nilai Pembiayaan</option>
                    <option value="2">Nilai Jual Agunan Setara Nilai Pembiayaan</option>
                    <option value="3">Nilai Jual Agunan melebihi nilai Pembiayaan</option>
                </select>
            </div>
        
            <div class= "min-w-xl">
                <label for="pa_dokumen" class="block mb-2 text-xs font-medium text-gray-900">Penilaian Dokumen Agunan</label>
                <select name="pa_dokumen" id="pa_dokumen" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Dokumen Lengkap</option>
                    <option value="2">Dokumen Tidak Lengkap</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="pengikatan" class="block mb-2 text-xs font-medium text-gray-900">Pengikatan</label>
                <select name="pengikatan" id="pengikatan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Tidak diikat sama sekali </option>
                    <option value="2">Diikat dibawah tangan</option>
                    <option value="3">Diikat notarial</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="marketability" class="block mb-2 text-xs font-medium text-gray-900">Kemudahan Dijual</label>
                <select name="marketability" id="marketability" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Cukup mudah dijual</option>
                    <option value="2">Mudah dijual</option>
                    <option value="3">Sangat mudah dijual</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="kepemilikan" class="block mb-2 text-xs font-medium text-gray-900">Kepemilikan</label>
                <select name="kepemilikan" id="kepemilikan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Pihak satu derajat</option>
                    <option value="2">Pihak ketiga</option>
                    <option value="3">Milik sendiri</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="penguasaan" class="block mb-2 text-xs font-medium text-gray-900">Penguasaan</label>
                <select name="penguasaan" id="penguasaan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Tidak Ditempati</option>
                    <option value="2">Disewakan</option>
                    <option value="3">Ditempati sendiri</option>
                </select>
            </div>
            <div class= "min-w-xl">
                <label for="leg_usaha" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Usaha (Izin-Izin)</label>
                <select name="leg_usaha" id="leg_usaha" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Tidak ada</option>
                    <option value="2"> Surat Keterangan Usaha</option>
                    <option value="3">SIUP</option>
                </select>
            </div>
            <div class="flex justify-between items-center">
                <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan </button>
                <p class="text-base">
                    Hasil : <span class="text-blue-700 font-bold">{{ number_format(($output * 100), 2) . '%' }}</span>
                </p>
            </div>
    </section>
</form>
@else
{{-- Tabel Agunan dan Asuransi --}}

<form method="post" action="/dashboard/5collateral/{{ $nasabah->ID_NASABAH }}/edit">
    @csrf
    <section id="collateral" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Collateral
        </p>
            <div class= "min-w-xl">
                <label for="ca_nilai_agunan" class="block mb-2 text-xs font-medium text-gray-900">Nilai Agunan</label>
                <select name="ca_nilai_agunan" id="ca_nilai_agunan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option @if($collateral_nasabah->CA_NILAI_AGUNAN == 1) selected @endif value="1">Nilai Jual Agunan Lebih Rendah Dari Nilai Pembiayaan</option>
                    <option @if($collateral_nasabah->CA_NILAI_AGUNAN == 2) selected @endif value="2">Nilai Jual Agunan Setara Nilai Pembiayaan</option>
                    <option @if($collateral_nasabah->CA_NILAI_AGUNAN == 3) selected @endif value="3">Nilai Jual Agunan melebihi nilai Pembiayaan</option>
                </select>
            </div>

        
            <div class= "min-w-xl">
                <label for="pa_dokumen" class="block mb-2 text-xs font-medium text-gray-900">Penilaian Dokumen Agunan</label>
                <select name="pa_dokumen" id="pa_dokumen" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option @if($collateral_nasabah->PA_DOKUMEN == 1) selected @endif value="1">Dokumen Lengkap</option>
                    <option @if($collateral_nasabah->PA_DOKUMEN == 2) selected @endif value="2">Dokumen Tidak Lengkap</option>
                </select>
            </div>

        
            <div class= "min-w-xl">
                <label for="pengikatan" class="block mb-2 text-xs font-medium text-gray-900">Pengikatan</label>
                <select name="pengikatan" id="pengikatan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option @if($collateral_nasabah->PENGIKATAN == 1) selected @endif value="1"> Tidak diikat sama sekali </option>
                    <option @if($collateral_nasabah->PENGIKATAN == 2) selected @endif value="2">Diikat dibawah tangan</option>
                    <option @if($collateral_nasabah->PENGIKATAN == 3) selected @endif value="3">Diikat notarial</option>
                
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="marketability" class="block mb-2 text-xs font-medium text-gray-900">Kemudahan Dijual</label>
                <select name="marketability" id="marketability" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1" @if($collateral_nasabah->MARKETABILITY == 1) selected @endif> Cukup mudah dijual</option>
                    <option value="2" @if($collateral_nasabah->MARKETABILITY == 2) selected @endif>Mudah dijual</option>
                    <option value="3" @if($collateral_nasabah->MARKETABILITY == 3) selected @endif>Sangat mudah dijual</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="kepemilikan" class="block mb-2 text-xs font-medium text-gray-900">Kepemilikan</label>
                <select name="kepemilikan" id="kepemilikan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1" @if($collateral_nasabah->KEPEMILIKAN == 1) selected @endif>Pihak satu derajat</option>
                    <option value="2" @if($collateral_nasabah->KEPEMILIKAN == 2) selected @endif>Pihak ketiga</option>
                    <option value="3" @if($collateral_nasabah->KEPEMILIKAN == 3) selected @endif>Milik sendiri</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="penguasaan" class="block mb-2 text-xs font-medium text-gray-900">Penguasaan</label>
                <select name="penguasaan" id="penguasaan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1" @if($collateral_nasabah->PENGUASAAN == 1) selected @endif>Tidak Ditempati</option>
                    <option value="2" @if($collateral_nasabah->PENGUASAAN == 2) selected @endif>Disewakan</option>
                    <option value="3" @if($collateral_nasabah->PENGUASAAN == 3) selected @endif>Ditempati sendiri</option>
                </select>
            </div>
            <div class= "min-w-xl">
                <label for="leg_usaha" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Usaha (Izin-Izin)</label>
                <select name="leg_usaha" id="leg_usaha" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option @if($collateral_nasabah->LEG_USAHA == 1) selected @endif value="1" selected>Tidak ada</option>
                    <option @if($collateral_nasabah->LEG_USAHA == 2) selected @endif value="2">Surat Keterangan Usaha</option>
                    <option @if($collateral_nasabah->LEG_USAHA == 3) selected @endif value="3">SIUP</option>
                </select>
            </div>
            <div class="flex justify-between items-center">
                <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
                <p class="text-base">
                    Hasil : <span class="text-blue-700 font-bold">{{ number_format(($output * 100), 2) . '%' }}</span>
                </p>
            </div>
    </section>
</form>
@endif


{{-- Analisa Resiko --}}
@if($resiko_nasabah == null)
<form method="post" action="{{ Route('tambah_resiko') }}">
    @csrf
    <section class="space-y-4 my-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Analisa Resiko
        </p>
        <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
        <div>
            <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">1. Resiko</label>
            <textarea name="resiko" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Resiko..."></textarea>        
        </div>
        <div>
            <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">2. Mitigasi Resiko</label>
            <textarea name="mitigasi_resiko" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Mitigasi Resiko..."></textarea>        
        </div>
        <div>
            <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">3. Catatan Badan Usaha</label>
            <textarea name="badan_usaha" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Catatan Badan Usaha"></textarea>        
        </div>
        <div>
            <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">4. Catatan Usulan</label>
            <textarea name="usulan" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Catatan Usulan"></textarea>        
        </div>
        <div class=" pt-6">
            <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
        </div>  
    </section>
</form>
@else
<form method="post" action="/dashboard/5collateral/{{ $nasabah->ID_NASABAH }}/edit-resiko">
    @csrf
    <section class="space-y-4 my-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Analisa Resiko
        </p>
        <div>
            <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">1. Resiko</label>
            <textarea name="resiko" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Resiko..."> {{ $resiko_nasabah->RESIKO }}</textarea>        
        </div>
        <div>
            <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">2. Mitigasi Resiko</label>
            <textarea name="mitigasi_resiko" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Mitigasi Resiko...">{{ $resiko_nasabah->MITIGASI_RESIKO }}</textarea>        
        </div>
        <div>
            <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">3. Catatan Badan Usaha</label>
            <textarea name="badan_usaha" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Catatan Badan Usaha ...">{{ $resiko_nasabah->BADAN_USAHA }}</textarea>        
        </div>
        <div>
            <label for="ketpeng" class="block mb-2 text-xs font-semibold text-gray-900 dark:text-white">4. Catatan Usulan</label>
            <textarea name="usulan" id="ketpeng" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Catatan Usulan ...">{{ $resiko_nasabah->USULAN }}</textarea>        
        </div>
        <div class=" pt-6">
            <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
        </div>  
    </section>
</form>
@endif

<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-sm md:max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b border-gray-200 rounded-t dark:border-gray-600">
                <h3 class="text-xl font-bold text-gray-700 dark:text-white">
                    Add Agunan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover-text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark-hover-bg-gray-600 dark-hover-text-white" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="post" action="{{ Route('tambah_agunan') }}" id="form_agunan">
                @csrf
                <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
                <div class="p-4 space-y-4">
                    <div class="min-w-full">
                        
                        <label for="jenis" class="block mb-2 text-xs font-medium text-gray-900">Jenis</label>
                        <select name="jenis" id="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="1" selected>Tanah</option>
                            <option value="2">Tanah dan Bangunan</option>
                            <option value="3">Bangunan</option>
                            <option value="4">Mobil</option>
                            <option value="5">Motor R2</option>
                            <option value="6">Motor R3</option>
                            <option value="7">Minibus</option>
                            <option value="8">Bus</option>
                            <option value="9">Truck</option>
                            <option value="10">Dump Truck</option>
                            <option value="11">Mobil Pickup</option>
                            <option value="12">Deposito Berjangka</option>
                            <option value="13">Emas</option>
                            <option value="14">Lainya</option>
                        </select>
                    </div>
                    <div class="min-w-full">
                        <label for="jenis_bangunan" class="block mb-2 text-xs font-medium text-gray-900">Jenis Bangunan</label>
                        <select name="jenis_bangunan" id="jenis_bangunan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        <option value="1">Rumah tinggal</option>
                        <option value="2">Ruko</option>
                        <option value="3">Rukan</option>
                        <option value="4">Gudang</option>
                        <option value="5">Rusun</option>
                        </select>
                    </div>
                    <div class="min-w-full">
                        <label for="bukti_milik" class="block mb-2 text-xs font-medium text-gray-900">Bukti Milik</label>
                        <select name="bukti_milik" id="bukti_milik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="A">SHM</option>
                            <option value="B">SHGB</option>
                            <option value="C">SHP</option>
                            <option value="D">Strata Title</option>
                            <option value="E">Sertifikat Deposito</option>
                            <option value="F">Akta Jual Beli</option>
                            <option value="G">BPKB</option>
                            <option value="H">Surat Ijo</option>
                            <option value="I">Petok</option>
                            <option value="J">Girik</option>
                            <option value="K">Lainya</option>
                        </select>
                    </div>
                    <div class="min-w-full">
                        <label for="merk" class="block mb-2 text-xs font-medium text-gray-900">Merk</label>
                        <input name="merk" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="tahun" class="block mb-2 text-xs font-medium text-gray-900">Tahun</label>
                        <input name="tahun" type="number" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="no_bpkb" class="block mb-2 text-xs font-medium text-gray-900">No. BPKB</label>
                        <input name="no_bpkb" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="nopol" class="block mb-2 text-xs font-medium text-gray-900">No. Polisi</label>
                        <input name="nopol" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="no_mesin" class="block mb-2 text-xs font-medium text-gray-900">No. Mesin</label>
                        <input name="no_mesin" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="no_rangka" class="block mb-2 text-xs font-medium text-gray-900">No. Rangka</label>
                        <input name="no_rangka" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="warna" class="block mb-2 text-xs font-medium text-gray-900">Warna</label>
                        <input name="warna" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="atas_nama" class="block mb-2 text-xs font-medium text-gray-900">Atas Nama</label>
                        <input name="atas_nama" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="alamat" class="block mb-2 text-xs font-medium text-gray-900">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="4" class="w-full block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark-bg-gray-700 dark-border-gray-600 dark-placeholder-gray-400 dark-text-white dark-focus-ring-green-500 dark-focus-border-green-500" placeholder="Tulis Alamat..."></textarea>
                    </div>

                    <div class="flex justify-center">
                        <div>
                            <label for="tgl_berlaku" class="block mb-2 text-xs font-medium text-gray-900 text-center">Tanggal Berlaku</label>
                           <input name="tgl_berlaku" type="date" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        </div>
                    </div>
                    <div class="min-w-full">
                        <label for="no_agunan" class="block mb-2 text-xs font-medium text-gray-900">No. Agunan</label>
                        <input name="no_agunan" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
                    
                    <div class="min-w-full">
                        <label for="nama_pemilik" class="block mb-2 text-xs font-medium text-gray-900">Nama Pemilik</label>
                        <input name="nama_pemilik" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
                    
                    <div class="min-w-full">
                        <label for="lokasi" class="block mb-2 text-xs font-medium text-gray-900">Lokasi</label>
                        <input name="lokasi" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
                    
                    <div class="grid grid-cols-2 space-x-4">
                        <div>
                            <label for="nilai" class="block mb-2 text-xs font-medium text-gray-900">Nilai Harga Pasar</label>
                            <input name="nilai" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        </div>

                        <div>
                            <label for="safety_margin" class="block mb-2 text-xs font-medium text-gray-900">Safety Margin</label>
                            <input name="safety_margin" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" readonly>
                        </div>
                    </div>

                    <div class="min-w-full">
                        <label for="jenis_pengikatan" class="block mb-2 text-xs font-medium text-gray-900">Jenis Pengikatan</label>
                        <select name="jenis_pengikatan" id="jenis_pengikatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="1">Surat Kuasa Jual</option>
                            <option value="2">Gadai</option>
                            <option value="3">SKMHT</option>
                            <option value="4">HT</option>
                            <option value="5">Fiducia</option>
                            <option value="6">Hipotik</option>
                            <option value="7">Surat Blokir</option>
                        </select>
                    </div>

                    <div class="min-w-full">
                        <label for="asuransi" class="block mb-2 text-xs font-medium text-gray-900">Asuransi</label>
                        <select name="asuransi" id="asuransi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="1">Asuransi Jiwa</option>
                            <option value="2">Asuransi Kebakaran</option>
                            <option value="3">TLO</option>
                            <option value="4">All Risk</option>
                            <option value="5">Asuransi Kredit</option>
                            <option value="6">Asuransi Jiwa dan PHK</option>
                            <option value="7">Tanpa Asuransi</option>
                        </select>
                    </div>
                    <div class="min-w-full">
                        <label for="ket" class="block mb-2 text-xs font-medium text-gray-900">Keterangan</label>
                        <textarea name="ket" id="ket" rows="4" class="w-full block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark-bg-gray-700 dark-border-gray-600 dark-placeholder-gray-400 dark-text-white dark-focus-ring-green-500 dark-focus-border-green-500" placeholder="Keterangan..."></textarea>
                    </div>
    
                    <div class="min-w-full">
                        <label for="luas_tanah" class="block mb-2 text-xs font-medium text-gray-900">Luas Tanah</label>
                        <input name="luas_tanah" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
    
                    <div class="min-w-full">
                        <label for="luas_bangunan" class="block mb-2 text-xs font-medium text-gray-900">Luas Bangunan</label>
                        <input name="luas_bangunan" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
    
                    <div class="min-w-full">
                        <label for="no_dep" class="block mb-2 text-xs font-medium text-gray-900">No. Dep</label>
                        <input name="no_dep" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
    
                    <div class="min-w-full">
                        <label for="dep_bank" class="block mb-2 text-xs font-medium text-gray-900">Dep. Bank</label>
                        <input name="dep_bank" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus-border-green-500 block w-full p-2.5">
                    </div>
                    
    

                </div>
                
                <!-- Modal footer -->
                <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b dark-border-gray-600">
                    <button type="submit" class="focus-outline-none text-white bg-green-700 hover-bg-green-800 focus-ring-4 focus-ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark-bg-green-600 dark-hover-bg-green-700 dark-focus-ring-green-800">Simpan</button>
                    <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover-bg-gray-100 focus-ring-4 focus-outline-none focus-ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover-text-gray-900 focus-z-10 dark-bg-gray-700 dark-text-gray-300 dark-border-gray-500 dark-hover-text-white dark-hover-bg-gray-600 dark-focus-ring-gray-600">Keluar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@if ($agunan_nasabah->count() > 0)
@foreach ($agunan_nasabah as $agunan)
<div id="defaultModal{{ $agunan->ID }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-sm md:max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b border-gray-200 rounded-t dark:border-gray-600">
                <h3 class="text-xl font-bold text-gray-700 dark:text-white">
                    Edit Agunan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover-text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark-hover-bg-gray-600 dark-hover-text-white" data-modal-hide="defaultModal{{ $agunan->ID }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="post" action="/dashboard/5collateral/{{ $agunan->ID }}/edit-agunan" id="form_agunan">
                @csrf
                <input name="id" value="{{ $nasabah->ID_NASABAH }}" type="hidden">
                <div class="p-4 space-y-4">
                    <div class="min-w-full">
                        <label for="jenis" class="block mb-2 text-xs font-medium text-gray-900">Jenis</label>
                        <select name="jenis" id="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="1" {{ $agunan->JENIS == 1 ? 'selected' : '' }}>Tanah</option>
                            <option value="2" {{ $agunan->JENIS == 2 ? 'selected' : '' }}>Tanah dan Bangunan</option>
                            <option value="3" {{ $agunan->JENIS == 3 ? 'selected' : '' }}>Bangunan</option>
                            <option value="4" {{ $agunan->JENIS == 4 ? 'selected' : '' }}>Mobil</option>
                            <option value="5" {{ $agunan->JENIS == 5 ? 'selected' : '' }}>Motor R2</option>
                            <option value="6" {{ $agunan->JENIS == 6 ? 'selected' : '' }}>Motor R3</option>
                            <option value="7" {{ $agunan->JENIS == 7 ? 'selected' : '' }}>Minibus</option>
                            <option value="8" {{ $agunan->JENIS == 8 ? 'selected' : '' }}>Bus</option>
                            <option value="9" {{ $agunan->JENIS == 9 ? 'selected' : '' }}>Truck</option>
                            <option value="10" {{ $agunan->JENIS == 10 ? 'selected' : '' }}>Dump Truck</option>
                            <option value="11" {{ $agunan->JENIS == 11 ? 'selected' : '' }}>Mobil Pickup</option>
                            <option value="12" {{ $agunan->JENIS == 12 ? 'selected' : '' }}>Deposito Berjangka</option>
                            <option value="13" {{ $agunan->JENIS == 13 ? 'selected' : '' }}>Emas</option>
                            <option value="14" {{ $agunan->JENIS == 14 ? 'selected' : '' }}>Lainya</option>
                        </select>
                    </div>
                    <div class="min-w-full">
                        <label for="jenis_bangunan" class="block mb-2 text-xs font-medium text-gray-900">Jenis Bangunan</label>
                        <select name="jenis_bangunan" id="jenis_bangunan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        <option value="1" {{ $agunan->JENIS_BANGUNAN == 1 ? 'selected' : '' }}>Rumah tinggal</option>
                        <option value="2" {{ $agunan->JENIS_BANGUNAN == 2 ? 'selected' : '' }}>Ruko</option>
                        <option value="3" {{ $agunan->JENIS_BANGUNAN == 3 ? 'selected' : '' }}>Rukan</option>
                        <option value="4" {{ $agunan->JENIS_BANGUNAN == 4 ? 'selected' : '' }}>Gudang</option>
                        <option value="5" {{ $agunan->JENIS_BANGUNAN == 5 ? 'selected' : '' }}>Rusun</option>
                        </select>
                    </div>
                    <div class="min-w-full">
                        <label for="bukti_milik" class="block mb-2 text-xs font-medium text-gray-900">Bukti Milik</label>
                        <select name="bukti_milik" id="bukti_milik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="A" {{ $agunan->BUKTI_MILIK == 'A' ? 'selected' : '' }}>SHM</option>
                            <option value="B" {{ $agunan->BUKTI_MILIK == 'B' ? 'selected' : '' }}>SHGB</option>
                            <option value="C" {{ $agunan->BUKTI_MILIK == 'C' ? 'selected' : '' }}>SHP</option>
                            <option value="D" {{ $agunan->BUKTI_MILIK == 'D' ? 'selected' : '' }}>Strata Title</option>
                            <option value="E" {{ $agunan->BUKTI_MILIK == 'E' ? 'selected' : '' }}>Sertifikat Deposito</option>
                            <option value="F" {{ $agunan->BUKTI_MILIK == 'F' ? 'selected' : '' }}>Akta Jual Beli</option>
                            <option value="G" {{ $agunan->BUKTI_MILIK == 'G' ? 'selected' : '' }}>BPKB</option>
                            <option value="H" {{ $agunan->BUKTI_MILIK == 'H' ? 'selected' : '' }}>Surat Ijo</option>
                            <option value="I" {{ $agunan->BUKTI_MILIK == 'I' ? 'selected' : '' }}>Petok</option>
                            <option value="J" {{ $agunan->BUKTI_MILIK == 'J' ? 'selected' : '' }}>Girik</option>
                            <option value="K" {{ $agunan->BUKTI_MILIK == 'K' ? 'selected' : '' }}>Lainya</option>
                        </select>
                    </div>
                    <div class="min-w-full">
                        <label for="merk" class="block mb-2 text-xs font-medium text-gray-900">Merk</label>
                        <input value="{{ $agunan->MERK }}" name="merk" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="tahun" class="block mb-2 text-xs font-medium text-gray-900">Tahun</label>
                        <input value="{{ $agunan->TAHUN }}" name="tahun" type="number" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="no_bpkb" class="block mb-2 text-xs font-medium text-gray-900">No. BPKB</label>
                        <input value="{{ $agunan->NO_BPKB }}" name="no_bpkb" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="nopol" class="block mb-2 text-xs font-medium text-gray-900">No. Polisi</label>
                        <input value="{{ $agunan->NOPOL }}" name="nopol" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="no_mesin" class="block mb-2 text-xs font-medium text-gray-900">No. Mesin</label>
                        <input value="{{ $agunan->NO_MESIN }}" name="no_mesin" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="no_rangka" class="block mb-2 text-xs font-medium text-gray-900">No. Rangka</label>
                        <input value="{{ $agunan->NO_RANGKA }}" name="no_rangka" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="warna" class="block mb-2 text-xs font-medium text-gray-900">Warna</label>
                        <input value="{{ $agunan->WARNA }}" name="warna" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="atas_nama" class="block mb-2 text-xs font-medium text-gray-900">Atas Nama</label>
                        <input value="{{ $agunan->ATAS_NAMA }}" name="atas_nama" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>

                    <div class="min-w-full">
                        <label for="alamat" class="block mb-2 text-xs font-medium text-gray-900">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="4" class="w-full block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark-bg-gray-700 dark-border-gray-600 dark-placeholder-gray-400 dark-text-white dark-focus-ring-green-500 dark-focus-border-green-500" placeholder="Tulis Alamat..."> {{ $agunan->ALAMAT }}</textarea>
                    </div>

                    <div class="flex justify-center">
                        <div>
                            <label for="tgl_berlaku" class="block mb-2 text-xs font-medium text-gray-900 text-center">Tanggal Berlaku</label>
                           <input value="{{ $agunan->TGL_BERLAKU }}" name="tgl_berlaku" type="date" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        </div>
                    </div>
                    <div class="min-w-full">
                        <label for="no_agunan" class="block mb-2 text-xs font-medium text-gray-900">No. Agunan</label>
                        <input value="{{ $agunan->NO_AGUNAN }}" name="no_agunan" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
                    
                    <div class="min-w-full">
                        <label for="nama_pemilik" class="block mb-2 text-xs font-medium text-gray-900">Nama Pemilik</label>
                        <input value="{{ $agunan->NAMA_PEMILIK }}" name="nama_pemilik" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
                    
                    <div class="min-w-full">
                        <label for="lokasi" class="block mb-2 text-xs font-medium text-gray-900">Lokasi</label>
                        <input value="{{ $agunan->LOKASI }}" name="lokasi" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
                    
                    <div class="grid grid-cols-2 space-x-4">
                        <div>
                            <label for="nilai" class="block mb-2 text-xs font-medium text-gray-900">Nilai Harga Pasar</label>
                            <input value="{{ $agunan->NILAI }}" name="nilai" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                        </div>

                        <div>
                            <label for="safety_margin" class="block mb-2 text-xs font-medium text-gray-900">Safety Margin</label>
                            <input value="{{ $agunan->SAVE_MARGIN }}" name="safety_margin" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" readonly>
                        </div>
                    </div>

                    <div class="min-w-full">
                        <label for="jenis_pengikatan" class="block mb-2 text-xs font-medium text-gray-900">Jenis Pengikatan</label>
                        <select value="{{ $agunan->JENIS_PENGIKATAN }}" name="jenis_pengikatan" id="jenis_pengikatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="1">Surat Kuasa Jual</option>
                            <option value="2">Gadai</option>
                            <option value="3">SKMHT</option>
                            <option value="4">HT</option>
                            <option value="5">Fiducia</option>
                            <option value="6">Hipotik</option>
                            <option value="7">Surat Blokir</option>
                        </select>
                    </div>

                    <div class="min-w-full">
                        <label for="asuransi" class="block mb-2 text-xs font-medium text-gray-900">Asuransi</label>
                        <select value="{{ $agunan->ASURANSI }}" name="asuransi" id="asuransi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="1">Asuransi Jiwa</option>
                            <option value="2">Asuransi Kebakaran</option>
                            <option value="3">TLO</option>
                            <option value="4">All Risk</option>
                            <option value="5">Asuransi Kredit</option>
                            <option value="6">Asuransi Jiwa dan PHK</option>
                            <option value="7">Tanpa Asuransi</option>
                        </select>
                    </div>
                    <div class="min-w-full">
                        <label for="ket" class="block mb-2 text-xs font-medium text-gray-900">Keterangan</label>
                        <textarea name="ket" id="ket" rows="4" class="w-full block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark-bg-gray-700 dark-border-gray-600 dark-placeholder-gray-400 dark-text-white dark-focus-ring-green-500 dark-focus-border-green-500" placeholder="Keterangan..."> {{ $agunan->KET }}</textarea>
                    </div>
    
                    <div class="min-w-full">
                        <label for="luas_tanah" class="block mb-2 text-xs font-medium text-gray-900">Luas Tanah</label>
                        <input {{ $agunan->LUAS_TANAH }} name="luas_tanah" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
    
                    <div class="min-w-full">
                        <label for="luas_bangunan" class="block mb-2 text-xs font-medium text-gray-900">Luas Bangunan</label>
                        <input {{ $agunan->LUAS_BANGUNAN }} name="luas_bangunan" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
    
                    <div class="min-w-full">
                        <label for="no_dep" class="block mb-2 text-xs font-medium text-gray-900">No. Dep</label>
                        <input {{ $agunan->NO_DEP }} name="no_dep" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    </div>
    
                    <div class="min-w-full">
                        <label for="dep_bank" class="block mb-2 text-xs font-medium text-gray-900">Dep. Bank</label>
                        <input {{ $agunan->DEP_BANK }} name="dep_bank" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus-border-green-500 block w-full p-2.5">
                    </div>
                    
    

                </div>
                
                <!-- Modal footer -->
                <div class="flex justify-between p-4 space-x-2 border-t border-gray-200 rounded-b dark-border-gray-600">
                    <div class="flex items-center space-x-2">
                        <button type="submit" class="focus-outline-none text-white bg-green-700 hover-bg-green-800 focus-ring-4 focus-ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark-bg-green-600 dark-hover-bg-green-700 dark-focus-ring-green-800">Simpan</button>
                        <button data-modal-hide="defaultModal{{ $agunan->ID }}" type="button" class="text-gray-500 bg-white hover-bg-gray-100 focus-ring-4 focus-outline-none focus-ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover-text-gray-900 focus-z-10 dark-bg-gray-700 dark-text-gray-300 dark-border-gray-500 dark-hover-text-white dark-hover-bg-gray-600 dark-focus-ring-gray-600">Keluar</button>
                    </div>
                    <div class="">
                        <button type="button" class="text-white bg-gradient-to-b from-red-400 to-red-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" onclick="document.getElementById('delete_agunan_{{ $agunan->ID }}').submit()">Hapus</button>
                    </div>
                </div>

            </form>
            <form action="/dashboard/5collateral/{{ $agunan->ID }}/delete-agunan" method="POST" id="delete_agunan_{{ $agunan->ID }}">
            @csrf
            </form>
        </div>
    </div>
</div>
    
@endforeach
@endif

<script src="{{ asset('js/agunan.js') }}"></script>
@if($result_message != null)
    <script>
        alert("{{ $result_message }}")
    </script>
@endif
@endsection