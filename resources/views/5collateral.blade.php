@extends ('partial.mainnota')

@section('container')

@if($collateral_nasabah == null)
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
                    <option value="1"> Lebih kecil dari plafond</option>
                    <option value="2">Nilai Agunan sama dengan plafond</option>
                    <option value="3">Lebih besar dari plafond</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="pa_dokumen" class="block mb-2 text-xs font-medium text-gray-900">Dokumen dan Pengikatan</label>
                <select name="pa_dokumen" id="pa_dokumen" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Dok Lengkap, Nilai Agunan lebih kecil dari limit, diikat dibawah tangan </option>
                    <option value="2">Dok Lengkap, Nilai Agunan sama dengan limit, diikat dibawah tangan</option>
                    <option value="3">Dok Lengkap, Nilai Agunan lebih besar dari limit, diikat dibawah tangan</option>
                    <option value="4">Dok Lengkap, Nilai Agunan sama dengan limit, diikat notarial</option>
                    <option value="5">Dok Lengkap, Nilai Agunan lebih besar dari limit, diikat notarial</option>
                </select>
            </div>

            {{-- <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Sertifikasi Klasifikasi</label>
                <select name="sertifikasi_klasifikasi" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="CA">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="FR">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option value="US">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                </select>
            </div> --}}

            <div class= "min-w-xl">
                <label for="leg_usaha" class="block mb-2 text-xs font-medium text-gray-900">Legalitas Usaha (Izin-Izin)</label>
                <select name="leg_usaha" id="leg_usaha" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Tidak ada</option>
                    <option value="2"> Surat Keterangan Usaha</option>
                    <option value="3">SIUP</option>
                </select>
            </div>
        
            {{-- <div class= "min-w-xl">
                <label for="countries" class="block mb-2 text-xs font-medium text-gray-900">Asuransi</label>
                <select name="asuransi" id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1">Tidak diasuransikan</option>
                    <option value="2"> Asuransi Jiwa</option>
                    <option value="3">Asuransi Pembiayaan</option>
                    <option value="4">Asuransi Jiwa dan Kerugian</option>
                </select>
            </div> --}}

            <div class= "min-w-xl">
                <label for="pengikatan" class="block mb-2 text-xs font-medium text-gray-900">Pengikatan</label>
                <select name="pengikatan" id="pengikatan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Tidak diikat sama sekali </option>
                    <option value="2">Diikat dibawah tangan</option>
                    <option value="3">Diikat notarial</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="marketability" class="block mb-2 text-xs font-medium text-gray-900">Marketability</label>
                <select name="marketability" id="marketability" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1"> Cukup Marketable</option>
                    <option value="2">Marketable</option>
                    <option value="3">Sangat Marketable</option>
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

            <div class="flex justify-between items-center">
                <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan </button>
                <p class="text-base">
                    Hasil : <span class="text-blue-700 font-bold">{{ $output }}</span>
                </p>
            </div>
    </section>
</form>
@else
<form method="post" action="/dashboard/5collateral/{{ $nasabah->ID_NASABAH }}/edit">
    @csrf
    <section id="collateral" class="my-4 max-w-xl space-y-4">
        <p class="block py-4 text-base font-semibold text-gray-900">
            Aspek Collateral
        </p>
            <div class= "min-w-xl">
                <label for="ca_nilai_agunan" class="block mb-2 text-xs font-medium text-gray-900">Nilai Agunan</label>
                <select name="ca_nilai_agunan" id="ca_nilai_agunan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option @if($collateral_nasabah->CA_NILAI_AGUNAN == 1) selected @endif value="1">Lebih kecil dari plafond</option>
                    <option @if($collateral_nasabah->CA_NILAI_AGUNAN == 2) selected @endif value="2">Nilai Agunan sama dengan plafond</option>
                    <option @if($collateral_nasabah->CA_NILAI_AGUNAN == 3) selected @endif value="3">Lebih besar dari plafond</option>
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="pa_dokumen" class="block mb-2 text-xs font-medium text-gray-900">Dokumen dan Pengikatan</label>
                <select name="pa_dokumen" id="pa_dokumen" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option @if($collateral_nasabah->PA_DOKUMEN == 1) selected @endif value="1">Dok Lengkap, Nilai Agunan lebih kecil dari limit, diikat dibawah tangan </option>
                    <option @if($collateral_nasabah->PA_DOKUMEN == 2) selected @endif value="2">Dok Lengkap, Nilai Agunan sama dengan limit, diikat dibawah tangan</option>
                    <option @if($collateral_nasabah->PA_DOKUMEN == 3) selected @endif value="3">Dok Lengkap, Nilai Agunan lebih besar dari limit, diikat dibawah tangan</option>
                    <option @if($collateral_nasabah->PA_DOKUMEN == 4) selected @endif value="4">Dok Lengkap, Nilai Agunan sama dengan limit, diikat notarial</option>
                    <option @if($collateral_nasabah->PA_DOKUMEN == 5) selected @endif value="5">Dok Lengkap, Nilai Agunan lebih besar dari limit, diikat notarial</option>
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
        
            <div class= "min-w-xl">
                <label for="pengikatan" class="block mb-2 text-xs font-medium text-gray-900">Pengikatan</label>
                <select name="pengikatan" id="pengikatan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option @if($collateral_nasabah->PENGIKATAN == 1) selected @endif value="1"> Tidak diikat sama sekali </option>
                    <option @if($collateral_nasabah->PENGIKATAN == 2) selected @endif value="2">Diikat dibawah tangan</option>
                    <option @if($collateral_nasabah->PENGIKATAN == 3) selected @endif value="3">Diikat notarial</option>
                
                </select>
            </div>

            <div class= "min-w-xl">
                <label for="marketability" class="block mb-2 text-xs font-medium text-gray-900">Marketability</label>
                <select name="marketability" id="marketability" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                    <option value="1" @if($collateral_nasabah->MARKETABILITY == 1) selected @endif> Cukup Marketable</option>
                    <option value="2" @if($collateral_nasabah->MARKETABILITY == 2) selected @endif>Marketable</option>
                    <option value="3" @if($collateral_nasabah->MARKETABILITY == 3) selected @endif>Sangat Marketable</option>
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

            <div class="flex justify-between items-center">
                <button type="submit" style="float:right"class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan Perubahan</button>
                <p class="text-base">
                    Hasil : <span class="text-blue-700 font-bold">{{ $output }}</span>
                </p>
            </div>
    </section>
</form>
@endif

{{-- Tabel Agunan dan Asuransi --}}
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
                            
                            <tr>
                                <td class="px-4 py-4 font-medium whitespace-nowrap">
                                        <p class="text-sm font-bold text-center text-gray-600">-</p>
                                </td>
                                
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">-</p>
                                </td>
                                
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">-</p>
                                </td>
                                
                                <td class="px-4 py-4 whitespace-nowrap">
                                        <p class="text-sm font-normal text-center text-gray-600">-</p>
                                </td>
                                
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <p class="text-sm font-normal text-center text-gray-600">-</p>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
    
                </div>
            </div>
        </div>
    <div style="float:right">
        <button type="submit" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="text-white bg-gradient-to-b from-green-400 to-green-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Tambah Agunan</button>
    </div>
</section>


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
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="post" action="{{ Route('tambah_user') }}">
                @csrf
                <div class="p-4 space-y-4">
                    <div class= "min-w-full">
                        <label for="ca_nilai_agunan" class="block mb-2 text-xs font-medium text-gray-900">Jenis</label>
                        <select name="ca_nilai_agunan" id="ca_nilai_agunan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="1">Lorem ipsum sit dolor amet</option>
                            <option value="2">Lorem ipsum sit dolor amet</option>
                            <option value="3">Lorem ipsum sit dolor amet</option>
                        </select>
                    </div>

                    <div class= "min-w-full">
                        <label for="ca_nilai_agunan" class="block mb-2 text-xs font-medium text-gray-900">Bukti Milik</label>
                        <select name="ca_nilai_agunan" id="ca_nilai_agunan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="1">Lorem ipsum sit dolor amet</option>
                            <option value="2">Lorem ipsum sit dolor amet</option>
                            <option value="3">Lorem ipsum sit dolor amet</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-2 space-x-4">
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">No. BPKB</label>
                            <input name="email" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">No. Polisi</label>
                            <input name="email" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 space-x-4">
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">No. Mesin</label>
                            <input name="email" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
            
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">No. Rangka</label>
                            <input name="email" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 space-x-4">
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Warna</label>
                            <input name="email" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                        
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Atas Nama</label>
                            <input name="email" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    </div>
                    <div class="">
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Alamat</label>
                            <textarea name="resiko" id="ketpeng" rows="4" class=" w-full block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Tulis Alamat..."></textarea> 
                        </div>
                    </div>

                    <div class=" flex justify-center">
                        <div class="">
                            <label for="tglperm" class="block mb-2 text-xs font-medium text-gray-900 text-center">Tanggal Berlaku</label>
                            <div class="relative max-w-[220px]" id="tglperm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input name="tgl_permohonan" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pilih Tanggal">
                            </div>
                        </div>
                    </div>


                    <div class="grid grid-cols-2 space-x-4">
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Nilai Harga Pasar</label>
                            <input name="email" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
    
                        <div>
                            <label for="sifat_plafond" class="block mb-2 text-xs font-medium text-gray-900">Safety Margin</label>
                            <input name="email" type="text" class="max-w-md shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                        </div>
                    </div>

                    <div class= "min-w-full">
                        <label for="ca_nilai_agunan" class="block mb-2 text-xs font-medium text-gray-900">Jenis Pengikatan</label>
                        <select name="ca_nilai_agunan" id="ca_nilai_agunan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="1">Lorem ipsum sit dolor amet</option>
                            <option value="2">Lorem ipsum sit dolor amet</option>
                            <option value="3">Lorem ipsum sit dolor amet</option>
                        </select>
                    </div>
    
                                        
                    <div class= "min-w-full">
                        <label for="ca_nilai_agunan" class="block mb-2 text-xs font-medium text-gray-900">Asuransi</label>
                        <select name="ca_nilai_agunan" id="ca_nilai_agunan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            <option value="1">Lorem ipsum sit dolor amet</option>
                            <option value="2">Lorem ipsum sit dolor amet</option>
                            <option value="3">Lorem ipsum sit dolor amet</option>
                        </select>
                    </div>

                </div>
                                    

            
        
                <!-- Modal footer -->
                <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
                    <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Keluar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@if($result_message != null)
    <script>
        alert("{{ $result_message }}")
    </script>
@endif
@endsection